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

    <a href="{{asset('/antecedentes')}}" class="btn btn-inline" target="_blank" >Obtener Historia Clinica</a>


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
            <td colspan="2">@if($student->turno == 'Matutino')
                       <strong> X
                 @endif</td>
            <td colspan="2">VESPERTINO </td>
            <td colspan="2">@if($student->turno == 'Vespertino')
                       <strong> X
                 @endif</td></td>
        </tr>
        <tr>
            <td>ING. </td>
            <td>MECATRONICA</td>
            <td> @if($student->carrera_id == 2)
                      <strong>  X
                 @endif
            </td>
            <td>SISTEMAS</td>
            <td>
                @if($student->carrera_id == 1)
                      <strong>  X
                 @endif
            </td>
            <td>AMBIENTAL</td>
            <td>
                @if($student->carrera_id == 5)
                       <strong> X
                 @endif
            </td>
            <td>ALIMENTOS</td>
            <td>
                @if($student->carrera_id == 3)
                       <strong> X
                 @endif
            </td>
            <td>METAL.</td>
            <td>
                @if($student->carrera_id == 4)
                       <strong> X
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
            <td colspan="4"><strong>{{$student->user->apellidoPaterno}} {{$student->user->apellidoMaterno}} {{$student->user->nombre}} </td>
            <td>EDAD: </td>
            <td>{{$student->age()}}</td>
            <td>SEXO: </td>
            <td>H</td>
            <td>@if($student->sexo == 'Masculino')
                     <strong>   X
                 @endif</td>
            <td>M</td>
            <td>@if($student->sexo == 'Femenino')
                       <strong> X
                 @endif</td>
        </tr>
        <tr>
            <td>No. de PZ o BOLETA</td>
            <td colspan="4"><strong>{{$student->user->identificacion}}</td>
            <td>CURP</td>
            <td colspan="6"><strong>{{$student->curp}}</td>
        </tr>
        <tr>
            <td>Seguridad Social por:</td>
            <td>ESCUELA</td>
            <td>@if($student->user->medicalData->proveedorSeguro == 'UPIIZ-IPN')
                       <strong> X
                @endif</td>
            <td>PADRES</td>
            <td colspan="2">@if($student->user->medicalData->proveedorSeguro == 'Padres')
                      <strong>  X
                @endif</td>
            <td>TRABAJO</td>
            <td colspan="2">
                @if($student->user->medicalData->proveedorSeguro == 'Trabajo')
                      <strong>  X
                @endif
            </td>
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
            <td colspan="3"><strong>{{$student->user->medicalData->numSeguro}}</td>
            <td colspan="3">UNIDAD MEDICO FAMILIAR:</td>
            <td colspan="3"><strong>{{$student->user->medicalData->clinic}}</td>
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
            <td colspan="6"><strong>{{$student->user->medicalRecord->alergias}}</td>
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
            <td colspan="2"><strong>{{$student->user->medicalData->tipoSangre}}</td>
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
            <td colspan="4">
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->presionAlta, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td>Fumas</td>
            <td>SI</td>
            <td>@if($student->user->medicalRecord->fumar()==1)
           <strong> X
            @endif
            </td>
            <td>NO</td>
            <td>
                @if($student->user->medicalRecord->fumar()==0)
           <strong> X
            @endif
            </td>
            <td>CUANTOS X MES </td>
            <td> <strong>{{$student->user->medicalRecord->numFumar()}}</td>
        </tr>
        <tr>
            <td>Diabetes</td>
            <td colspan="4">{!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->diabetes, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td colspan="2">DESDE QUE EDAD:</td>
            <td colspan="5"><strong>{{$student->user->medicalRecord->edadFumar()}}</td>
        </tr>
        <tr>
            <td>Artritis</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->artritis, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
        </tr>
        <tr>
            <td>Asma</td>
            <td colspan="4">
                 {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->asma, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td>Tomas Alcohol</td>
            <td>SI</td>
            <td>@if($student->user->medicalRecord->alcohol()==1)
           <strong> X
            @endif
            </td>
            <td>NO</td>
            <td>
                @if($student->user->medicalRecord->alcohol()==0)
          <strong>  X
            @endif
            </td>
            <td>CUANTO X MES</td>
            <td><strong>{{$student->user->medicalRecord->numAlcohol()}}</td>
        </tr>
        <tr>
            <td>Cáncer</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->cancer, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td>Transfusiones</td>
            <td>SI</td>
            <td>@if($student->user->medicalRecord->transfusiones()==1)
            <strong>X
            @endif
            </td>
            <td>NO</td>
            <td>
                @if($student->user->medicalRecord->transfusiones()==0)
                 <strong>   X
                @endif
            </td>
            <td>A QUE EDAD:</td>
            <td><strong>{{$student->user->medicalRecord->edadTransfusiones()}}</td>
        </tr>
        <tr>
            <td>Epilepsias</td>
            <td colspan="4">
                 {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->epilepsias, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
        </tr>
        <tr>
            <td>Enf. del Corazón</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->enfCorazon, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td>Cirugías</td>
            <td>SI</td>
            <td></td>
            <td>NO</td>
            <td></td>
            <td colspan="2">DONDE: <strong>{{$student->user->medicalRecord->cirugias}}</td>
        </tr>
        <tr>
            <td>Sobrepeso / Obesidad</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->sobrePeso, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td>Enf. de Tiroides</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->enfTiroides, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td>Fracturas</td>
            <td>SI</td>
            <td></td>
            <td>NO</td>
            <td></td>
            <td colspan="2">DONDE: <strong>{{$student->user->medicalRecord->fracturas}}</td>
        </tr>
        <tr>
            <td>Bopolaridad</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->bipolaridad, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td>Esquizofrenia</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->esquizofrenia, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
        </tr>
        <tr>
            <td>Depresión</td>
            <td colspan="4">
                 {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->depresion, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
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
            <td colspan="6"><strong>{{$student->tutor}}</td>
        </tr>
        <tr>
            <td colspan="2">Hepatitis</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">TELEFONO:</td>
            <td colspan="5"><strong>{{$student->telefonoTutor}}</td>
        </tr>
        <tr>
            <td colspan="2">SR</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">CELULAR:</td>
            <td colspan="5"><strong>{{$student->celularTutor}}</td>
        </tr>
        <tr>
            <td colspan="2">Influenza</td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="2">PARENTESCO:</td>
            <td colspan="5"><strong>{{$student->parentescoTutor}}</td>
        </tr>
        <tr>
            <td colspan="2">Otra</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">CORREO @ ALUMNO:</td>
            <td colspan="4"><strong>{{$student->user->email}}</td>
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
          
             <a href="{{asset('/imss')}}" class="btn btn-inline" target="_blank" >Obtener Formato Imss</a>


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
                                <td>NUMERO DE SEGURO SOCIAL: <strong>{{$student->user->medicalData->numSeguro}}</td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>CURP: <strong>{{$student->curp}}</td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>NUMERO DE UMF: <strong>{{$student->user->medicalData->clinic}}</td>
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
                <td colspan="2">NOMBRE:<strong>&nbsp;&nbsp;{{$student->user->apellidoPaterno}} {{$student->user->apellidoMaterno}} {{$student->user->nombre}}</strong></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" align="right"></td>
                <td colspan="2" align="Center"></td>
            </tr>
            <tr>
                <td>B)</td>
                <td align="Center">SEXO: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 1) MASCULINO</td>
                <td colspan="3">2) FEMENINO</td>
            </tr>
            <tr>
                <td>C)</td>
                <td>FECHA DE NACIMIENTO:&nbsp;&nbsp;&nbsp;&nbsp;<strong>{{$student->formatedNacimiento()}}</strong></td>
                <td align="Center"></td>
                <td align="Center"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td align="Center">DIA</td>
                <td align="Center">MES</td>
                <td>AÑO</td>
            </tr>
            <tr>
                <td>D)</td>
                <td>LUGAR DE NACIMIENTO: <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$student->state->nombre}} </td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td>E)</td>
                <td>DOMICILIO:<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$student->calle}} {{$student->numInterior}} {{$student->colonia}} {{$student->codigoPostal}}</td>
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

        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">
       
        <a href="{{asset('/carta')}}" class="btn btn-inline" target="_blank" >Obtener Carta Responsiva</a>

         <div class="row">
                 <div class="col-md-2"></div>
                 <div class="col-md-8">
                     

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

                 </div>
             </div>
        
        </div><!--.tab-pane-->

        
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
    </div><!--.tab-content-->

</section><!--.tabs-section-->
<!--<div class="panel panel-default">
<div class="panel-heading">Imagen de perfil</div>
<div class="panel-body">
    <img src='uploads/{{$student->user->foto}}'alt="Tu imagen de perfil" class="img-responsive">

</div>
</div>
-->
@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
@stop

