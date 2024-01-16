import { Body, Controller, Get, Param, Post, Put, Query } from '@nestjs/common';

@Controller('products')
export class ProductsController {

    @Get('products/:idProduct')
    getProduct(@Param('idProduct') idProduct:number) {
        return `products ${idProduct}`
    }

    @Get('')
    getProductss(@Query('limit') limit , @Query('offset') offset) {
      return `product limit=> ${limit} , offset=> ${offset}`
    }
    
    @Post('ruta')
    create() {
        return {
            message: 'crear producto'
        }
    }
    @Post()
    create2(@Body() products:any) {
        return {
            products,
            message: 'crear producto'
        }
    }
    @Put(':id')
    update(@Param('id') id: number, @Body() products:any) {
        return {
            id,
            products
        }
    }
    
}
