import { HttpService, Module, HttpModule } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { UsersModule } from './users/users.module';
import { ProductsModule } from './products/products.module';
const APIKEY = "12345678";
const API_KEY_PROD = "PROD121212";
@Module({
  imports: [UsersModule, ProductsModule, HttpModule],
  controllers: [AppController],
  providers: [AppService,
  {
    provide : "API_KEY",
    //useValue :APIKEY
    useValue : process.env.NODE_END === 'production' ? API_KEY_PROD : APIKEY,
  },
  {
    provide : "TASKS",
    useFactory : async (http: HttpService) => {
      const tasks = await http.get('https://jsonplaceholder.typicode.com/todos').toPromise();
      return tasks.data;
    },

    inject : [HttpService]
  }
],
})
export class AppModule {}
