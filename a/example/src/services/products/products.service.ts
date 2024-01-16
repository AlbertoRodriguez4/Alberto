import { Injectable } from '@nestjs/common';
import { Product } from 'src/Entities/products.entity';
import { productMock } from 'src/mock/productMock';
@Injectable()
export class ProductsService {
    private counterId = 1;
    private products: Product[] = productMock;
    findall() {
        return this.products;
    }
    findOne(id: number) {
        return this.products.find((item) => item.id === id);
    }
    create(products: any) {
        this.counterId += 1;
        const newProduct = {
            id: this.counterId,
            ...products
        };
        this.products.push(newProduct);
        return newProduct;
    }
    update(id: number, products: any) {
        const productsFound = this.findOne(id);
        if (!productsFound) {
            return null
        }
        return productsFound;

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
