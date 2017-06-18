

function verImg(imagen,imgtitulo) {
	document.getElementById('linM').innerHTML=imagen;
	
	document.getElementById('linTitle').innerHTML=imgtitulo;
	
	alert(imagen+imgtitulo);
}

function editarImg(Eimagen,EtituloImg,id) {
	document.getElementById('contenidoImg').value=Eimagen;
	document.getElementById('tituloImg').value=EtituloImg;
	document.getElementById('id_postImg').value=id;
	document.getElementById('id_deleteImg').value=id;
	//alert(Etitulo+Econtenido);
}

function toggle(){
    $('.editTablesImg').slideToggle(function(){$('#more').html($('.editTablesImg').is(':visible')?'Ocultar':'Mostrar más');});
}
