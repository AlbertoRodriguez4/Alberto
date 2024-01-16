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
function buscarTodosUsuarios() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Usuarios&metodo=buscarTodosUsuarios";
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
    <h1 for="nombre">AÑADIR USUARIO:</h1>

<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" required>

<label for="apellido_1">apellido_1:</label>
<input type="text" id="apellido_1" name="apellido_1" required>

<label for="apellido_2">apellido_2:</label>
<input type="text" id="apellido_2" name="apellido_2" required>

<div id="horizontal">
    <label for="sexo">Género:</label>
    <select name="sexo" id="sexo">
        <option value="H">Hombre</option>
        <option value="M">Mujer</option>
    </select>
</div>

<label for="correo">correo:</label>
<input type="email" id="correo" name="correo" required>

<div id="horizontal">
    <label for="activo">Estado:</label>
    <select name="activo" id="activo">
        <option value="S">Activo</option>
        <option value="N">Inactivo</option>
    </select>
</div>

<label for="login">Login:</label>
<input type="text" id="login" name="login" value="" required>

<div id="mensaje2"></div>

<button type="button" id="textoAñadirUsuarios" onclick="add()">Añadir Usuarios</button>
<button type="button" id="Volver a la pagina inicial" onclick="Volver()">Volver a la pagina de inicio</button>
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
    var sexo = document.getElementById("sexo").value;
    var activo = document.getElementById("activo").value;

    var sexo;
    var activo;


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
    } else {
        // Al menos un campo es un número o el correo no es válido
        var mensajeDiv = document.getElementById('mensaje2');
        var mensaje = ("Por favor, verifica que todos los campos sean texto, que el correo contenga '@' y que no haya ningun campo vacio");
        mensajeDiv.innerText = mensaje;
        mensajeDiv.style.color = 'red';
        mensajeDiv.style.fontWeight = 'bold';
        mensajeDiv.style.display = 'block';
        mensajeDiv.style.textAlign = 'center';
    }
}
var eliDDelUsuario = ""
var elNombre = ""
var elApellido1 = ""
var elApellido2 = ""
function editarUsuarios(id_Usuario, nombre, apellido_1, apellido_2, mail, login) {
    eliDDelUsuario = id_Usuario;


    console.log(id_Usuario);
    console.log(nombre)
    console.log(login)
    // Mover la declaración del formulario dentro de la función
    var formulario2 = document.createElement('form');
    formulario2.setAttribute('id', 'formularioBuscar3');

    formulario2.innerHTML = `
    <h1 for="nombre">EDITAR USUARIO:</h1>

    <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value = "${nombre}" required>

        <label for="apellido_1">Primer Apellido</label>
        <input type="text" id="apellido_1" name="apellido_1" value="${apellido_1}" required>

        <label for="apellido_2">Segundo Apellido</label>
<input type="text" id="apellido_2" name="apellido_2" value="${apellido_2}" required>

        <div id="horizontal">
        <label for="activo">Estado:</label>
        <select id="activo" name="activo">
            <option value="S">Activo</option>
            <option value="N">Inactivo</option>
        </select>
        </div>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value = "${mail}" required>

        <div id="horizontal">
        <label for="sexo">Género:</label>
        <select id="sexo" name="sexo">
            <option value="H">Hombre</option>
            <option value="M">Mujer</option>
        </select>
        
        </div>

        <label for="login">Login:</label>
        <input type="text" id="password" name="login" value="${login}" required>

        <div id="hiden">
            <label for="modId">ID de Modificación:</label>
            <input type="text" id="modId" name="modId" value="${eliDDelUsuario}" required>
        </div>
        
        <div id="mensaje" ></div>


        <button type="button" id="textoAñadirUsuarios" onclick="Editar()">Editar Usuarios</button>
        <button type="button" id="volver" onclick="Volver()">Volver a la página inicial</button>
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
    var activo = document.getElementById("activo").value;
    var sexo = document.getElementById("sexo").value;

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
        var mensajeDiv = document.getElementById('mensaje');
        var mensaje = ("Por favor, verifica que todos los campos sean texto, que el correo contenga '@' y que no haya ningun campo vacio");
        mensajeDiv.innerText = mensaje;
        mensajeDiv.style.color = 'red';
        mensajeDiv.style.fontWeight = 'bold';
        mensajeDiv.style.display = 'block';
        mensajeDiv.style.textAlign = 'center';
    }
}

function subirNumero() {
    var elemento = document.querySelector('.parte-central');
    var paginaContenido = document.getElementById("parte-central2").value
    // Obtener el valor dentro del elemento y convertirlo a un número
    var valor = parseInt(elemento.innerHTML);

    var nuevoValor = valor + 1;

    elemento.innerHTML = nuevoValor;

    console.log(nuevoValor);

    let parametros = new URLSearchParams({
        controlador: 'Usuarios',
        metodo: 'subirNumero',
        nuevoValor: nuevoValor,
        paginaContenido: paginaContenido
    });


    parametros.append(...new FormData(document.getElementById("formularioBuscar")));

    let opciones = { method: 'GET' };

    fetch("C_Ajax.php?" + parametros.toString(), opciones)
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
}


function bajarNumero() {
    var paginaContenido = document.getElementById("parte-central2").value
    console.log("Valor de cantidadXd: " + paginaContenido); // Alerta mostrando el valor

    var elemento = document.querySelector('.parte-central');
    var valor = parseInt(elemento.innerHTML);
    var nuevoValor = valor - 1;

    if (nuevoValor < 0) {
        alert("No se puede bajar el número a menos de cero.");
    } else {
        elemento.innerHTML = nuevoValor;

        console.log(nuevoValor);

        let parametros = new URLSearchParams({
            controlador: 'Usuarios',
            metodo: 'bajarNumero',
            nuevoValor: nuevoValor,
            paginaContenido: paginaContenido
        });

        parametros.append(...new FormData(document.getElementById("formularioBuscar")));

        // Llama a primeraPagina después de haber adjuntado los datos del formulario

        let opciones = { method: 'GET' };

        fetch("C_Ajax.php?" + parametros.toString(), opciones)
            .then(res => {
                if (res.ok) {
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
}

function buscarCantidad() {
    var inputElement = document.getElementById('parte-central2');
    var valor = inputElement.value.trim();

    if (valor !== "") {
        localStorage.setItem("cantidadGuardada", valor);
    }

    let parametros = new URLSearchParams({
        controlador: 'Usuarios',
        metodo: 'buscarCantidad',
        nuevoValor: valor
    });

    let opciones = {
        method: 'POST', // Puedes usar 'GET' o 'POST' según tu necesidad
        body: parametros, // Enviar los parámetros en el cuerpo de la solicitud
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    };

    // Realizar la solicitud fetch
    fetch("C_Ajax.php", opciones)
        .then(res => {
            if (res.ok) {
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
            subirNumero();
            bajarNumero();

            inputElement.value = nuevoValor;
            console.log(nuevoValor)
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        });
}

function primeraPagina() {
    var yoquese = document.getElementById("parte-central2").value
    let parametros = new URLSearchParams({
        controlador: 'Usuarios',
        metodo: 'primeraPagina',
        yoquese: yoquese,
    });

    parametros.append(...new FormData(document.getElementById("formularioBuscar")));

    // Llama a primeraPagina después de haber adjuntado los datos del formulario

    let opciones = { method: 'GET' };

    fetch("C_Ajax.php?" + parametros.toString(), opciones)
        .then(res => {
            if (res.ok) {
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
        })
        .catch(err => {
            console.log("Error al realizar la peticióna", err.message);
        });
}
function ultimaPagina() {
    var yoquese = document.getElementById("parte-central2").value
    let parametros = new URLSearchParams({
        controlador: 'Usuarios',
        metodo: 'ultimaPagina',
        yoquese: yoquese,
    });

    parametros.append(...new FormData(document.getElementById("formularioBuscar")));

    // Llama a primeraPagina después de haber adjuntado los datos del formulario

    let opciones = { method: 'GET' };

    fetch("C_Ajax.php?" + parametros.toString(), opciones)
        .then(res => {
            if (res.ok) {
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
            console.log(vista.cantidadFinal)
            var cantidadFinal = vista.cantidadFinal;

            // Haz algo con la cantidadFinal, por ejemplo, mostrarla en la consola
            console.log('Cantidad Final:', cantidadFinal);
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        });
}
function verMenu() {
    let opciones = { method: "GET" };
    let parametros = "controlador=Menus&metodo=verMenu";
    parametros += "&" + new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
    console.log(parametros)
    console.log( opciones)
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log("respuesta ok");
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("capaResultadoBusqueda").innerHTML = vista;
            alert(vista)
            console.log(vista)
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        })
}

