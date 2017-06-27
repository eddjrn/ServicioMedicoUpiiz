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

function upOperation(){
    var url = document.getElementById("formi").formAction;
    var data = $('#userForm').serialize();
    var id =  document.getElementById("idVal2").value;
    var name = document.getElementById('myModalLabel').innerHTML;
    
    var combo = document.getElementById("estatus");
    var selected = combo.options[combo.selectedIndex].text;
    
    var combo2 = document.getElementById("documentacion");
    var selected2 =  combo2.options[combo2.selectedIndex].text;
    
    var status = document.getElementById('estatus').value;
    var statusStyle = "";
    
    if(status == 1){
        statusStyle = "form-control form-control-blue-fill";
    } else if(status == 2){
        statusStyle = "form-control form-control-red-fill";
    } else if(status == 3){
        statusStyle = "form-control form-control-purple-fill";
    } else if(status == 4){
        statusStyle = "form-control form-control-orange-fill";
    } else if(status == 5){
        statusStyle = "form-control form-control-green-fill";
    }
    
    var documentation = document.getElementById("documentacion").value;
    var buttonDocStyle = "";
    var buttonDocIcon = "";
    
    if(documentation == 1){
        buttonDocStyle = "btn btn-inline btn-sm btn-success";
        buttonDocIcon = "font-icon font-icon-ok";
    } else if(documentation == 2){
        buttonDocStyle = "btn btn-inline btn-sm btn-danger";
        buttonDocIcon = "font-icon font-icon-del";
    }
    
    $.post(url, data, function(result){
        //alert(result.message);
        //$('#edit'+id).fadeOut();
        document.getElementById('status'+id).value = selected;
        document.getElementById('status'+id).className = statusStyle;
        
        document.getElementById('buttonDoc'+id).className = buttonDocStyle;
        document.getElementById('buttonDoc'+id).setAttribute('data-content', selected2);
        document.getElementById('spanDoc'+id).className = buttonDocIcon;
        
        document.getElementById('edit'+id).setAttribute('onclick', `updateInputs(${id},'${name}',${status},${documentation})`);
        
        document.getElementById('AlarmsAlert').className += " alert-success";
        document.getElementById('AlarmsAlertMessage').innerHTML = `${result.message}<ul>\
            <li>De nombre: ${result.userName}</li>\
            <li>De la boleta: ${result.Id}</li>\
            <li>De la carrera: ${result.carrer}</li>\
        </ul>`;
        
        $('#AlarmsAlert').show(300);
    }).fail(function (){
        //alert('no se pudo :v');
        document.getElementById('AlarmsAlert').className += " alert-warning";
        document.getElementById('AlarmsAlertMessage').innerHTML = `No se pudo actualizar a el usuario: ${document.getElementById('myModalLabel').innerHTML}`;
        $('#AlarmsAlert').show(300);
    });
}

function delOperation(){
    var url = document.getElementById("formButton2").formAction;
    var data = $('#formDest').serialize();
    var id =  document.getElementById("idVal2").value;
    //alert(data);
    
    $.post(url, data, function(result){
        //alert(result.message);
        $('#row'+id).fadeOut();
        document.getElementById('AlarmsAlert').className += " alert-danger";
        document.getElementById('AlarmsAlertMessage').innerHTML = `${result.message}<ul>\
            <li>De nombre: ${result.userName}</li>\
            <li>De la boleta: ${result.Id}</li>\
            <li>De la carrera: ${result.carrer}</li>\
        </ul>`;
        
        $('#AlarmsAlert').show(300);
        
    }).fail(function(){
        //alert('no eliminado');
        document.getElementById('AlarmsAlert').className += " alert-warning";
        document.getElementById('AlarmsAlertMessage').innerHTML = `No se pudo eliminar a el usuario: ${document.getElementById('myModalLabel').innerHTML}`;
        $('#AlarmsAlert').show(300);
    });
}

function toggle(){
    $('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Ocultar':'Mostrar más');});
}

// function para actualizar los inputs de la pagina de estudiante detallada
function updateInputsProfile(id, userName){
    document.getElementById('myModalLabel').innerHTML=userName;
    document.getElementById("formi").formAction = "/admin/lists/"+id;
    
    document.getElementById("idVal2").value = id;
    document.getElementById("formButton2").formAction = "/admin/lists";
}

