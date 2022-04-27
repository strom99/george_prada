$(".formUpdateName").on('submit' , function(e){
    e.preventDefault();

    $(".nameInput").css("display" , "block");

    $.ajax({
    type:"GET",
    url:"html/miPerfil.php",
    dataType:"json",
    success: function(respJSON){
        console.log(respJSON);
        $("#error").html("texto:"+respJSON.data);
    }
        
});

})

