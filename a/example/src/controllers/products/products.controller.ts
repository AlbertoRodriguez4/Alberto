import { Body, Controller, Get, Param, Post, Put, Query, Delete, ParseIntPipe } from '@nestjs/common';
import { Product } from 'src/Entities/products.entity';
import { CreateProductDto, UpdateProductDto } from 'src/dto/product.dto';
import { ProductsService } from 'src/services/products/products.service';

@Controller('products')
export class ProductsController {

    constructor(private productsService: ProductsService) { }

    @Get(':idProduct')
    getProduct(@Param('idProduct', ParseIntPipe) idProduct: string) {
        return this.productsService.findOne(+idProduct);
    }

    @Get()
    getProducts() {
        return this.productsService.findall();
    }
    @Post()
    create2(@Body() product: Product) {
        this.productsService.create(product);
    }

    @Put(':id')
    update(@Param('id') id: number, @Body() product: UpdateProductDto) {
        return this.productsService.update(+id, product);
    }
    @Delete(':id')
    delete(@Param('id') id: number) {
        return this.productsService.delete(+id);
    }

    @Get('ruta')
    create(@Body() newproduct: CreateProductDto) {
        return this.productsService.create(newproduct);
    }

}
