<input type="button" value="Imprime esta pagina" onclick="window.print()"> 
    <h1 align="Center">CARTA RESPONSIVA</h1>
    </br>
    <h3 align="Center">Zacatecas, Zacatecas a ______ de __________________ del ___________.</h3>
    </br>
    <h2>A quien corresponda:</h2>
    <h3 align="justify">Por este medio me permito hacer constar que por as� convenir, a mis intereses, y despu�s de que las Autoridades de la Unidad Profesional Interdisciplinaria de Ingenier�a Campus Zacatecas (UPIIZ), me informaron de la necesidad de llevar a cabo los tr�mites de Inscripci�n al Seguro Facultativo del Instituto Mexicano del Seguro Social, es mi voluntad  no realizar los tr�mites correspondientes, por tener una cobertura m�dica por parte de mis padres y/o trabajo, al mismo tiempo  que deslindo de toda responsabilidad presente o futura a esta Unidad Acad�mica, que derive de  lo anterior.</h3>
    <h2>ATENTAMENTE</h2>
    <h3>NOMBRE DEL ALUMNO: <strong>{{$student->user->nombre}} {{$student->user->apellidoPaterno}} {{$student->user->apellidoMaterno}}</strong></h3>
    <h3>INSTITUCION QUE PRESTA SERVICIO M�DICO: <strong>{{$student->user->medicalData->provider()}}</strong></h3>
    <h3>NUMERO DE SEGURIDAD SOCIAL (NSS):<strong>{{$student->user->medicalData->numSeguro}}</strong></h3>
    <h3>UNIDAD M�DICO FAMILLIAR (UMF):{{$student->user->medicalData->clinic}} LUGAR:_______________</h3>
    <h3>PROGRAMA ACAD�MICO:<strong>{{$student->carrer->nombre}}</strong></h3>
    <h3>No. DE BOLETA O PZ PROVISIONAL:<strong>{{$student->user->identificacion}}</strong></h3>
    <h3>GRUPO:______________________________________________________________</h3>
    <h3>Correo Electr�nico:<strong>{{$student->user->email}}</strong> tel:<strong>{{$student->telefono}}</strong></h3>
    <h3>FIRMA DEL ALUMNO:________________________________________________</h3>
    <h3>NOTA:</h3>
    <h4 align="justify">ANEXA UNA COPIA DE TU CARTILLA NACIONAL DE SALUD O CARNET DE CITAS DONDE PUEDAS COMPROBAR QUE RECIBES ATENCI�N M�DICA POR TUS PADRES.</br>SI DESCONOCES ALGUNA INFORMACI�N PREGUNTA AL ENTREGAR EL FORMATO EN SERVICIO M�DICO DE LA UPIIZ</h4>
