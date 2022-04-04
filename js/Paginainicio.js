$(document).ready(function () {
 slider();
 cookies();
});
function slider() {
    $('.slider').bxSlider({
        mode: 'fade',
        captions: true,
    });
    
}
function cookies() {
    $('#accept').click(function () {
        $('.banner-cookie').hide();
        localStorage.setItem('test','si');
    })
}

let testing = localStorage.getItem('test');
if (testing == 'si') {
    $('.banner-cookie').hide();
}