function cargarUnScript(url) {
    let script = document.createElement('script');
    script.src = url;
    document.head.appendChild(script);
    var divParaOcultar = document.getElementById('formularioBuscar2');
    divParaOcultar.style.display = "none";
}
function getVistaMenuSeleccionado(controlador, metodo) {
    let opciones = { method: "GET" };
    let parametros = "controlador=" + controlador + "&metodo=" + metodo;
    fetch("C_Ajax.php?" + parametros, opciones)
        .then(res => {
            if (res.ok) {
                console.log('respuesta ok');
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
    var divParaOcultar = document.getElementById('formularioBuscar2');
    divParaOcultar.style.display = "none";

}