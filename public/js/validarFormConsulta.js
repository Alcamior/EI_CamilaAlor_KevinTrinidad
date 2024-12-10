
function validacion(){

    var dateField = document.getElementById('fecha');
    if (!dateField.value) { 
        document.getElementById("fecha").focus();
        fec.style.display="";
        return false;
    }
    fec.style.display="none";
    

    frmHor.submit();
}