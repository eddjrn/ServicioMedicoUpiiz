function updateInputs(id, userName, status, documentation){
    document.getElementById('nombre').value=userName;
    $("#estatus").val(status);
    $("#estatus").change();
    $("#documentacion").val(documentation);
    $("#documentacion").change();
    document.getElementById('userVal').value=id;
    //alert(id);
}
