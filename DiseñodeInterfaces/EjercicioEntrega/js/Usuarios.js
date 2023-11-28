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
    var divParaOcultar = document.getElementById('formularioBuscar3');
    divParaOcultar.style.display = "none";

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

var formulario = document.createElement('form');
formulario.setAttribute('id', 'formularioBuscar2');
var formulario2 = document.createElement('form');
formulario2.setAttribute('id', 'formularioBuscar3');

function textoMeterUsuarios() {
    formulario.innerHTML = `
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido_1">apellido_1:</label>
        <input type="text" id="apellido_1" name="apellido_1" required>

        <label for="apellido_2">apellido_2:</label>
        <input type="text" id="apellido_2" name="apellido_2" required>

        <div id="horizontal"
    <label id="generos">
    <input type="radio" name="sexo" id="sexoMasculino" value="H">Hombre
  <input type="radio" name="sexo" id="sexoFemenino" value="M">Mujer
    </label>
    </div>
    <div id="horizontal"
    <label id="xd">
    <input type="radio" name="activo" id="EstaActivo" value="S">Activo
    <input type="radio" name="activo" id="EstaInactivo" value="N">Inactivo
    </label>
    </div>

        <label for="correo">correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="password">password:</label>
        <input type="text" id="password" name="password" required>

        <button type="button" id="textoAñadirUsuarios" onclick="add()">Añadirlos</button>
        <button type="button" id="volver" onclick="Volver()">Volver</button>
        `;


    document.body.appendChild(formulario);
    var divParaOcultar = document.getElementById('consultar');
    divParaOcultar.style.display = "none";
    var divoculto2 = document.getElementById('capaResultadoBusqueda');
    divoculto2.style.display = "none";
    var divoculto3 = document.getElementById('formularioBuscar');
    divoculto3.style.display = "none";

};
function add() {



    var nombre = document.getElementById("nombre").value;
    var apellido1 = document.getElementById("apellido_1").value;
    var apellido2 = document.getElementById("apellido_2").value;
    var correo = document.getElementById("correo").value;
    var EstaActivo = document.getElementById("EstaActivo");
    var EstaInactivo = document.getElementById("EstaInactivo");
    var sexoMasculino = document.getElementById("sexoMasculino");
    var sexoFemenino = document.getElementById("sexoFemenino");

    var sexo;
    var activo;
    if (EstaActivo.checked) {
        activo = "S";
    } else if (EstaInactivo.checked) {
        activo = "N";
    }

    if (sexoMasculino.checked) {
        sexo = "h";
    } else if (sexoFemenino.checked) {
        sexo = "m";
    }

    let sonTextos = isNaN(parseFloat(nombre)) && isNaN(parseFloat(apellido1)) && isNaN(parseFloat(apellido2))
        && isNaN(parseFloat(sexo)) && isNaN(parseFloat(activo)) && isNaN(parseFloat(correo));

    // Verifica que el correo contenga el símbolo '@'
    let correoValido = /@/.test(correo);

    // Realiza la lógica según la validación
    if (sonTextos && correoValido) {
        formulario.style.display = "none";
        let opciones = { method: "GET" };
        let parametros = "controlador=Usuarios&metodo=add";
        parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar2"))).toString();
        fetch("C_Ajax.php?" + parametros, opciones, eliDDelUsuario)
            .then(res => {
                if (res.ok) {
                    console.log("Entre");
                    return res.text();
                }
            })
            .then(vista => {
                document.getElementById("capaResultadoBusqueda").innerHTML = vista;
            })
            .catch(err => {
                console.log("Error al realizar la petición", err.message);
            });

        var divParaOcultar = document.getElementById('formularioBuscar2');
        divParaOcultar.style.display = "none";
        var divoculto3 = document.getElementById('hiden');
        divoculto3.style.display = "none";
        console.log(eliDDelUsuario);
        console.log(parametros);
        location.reload(true)
    } else {
        // Al menos un campo es un número o el correo no es válido
        alert("Por favor, verifica que todos los campos sean texto y que el correo contenga '@'.");
    }
}
var eliDDelUsuario = ""
function editarUsuarios(id_Usuario) {
    eliDDelUsuario = id_Usuario;
    console.log(id_Usuario);

    // Mover la declaración del formulario dentro de la función
    var formulario2 = document.createElement('form');
    formulario2.setAttribute('id', 'formularioBuscar3');

    formulario2.innerHTML = `
    
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellido_1">apellido_1:</label>
    <input type="text" id="apellido_1" name="apellido_1" required>

    <label for="apellido_2">apellido_2:</label>
    <input type="text" id="apellido_2" name="apellido_2" required>

    <div id="horizontal"
    <label id="generos">
    <input type="radio" name="sexo" id="sexoMasculino" value="H">Hombre
  <input type="radio" name="sexo" id="sexoFemenino" value="M">Mujer
    </label>
    </div>
    <div id="horizontal"
    <label id="xd">
    <input type="radio" name="activo" id="EstaActivo" value="S">Activo
    <input type="radio" name="activo" id="EstaInactivo" value="N">Inactivo
    </label>
    </div>

    <label for="correo">correo:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="password">password:</label>
    <input type="text" id="password" name="password" required>
    <div id="hiden">
        <label for="password" id="hiden" ></label>
        <input type="text" id="modId" name="modId" value="${eliDDelUsuario}" required>
    </div>
    <button type="button" id="textoAñadirUsuarios" onclick="Editar()">Editar Usuarios</button>
    <button type="button" id="volver" onclick="Volver()">Volver</button>

    `;

    document.body.appendChild(formulario2);
    var divParaOcultar = document.getElementById('consultar');
    divParaOcultar.style.display = "none";
    var divoculto2 = document.getElementById('capaResultadoBusqueda');
    divoculto2.style.display = "none";
    var divoculto3 = document.getElementById('hiden');
    divoculto3.style.display = "none";
    var formularioBuscar = document.getElementById('formularioBuscar');
    formularioBuscar.style.display = "none";

}
function Volver() {
    window.location.href = "http://localhost";
}

