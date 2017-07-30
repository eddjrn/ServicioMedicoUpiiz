<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Historia Clínica</title>
</head>
<body>
    <!--44-->
    <!--td- y tr | -->
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
                        X
                 @endif</td>
            <td colspan="2">VESPERTINO </td>
            <td colspan="2">@if($student->turno == 'Vespertino')
                        X
                 @endif</td></td>
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
            <td>@if($student->sexo == 'Masculino')
                        X
                 @endif</td>
            <td>M</td>
            <td>@if($student->sexo == 'Femenino')
                        X
                 @endif</td>
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
            <td>@if($student->user->medicalData->proveedorSeguro == 'UPIIZ-IPN')
                        X
                @endif</td>
            <td>PADRES</td>
            <td colspan="2">@if($student->user->medicalData->proveedorSeguro == 'Padres')
                        X
                @endif</td>
            <td>TRABAJO</td>
            <td colspan="2">
                @if($student->user->medicalData->proveedorSeguro == 'Trabajo')
                        X
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
            <td colspan="6">{{$student->user->medicalRecord->alergias}}</td>
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
            <td colspan="2">{{$student->user->medicalData->tipoSangre}}</td>
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
            <td></td>
            <td>NO</td>
            <td></td>
            <td>CUANTOS X MES</td>
            <td></td>
        </tr>
        <tr>
            <td>Diabetes</td>
            <td colspan="4">{!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->diabetes, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
            <td colspan="2">DESDE QUE EDAD:</td>
            <td colspan="5"></td>
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
            <td></td>
            <td>NO</td>
            <td></td>
            <td>CUANTO X MES</td>
            <td></td>
        </tr>
        <tr>
            <td>Cáncer</td>
            <td colspan="4">
                {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->cancer, ['class'=>'select2', 'multiple', 'disabled'])!!}
            </td>
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
            <td colspan="2">DONDE: {{$student->user->medicalRecord->cirugias}}</td>
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
            <td colspan="2">DONDE: {{$student->user->medicalRecord->fracturas}}</td>
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
            <td colspan="5">{{$student->parentescoTutor}}</td>
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
</body>
</html>
