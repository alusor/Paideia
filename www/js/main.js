$(document).on("click", '#register', function(event) { 
    $("#barContet").load("View/registerForm.html");
});
$(document).on("click", '#login', function(event) { 
    $("#barContet").load("View/singup.html");
});

$(document).on("click","#continuar",function(){
    var url= "index.php?page=usuario&action=registrar";
    var dataString = "&usuario=" + $("input[name=usuario]").val() + "&password=" + $("input[name=password]").val() + "&email=" + $("input[name=email]").val() + "&nombre=" + $("input[name=nombre]").val() + "&apellidop=" + $("input[name=apellidop]").val() + "&apellidom=" + $("input[name=apellidom]").val();
    url = url + dataString;
    $.ajax({
        type:"POST",
        url: url,
        data: $("#registro").serialize(),
        success: function(data){
            alert(data);
        }
    });
    event.preventDefault();
    
});
$(document).on("click","#entrar",function(){
    event.preventDefault();


});
