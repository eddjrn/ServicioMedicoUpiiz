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
        <div class="col-lg-2 col-md-2 col-xs-12 helpHighlight">
            <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
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
            <input type="text" id="status{{$student['id']}}" readonly class="form-control @if($student['estatus_id'] == 1)
                {{$statusStyle[0]}}
            @elseif($student['estatus_id'] == 2)
                {{$statusStyle[1]}}
            @elseif($student['estatus_id'] == 3)
                {{$statusStyle[2]}}
            @elseif($student['estatus_id'] == 4)
                {{$statusStyle[3]}}
            @elseif($student['estatus_id'] == 5)
                {{$statusStyle[4]}}
            @endif" value="{{\App\status::find($student['estatus_id'])->nombre}}" style="word-wrap: break-word;">
        </div>
        <div class="col-lg-1 col-md-2 col-xs-6">
            <div class="font-11 color-blue-grey-lighter uppercase">Documentación</div>
            <div class="text-center">
                <button type="button"
                        class="btn btn-inline btn-sm @if($student['documentacion'] == 1)
                            btn-success
                        @elseif($student['documentacion'] == 2)
                            btn-danger
                        @endif"
                        title="Documentación"
                        data-container="body"
                        data-toggle="popover"
                        data-placement="top"
                        data-content="{{\App\student::find($student['id'])->documentation()}}" id="buttonDoc{{$student['id']}}">
                        @if($student['documentacion'] == 1)
                            <span class="font-icon font-icon-ok" id="spanDoc{{$student['id']}}"></span>
                        @elseif($student['documentacion'] == 2)
                            <span class="font-icon font-icon-del" id="spanDoc{{$student['id']}}"></span>
                        @endif
                </button>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-xs-6">
            <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
            <button type="button"
                class="btn btn-inline btn-sm btn-primary"
                data-toggle="modal"
                data-target=".bd-example-modal-sm" onclick="updateInputs({{$student['id']}},'{{$user}}',{{$student['estatus_id']}},{{$student['documentacion']}})" id="edit{{$student['id']}}"><span class="font-icon font-icon-pencil"></span></button>
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
        $('[data-toggle="popover"]').popover({ trigger: "focus, hover" }); //Activa los Popovers en la vista de jquery (.load()) por que los desactiva por defecto
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
