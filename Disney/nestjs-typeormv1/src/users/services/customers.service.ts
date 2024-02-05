import { Injectable, NotFoundException } from '@nestjs/common';

import { Customer } from '../entities/customer.entity';
import { CreateCustomerDto, UpdateCustomerDto } from '../dtos/customer.dto';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';

@Injectable()
export class CustomersService {
  private counterId = 1;
  constructor (@InjectRepository(Customer) private customerRepo: Repository<Customer>) {}

  findAll() {
    return this.customerRepo.find();
  }

async findOne(id: number) {
    /*const customer = this.customers.find((item) => item.id === id);
    if (!customer) {
      throw new NotFoundException(`Customer #${id} not found`);
    }
    return customer;*/
    const customer = await this.customerRepo.findOne(id);  // 👈 use repo;
    if (!customer) {
      throw new NotFoundException(`Customer #${id} not found`);
    }
    return customer;
  }

  create(data: CreateCustomerDto) {
    /*this.counterId = this.counterId + 1;
    const newCustomer = {
      id: this.counterId,
      ...data,
    };
    this.customers.push(newCustomer);
    return newCustomer;*/
    const newCustomer = this.customerRepo.create(data); 
    return this.customerRepo.save(newCustomer);
  }

async update(id: number, changes: UpdateCustomerDto) {
    /*const customer = this.findOne(id);
    const index = this.customers.findIndex((item) => item.id === id);
    this.customers[index] = {
      ...customer,
      ...changes,
    };
    return this.customers[index];*/
    const customer = await this.findOne(id);
    this.customerRepo.merge(customer, changes);
  }

  remove(id: number) {
    /*const index = this.customers.findIndex((item) => item.id === id);
    if (index === -1) {
      throw new NotFoundException(`Customer #${id} not found`);
    }
    this.customers.splice(index, 1);
    return true;*/
    return this.customerRepo.delete(id);
  }
}
