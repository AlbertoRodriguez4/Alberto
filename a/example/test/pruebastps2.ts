const myName : string = 'Nico';
const myAge : number = 12;
console.log(myName.charAt(0));

function suma2(a: number, b: number): number
{
    return a + b;
}
const suma3 = (a: number, b: number) => {
    a + b;
}
const suma4 = (a: number, b: string)  => {
    b = "Hola";
    a = 3;
};
suma4(1, "Ola");
class Persona {
    private age: number;
    private name: string;
    private adr: string;
    
    constructor(age: number, name: string, adr: string) {
        this.age = age;
        this.name = name;
        this.adr = adr;
    }

    public getSummary():string {
        return this.age + " " + this.name + " " + this.adr;
    }
     
}
const persona = new Persona(30, "Juan perez", "Calle Parra");

console.log(persona.getSummary());