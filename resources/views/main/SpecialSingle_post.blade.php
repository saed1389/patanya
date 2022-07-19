@extends('main.other_master')
@section('OtherPage')

    <script type="text/javascript"
            src="https://platform-api.sharethis.com/js/sharethis.js#property=62cfd45c987470001990b4f5&product=inline-share-buttons"
            async="async"></script>

    <section class="block-wrapper p-30 section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2" style="padding-right: 0">
                    @if($adsHome[3]->type == 4 && $adsHome[3]->status == 1)
                        <a href="{{ $adsHome[3]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 316px; margin-bottom: 5px; background-image: url({{ asset($adsHome[3]->ads) }}); background-repeat: round;  background-size: cover;  ">
                            </div>
                        </a>
                    @endif
                    @if($adsHome[4]->type == 5 && $adsHome[4]->status == 1)
                        <a href="{{ $adsHome[4]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 316px; background-image: url({{ asset($adsHome[4]->ads) }}); background-repeat: round;  background-size: cover;">
                            </div>
                        </a>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="col-md-6" style="float: right; padding-left: 5px; padding-right: 0 ">
                        @if($adsHome[2]->type == 3 && $adsHome[2]->status == 1)
                            <a href="{{ $adsHome[2]->link }}" target="_blank">
                                <div
                                    style="background-color: #f59a9a ;height: 98px; background-image: url({{ asset($adsHome[2]->ads) }}); background-repeat: round;  background-size: cover;">
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-6 pb-3" style="padding-left: 0px; padding-right: 5px">
                        @if($adsHome[1]->type == 2 && $adsHome[1]->status == 1)
                            <a href="{{ $adsHome[1]->link }}" target="_blank">
                                <div
                                    style="background-color: #f59a9a; height: 98px; background-image: url({{ asset($adsHome[1]->ads) }}); background-repeat: round;  background-size: cover;">
                                </div>
                            </a>
                        @endif
                    </div>
                    <h2 class="text-center" style="font-size: 20px">
                        @if(session()->get('lang') == 'english')
                            {{$post->title_en}}
                        @elseif(session()->get('lang') == 'turkish')
                            {{$post->title_tr}}
                        @elseif(session()->get('lang') == 'russian')
                            {{$post->title_ru}}
                        @endif
                    </h2>

                    <div class="text-center">
                        @if(session()->get('lang') == 'english')
                            {!! Str:: limit($post->details_en, 100) !!}
                        @elseif(session()->get('lang') == 'turkish')
                            {!!Str:: limit($post->details_tr, 100)!!}
                        @elseif(session()->get('lang') == 'russian')
                            {!!  Str:: limit($post->details_ru,  100)!!}
                        @endif
                    </div>

                    <div>
                        {{ $post->post_date }}
                    </div>

                    <div class="text-center mb-3">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>

                    <div class="ts-overlay-style featured-post owl-carousel" id="featured-slider-5">
                        <div class="item" style="background-image:url({{ asset($post->image) }})">
                            <div class="overlay-post-content">
                                <div class="post-content">
                                    <h2 class="post-title lg">
                                        <a href="javascript: void (0)">

                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 pt-3" style="padding-right: 0; padding-left: 0">
                        @if($adsHome[7]->type == 8 && $adsHome[7]->status == 1)
                            <a href="{{$adsHome[7]->link}}" target="_blank">
                                <div
                                    style="background-color: #f59a9a; height: 132px;background-image: url( {{ asset($adsHome[7]->ads) }} ); background-repeat: round;  background-size: cover;">
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-12 pt-1" style="padding-right: 0; padding-left: 0">
                        @if($adsHome[8]->type == 9 && $adsHome[8]->status == 1)
                            <a href="{{$adsHome[8]->link}}" target="_blank"></a>
                            <div
                                style="background-color: #f59a9a; height: 132px;background-image: url( {{ asset($adsHome[8]->ads) }} ); background-repeat: round;  background-size: cover;">
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12 pt-1" style="padding-right: 0; padding-left: 0">
                        @if($adsHome[9]->type == 10 && $adsHome[9]->status == 1)
                            <a href="{{ $adsHome[9]->link }}" target="_blank">
                                <div
                                    style="background-color: #f59a9a; height: 132px;background-image: url( {{ asset($adsHome[9]->ads) }} ); background-repeat: round;  background-size: cover;">
                                </div>
                            </a>
                        @endif
                    </div>

                </div>
                <div class="col-md-2" style="padding-left: 0">
                    @if($adsHome[5]->type == 6 && $adsHome[5]->status == 1)
                        <a href="{{ $adsHome[5]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 316px; margin-bottom: 5px;background-image: url( {{ asset($adsHome[5]->ads) }} ); background-repeat: round;  background-size: cover; ">
                            </div>
                        </a>
                    @endif
                    @if($adsHome[6]->type == 7 && $adsHome[6]->status == 1)
                        <a href="{{ $adsHome[6]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 316px;background-image: url( {{ asset($adsHome[6]->ads) }} ); background-repeat: round;  background-size: cover; ">
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="single-post-wrapper post-layout-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        @if(session()->get('lang') == 'english')
                            {!! $post->details_en !!}
                        @elseif(session()->get('lang') == 'turkish')
                            {!! $post->details_tr !!}
                        @elseif(session()->get('lang') == 'russian')
                            {!! $post->details_ru !!}
                        @endif
                    </div>
                    @if($post->images != null)
                        <div class="mt-1 text-center">
                            <div class="images-preview-div">
                                @php
                                    $imagesA = explode('|', $post->images);
                                @endphp
                                @foreach($imagesA as $item)
                                    <img src="{{ URL::to($item) }}" class="img-ovarlay" alt="">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if($post->video != null)
                        <div class="single-big-img img-ovarlay mb-30 mt-3"
                             style="background-image: url({{asset($post->image)}})">
                            <a href="{{ $post->video }}" class="ts-video-btn">
                                <i class="fa fa-play-circle-o"></i>
                            </a>
                        </div>
                    @endif

                </div>
                <div class="col-9">
                    <div class="comments-form ts-grid-box">
                        <h3 class="comment-reply-title">Yurum Ekle</h3>
                        <form role="form" class="ts-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" placeholder="İsim ve Soyisim"
                                               type="text" required="">
                                    </div>
                                    <!-- form group end-->
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" placeholder="E-Posta"
                                               type="email" required="">
                                    </div>
                                    <!-- form group end-->
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Website" type="text" required="">
                                    </div>
                                    <!-- form group end-->
                                </div>
                                <!-- Col end -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control msg-box" id="message" placeholder="Yorum"
                                                  rows="10" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- Form row end -->
                            <div class="clearfix">
                                <button class="comments-btn btn btn-success pull-right" style="border-radius: 8px;"
                                        type="submit">Gönder
                                </button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                </div>

                <div class="col-3">
                    @if($adsHome[10]->type == 11 && $adsHome[10]->status == 1)
                        <div class="widgets widgets-item widget-banner">
                            <a href="{{ $adsHome[10]->link }}" target="_blank">
                                <img class="img-fluid" src=" {{ asset($adsHome[10]->ads) }}" alt="">
                            </a>
                        </div>
                    @endif
                    <!-- widgets end-->
                    @if($adsHome[11]->type == 12 && $adsHome[11]->status == 1)
                        <div class="widgets ts-grid-box widgets-populer-post border">
                            <div class="item">
                                <div class="ts-post-thumb">
                                    <a href="{{ $adsHome['11']->link }}" target="_blank">
                                        <img class="img-fluid" src=" {{ asset($adsHome[11]->ads) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-12 mt-4">
                    @if($adsHome[12]->type == 13 && $adsHome[12]->status == 1)
                        <a href="{{ $adsHome[12]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 224px; background-image: url({{ asset($adsHome[12]->ads) }}); background-repeat: round;  background-size: cover;">
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="owl-stage-outer">

        </div>
    </section>
    <hr>

    <section class="block-wrapper hot-topics-item">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="col-lg-6 col-md-6 pull-right">
                        @if($adsHome[13]->type == 14 && $adsHome[13]->status == 1)
                            <a href="{{ $adsHome[13]->link }}" target="_blank">
                                <div
                                    style="background-color: #f59a9a; height: 98px; width: 456px; background-image: url({{ asset($adsHome[13]->ads) }}); background-repeat: round;  background-size: cover;">
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6" style="text-align: -webkit-right; text-align: -moz-right">
                        @if($adsHome[14]->type == 15 && $adsHome[14]->status == 1)
                            <a href="{{ $adsHome[14]->link }}" target="_blank">
                                <div
                                    style="background-color: #f59a9a; height: 98px; width: 456px; background-image: url({{ asset($adsHome[14]->ads) }}); background-repeat: round;  background-size: cover;">
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    @if($adsHome[15]->type == 16 && $adsHome[15]->status == 1)
                        <a href="{{ $adsHome[15]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 224px; background-image: url({{ asset($adsHome[15]->ads) }}); background-repeat: round;  background-size: cover;">
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
