<input type="button" value="Imprime esta pagina" onclick="window.print()"> 
     <h1 align="Center">CARTA RESPONSIVA</h1>
    </br>
    <h3 align="Center">Zacatecas, Zacatecas a ______ de __________________ del ___________.</h3>
    <h2>A quien corresponda:</h2>
    <h3 align="justify">Por este medio me permito hacer constar que por asi convenir, a mis intereses, y despues de que las Autoridades de la Unidad Profesional Interdisciplinaria de Ingenieria Campus Zacatecas (UPIIZ), me informaron de la necesidad de llevar a cabo los tramites de Inscripcion al Seguro Facultativo del Instituto Mexicano del Seguro Social, es mi voluntad  no realizar los tramites correspondientes, por tener una cobertura medica por parte de mis padres y/o trabajo, al mismo tiempo  que deslindo de toda responsabilidad presente o futura a esta Unidad Academica, que derive de  lo anterior.</h3>
    <h2>ATENTAMENTE</h2>
    <h3>NOMBRE DEL ALUMNO: <strong>&nbsp;{{$student->user->nombre}} {{$student->user->apellidoPaterno}} {{$student->user->apellidoMaterno}}</strong></h3>
    <h3>INSTITUCION QUE PRESTA SERVICIO MEDICO: <strong>&nbsp;{{$student->user->medicalData->proveedorSeguro}}</strong></h3>
    <h3>NUMERO DE SEGURIDAD SOCIAL (NSS):<strong>&nbsp;{{$student->user->medicalData->numSeguro}}</strong></h3>
    <h3>UNIDAD MEDICO FAMILLIAR (UMF):<strong>&nbsp;{{$student->user->medicalData->clinic}} </strong></h3>
    <h3>PROGRAMA ACADEMICO:<strong>&nbsp;{{$student->carrer->nombre}}</strong></h3>
    <h3>No. DE BOLETA O PZ PROVISIONAL:<strong>&nbsp;{{$student->user->identificacion}}</strong></h3>
    <h3>GRUPO:______________________________________________________________</h3>
    <h3>Correo Electronico:<strong>&nbsp;{{$student->user->email}}</strong> tel:<strong>&nbsp;{{$student->telefono}}</strong></h3>
    <h3>FIRMA DEL ALUMNO:________________________________________________</h3>
    <h3>NOTA:</h3>
    <h4 align="justify">ANEXA UNA COPIA DE TU CARTILLA NACIONAL DE SALUD O CARNET DE CITAS DONDE PUEDAS COMPROBAR QUE RECIBES ATENCION MEDICA POR TUS PADRES.</br>SI DESCONOCES ALGUNA INFORMACION PREGUNTA AL ENTREGAR EL FORMATO EN SERVICIO MEDICO DE LA UPIIZ</h4>
