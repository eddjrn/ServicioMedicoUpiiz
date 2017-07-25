@extends('layout')

@section('title')
<title>lista servicio medico</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
@stop

@section('content')


<div class="box-typical box-typical-padding">
    <table id="table-edit" class="table table-bordered table-hover">
                <thead>
                <tr>
                    
                    <th>Tipo | Numero | Localidad</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($medicalData->sortByDesc('clinica_id') as $md) 
                    <tr id="1">
                        <td class="tabledit-view-mode">
                        <span class="tabledit-span">{{$md->clinic}}</span></td>
                        @endforeach

                </tbody>

            </table>
</div>
{!!with(new App\Pagination\HDPresenter($medicalData))->render()!!}
@stop

@section('scripts')
@stop
