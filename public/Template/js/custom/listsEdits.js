function updateInputs(id, userName, status, documentation){
    document.getElementById('myModalLabel').innerHTML=userName;
    $("#estatus").val(status);
    $("#estatus").change();
    $("#documentacion").val(documentation);
    $("#documentacion").change();
    document.getElementById("formi").formAction = "/admin/lists/"+id;
    //document.getElementById("formi").formAction = "/admin/lists/"+id;
}

function toggle(){
    $('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Ocultar':'Mostrar más');});
}
