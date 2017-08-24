@extends('layout')

@section('title')
<title>Contactos Servicio Medico</title>
@stop

@section('css')
@stop

@section('subHead')
Contáctanos
@stop

@section('content')
<div class="container-fluid">
            <section class="box-typical contacts-page">
                <header class="box-typical-header box-typical-header-bordered">
                    <div class="tbl-row">
                        <div class="tbl-cell tbl-cell-title" align="Center">
                            <h1>Ubicación Servicio Médico</h1>
                        </div>
                    </div>
                </header>

                <div class="tab-content">
                    <div role="tabpanel" class="clearfix tab-pane active" id="tab-contact-1">
                        <div class="contacts-page-col-left">
                            <div class="contacts-page-col-left-in">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d1576.23089110793!2d-102.6161092753822!3d22.78330025591424!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUnidad+Profesional+Interdisciplinaria+de+Ingenier%C3%ADa+Campus+Zacatecas!5e1!3m2!1ses!2smx!4v1496070098317" width="100%" height="400"frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <div class="sign-avatar text-center">
                                    <img src="{{asset('/Template/img/LogoSMquestion.svg')}}" alt="" style="height:100px;width:auto;">
                                </div>
                                <hr/>
                                <header class="box-typical-header-sm">Contacto en redes sociales:</header>
                                <a href="https://www.facebook.com/verodelarosa.medicaupiiz" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                            </section>
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Correos y teléfonos:</header>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>medico.upiiz.ipn@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>vdelarosas@ipn.mx</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>01 55 5729 6000</p>
                                <p>Ext. 83520 / 255994</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>92 4 24 19 Ext. 83520</p>
                            </section>
                        </div><!--.contacts-page-col-right-->
                    </div><!--.tab-pane-->
                </div><!--.tab-content-->
            </section><!--.box-typical-->
        </div>
@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
@stop
