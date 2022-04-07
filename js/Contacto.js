$(document).ready(function() {
    $('#accordion').accordion({
        collapsible: true,
    });

    $("#form-consulta").on('submit', function(e){
        /* no recargamos la pagina  */
        e.preventDefault();
        $.post("procesos/envio_consulta.php", $(e.target).serialize() , function(data){
        console.log(data);
        }, "json");
    })
})