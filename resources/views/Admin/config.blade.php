@extends('Admin.layout2')

@section('title')
<title>Configuración del servicio medico</title>
@stop

@section('css')
    <link href="/Template/css/lib/charts-c3js/c3.min.css" rel="stylesheet" type="text/css">
@stop

@section('popUp')

<div class="modal fade bd-example-modal-sm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="windowTitle">¿Desea editar?</h4>
            </div>
            {!!Form::open(array('method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input type="password" class="form-control" value="" name="clave">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-danger" formaction="" id="formButton">Editar datos</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->

<div class="box-typical">
    <header class="widgets-header">
        <div class="container-fluid">
            <div class="tbl tbl-outer">
                <div class="tbl-row">
                
                    <div class="tbl-cell">
                        <div class="tbl tbl-item">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <div class="title">Alumnos con documentos completos: {{$students->where('documentacion', 1)->count()}}</div>
                                    <div class="amount-sm">Total de alumnos: {{$students->count()}}</div>
                                </div>
                                <div class="tbl-cell tbl-cell-progress">
                                    <div class="circle-progress-bar-typical size-56 pieProgress"
                                            role="progressbar" data-goal="{{$students->where('documentacion', 1)->count()}}"
                                            data-barcolor="#24B500"
                                            data-barsize="10"
                                            aria-valuemin="0"
                                            aria-valuemax="{{$students->count()}}">
                                        <span class="pie_progress__number">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!--tbl tbl-item-->
                    </div> <!--tbl-cell-->
                    
                    <div class="tbl-cell">
                        <div class="tbl tbl-item">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <div class="title">Alumnos asegurados por UPIIZ-IPN: {{$medicalDatas->where('proveedorSeguro', 1)->count()}}</div>
                                    <div class="amount-sm">Alumnos asegurados por padres: {{$medicalDatas->where('proveedorSeguro', 2)->count()}}</div>
                                    <div class="amount-sm">Alumnos asegurados por trabajo: {{$medicalDatas->where('proveedorSeguro', 3)->count()}}</div>
                                </div>
                                <div class="tbl-cell tbl-cell-progress">
                                    <div class="circle-progress-bar-typical size-56 pieProgress"
                                            role="progressbar" data-goal="{{$medicalDatas->where('proveedorSeguro', 1)->count()}}"
                                            data-barcolor="#AA3167"
                                            data-barsize="10"
                                            aria-valuemin="0"
                                            aria-valuemax="{{$medicalDatas->count()}}">
                                        <span class="pie_progress__number">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!--tbl tbl-item-->
                    </div> <!--tbl-cell-->
                    
                </div> <!--tbl-row-->
            </div> <!--tbl tbl-outer-->
        </div> <!--container fluid-->
    </header>
</div>

<div class="container-fluid">
    
@include('alerts.formError')
    
<div class="row">

    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Carreras registradas en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar carreras', 1);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                    <div id="pie-chart1"></div> 
                </div>
                <div class="tab-pane" id="w-1-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($carrer as $c)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                            {{$c->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$c->students->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-1-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Estados registrados en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar estados', 2);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-2-tab-1" role="tabpanel">
                    <div id="pie-chart2"></div> 
                </div>
                <div class="tab-pane" id="w-2-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($state as $s)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                            {{$s->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$s->students->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-2-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
</div>
    
    
<!--     --------------------------------------------------------------------------------- -->
    
    <div class="row">
        
        <div class="col-lg-4 col-md-6">

        <section class="widget">
            <header class="widget-header-dark with-btn">
                Carreras registradas en el sistema
                    <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="updateInputs('Agregar nueva carrera');">
                        <i class="font-icon font-icon-pencil"></i>
                    </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                    <center>
                        <div id="pie-chart"></div>   
                    </center>
                </div>
                <div class="tab-pane" id="w-1-tab-2" role="tabpanel">
                    <center>
                    
                            <div class="pre-scrollable">
                                <table class="table table-hover">
                                    <tbody>
                                        @foreach($carrer as $c)
                                        <tr>
                                            <td class="table-check">
                                                <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                {{$c->nombre}}
                                            </td>
                                            <td class="table-check">
                                                <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                                {{$c->students->count()}}
                                            </td>
                                            <td class="table-check">
                                                <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs('A editar:<br/>{{$c->nombre}}');">
                                                            <span class="font-icon font-icon-pencil"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                           
                    </center>
=======
            <section class="widget">
                <header class="widget-header-dark with-btn">
                    Carreras registradas en el sistema
                        <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="updateForms(1, 'Editar carreras');">
                            <i class="font-icon font-icon-pencil"></i>
                        </button>
                </header>
                <div class="tab-content widget-tabs-content">
                    <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                        <center>
                        <div id="pie-chart1"></div>  
                        <header class="widget-header-dark with-btn">
                            Carreras registradas en el sistema
                                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="updateForms(2, 'Editar estados');">
                                    <i class="font-icon font-icon-pencil"></i>
                                </button>
                        </header>
                    <div class="tab-pane" id="w-1-tab-2" role="tabpanel">
                                <center>
                                    <div id="pie-chart1"></div>  
                                </center>
                                <div class="pre-scrollable">
                                    <table class="table table-hover">
                                        <tbody>
                                            @foreach($carrer as $c)
                                            <tr>
                                                <td class="table-check">
                                                    <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                    {{$c->nombre}}
                                                </td>
                                                <td class="table-check">
                                                    <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                                    {{$c->students->count()}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            
                        </center>
                    </div>
                </div>
                <div class="widget-tabs-nav bordered">
                    <ul class="tbl-row" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#w-1-tab-1" role="tab">
                                <i class="font-icon font-icon-chart-3"></i>
                                Gráfica
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab">
                                <i class="font-icon font-icon-notebook-lines"></i>
                                Lista
                            </a>
                        </li>
                    </ul>

                </div>
            </section><!--.widget-->
        </div>
        
        <div class="col-lg-4 col-md-6">
            <section class="widget">
                <header class="widget-header-dark with-btn">
                    Estados registradas en el sistema
                        <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="updateForms(2, 'Editar estados');">
                            <i class="font-icon font-icon-pencil"></i>
                        </button>
                </header>
                <div class="tab-content widget-tabs-content">
                    <div class="tab-pane active" id="w-1-tab-3" role="tabpanel">
                        <center>
                            <div id="pie-chart2"></div>  
                        </center>
                    </div>
                    <div class="tab-pane" id="w-1-tab-4" role="tabpanel">
                        <center>
                        
                                <div class="pre-scrollable">
                                    <table class="table table-hover">
                                        <tbody>
                                            @foreach($state as $s)
                                            <tr>
                                                <td class="table-check">
                                                    <div class="font-11 color-blue-grey-lighter uppercase">Estado</div>
                                                    {{$s->nombre}}
                                                </td>
                                                <td class="table-check">
                                                    <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                                    {{$s->students->count()}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            
                        </center>
                    </div>
                </div>
                <div class="widget-tabs-nav bordered">
                    <ul class="tbl-row" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#w-1-tab-3" role="tab">
                                <i class="font-icon font-icon-chart-3"></i>
                                Gráfica
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-4" role="tab">
                                <i class="font-icon font-icon-notebook-lines"></i>
                                Lista
                            </a>
                        </li>
                    </ul>
                </div>
            </section><!--.widget-->
        </div>
        
    </div>
</div>

<div class="row">
    @foreach($status as $s)
    <div class="col-lg-3">
        <section class="widget widget-simple-sm-fill 
        @if($s->id == 1)
            blue
        @elseif($s->id == 2)
            red
        @elseif($s->id == 3)
            purple
        @elseif($s->id == 4)
            orange
        @elseif($s->id == 5)
            green
        @endif">
            <div class="widget-simple-sm-icon">
                {{$s->students->count()}}
            </div>
            <div class="widget-simple-sm-fill-caption">{{$s->nombre}}s</div>
        </section><!--.widget-simple-sm-fill-->
    </div>
    @endforeach
</div>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->



<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-3 col-md-6">
        
        <section class="widget">
                <header class="widget-header-dark with-btn">
                    Time is Money!
                    <a href="/admin">
                        <button type="button" class="widget-header-btn"><i class="font-icon font-icon-del"></i></button>
                    </a>s
                </header>
                <div class="tab-content widget-tabs-content">
                    <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                        <div class="circle-progress-bar-typical pieProgress"
                                role="progressbar" data-goal="79"
                                data-barcolor="#00a8ff"
                                data-barsize="10"
                                aria-valuemin="0"
                                aria-valuemax="100">
                            <span class="pie_progress__number">0%</span>
                        </div>
                    </div>
                    <div class="tab-pane" id="w-1-tab-2" role="tabpanel">
                        <center>Tasks</center>
                    </div>
                    <div class="tab-pane" id="w-1-tab-3" role="tabpanel">
                        <center>Event</center>
                    </div>
                </div>
                <div class="widget-tabs-nav bordered">
                    <ul class="tbl-row" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#w-1-tab-1" role="tab">
                                <i class="font-icon font-icon-chart-3"></i>
                                Chart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab">
                                <i class="font-icon font-icon-notebook-lines"></i>
                                Tasks
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-3" role="tab">
                                <i class="font-icon font-icon-pin"></i>
                                Event
                            </a>
                        </li>
                    </ul>
                </div>
            </section><!--.widget-->
        
        <section class="widget widget-time">
            <header class="widget-header-dark with-btn">
                Time is Money!
                <button type="button" class="widget-header-btn">
                    <i class="font-icon font-icon-plus"></i>
                </button>
            </header>
            <div class="widget-time-content">
                <div class="count-item">
                    <div class="count-item-number">05</div>
                    <div class="count-item-caption">hour</div>
                </div>
                <div class="count-item divider">:</div>
                <div class="count-item">
                    <div class="count-item-number">24</div>
                    <div class="count-item-caption">min</div>
                </div>
                <div class="count-item divider">:</div>
                <div class="count-item">
                    <div class="count-item-number">19</div>
                    <div class="count-item-caption">sec</div>
                </div>
            </div>
        </section><!--.widget-time-->
        
        	<section class="widget widget-pie-chart">
						<div class="no-padding">
							<div class="tbl tbl-grid text-center">
								<div class="tbl-row">
									<div class="tbl-cell tbl-cell-30">
										<div class="display-inline">
											<div class="chart-legend">
												<div class="circle red"></div>
												<div class="percent">8%<sup>14</sup></div>
												<div class="caption">TBK</div>
											</div>
											<div class="chart-legend">
												<div class="circle orange"></div>
												<div class="percent">41%<sup>134</sup></div>
												<div class="caption">Fluor Group</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-30">
										<div class="display-inline">
											<div class="chart-legend">
												<div class="circle purple"></div>
												<div class="percent">12%<sup>22</sup></div>
												<div class="caption">Fluor Corp</div>
											</div>
											<div class="chart-legend">
												<div class="circle blue"></div>
												<div class="percent">39%<sup>115</sup></div>
												<div class="caption">Bechtel</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-40">
										<div class="ggl-pie-chart-container">
											<div id="donutchart" class="ggl-pie-chart"></div>
											<div class="ggl-pie-chart-title">
												<div class="caption">Total</div>
												<div class="number">285</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-pie-chart-->

					<section class="widget widget-pie-chart">
						<div class="no-padding">
							<div class="tbl tbl-grid">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="ggl-pie-chart-container">
											<div id="donutchart2" class="ggl-pie-chart"></div>
											<div class="ggl-pie-chart-title">
												<div class="caption">Files</div>
												<div class="number">218</div>
											</div>
										</div>
									</div>
									<div class="tbl-cell tbl-cell-340px">
										<div class="col">
											<div class="chart-box-info">
												<div class="number">218</div>
												<div class="caption">Files</div>
											</div>
										</div>
										<div class="col">
											<div class="chart-box-info">
												<div class="number">715</div>
												<div class="caption">Gigabytes</div>
											</div>
										</div>
										<div class="chart-legend-tbl">
											<div class="title">Legend:</div>
											<div class="tbl">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-legend">
														<div class="dot orange"></div>
														Culminate <span class="color-blue-grey-lighter">(74 files)</span>
													</div>
													<div class="tbl-cell tbl-cell-value">283GB</div>
												</div>
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-legend">
														<div class="dot green"></div>
														Mountly <span class="color-blue-grey-lighter">(74 files)</span>
													</div>
													<div class="tbl-cell tbl-cell-value">23GB</div>
												</div>
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-legend">
														<div class="dot red"></div>
														Other <span class="color-blue-grey-lighter">(74 files)</span>
													</div>
													<div class="tbl-cell tbl-cell-value">173GB</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-pie-chart-->
        
        <section class="widget widget-chart-combo">
						<div class="widget-chart-combo-header">
							<div class="widget-chart-combo-header-left">
								<select class="select2 select2-white">
									<option>All Segments</option>
									<option>All Segments</option>
									<option>All Segments</option>
									<option>All Segments</option>
								</select>
							</div>
							<div class="widget-chart-combo-header-right">
								<input type="text" class="form-control" value="1 Jan 2015 – 1 Jan 2016">
								<button type="button" class="btn btn-grey">Reset</button>
							</div>
						</div>
						<div class="widget-chart-combo-content">
							<div class="widget-chart-combo-content-in">
								<div class="widget-chart-combo-content-title">Net New Conversions Over Time</div>
								<div id="chart_div" class="chart"></div>
								<ul class="chart-legend-list">
									<li>
										<div class="dot purple"></div>
										Culminate
									</li>
									<li>
										<div class="dot blue"></div>
										Mountly
									</li>
								</ul>
							</div>
						</div>
						<div class="widget-chart-combo-side">
							<div class="tbl">
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">2739</div>
										Records Deployed
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">1049</div>
										Won Records
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">4,8%</div>
										Conversion Rate
									</div>
								</div>
								<div class="tbl-row">
									<div class="tbl-cell">
										<div class="number">12,1</div>
										Average Activity
									</div>
								</div>
							</div>
						</div>
					</section><!--.widget-chart-combo-->
        
            <section class="widget">
                <header class="widget-header-dark">
                    Tasks Completed
                </header>
                <div class="tab-content widget-tabs-content">
                    <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                        <div class="circle-progress-bar-typical pieProgress"
                                role="progressbar" data-goal="79"
                                data-barcolor="#00a8ff"
                                data-barsize="10"
                                aria-valuemin="0"
                                aria-valuemax="100">
                            <span class="pie_progress__number">0%</span>
                        </div>
                    </div>
                    <div class="tab-pane" id="w-1-tab-2" role="tabpanel">
                        <center>Tasks</center>
                    </div>
                    <div class="tab-pane" id="w-1-tab-3" role="tabpanel">
                        <center>Event</center>
                    </div>
                </div>
                <div class="widget-tabs-nav bordered">
                    <ul class="tbl-row" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#w-1-tab-1" role="tab">
                                <i class="font-icon font-icon-chart-3"></i>
                                Chart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab">
                                <i class="font-icon font-icon-notebook-lines"></i>
                                Tasks
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-3" role="tab">
                                <i class="font-icon font-icon-pin"></i>
                                Event
                            </a>
                        </li>
                    </ul>
                </div>
            </section><!--.widget-->
        </div>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="row">
        <div class="col-xs-6">
            <section class="widget widget-simple-sm-fill">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-facebook"></i>
                </div>
                <div class="widget-simple-sm-fill-caption">98K Likes</div>
            </section>
        </div><!--.widget-simple-sm-fill-->
        <div class="col-xs-6">
            <section class="widget widget-simple-sm-fill red">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-server"></i>
                </div>
                <div class="widget-simple-sm-fill-caption">3 Servers</div>
            </section>
        </div><!--.widget-simple-sm-fill-->
    </div><!--.row-->

    <div class="row">
        <div class="col-xs-6">
            <section class="widget widget-simple-sm-fill green">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-facebook"></i>
                </div>
                <div class="widget-simple-sm-fill-caption">98K Likes</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
        <div class="col-xs-6">
            <section class="widget widget-simple-sm-fill orange">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-server"></i>
                </div>
                <div class="widget-simple-sm-fill-caption">3 Servers</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
    </div><!--.row-->

    <div class="row">
        <div class="col-xs-6">
            <section class="widget widget-simple-sm-fill purple">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-facebook"></i>
                </div>
                <div class="widget-simple-sm-fill-caption">98K Likes</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
        <div class="col-xs-6">
            <section class="widget widget-simple-sm-fill grey">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-server"></i>
                </div>
                <div class="widget-simple-sm-fill-caption">3 Servers</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
    </div><!--.row-->

    <div class="row">
        <div class="col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-cloud-download color-green"></i>
                </div>
                <div class="widget-simple-sm-bottom">98K Likes</div>
            </section><!--.widget-simple-sm-->
        </div>
        <div class="col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-bookmark color-purple"></i>
                </div>
                <div class="widget-simple-sm-bottom">
                    <a href="#">760 Bookmarks</a>
                </div>
            </section><!--.widget-simple-sm-->
        </div>
    </div><!--.row-->

    <div class="row">
        <div class="col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-twitter color-blue"></i>
                </div>
                <div class="widget-simple-sm-bottom">35K Followers</div>
            </section><!--.widget-simple-sm-->
        </div>
        <div class="col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-wp color-black-blue"></i>
                </div>
                <div class="widget-simple-sm-bottom">
                    <a href="#">15 Themes</a>
                </div>
            </section><!--.widget-simple-sm-->
        </div>
    </div><!--.row-->
</div>

@stop

@section('subHead')
@stop

@section('content')
Hola
@stop

@section('scripts')
    <script src="/Template/js/lib/d3/d3.min.js"></script>
    <script src="/Template/js/lib/charts-c3js/c3.min.js"></script>
    <script src="/Template/js/custom/configEdit.js"></script>
    
    <script>
        $(document).ready(function() {
            console.log(11);
            var pieChart = c3.generate({
            bindto: '#pie-chart1',
                data: {
                    columns: [
                        <?php 
                            foreach($carrer as $c){
                                echo '["'.$c->nombre.'", '.$c->students->count().'],';
                            }
                        ?>
                    ],
                    type : 'pie'
                }
            });
            var pieChart = c3.generate({
            bindto: '#pie-chart2',
                data: {
                    columns: [
                        <?php 
                            foreach($state as $s){
                                if($s->students->count() > 0){
                                    echo '["'.$s->nombre.'", '.$s->students->count().'],';
                                }
                            }
                        ?>
                    ],
                    type : 'pie'
                }
            });
            
        });
    </script>
    
@stop
