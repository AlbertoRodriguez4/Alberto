import { Controller, Get, Param, Query } from '@nestjs/common';
import { AppService } from './app.service';
import { ProductsService } from './services/products/products.service';

@Controller()
export class AppController {
  
  constructor(private  productService: ProductsService) { }



}
