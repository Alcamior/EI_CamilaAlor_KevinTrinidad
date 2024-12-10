function validacion(){

    var dateField = document.getElementById('nombre');
    if (!dateField.value) { 
        document.getElementById("nombre").focus();
        nom.style.display="";
        return false;
    }
    nom.style.display="none";

    var timeField = document.getElementById('precio');
    if (!timeField.value || timeField.value<1) { 
        document.getElementById("precio").focus();
        pre.style.display="";
        return false;
    }
    pre.style.display="none";

    var timeField = document.getElementById('duracion');
    if (!timeField.value || timeField.value<1) { 
        document.getElementById("duracion").focus();
        dur.style.display="";
        return false;
    }
    dur.style.display="none";

    frmRes.submit();
}