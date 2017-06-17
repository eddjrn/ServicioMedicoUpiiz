

function verImg(imgtitulo,imagen) {
	document.getElementById('linTitle1').innerHTML=imgtitulo;
	document.getElementById('linkTitle2').innerHTML=imgtitulo;
	document.getElementById('linkMu').innerHTML=imagen;
	document.getElementById('linkIr').innerHTML=imagen;
	alert(titulo+imagen);
}


function toggle(){
    $('.editTables').slideToggle(function(){$('#more').html($('.editTables').is(':visible')?'Ocultar':'Mostrar más');});
}
