import { PartialType } from "@nestjs/mapped-types";
import { IsString, IsNumber, IsPositive } from "class-validator";

export class CreateProductDto {
    @IsString({ message: 'Name must be a string' })
    readonly name: string;

    @IsString({ message: 'Name must be a string' })
    readonly description: string;

    @IsNumber({ allowNaN: false, allowInfinity: false }, { message: 'Price must be a number' })
    @IsPositive({ message: 'Price must be a positive number' })
    readonly price: number;

    @IsNumber({ allowNaN: false, allowInfinity: false }, { message: 'Stock must be a number' })
    @IsPositive({ message: 'Stock must be a positive number' })
    readonly stock: number;

    @IsString({ message: 'Image must be a string' })
    readonly image: string;
}

export class UpdateProductDto extends PartialType(CreateProductDto) {}