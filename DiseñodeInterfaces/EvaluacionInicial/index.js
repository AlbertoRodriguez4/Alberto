function recibirDatos() {
    //alert("Hello World");
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;
    let fechaDeNac = document.getElementById('edad').value;
    let correo = document.getElementById('correo').value;

    console.log(nombre, apellidos, fechaDeNac, correo);

    var divElement = document.getElementById('formulario');

    alert("Enviado satisfactoriamente, ahora se verá tu información personal")
    
    divElement.innerHTML = `
    <h1>Comprobación de datos</h1>
    <p >Nombre: ${nombre} </p>
    <p> Apellidos: ${apellidos} </p>
    <p> Fecha de nacimiento: ${fechaDeNac} </p>
    <p> Correo de contacto: ${correo} </p>

    `
    
    
}