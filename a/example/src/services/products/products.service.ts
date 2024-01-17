import { Injectable, NotFoundException } from '@nestjs/common';
import { Product } from 'src/Entities/products.entity';
import { CreateProductDto, UpdateProductDto } from 'src/dto/product.dto';
import { productMock } from 'src/mock/productMock';
@Injectable()
export class ProductsService {
    private counterId = 1;
    private products: Product[] = productMock;
    findall() {
        return this.products;
    }
    findOne(id: number) {
        // return this.products.find((item) => item.id === id);
        const product = this.products.find(
            (item) => 
                item.id === id
            
        )
        if(!product) {
            //throw 'Error en el find'
            throw new NotFoundException ('Product not found');
        }
        return product;
    }
    create(products: CreateProductDto) {
        this.counterId += 1;
        const newProduct = {
            id: this.counterId,
            ...products
        };
        this.products.push(newProduct);
        return newProduct;
    }
    update(id: number, updateProducts: UpdateProductDto) {
        const productsFound = this.findOne(id);
        let message = "";
        if (productsFound) {
            const index = this.products.findIndex(
                (item) => {
                    item.id === id
                }
            );
          //  this.products[index] = updateProducts;
            this.products[index] = {
                ...productsFound,
                ...updateProducts,
            }
            message = "Product updated"
        } else {
            message = "Product not found";
        }
    }
    delete(id: number) {
        const productsFound = this.products.findIndex(
            (item) => item.id === id
        );
        let message = '';
        if (productsFound > 0) {
            this.products.splice(productsFound, 1);
            message = 'products deleted'
        } else {
            message = 'products not found'
        }
        return message;
    }
}
