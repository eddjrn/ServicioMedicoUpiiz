@extends('layout')

@section('title')
<title>Contactos Servicio Medico</title>
@stop

@section('css')
@stop

@section('subHead')
<header>
    <h1>Contáctanos</h1>
</header>
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d20809.89660178715!2d-102.60623722765413!3d22.77633583635612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x86824e896598899f%3A0xa1491d46396ca8b4!2sPlaza+Bicentenario%2C+Blvd.+Adolfo+L%C3%B3pez+Mateos%2C+Zacatecas+Centro%2C+98000+Zacatecas%2C+Zac.!3m2!1d22.769448!2d-102.5719039!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUnidad+Profesional+Interdisciplinaria+de+Ingenier%C3%ADa+Campus+Zacatecas%2C+Cerro+del+Gato+Ejido+la+Escondida%2C+Col.+Ciudad+Administrativa%2C+Boulevard+El+Bote+S%2FN%2C+98160+Zacatecas%2C+Zac.!3m2!1d22.7839529!2d-102.61572989999999!5e0!3m2!1ses!2smx!4v1496174150865" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Contactos en redes sociales:</header>
                                <a href="https://www.facebook.com/verodelarosa.medicaupiiz" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                                <!--<a href="#" class="contact">
                                    <i class="font-icon font-icon-linkedin"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-google-plus"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-instagram"></i>
                                </a>-->
                            </section>
                            <!--<form class="contacts-page-section">
                                <header class="box-typical-header-sm">Send Message</header>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-Mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                                </div>
                                
                            </form>-->
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Correo y teléfonos:</header>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                            </section>
                        </div><!--.contacts-page-col-right-->
                    </div><!--.tab-pane-->
                </div><!--.tab-content-->
            </section><!--.box-typical-->
        </div>
@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
