var expreEmail =/^[a-zA-Z0-9_.]{2,22}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
var expreContrasena =/^[a-zA-Z0-9#@]{7,14}$/;


function validacion(){

    if(!expreEmail.test(document.frmLogIn.correo.value)){
        document.getElementById("correo").focus();
        cor.style.display="";
        return false;
    }
    cor.style.display="none";

    if(!expreContrasena.test(document.frmLogIn.contrasena.value)){
        document.getElementById("contrasena").focus();
        contra.style.display="";
        return false;
    }
    contra.style.display="none";

    frmLogIn.submit();
}