function Editar() {
    var nombre = document.getElementById("nombre").value;
    var apellido1 = document.getElementById("apellido_1").value;
    var apellido2 = document.getElementById("apellido_2").value;
    var correo = document.getElementById("correo").value;
    var EstaActivo = document.getElementById("EstaActivo");
    var EstaInactivo = document.getElementById("EstaInactivo");
    var sexoMasculino = document.getElementById("sexoMasculino");
    var sexoFemenino = document.getElementById("sexoFemenino");

    var sexo;
    var activo;
    if (EstaActivo.checked) {
        activo = "S";
    } else if (EstaInactivo.checked) {
        activo = "N";
    }

    if (sexoMasculino.checked) {
        sexo = "h";
    } else if (sexoFemenino.checked) {
        sexo = "m";
    }
    var formularioBuscar = document.getElementById('formularioBuscar');
    formularioBuscar.style.display = "none";

    // También puedes obtener el valor del campo oculto
    var modId = document.getElementById("modId").value;

    // Verifica que todos los campos de texto no sean números
    let sonTextos = isNaN(parseFloat(nombre)) && isNaN(parseFloat(apellido1)) && isNaN(parseFloat(apellido2))
        && isNaN(parseFloat(activo)) && isNaN(parseFloat(correo));

    // Verifica que el correo contenga el símbolo '@'
    let correoValido = /@/.test(correo);

    // Realiza la lógica según la validación
    if (sonTextos && correoValido) {
        formulario.style.display = "none";
        let opciones = { method: "GET" };
        let parametros = "controlador=Usuarios&metodo=Editar";
        parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar3"))).toString();
        fetch("C_Ajax.php?" + parametros, opciones, eliDDelUsuario)
            .then(res => {
                if (res.ok) {
                    console.log("Entre");
                    return res.text();
                }
            })
            .then(vista => {
                document.getElementById("capaResultadoBusqueda").innerHTML = vista;
            })
            .catch(err => {
                console.log("Error al realizar la petición", err.message);
            });

        var divParaOcultar = document.getElementById('formularioBuscar3');
        divParaOcultar.style.display = "none";
        var divoculto3 = document.getElementById('hiden');
        divoculto3.style.display = "none";
        console.log(eliDDelUsuario);
        console.log(parametros);
        location.reload(true)
    } else {
        // Al menos un campo es un número o el correo no es válido
        alert("Por favor, verifica que todos los campos sean texto y que el correo contenga '@'.");
    }
}
