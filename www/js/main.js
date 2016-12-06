$(document).on("click", '#register', function(event) { 
    $("#barContet").load("View/registerForm.html");
});
$(document).on("click", '#login', function(event) { 
    $("#barContet").load("View/singup.html");
});
$(document).on("click", '#logout', function(event) { 
    var url = "index.php?page=usuario&action=salir";
    $.ajax({
        type: "POST",
        url:url,
        success:function(data){
            setTimeout("redirect('index.php?page=inicio')",1000);
        }
    });
});
function redirect(string){
    window.location=string;
}
$(document).on("click","#continuar",function(){
    var url= "index.php?page=usuario&action=registrar";
    var dataString = "&usuario=" + $("input[name=usuario]").val() + "&password=" + $("input[name=password]").val() + "&email=" + $("input[name=email]").val() + "&nombre=" + $("input[name=nombre]").val() + "&apellidop=" + $("input[name=apellidop]").val() + "&apellidom=" + $("input[name=apellidom]").val();
    url = url + dataString;
    $.ajax({
        type:"POST",
        url: url,
        data: $("#registro").serialize(),
        success: function(data){
            var respuesta = $.trim(data)
            if(respuesta ==="correcto"){
                document.getElementById("response").innerHTML = "<span class='correcto'>" + "Registrado... Por favor espera" + "</span>";
                setTimeout("redirect('index.php?page=inicio')",1000);
            }
            else{
                document.getElementById("response").innerHTML = "<span class='incorrecto'>" + "Verifica la información" + "</span>";
            }
            
        }
    });
    event.preventDefault();
    
});
$(document).on("click","#entrar",function(){
    var url= "index.php?page=usuario&action=login";
    var dataString = "&usuario=" + $("input[name=usuario]").val() + "&password=" + $("input[name=password]").val();
    url = url + dataString;
    $.ajax({
        type: "POST",
        url: url,
        success: function(data){
            var respuesta = $.trim(data);
            
            if(respuesta === "correcto"){
                 document.getElementById("response").innerHTML = "<span class='correcto'>" + "Entraste... Por favor espera" + "</span>";
                  setTimeout("redirect('index.php?page=inicio')",1000);
            }
            else{
                document.getElementById("response").innerHTML = "<span class='incorrecto'>" + "Incorrecto... Verifica la información" + "</span>";
            }
        }
    });
    event.preventDefault();


});
