@extends('layout')



@section('title')
<title>Formulario</title>
@stop

@section('css')
@stop

@section('popUp')

@stop

@section('subHead')
@stop

@section('content')

<div class="row">
<content>
	<section class="card">
		<header class="card-header card-header-x1">
			 <a href="{{asset('/formularioGeneral')}}" class="btn btn-inline" target="_blank" >Obtener Formulario</a>
		</header>

		<div class="card-block" align="Center" id="muestra" >
			<body>
	<table align="Center" width="1080">
		<td><img src="{{asset('/Template/img/IPN.png')}}" width="140" height="150" align="Center"></td>
		<td>
			<header align="Center"><font size="5"><strong>INSTITUTO POLIT&Eacute;CNICO NACIONAL</strong></font></header>
			<header align="Center"><font size="5"><strong>UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIER&Iacute;A</strong></font></header>
			<header align="Center"><font size="5"><strong>CAMPUS ZACATECAS</strong></font></header>
			</br>
			<header align="Center"><font size="5"><strong>SERVICIO M&Eacute;DICO UPIIZ</strong></font></header>
		</td>
		<td><img src="{{asset('/Template/img/upiiz_avatar.png')}}" width="120" height="120" align="Center"></td>
	</table>

	</br>
	</br>
	
	<table align="Center" width="1080">
		<tr>
			<td rowspan="2" width="100" height="100"><table frame="border" border="1" rules="none"><td width="100" height="100" align="Center"><img src="{{$student->user->foto}}" alt="" style="height:120px;width:auto;" class="round"></td></table></td>
			<td rowspan="2" width="120" height="120"></td>
			<td width="360"> &nbsp &nbsp &nbsp &nbsp &nbsp<FONT size="4"><strong>No. Boleta: </strong><u>{{$student->user->identificacion}}</u></FONT></td>
			<td><FONT size="4"><strong>Programa Académico:</strong> <u>{{$student->carrer->nombre}}</u></FONT></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp &nbsp &nbsp &nbsp &nbsp<FONT size="4"><strong>Turno:</strong> <u>{{$student->turno}}</u></FONT>&nbsp &nbsp</td>
		</tr>
	</table>

	</br>
	</br>

	<table align="Center" width="1080">
		<tr>
			<td align="Center" colspan="4"><FONT size="4"><b>DATOS GENERALES</b></FONT></td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="360">{{$student->user->apellidoPaterno}}</td>
						<td align="Center" width="360">{{$student->user->apellidoMaterno}}</td>
						<td align="Center" width="360">{{$student->user->nombre}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table WIDTH="100%">
					<tr>
						<td align="Center" width="354"><font size="2"><strong>Apellido Paterno</strong></font></td>
						<td align="Center" width="354"><font size="2"><strong>Apellido Materno</strong></font></td>
						<td align="Center" colspan="2" width="372"><font size="2"><strong>Nombre(s)</strong></font></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="362">{{$student->calle}}</td>
						<td align="Center" width="150">{{$student->numExterior}}</td>
						<td align="Center" width="150">{{$student->numInterior}}</td>
						<td align="Center" width="318">{{$student->colonia}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td align="Center" width="390"><font size="2"><strong>Calle</strong></font></td>
						<td align="Center" width="160"><font size="2"><strong>No.Exterior</strong></font></td>
						<td align="Center" width="160"><font size="2"><strong>No. Interior</strong></font></td>
						<td align="Center" width="342"><font size="2"><strong>Colonia</strong></font></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="156">{{$student->codigoPostal}}</td>
						<td align="Center" width="372">{{$student->place->nombre}}</td>
						<td align="Center" width="300">{{$student->localidad}}</td>
						<td align="Center" width="250">{{$student->telefono}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td align="Center" width="156"><font size="2"><strong>C.P.</strong></font></td>
						<td align="Center" width="372"><font size="2"><strong>Municipio</strong></font></td>
						<td align="Center" width="300"><font size="2"><strong>Estado</strong></font></td>
						<td align="Center" width="250"><font size="2"><strong>Tel. Fijo</strong></font></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="590">{{$student->state->nombre}}</td>
						<td align="Center" width="340">{{$student->formatedNacimiento()}}</td>
						<td align="Center" width="150">{{$student->sexo}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td align="Center" width="590"><font size="2"><strong>Lugar de Nacimiento</strong></font></td>
						<td align="Center" width="340"><font size="2"><strong>Fecha de Nacimiento</strong></font></td>
						<td align="Center" width="150"><font size="2"><strong>Sexo</strong></font></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="150">{{$student->age()}}</td>
						<td align="Center" width="450">{{$student->curp}}</td>
						<td align="Center" width="480">{{$student->user->email}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
						<td align="Center" width="150"><font size="2"><strong>Edad</strong></font></td>
						<td align="Center" width="450"><font size="2"><strong>Curp</strong></font></td>
						<td align="Center" width="480"><font size="2"><strong>Correo Electr&oacute;nico</strong></font></td>
				</table>
			</td>
		</tr>
	</table>

	</br>
	</br>

	<table align="Center" width="1080">
		<tr>
			<td align="Center"><FONT size="4"><b>DATOS M&Eacute;DICOS</b></FONT></td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="480">{{$student->user->medicalData->numSeguro}}</td>
						<td align="Center" width="450">{{$student->user->medicalData->clinic->numero}}</td>
						<td align="Center" width="150">{{$student->user->medicalData->tipoSangre}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td align="Center" width="480"><font size="2"><strong>No. Seguro Social</strong></font></td>
						<td align="Center" width="450"><font size="2"><strong>Unidad M&eacute;dico Familiar</strong></font></td>
						<td align="Center" width="150"><font size="2"><strong>Tipo de Sangre</strong></font></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="540">{{$student->user->medicalData->proveedorSeguro}}</td>
						<td align="Center" width="540">{{$student->user->medicalData->institution->nombre}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td align="Center" width="540"><font size="2"><strong>Proveedor de Seguro</strong></font></td>
						<td align="Center" width="540"><font size="2"><strong>Instituci&oacute; M&eacute;dica</strong></font></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	</br>
	</br>

	<table align="Center" width="1080">
		<tr>
			<td align="Center"><FONT size="4"><b>HISTORIAL M&Eacute;DICO</b></FONT></td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="100">Alergias:</td>
						<td align="Center" width="980">{{$student->user->medicalRecord->alergias}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="100">Cirug&iacute;as:</td>
						<td align="Center" width="980">{{$student->user->medicalRecord->cirugias}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="100">Fracturas:</td>
						<td align="Center" width="980">{{$student->user->medicalRecord->fracturas}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="100">Fuma:</td>
						<td align="Center" width="440">{{$student->user->medicalRecord->fumar}}</td>
						<td align="Center" width="100">Cuantas veces:</td>
						<td align="Center" width="440">{{$student->user->medicalRecord->numFumar}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="100">Bebe:</td>
						<td align="Center" width="440">{{$student->user->medicalRecord->alcohol}}</td>
						<td align="Center" width="100">Cuantas veces:</td>
						<td align="Center" width="440">{{$student->user->medicalRecord->numAlcohol}}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="100">Transfuciones:</td>
						<td align="Center" width="440">{{$student->user->medicalRecord->transfusiones}}</td>
						<td align="Center" width="100">A que edad:</td>
						<td align="Center" width="440">{{$student->user->medicalRecord->edadTransfusiones}}</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	</br>
	</br>

	<table align="Center" width="1080">
		<tr>
			<td align="Center"><FONT size="4"><b>ANTECEDENTES</b></FONT></td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="200">Presi&oacute;n Alta:</td>
						<td align="Center" width="880">{!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->presionAlta, ['class'=>'select2', 'multiple', 'disabled'])!!}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="200">Epilepsia:</td>
						<td align="Center" width="880">{!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->epilepsias, ['class'=>'select2', 'multiple', 'disabled'])!!}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="200">Enfermedades del Coraz&oacute;n:</td>
						<td align="Center" width="880">{!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->enfCorazon, ['class'=>'select2', 'multiple', 'disabled'])!!}</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table BORDER CELLPADDING=2 CELLSPACING=0 WIDTH="100%">
					<tr>
						<td align="Center" width="200">Diabetes:</td>
						<td align="Center" width="880">{!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->diabetes, ['class'=>'select2', 'multiple', 'disabled'])!!}</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</body>
		</div>
	</section>
</content>
</div>
@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script type="text/javascript">
function imprSelec(muestra)
{var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
</script>
@stop 