function loadPages(page, container, buttonsHtml, table, index){
//     el page es el numero de pagina, container es el id del div donde se carga la pagina, buttonsHtml con los botones html generados para navegacion de las paginas, table es el objeto json que contiene el array de los usuarios (ids)
    
    $("#"+container).load("/admin/pagination/"+page, {'data':table, 'id':container, 'index':index}, function(response){
        //alert(response);
    });
    
//     variables que sirven para los botones de navegacion del paginador page => entero genera los numeros de los botones que se usan como $list en la URL
    var id0= page-1;
    var id1 = page;
    var id2 = page+1;
    var id3 = page+2;
    
    
//     esperar un intervalo de tiempo debido a que jquery no terminaba de cargar la pagina en el div y no cargaba los botones
    setTimeout(function(){
        table = document.getElementById('cd2'+container).value.replace(/"/g, ' '); /*saca los valores de los ids de los usuarios del input hidden de las tablas y los limpia de comillas*/
    
        var id4 = document.getElementById('cd'+container).value; /*saca el valor final y redondeado de un input hidden de las tablas para los botones de navegacion del paginador*/
    
        // alert(table);
        
        if(page == 1){
            document.getElementById(buttonsHtml).innerHTML = `\
                    <ul class="pagination">\
                        <li class="page-item disabled">\
                            <a class="page-link" onclick="loadPages(1, ${container}, ${buttonsHtml}, ${table}, ${index});" aria-label="Previous">\
                                <span aria-hidden="true">&laquo;</span>\
                                <span class="sr-only">Previous</span>\
                            </a>\
                        </li>\
                        <li class="page-item active">\
                            <a class="page-link">${id1} <span class="sr-only">(current)</span></a>\
                        </li>\
                        <li class="page-item"><a class="page-link" onclick="loadPages(${id2}, '${container}', '${buttonsHtml}', ${table}, ${index});">${id2}</a></li>\
                        <li class="page-item"><a class="page-link" onclick="loadPages(${id3}, '${container}', '${buttonsHtml}', ${table}, ${index});">${id3}</a></li>\
                        <li class="page-item">\
                            <a class="page-link" onclick="loadPages(${id4}, '${container}', '${buttonsHtml}', ${table}, ${index});" aria-label="Next">\
                                <span aria-hidden="true">&raquo;</span>\
                                <span class="sr-only">Next</span>\
                            </a>\
                        </li>\
                    </ul>\
                `;
            } else if(page == id4){
                var id00 = page-2;
            
                document.getElementById(buttonsHtml).innerHTML = `\
                    <ul class="pagination">\
                        <li class="page-item">\
                            <a class="page-link" onclick="loadPages(1, '${container}', '${buttonsHtml}', ${table}, ${index});" aria-label="Previous">\
                                <span aria-hidden="true">&laquo;</span>\
                                <span class="sr-only">Previous</span>\
                            </a>\
                        </li>\
                        <li class="page-item"><a class="page-link" onclick="loadPages(${id00}, '${container}', '${buttonsHtml}', ${table}, ${index});">${id00}</a></li>\
                        <li class="page-item"><a class="page-link" onclick="loadPages(${id0}, '${container}', '${buttonsHtml}', ${table}, ${index});">${id0}</a></li>\
                        <li class="page-item active">\
                            <a class="page-link"">${id1} <span class="sr-only">(current)</span></a>\
                        </li>\
                        <li class="page-item disabled">\
                            <a class="page-link" aria-label="Next">\
                                <span aria-hidden="true">&raquo;</span>\
                                <span class="sr-only">Next</span>\
                            </a>\
                        </li>\
                    </ul>\
                `;
            }   else{
                document.getElementById(buttonsHtml).innerHTML = `\
                    <ul class="pagination">\
                        <li class="page-item">\
                            <a class="page-link" onclick="loadPages(1, '${container}', '${buttonsHtml}', ${table}, ${index});" aria-label="Previous">\
                                <span aria-hidden="true">&laquo;</span>\
                                <span class="sr-only">Previous</span>\
                            </a>\
                        </li>\
                        <li class="page-item"><a class="page-link" onclick="loadPages(${id0}, '${container}', '${buttonsHtml}', ${table}, ${index});">${id0}</a></li>\
                        <li class="page-item active">\
                            <a class="page-link"">${id1} <span class="sr-only">(current)</span></a>\
                        </li>\
                        <li class="page-item"><a class="page-link" onclick="loadPages(${id2}, '${container}', '${buttonsHtml}', ${table}, ${index});">${id2}</a></li>\
                        <li class="page-item">\
                            <a class="page-link" onclick="loadPages(${id4}, '${container}', '${buttonsHtml}', ${table}, ${index});" aria-label="Next">\
                                <span aria-hidden="true">&raquo;</span>\
                                <span class="sr-only">Next</span>\
                            </a>\
                        </li>\
                    </ul>\
                `;
            }
    }, 500);
}
