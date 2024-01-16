import { Controller, Get, Param, Query } from '@nestjs/common';
import { AppService } from './app.service';
import { ProductsService } from './services/products/products.service';

@Controller()
export class AppController {
  
  constructor(private  productService: ProductsService) { }

  @Get()
  getHello(): string {
    return "Mi primer webservice de Get";
  }
  @Get('nuevo')
  getMiPrimerGet1(): string {
    return "Mi primer get";
  }
  @Get('ruta')
  getMiPrimerGet2(): string {
    return "Mi segundo get";
  }
  

}
