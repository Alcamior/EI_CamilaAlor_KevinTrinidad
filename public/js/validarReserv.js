

function validacion(){

    var dateField = document.getElementById('fecha');
    if (!dateField.value) { 
        document.getElementById("fecha").focus();
        fec.style.display="";
        return false;
    }
    fec.style.display="none";

    var timeField = document.getElementById('horaIni');
    if (!timeField.value) { 
        document.getElementById("horaIni").focus();
        hor.style.display="";
        return false;
    }
    hor.style.display="none";

    frmRes.submit();
}