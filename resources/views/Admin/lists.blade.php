@extends('Admin.layout2')

@section('title')
<title>Listas de alumnos</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Listas de todos los alumnos en el sistema
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
                            Carrera
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <span class="font-icon font-icon-build"></span>
                            Estatus
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-contacts"></i>
                            Generación
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-contacts"></i>
                            Asegurado por
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--.tabs-section-nav-->

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1">
            <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <article class="panel">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapseOne"
                            aria-expanded="true"
                            aria-controls="collapseOne">
                            Collapsible Group Item #1
                            <i class="font-icon font-icon-arrow-down"></i>
                        </a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-collapse-in">
                            <div class="user-card-row">
                                <div class="tbl-row">
                                    <div class="tbl-cell tbl-cell-photo">
                                        <a href="#">
                                            <img src="img/photo-64-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="tbl-cell">
                                        <p class="user-card-row-name"><a href="#">Maurico Estrella</a></p>
                                        <p class="user-card-row-location">Associate Creative Director @EF</p>
                                    </div>
                                </div>
                            </div>
                            <header class="title">How a password changed my life</header>
                            <p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
                        </div>
                    </div>
                </article>
                <article class="panel">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <a class="collapsed"
                            data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapseTwo"
                            aria-expanded="false"
                            aria-controls="collapseTwo">
                            Collapsible Group Item #2
                            <i class="font-icon font-icon-arrow-down"></i>
                        </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-collapse-in">
                            <div class="user-card-row">
                                <div class="tbl-row">
                                    <div class="tbl-cell tbl-cell-photo">
                                        <a href="#">
                                            <img src="img/avatar-3-64.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tbl-cell">
                                        <p class="user-card-row-name"><a href="#">Michelle Lewis</a></p>
                                        <p class="user-card-row-location">Company Founder</p>
                                    </div>
                                </div>
                            </div>
                            <header class="title">How a password changed my life</header>
                            <p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
                        </div>
                    </div>
                </article>
                <article class="panel">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <a class="collapsed"
                            data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree">
                            Collapsible Group Item #3
                            <i class="font-icon font-icon-arrow-down"></i>
                        </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-collapse-in">
                            <div class="user-card-row">
                                <div class="tbl-row">
                                    <div class="tbl-cell tbl-cell-photo">
                                        <a href="#">
                                            <img src="img/avatar-2-64.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tbl-cell">
                                        <p class="user-card-row-name"><a href="#">Maurico Estrella</a></p>
                                        <p class="user-card-row-location">Associate Creative Director @EF</p>
                                    </div>
                                </div>
                            </div>
                            <header class="title">How a password changed my life</header>
                            <p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
                        </div>
                    </div>
                </article>
            </section><!--.widget-accordion-->
        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">Tab 2</div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">Tab 4</div><!--.tab-pane-->
    </div><!--.tab-content-->
</section><!--.tabs-section-->
@stop

@section('scripts')
@stop
