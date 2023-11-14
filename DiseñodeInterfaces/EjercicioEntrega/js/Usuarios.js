function buscarUsuarios() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarUsuarios";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log('respuesta ok');
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        });
}
function buscarPorSexo() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarPorSexo";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
function añadirUsuarios() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=añadirUsuarios";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
function buscarPorSexoMasculino() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarPorSexoMasculino";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
function buscarPorSexoFemenino() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarPorSexoFemenino";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
function buscarTelefono() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarTelefono";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
function buscarPorSiActividad() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarPorSiActividad";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
function buscarPorNoActividad() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarPorNoActividad";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
function añadirUsuarios() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=añadirUsuarios";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
var formulario = document.createElement('form');
    formulario.setAttribute('id', 'formularioBuscar2');

function textoMeterUsuarios() {
    // Crear un formulario
    
    // Añadir campos al formulario
    formulario.innerHTML = `
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido_1">apellido_1:</label>
        <input type="text" id="apellido_1" name="apellido_1" required>

        <label for="apellido_2">apellido_2:</label>
        <input type="text" id="apellido_2" name="apellido_2" required>

        <label for="sexo">sexo:</label>
        <input type="text" id="sexo" name="sexo" required>

        <label for="activo">activo:</label>
        <input type="text" id="activo" name="activo" required>

        <button type="button" id="textoAñadirUsuarios" onclick="add()">Add</button>
        `;


    formulario.style.display = "block";
    document.body.appendChild(formulario);
    var divParaOcultar = document.getElementById('consultar');
    divParaOcultar.style.display = "none";
    


};


function add() {
    formulario.style.display = "none";
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=add";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar2"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                // console.log("Estoy cagandome en mis puto0s muertos");
                console.log(parametros);
                console.log(opciones);
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}
/*function botonAñadirUsuarios() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=botonAñadirUsuarios";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar2"))).toString();
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}*/
