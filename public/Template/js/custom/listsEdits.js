function updateInputs(id, userName, status, documentation){
    document.getElementById('myModalLabel').innerHTML=userName;
    $("#estatus").val(status);
    $("#estatus").change();
    $("#documentacion").val(documentation);
    $("#documentacion").change();
    document.getElementById("formi").formAction = "/admin/lists/"+id;
    
    document.getElementById("idVal2").value = id;
    document.getElementById("formButton2").formAction = "/admin/lists";
}

function toggle(){
    $('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Ocultar':'Mostrar más');});
}

function updateInputsProfile(id, userName){
    document.getElementById('myModalLabel').innerHTML=userName;
    document.getElementById("formi").formAction = "/admin/lists/"+id;
    
    document.getElementById("idVal2").value = id;
    document.getElementById("formButton2").formAction = "/admin/lists";
}
