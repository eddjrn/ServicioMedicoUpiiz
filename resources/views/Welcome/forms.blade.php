@extends('layout')

@section('title')
<title>Generación de formularios</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Generación de formularios
@stop

@section('content')
<section class="tabs-section">
    <div class="tabs-section-nav tabs-section-nav-icons">
        <div class="tbl">
            <ul class="nav" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-doc"></i>  
                            Historia clinica
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <span class="font-icon font-icon-build"></span>
                            Formato IMSS
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-contacts"></i>
                            Carta responsiva
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--.tabs-section-nav-->
    
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1">

    <a href="/antecedentes" class="btn btn-inline" target="_blank" >Obtener Historia Clinica</a>

        <div class="row" id="intento">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <table border="1">
        <tr align="Center">
            <td rowspan="7">F</br>O</br>T</br>O</td>
            <td colspan="12">UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA CAMPUS ZACATECAS - IPN</td>
        </tr>
        <tr align="Center">
            <td colspan="11"><strong>HISTORIA CLÍNICA MÉDICA DE ALUMNOS</strong></td>
        </tr>
        <tr>
            <td colspan="11">|</td>
        </tr>
        <tr align="Center">
            <td colspan="11"><strong>FICHA DE IDENTIFICACIÓN</strong></td>
        </tr>
        <tr>
            <td colspan="3">TURNO: </td>
            <td colspan="2">MATUTINO </td>
            <td colspan="2"></td>
            <td colspan="2">VESPERTINO </td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>ING. </td>
            <td>MECATRONICA</td>
            <td> @if($student->carrera_id == 2)
                        X
                 @endif
            </td>
            <td>SISTEMAS</td>
            <td>
                @if($student->carrera_id == 1)
                        X
                 @endif
            </td>
            <td>AMBIENTAL</td>
            <td>
                @if($student->carrera_id == 5)
                        X
                 @endif
            </td>
            <td>ALIMENTOS</td>
            <td>
                @if($student->carrera_id == 3)
                        X
                 @endif
            </td>
            <td>METAL.</td>
            <td>
                @if($student->carrera_id == 4)
                        X
                 @endif
            </td>
        </tr>
        <tr>
            <td>SEMESTRE: </td>
            <td></td>
            <td>GRUPO: </td>
            <td colspan="2"></td>
            <td colspan="3">FECHA DE 1ER CONSULTA: </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td><strong>NOMBRE: </strong></td>
            <td colspan="4">{{$student->user->apellidoPaterno}} {{$student->user->apellidoMaterno}} {{$student->user->nombre}} </td>
            <td>EDAD: </td>
            <td>{{$student->age()}}</td>
            <td>SEXO: </td>
            <td>H</td>
            <td></td>
            <td>M</td>
            <td></td>
        </tr>
        <tr>
            <td>No. de PZ o BOLETA</td>
            <td colspan="4">{{$student->user->identificacion}}</td>
            <td>CURP</td>
            <td colspan="6">{{$student->curp}}</td>
        </tr>
        <tr>
            <td>Seguridad Social por:</td>
            <td>ESCUELA</td>
            <td></td>
            <td>PADRES</td>
            <td colspan="2"></td>
            <td>TRABAJO</td>
            <td colspan="2"></td>
            <td>PROPIO</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td></td>
            <td>IMSS</td>
            <td></td>
            <td>ISSSTE</td>
            <td colspan="2"></td>
            <td>SSZ</td>
            <td colspan="2"></td>
            <td>OTRO:</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="3">NUMERO DE SEGURIDAD SOCIAL:</td>
            <td colspan="3">{{$student->user->medicalData->numSeguro}}</td>
            <td colspan="3">UNIDAD MEDICO FAMILIAR:</td>
            <td colspan="3">{{$student->user->medicalData->clinic}}</td>
        </tr>
        <tr>
            <td colspan="2">OTRO:</td>
            <td colspan="4"></td>
            <td colspan="2">LUGAR:</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="12">|</td>
        </tr>
        <tr>
            <td colspan="12" align="Center"><strong>ENFERMEDADES CONOCIDAS</strong></td>
        </tr>
        <tr>
            <td><STRONG>DIAGNOSTICO</STRONG></td>
            <td colspan="4"></td>
            <td colspan="7" align="Center">ENFERMEDADES EN LA INFANCIA</td>
        </tr>
        <tr>
            <td colspan="5" align="Center"><STRONG>TRATAMIENTO (MEDICAMENTOS)</STRONG></td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td colspan="2" align="Center">NOMBRE</td>
            <td align="Center">SUSTANCIA</td>
            <td align="Center">MG</td>
            <td align="Center">DOSIS</td>
            <td align="Center">Alergias:</td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>|</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>|</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Tipo de sangre</td>
            <td>GPO</td>
            <td colspan="2"></td>
            <td>RH</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2" align="Center">TIEMPO EVOLUCION</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="5" align="Center"><strong>ANTECEDENTES DE ENFERMEDADES EN TU FAMILIA</strong></br><strong>(ABUELOS, PADRES, TIOS, HERMANOS, HIJOS):</strong></td>
            <td colspan="7" align="Center"><strong>ANTECEDENTES PERSONALES:</strong></td>
        </tr>
        <tr>
            <td>Presión alta</td>
            <td colspan="4"></td>
            <td>Fumas</td>
            <td>SI</td>
            <td></td>
            <td>NO</td>
            <td></td>
            <td>CUANTOS X MES</td>
            <td></td>
        </tr>
        <tr>
            <td>Diabetes</td>
            <td colspan="4"></td>
            <td colspan="2">DESDE QUE EDAD:</td>
            <td colspan="5"></td>
        </tr>
        <tr>
            <td>Artritis</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td>Asma</td>
            <td colspan="4"></td>
            <td>Tomas Alcohol</td>
            <td>SI</td>
            <td></td>
            <td>NO</td>
            <td></td>
            <td>CUANTO X MES</td>
            <td></td>
        </tr>
        <tr>
            <td>Cáncer</td>
            <td colspan="4"></td>
            <td>Transfusiones</td>
            <td>SI</td>
            <td></td>
            <td>NO</td>
            <td></td>
            <td>A QUE EDAD:</td>
            <td></td>
        </tr>
        <tr>
            <td>Epilepsias</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td>Enf. del Corazón</td>
            <td colspan="4"></td>
            <td>Cirugías</td>
            <td>SI</td>
            <td></td>
            <td>NO</td>
            <td></td>
            <td colspan="2">DONDE:</td>
        </tr>
        <tr>
            <td>Sobrepeso / Obesidad</td>
            <td colspan="4"></td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td>Enf. de Tiroides</td>
            <td colspan="4"></td>
            <td>Fracturas</td>
            <td>SI</td>
            <td></td>
            <td>NO</td>
            <td></td>
            <td colspan="2">DONDE:</td>
        </tr>
        <tr>
            <td>Bopolaridad</td>
            <td colspan="4"></td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td>Esquizofrenia</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td>Depresión</td>
            <td colspan="4"></td>
            <td rowspan="2" colspan="7" align="Center"><strong>PERSONA QUE SE AVISARÁ EN CASO DE</br> URGENCIA:</strong></td>
        </tr>
        <tr>
            <td colspan="5" align="Center">Vacunas</td>
        </tr>
        <tr>
            <td colspan="2" align="Center"><strong>Contra Enfermermedades</strong></td>
            <td colspan="3" align="Center"><strong>Fecha de aplicación</strong></td>
        </tr>
        <tr>
            <td colspan="2">Tetanos (Td)</td>
            <td></td>
            <td></td>
            <td></td>
            <td>Nombre:</td>
            <td colspan="6">{{$student->tutor}}</td>
        </tr>
        <tr>
            <td colspan="2">Hepatitis</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">TELEFONO:</td>
            <td colspan="5">{{$student->telefonoTutor}}</td>
        </tr>
        <tr>
            <td colspan="2">SR</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">CELULAR:</td>
            <td colspan="5">{{$student->celularTutor}}</td>
        </tr>
        <tr>
            <td colspan="2">Influenza</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">PARENTESCO:</td>
            <td colspan="5">{{$student->tutorRelationship()}}</td>
        </tr>
        <tr>
            <td colspan="2">Otra</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">CORREO @ ALUMNO:</td>
            <td colspan="4">{{$student->user->email}}</td>
            <td colspan="2">FACEBOOK</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="6">TE GUSTARÍA FORMAR PARTE DE LA BRIGADA DE PRIMEROS AUXILIOS</td>
            <td>SI</td>
            <td colspan="2"></td>
            <td>NO</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td colspan="6"><strong>Nosotros te capacitamos.</strong></td>
            <td colspan="6"><strong>SERVICIO MÉDICO</strong></td>
        </tr>
    </table>
        </div>
            
        </div>

        </div><!--.tab-pane-->

        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
          
             <a href="/imss" class="btn btn-inline" target="_blank" >Obtener Formato Imss</a>


             <div class="row">
             <div class="col-md-12" align="Center">
                     
        <table border="1">
        <tr>
        <td>
    <table>
        <tr align="Center">
            <td colspan="5"><img src="https://pbs.twimg.com/profile_images/344513261565325307/746aa12a74c9c5f55de34248100339a8_400x400.png" width="7%">INSTITUTO MEXICANO DEL SEGURO SOCIAL</br>Seguridad y Solidaridad Social</td>
        </tr>
        <tr>
            <td align="Center" colspan="5">SOLICITUD DE INSCRIPCION AL SEGURO DE SALUD PARA ESTUDIANTES</td>
        </tr>
        <tr>
            <td colspan="5" align="right">_________</td>
        </tr>
        <tr>
            <td colspan="5" align="right">FOLIO</td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td align="Center" colspan="2"><STRONG>DATOS DEL PLANTES EDUCATIVO</STRONG></td>
                            </tr>
                            <tr>
                                <td>NOMBRE: &nbsp</td>
                                <td align="Center">&nbsp IPN - UNIDAD PROFESIONAL INTERDISCIPLINARIA </BR>DE INGENIERÍA CAMPUS ZACATECAS</td>
                            </tr>
                            <tr>
                                <td>CLAVE: &nbsp</td>
                                <td align="Center">&nbsp 32DPN0001</td>
                            </tr>
                            <tr>
                                <td>|</td>
                            </tr>
                            <tr>
                                
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="3">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td align="Center" colspan="2"><strong>DATOS DEL I.M.S.S.</strong></td>
                            </tr>
                            <tr>
                                <td>REGISTRO IMSS DEL PLANTEL: &nbsp</td>
                                <td align="Center">H09-99039-32-5</td>
                            </tr>
                            <tr>
                                <td>NUMERO DE SEGURO SOCIAL:</td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>CURP:</td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>NUMERO DE UMF:</td>
                                <td>&nbsp</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">|</td>
        </tr>
        <tr>
            <tr>
            <td colspan="5" align="Center"><strong>DATOS DEL ESTUDIANTE</strong></td>
            </tr>
            <tr>
                <td>A)</td>
                <td colspan="2">NOMBRE:_________________</td>
                <td>_________________</td>
                <td>_________________</td>
            </tr>
            <tr>
                <td colspan="3" align="right">APELLIDO PATERNO &nbsp &nbsp &nbsp &nbsp APELLIDO MATERNO </td>
                <td colspan="2" align="Center">NOMBRES</td>
            </tr>
            <tr>
                <td>B)</td>
                <td align="Center">SEXO: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 1) MASCULINO</td>
                <td colspan="3">2) FEMENINO</td>
            </tr>
            <tr>
                <td>C)</td>
                <td>FECHA DE NACIMIENTO:</td>
                <td align="Center">(&nbsp)</td>
                <td align="Center">(&nbsp)</td>
                <td>(&nbsp)</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td align="Center">DIA</td>
                <td align="Center">MES</td>
                <td>AÑO</td>
            </tr>
            <tr>
                <td>D)</td>
                <td>LUGAR DE NACIMIENTO:</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>E)</td>
                <td>DOMICILIO:</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="2" align="right">CALLE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp NUMERO</td>
                <td colspan="3" align="Center">LOCALIDAD &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CP</td>
            </tr>
            <tr>
                <td>F)</td>
                <td>Nombre de los Padres: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PADRE:</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td></td>
                <td align="Center"> MADRE:</td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>G)</td>
                <td>¿ADEMAS DE ESTUDIAR TRABAJA?</td>
                <td>1) SI</td>
                <td align="Center">2) NO</td>
                <td align="Center">( )</td>
            </tr>
            <tr>
                <td>H)</td>
                <td>¿DE QUIEN DEPENDE ECONOMICAMENTE? &nbsp &nbsp &nbsp1) PADRE</td>
                <td>2) CONYUGUE</td>
                <td align="Center">3) OTROS</td>
                <td align="Center">( )</td>
            </tr>
            <tr>
                <td>I)</td>
                <td colspan="4">¿EN QUE TRABAJA LA PERSONA DE LA QUE DEPENDE ECONOMICAMENTE?</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1) SERVIDOR PUBLICO &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 5) MARINO O MILITAR</td>
            </tr>
            <tr>
                <td align="Center" colspan="5">2) EMPLEADO DE EMPRESA PARTICULAR &nbsp &nbsp &nbsp &nbsp6) AGRICULTOR, GANADERO, CAMPESINO, PESCADOR</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3) PROFESION U OFICIO POR SU CUENTA &nbsp &nbsp &nbsp &nbsp 7) OBRERO</td>
            </tr>
            <tr>
                <td colspan="4">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4) COMERCIANTE O INDUSTRIAL &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp8) OTROS</td>
                <td align="Center">( )</td>
            </tr>
            <tr>
                <td colspan="5" align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp ESPECIFIQUE</td>
            </tr>
            <tr>
                <td>J)</td>
                <td colspan="4">¿SE ENCUENTRA PROTEGIDO, YA SEA COMO TRABAJADOR COMO BENEFICIARIO DE SUS PADRES O DE SU</br> CONYUGUE, ALGUNA INSTITUCION DE SEGURIDAD?</td>
            </tr>
            <tr>
                <td colspan="2" align="Center">1) SI</td>
                <td colspan="2">2) NO</td>
                <td>( )</td>
            </tr>
            <tr>
                <td>K)</td>
                <td colspan="4">¿QUE INSTITUCION LE DA SERVICIOS MEDICOS?</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp1) SEGURO SOCIAL &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp5) PEMEX</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp2) ISSSTE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 6) INSTITUTO NACIONAL DE CREDITO (BANCOS)</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp3) SECRETARIA MARINA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 7) OTRA</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp4) SECRETARIA DE LA DEFENSA NACIONAL &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp( )</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="5">Bajo protesta de decir la verdad declaro que los datos aqui asentados son ciertos</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <tr>
                <td colspan="2" align="Center">PLANTEL EDUCATIVO</td>
                <td colspan="3">FIRMA DEL ESTUDIANTE</td>
            </tr>
            <tr>
                <td colspan="5">|</td>
            </tr>
            <!---->
            <tr>
            <td colspan="2">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td colspan="2"><strong>SE CERTIFICA QUE EL SOLICITANTE ES ESTUDIANTE </br>DE ESTE PLANTEL</strng></td>
                            </tr>
                            <tr>
                                <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbspSELLO</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp FECHA &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  NOMBRE Y FIRMA DEL RESPONSABLE</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="3">
                <table border="1">
                    <tr>
                        <td>
                        <table>
                            <tr>
                                <td colspan="2" align="Center" ><strong>I.M.S.S. DELEGACION</strong></td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">SELLO</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2">|</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="Center">&nbsp &nbsp &nbsp &nbspNOMBRE Y FIRMA DEL RESPONSABLE&nbsp &nbsp &nbsp &nbsp</td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
            </td>
            </tr>
            <!---->
        </tr>
    </table>
        </td>
        </tr>
    </table>

</div>
               
</div>

        </div><!--.tab-pane-->

        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3
       
        <a href="/carta" class="btn btn-inline" target="_blank" >Obtener Carta Responsiva</a>

         <div class="row">
                 <div class="col-md-3"></div>
                 <div class="col-md-5">
                     

                 ---Tu Codigo Aqui ----


                 </div>
             </div>
        
        </div><!--.tab-pane-->

    </div><!--.tab-content-->

</section><!--.tabs-section-->
@stop

@section('scripts')
@stop
