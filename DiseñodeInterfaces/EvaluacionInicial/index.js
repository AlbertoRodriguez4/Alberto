function recibirDatos() {
    //alert("Hello World");
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;
    let fechaDeNac = document.getElementById('edad').value;
    let correo = document.getElementById('correo').value;
    let password1 = document.getElementById('password1').value
    let password2 = document.getElementById('password2').value
    let vivir = document.getElementById('vivir').value
    let chechbox = document.getElementById('terminosYCondiciones').value;
    var formulario2 = document.getElementById("formulario2");


    var divElement = document.getElementById('formulario');
    if (nombre == "" || apellidos == "" || fechaDeNac == ""||correo == "" || password1 == "" || password2 == "" || vivir == "" || chechbox == "" ) {
        alert("Todos los campos son requeridos")
        window.location.reload();
    }
    else {
        if (password1 == password2) {
            alert("Enviado satisfactoriamente, ahora se verá tu información personal")
            formulario2.style.display = "none";

            divElement.innerHTML = `
    <h1>Comprobación de datos</h1>
    <p class = "asdf" >Nombre: ${nombre} ${apellidos} </p>
    <p class = "asdf"> Fecha de nacimiento: ${fechaDeNac} </p>
    <p class = "asdf"> Correo de contacto: ${correo} </p>
    <p class = "asdf" > País donde vive: ${vivir}</p>
    <button class="Botonformulario" onclick="EditarDatos()">Editar</button>

    `
        } else {
            alert("Las contraseñas no coinciden")
            window.location.reload();
        }
    }
}
function EditarDatos() {

}