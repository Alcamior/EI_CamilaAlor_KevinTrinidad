var expreEmail =/^[a-zA-Z0-9_.]{2,22}@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
var expreContrasena =/^[a-zA-Z0-9#@]{7,14}$/;
var expreTelefono =/^[0-9]{10}$/;


function validacion(){
    if(document.frmReg.usuario.value.length==0){
        document.getElementById("usuario").focus();
        usu.style.display="";
        return false;
    }
    usu.style.display="none";

    if(document.frmReg.nombre.value.length==0){
        document.getElementById("nombre").focus();
        nom.style.display="";
        return false;
    }
    nom.style.display="none";

    if(document.frmReg.apellido.value.length==0){
        document.getElementById("apellido").focus();
        ape.style.display="";
        return false;
    }
    ape.style.display="none";

    if(!expreEmail.test(document.frmReg.correo.value)){
        document.getElementById("correo").focus();
        cor.style.display="";
        return false;
    }
    cor.style.display="none";

    if(!expreTelefono.test(document.frmReg.telefono.value)){
        document.getElementById("telefono").focus();
        tel.style.display="";
        return false;
    }
    tel.style.display="none";

    if(!expreContrasena.test(document.frmReg.contrasena.value)){
        document.getElementById("contrasena").focus();
        contra.style.display="";
        return false;
    }
    contra.style.display="none";

    frmReg.submit();
}