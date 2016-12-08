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
            setTimeout("redirect('index.php')",1000);
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

$(document).on("click","#updatePassword",function(){
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];
    modal.style.display = "block";
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    var oldPassword =  $("input[name=oldpassword]").val();
    var newPassword =  $("input[name=password]").val();
    var url = "index.php?page=usuario&action=actualizarPassword&password="+newPassword+"&oldpassword="+oldPassword;
    $.ajax({
        type: "POST",
        url: url,
        success: function(data){
            var respuesta = $.trim(data);
            if(respuesta === "correcto"){
                document.getElementById("response").innerHTML = "Haz actualizado la contraseña";
                setTimeout("redirect('index.php?page=configurar')",1000);
            }else{
                document.getElementById("response").innerHTML = respuesta;
            }
        }
    });
    event.preventDefault();
});

$(document).on("click","#roleButton",function(){
    var modal = document.getElementById('roleModal');
    var span = document.getElementsByClassName("close")[1];
    modal.style.display = "block";
    span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    event.preventDefault();
});
$(document).on("click","#cancelRole",function(){
    var modal = document.getElementById('roleModal');
    modal.style.display = "none";
});
$(document).on("click","#confirmRole",function(){
    var url= "index.php?page=usuario&action=hazInstructor";
    $.ajax({
        type: "POST",
        url: url,
        success: function(data){
            var respuesta = $.trim(data);
            if(respuesta ==="correcto"){
                document.getElementById("instructorConfirmation").innerHTML = "<h1>Felicidades ya eres instructor</h1>";
                setTimeout("redirect('index.php?page=configurar')",1000);
            }
            else{
                document.getElementById("instructorConfirmation").innerHTML = "<h1>Hubo un error. Intentalo más tarde.</h1>";
            }
        }
    });
});
