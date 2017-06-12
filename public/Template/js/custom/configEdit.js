function  updateInputs(title, name, variable, id){
    document.getElementById('windowTitle').innerHTML=title;
    document.getElementById('nombre').value = name;
    document.getElementById('idVal').value = id;
    document.getElementById('idVal2').value = id;
    document.getElementById("formButton").formAction = "/admin/config/insert/"+variable;
    document.getElementById("formButton2").formAction = "/admin/config/insert/"+variable;
    
//         $("#estatus").val(status);
//     $("#estatus").change();
//     $("#documentacion").val(documentation);
//     $("#documentacion").change();
//     document.getElementById("formi").formAction = "/admin/lists/"+id;
}

function authUser(title, variable){
    document.getElementById('windowTitle').innerHTML=title;
    document.getElementById("formButton").formAction = "/admin/config/"+variable;
}

function toggle(){
    $('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Ocultar':'Mostrar más');});
}
