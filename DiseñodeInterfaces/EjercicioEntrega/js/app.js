function cargarUnScript(url) {
    let script = document.createElement('script');
    script.src = url;
    document.head.appendChild(script);
}
function getVistaMenuSeleccionado(controlador, metodo) {
    let opciones = { method: "GET" };
    let parametros = "controlador=" + controlador + "&metodo=" + metodo;
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log('respuesta ok');
                console.log("Estoy aqui")
                return res.text();
            }
        })
        .then(vista => {
            document.getElementById("secContenidoPagina").innerHTML = vista;
            cargarUnScript('js/' + controlador + '.js');
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        });
       // location.reload(true)
}
function getYoquese(controlador, metodo) {
    let opciones = { method: "GET" };
    let parametros = "controlador=" + controlador + "&metodo=" + metodo;
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log('respuesta ok');
                console.log("Estoy aqui")
                return res.text();
            }
        })
        .then(vista => {
            console.log("Viva willyrex")
            document.getElementById("secContenidoPagina").innerHTML = vista;
            cargarUnScript('js/' + controlador + '.js');
        })
        .catch(err => {
            console.log("Error al realizar la petición", err.message);
        });
}