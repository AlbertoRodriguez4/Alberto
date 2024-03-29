import { Column, CreateDateColumn, Entity, JoinTable, ManyToMany, PrimaryColumn, PrimaryGeneratedColumn, UpdateDateColumn } from "typeorm";
import { Product } from "./product.entity";

@Entity()
export class Category {
  @PrimaryGeneratedColumn()
  id: number;

  @Column({type : 'varchar', length : 255, unique : true})
  name: string;

  @CreateDateColumn({
    type: 'timestamptz',
    default: ()=> 'CURRENT_TIMESTAMP'
  })
  createAt: Date;

  @UpdateDateColumn({
    type: 'timestamptz',
    default: ()=> 'CURRENT_TIMESTAMP'
  })
  updateAt: Date;

  // src\products\entities\category.entity.ts
@ManyToMany(()=>Product, (product)=>product.categories)
@JoinTable() // Solo debe estar en una entidad, , ES LA PARTE FÍSICA
products: Product[]
}

