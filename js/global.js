/* comprobacion de que las cookies se guardaron y tiene que ocultar la caja de las cookies*/
$(document).ready(function () {
if(!localStorage.getItem('cookies')){
    $('.banner-cookie').show();
 }
 cookies();
});
 function cookies() {
    $('#accept').click(function () {
        $('.banner-cookie').hide();
        localStorage.setItem('cookies','si');
    })
}
