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
                        <div class="tbl-cell tbl-cell-title">
                            <h1>Contact us</h1>
                            <ul class="contacts-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#tab-contact-1" role="tab" data-toggle="tab" class="active">France</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-contact-2" role="tab" data-toggle="tab">USA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-contact-3" role="tab" data-toggle="tab">Singapore</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tbl-cell tbl-cell-actions">
                            <button type="button" class="action-btn action-btn-expand">
                                <i class="font-icon font-icon-expand"></i>
                            </button>
                        </div>
                    </div>
                </header>

                <div class="tab-content">
                    <div role="tabpanel" class="clearfix tab-pane active" id="tab-contact-1">
                        <div class="contacts-page-col-left">
                            <div class="contacts-page-col-left-in">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14715.613330488675!2d-102.5699755!3d22.768968450000003!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1495770735358" width="1423" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Connect</header>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-twitter"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-linkedin"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-google-plus"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-instagram"></i>
                                </a>
                            </section>
                            <form class="contacts-page-section">
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
                                <button type="submit" class="btn btn-rounded">Send</button>
                            </form>
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Other way</header>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                            </section>
                        </div><!--.contacts-page-col-right-->
                    </div><!--.tab-pane-->

                    <div role="tabpanel" class="clearfix tab-pane" id="tab-contact-2">
                        <div class="contacts-page-col-left">
                            <div class="contacts-page-col-left-in">
                                <div id="map_canvas_2" class="map" style="height: 583px;"></div>
                            </div><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Connect</header>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-twitter"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-linkedin"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-google-plus"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-instagram"></i>
                                </a>
                            </section>
                        </div><!--.contacts-page-col-right-->
                    </div><!--.tab-pane-->

                    <div role="tabpanel" class="clearfix tab-pane" id="tab-contact-3">
                        <div class="contacts-page-col-left">
                            <div class="contacts-page-col-left-in">
                                <div id="map_canvas_3" class="map" style="height: 583px;"></div>
                            </div><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Connect</header>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-twitter"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-linkedin"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-google-plus"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-instagram"></i>
                                </a>
                            </section>
                            <form class="contacts-page-section">
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
                                <button type="submit" class="btn btn-rounded">Send</button>
                            </form>
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Other way</header>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
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
