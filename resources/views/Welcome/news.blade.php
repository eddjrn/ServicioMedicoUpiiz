@extends('layout')

@section('title')
<title>Noticias Servicio Medico</title>
@stop

@section('css')
@stop

@section('subHead')

@stop

@section('content')

<div class="container-fluid">
         
<div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="cstm-video-player" style="background-image: url('img/player-photo-b.jpg');">
                        <div class="cstm-video-player-hover">
                            <i class="font-icon font-icon-play"></i>
                        </div>
                        <div class="cstm-video-player-controls">
                            <div class="cstm-video-player-progress">
                                <div class="downloaded" style="width:75%"></div>
                                <div class="played" style="width:35%"></div>
                            </div>
                            <div class="cstm-video-player-controls-left">
                                <button type="button" class="cstm-video-player-btn">
                                    <i class="font-icon font-icon-play"></i>
                                </button>
                                <button type="button" class="cstm-video-player-btn">
                                    <i class="font-icon font-icon-player-next"></i>
                                </button>
                                <button type="button" class="cstm-video-player-btn">
                                    <i class="font-icon font-icon-player-sound"></i>
                                </button>
                            </div>
                            <div class="cstm-video-player-controls-right">
                                <button type="button" class="cstm-video-player-btn">
                                    <i class="font-icon font-icon-player-subtitres"></i>
                                </button>
                                <button type="button" class="cstm-video-player-btn">
                                    <i class="font-icon font-icon-player-settings"></i>
                                </button>
                                <button type="button" class="cstm-video-player-btn">
                                    <i class="font-icon font-icon-player-wide-screen"></i>
                                </button>
                                <button type="button" class="cstm-video-player-btn">
                                    <i class="font-icon font-icon-player-full-screen"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-grid-col">
                    <article class="card-typical">
                        <div class="card-typical-section">
                            <div class="user-card-row">
                                <div class="tbl-row">
                                    <div class="tbl-cell tbl-cell-photo">
                                        <a href="#">
                                            <img src="Template/img/avatar-sign.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tbl-cell">
                                        <p class="user-card-row-name"><a href="#">Tim Colins</a></p>
                                        <p class="color-blue-grey-lighter">3 days ago - 23 min read</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-typical-section card-typical-content">
                            <header class="title"><a href="#">The Jacobs Ladder of coding</a></header>
                            <p>That’s a great idea! I’m sure we could start this project as soon as possible. Let’s meet tomorow! That’s a great idea! I’m sure we could start this project as soon as possible. Let’s meet tomorow! </p>
                        </div>
                       
                    </article><!--.card-typical-->
                </div>

              
</div>
@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
