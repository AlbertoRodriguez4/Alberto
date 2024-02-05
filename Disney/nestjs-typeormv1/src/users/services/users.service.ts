import { Injectable, NotFoundException, Inject } from '@nestjs/common';
import { ConfigService } from '@nestjs/config';

import { User } from '../entities/user.entity';
import { Order } from '../entities/order.entity';
import { CreateUserDto, UpdateUserDto } from '../dtos/user.dto';

import { ProductsService } from './../../products/services/products.service';
import { Client } from 'pg';
import { Repository } from 'typeorm';
import { InjectRepository } from '@nestjs/typeorm';
import { CustomersService } from './customers.service';

@Injectable()
export class UsersService {
  constructor(
    private productsService: ProductsService,
    private configService: ConfigService,
    @Inject('PG') private clientePG: Client,
    @InjectRepository(User) private userRepository: Repository<User>,
    private customerService: CustomersService
  ) { }

  private counterId = 1;
  /*private users: User[] = [
    {
      id: 1,
      email: 'correo@mail.com',
      password: '12345',
      role: 'admin',
    },
  ];*/

  findAll() {
    const apiKey = this.configService.get('API_KEY');
    const dbName = this.configService.get('DATABASE_NAME');
    console.log(apiKey, dbName);
    return this.userRepository.find(
      {
        relations: ['customer'],
      }
    ); //Listar todos, find()
  }

  async findOne(id: number) {
    const user = this.userRepository.findOne(id); //Metodo intrgrado de typeorm
    if (!user) {
      throw new NotFoundException(`User #${id} not found`);
    }
    return user;

  }

async create(data: CreateUserDto) {
    const newUser = this.userRepository.create(data);
    if (data.customerId) {
      const customer = await this.customerService.findOne(data.customerId);
      newUser.customer = customer;
    }
    return this.userRepository.save(newUser);
  }

  async update(id: number, changes: UpdateUserDto) {
    /*const user = this.findOne(id);
    const index = this.users.findIndex((item) => item.id === id);
    this.users[index] = {
      ...user,
      ...changes,
    };
    return this.users[index];*/
    const user = await this.findOne(id);
    this.userRepository.merge(user, changes);
    return this.userRepository.save(user);
  }

  remove(id: number) {
    /* const index = this.users.findIndex((item) => item.id === id);
     if (index === -1) {
       throw new NotFoundException(`User #${id} not found`);
     }
     this.users.splice(index, 1);
     return true;*/
    return this.userRepository.delete(id);
  }

  async getOrderByUser(id: number): Promise<Order> {
    const user = await this.findOne(id);
    return {
      date: new Date(),
      user,
      products: await this.productsService.findAll(),
    };
  }

  getTasks() {
    // Todo se maneja como promesas, tiene que haber un retorno hacia el Controller
    return new Promise((resolve, reject) => {
      this.clientePG.query('SELECT * FROM task ORDER BY id ASC', (err, res) => {
        if (err) {
          reject(err);
        }
        resolve(res.rows);
      });
    });
  }
}


