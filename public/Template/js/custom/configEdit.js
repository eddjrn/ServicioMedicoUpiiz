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

function  updateInputs2(title, name, variable, id, place, number){
    document.getElementById('windowTitle').innerHTML=title;
    document.getElementById('nombre').value = name;
    document.getElementById('idVal').value = id;
    document.getElementById('idVal2').value = id;
    document.getElementById("formButton").formAction = "/admin/config/insert/"+variable;
    document.getElementById("formButton2").formAction = "/admin/config/insert/"+variable;
    
    document.getElementById('numero2').value = number;
    $("#municipio2").val(place);
    $("#municipio2").change();
    
//     $("#documentacion").val(documentation);
//     $("#documentacion").change();
//     document.getElementById("formi").formAction = "/admin/lists/"+id;
}

function  updateInputs3(title, name, variable, id, color){
    document.getElementById('windowTitle').innerHTML=title;
    document.getElementById('nombre').value = name;
    document.getElementById('idVal').value = id;
    document.getElementById('idVal2').value = id;
    document.getElementById("formButton").formAction = "/admin/config/insert/"+variable;
    document.getElementById("formButton2").formAction = "/admin/config/insert/"+variable;
    $("#color2").val(color);
    $("#color2").change();
}

function authUser(title, variable){
    document.getElementById('windowTitle').innerHTML=title;
    document.getElementById("formButton").formAction = "/admin/config/"+variable;
}

function toggle(){
    $('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Ocultar':'Mostrar más');});
}
