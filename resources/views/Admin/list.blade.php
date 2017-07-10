<input type="hidden" id = "cd{{$idUniqueSection}}" value=""> <!--input que sirve para almacenar el valor del numero total de paginas posteriormente redondeado con el script de mas abajo-->
<input type="hidden" id = "cd2{{$idUniqueSection}}" value="{{json_encode($array)}}"> <!--input que sirve para almacenar el valor en forma de arreglo que viene del controlador el cual es el listado(ids) de los alumnos, esto para que no se pierda el valor y poder usar la paginacion-->

<div class="container-fluid">
@foreach($studentsPaginated as $student)
<!-- {{$user = \App\user::find($student['usuario_id'])}} -->
<!-- {{$medicalData = \App\medicalData::where('usuario_id', $user['id'])->get()}} -->
<div id="row{{$student['id']}}">
    <div class="row moreBtn">
        <div class="col-lg-2 col-md-2 col-xs-12">
            <div class="font-11 color-blue-grey-lighter uppercase">Nombre</div>
            <a href="/admin/lists/{{$student['id']}}">{{$user}}</a>
        </div>
        @if($indexSection == 2 || $indexSection == 3 || $indexSection == 4)
        <div class="col-lg-2 col-md-2 hidden-lg-down helpHighlight" style="word-wrap: break-word;">
            <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
            {{\App\carrer::find($student['carrera_id'])->nombre}}
        </div>
        @else
        <div class="col-lg-2 col-md-2 hidden-lg-down helpHighlight" style="word-wrap: break-word;">
            <div class="font-11 color-blue-grey-lighter uppercase">Correo electrónico</div>
            {{$user['email']}}
        </div>
        @endif
        <div class="col-lg-1 col-md-2 col-xs-12 helpHighlight">
            <div class="font-11 color-blue-grey-lighter uppercase">Boleta</div>
                {{$user['identificacion']}}
        </div>
        <div class="col-lg-1 col-md-2 col-xs-12 helpHighlight" style="word-wrap: break-word;">
            <div class="font-11 color-blue-grey-lighter uppercase hidden-md-down">Número de seguro</div>
            <div class="font-11 color-blue-grey-lighter uppercase hidden-lg-up">No. seguro</div>
            {{$medicalData[0]['numSeguro']}}
        </div>
        @if($indexSection == 4)
        <div class="col-lg-1 col-md-1 hidden-lg-down helpHighlight">
            <div class="font-11 color-blue-grey-lighter uppercase">Institución</div>
            {{\App\medicalInstitute::find($medicalData[0]['institucionSeguro_id'])->nombre}}
        </div>
        @else
        <div class="col-lg-1 col-md-1 hidden-lg-down helpHighlight" style="word-wrap: break-word;">
            <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
            {{$student['telefono']}}
        </div>
        @endif
        <div class="col-lg-2 col-md-2 col-xs-12">
            <div class="font-11 color-blue-grey-lighter uppercase">Estatus</div>
            <input type="text" id="status{{$student['id']}}" readonly class="form-control {{$statusStyle[$student['estatus_id']]}}" value="{{\App\status::find($student['estatus_id'])->nombre}}" style="word-wrap: break-word;">
        </div>
        <div class="col-lg-1 col-md-1 col-xs-4">
            <div class="font-11 color-blue-grey-lighter uppercase hidden-md-down">Seguro-vida</div>
            <div class="font-11 color-blue-grey-lighter uppercase hidden-lg-up">Seguro</div>
            <div class="text-center">
                <button type="button"
                        class="btn btn-inline btn-sm btn-{{config('global.hasState')[$medicalData[0]['seguroVida']]}}"
                        title="Seguro de vida"
                        data-container="body"
                        data-toggle="popover"
                        data-placement="top"
                        data-content="{{\App\medicalData::find($medicalData[0]['id'])->insurance()}}" id="buttonSec{{$student['id']}}">
                        <span class="font-icon {{config('global.hasIconStyle')[$medicalData[0]['seguroVida']]}}" id="spanSec{{$student['id']}}"></span>
                </button>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-xs-4">
            <div class="font-11 color-blue-grey-lighter uppercase hidden-md-down">Documentación</div>
            <div class="font-11 color-blue-grey-lighter uppercase hidden-lg-up">Doc.</div>
            <div class="text-center">
                <button type="button"
                        class="btn btn-inline btn-sm btn-{{config('global.hasState')[$student['documentacion']]}}"
                        title="Documentación"
                        data-container="body"
                        data-toggle="popover"
                        data-placement="top"
                        data-content="{{\App\student::find($student['id'])->documentation()}}:<br/>{{$student['observaciones']}}" id="buttonDoc{{$student['id']}}">
                        <span class="font-icon {{config('global.hasIconStyle')[$student['documentacion']]}}" id="spanDoc{{$student['id']}}"></span>
                </button>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-xs-4">
            <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
            <button type="button"
                class="btn btn-inline btn-sm btn-primary"
                data-toggle="modal"
                data-target=".bd-example-modal-md" onclick="updateInputs({{$student['id']}},'{{$user}}',{{$student['estatus_id']}},{{$student['documentacion']}}, '{{$student['observaciones']}}', {{$medicalData[0]['seguroVida']}})" id="edit{{$student['id']}}"><span class="font-icon font-icon-pencil"></span></button>
        </div>
    </div>
<hr>
</div>
@endforeach
</div>

<script>
    var v = Math.ceil({{$lastPage}}); //redondea la variable que manda laravel (usualmente en double) a entero para arriba para el paginador de la pagina calculado desde el controlador
    
    $(document).ready( function() {
        document.getElementById('cd{{$idUniqueSection}}').value = v; //pone el valor redondeado en un input type hidden que posteriormente toma la vista principal para el paginador
        document.getElementById('labelPage{{$idUniqueSection}}').innerHTML = "Página "+ {{$list}} + " de " +  v; //pone la etiqueta gris de informacion de la pagina en la vista principal con $list=>numero actual de la pagina (desde la URL) y la variable redondeada mas arriba
        $('[data-toggle="popover"]').popover({ trigger: "focus, hover", html: true }); //Activa los Popovers en la vista de jquery (.load()) por que los desactiva por defecto
        //$('[data-toggle="popover"]').popover({ trigger: "hover" }); //Activa los Popovers en la vista de jquery (.load()) por que los desactiva por defecto
    });
</script>

<!-- Estilo de la columna para ayuda visual -->
<style>
.moreBtn:hover{ 
    background:#F6F8FA;
}
.helpHighlight:hover{
    text-decoration: underline;
}
</style>
