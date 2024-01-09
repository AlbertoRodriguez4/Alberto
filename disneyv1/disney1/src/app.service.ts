import { Injectable } from '@nestjs/common';
@Injectable()
export class AppService {
  getHello(): string {
    return 'Hello World!';
  }
  getBuenasTardes(): string {
    return 'Soy el mas Capito';
  }
}
