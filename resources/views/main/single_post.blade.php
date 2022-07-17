@extends('main.home_master')
@section('content')
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=62cfd45c987470001990b4f5&product=inline-share-buttons" async="async"></script>

    <section class="block-wrapper p-30 section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2" style="padding-right: 0">
                    <div
                        style="background-color: #f59a9a; height: 316px; margin-bottom: 5px; background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover;  ">
                    </div>
                    <div
                        style="background-color: #f59a9a; height: 316px; background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-6" style="float: right; padding-left: 5px; padding-right: 0 ">
                        <div
                            style="background-color: #f59a9a ;height: 98px; background-image: url({{ asset('image/r2.jpg') }}); background-repeat: round;  background-size: cover;">

                        </div>
                    </div>
                    <div class="col-md-6 pb-3" style="padding-left: 0px; padding-right: 5px">
                        <div
                            style="background-color: #f59a9a; height: 98px; background-image: url({{ asset('image/r2.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
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
                                        <a href="#">

                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 pt-3" style="padding-right: 0; padding-left: 0">
                        <div
                            style="background-color: #f59a9a; height: 132px;background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                    <div class="col-md-12 pt-1" style="padding-right: 0; padding-left: 0">
                        <div
                            style="background-color: #f59a9a; height: 132px;background-image: url({{ asset('image/r1.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                    <div class="col-md-12 pt-1" style="padding-right: 0; padding-left: 0">
                        <div
                            style="background-color: #f59a9a; height: 132px;background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-left: 0">
                    <div
                        style="background-color: #f59a9a; height: 316px; margin-bottom: 5px;background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover; ">
                    </div>
                    <div
                        style="background-color: #f59a9a; height: 316px;background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover; ">
                    </div>
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
                                        <input class="form-control" name="name" id="name" placeholder="İsim ve Soyisim" type="text" required="">
                                    </div>
                                    <!-- form group end-->
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" placeholder="E-Posta" type="email" required="">
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
                                        <textarea class="form-control msg-box" id="message" placeholder="Yorum" rows="10" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- Form row end -->
                            <div class="clearfix">
                                <button class="comments-btn btn btn-success pull-right" style="border-radius: 8px;" type="submit">Gönder</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                </div>

                <div class="col-3">
                    <div class="widgets widgets-item widget-banner">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/banner/sidebar-banner2.jpg') }}" alt="">
                        </a>
                    </div>
                    <!-- widgets end -->

                    <div class="widgets ts-grid-box widgets-populer-post border">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/news/foods/food7.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div
                        style="background-color: #f59a9a; height: 224px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                    </div>
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
                <div class="col-4">
                    <h3 class="text-center mt-5">SIRADAKİ HABERLER</h3>
                    @php
                    $id = $post->id - 1;
                    $first = DB::table('posts')->where('id' , $id)->first();
                    @endphp
                    <div class="ts-overlay-style featured-post mt-5">
                        <div class="item " >
                            <img src="{{ asset($first->image)}}" alt="" class="img-thumbnail">
                        </div>

                    </div>
                    <h4 class="text-center mt-3" >
                        <a href="{{ URL::to('/post/'.$first->slug) }}" style="color: black">
                            @if(session()->get('lang') == 'english')
                                {{ $first->title_r }}
                            @elseif(session()->get('lang') == 'turkish')
                                {{ $first->title_en }}
                            @elseif(session()->get('lang') == 'russian')
                                {{ $first->title_ru }}
                            @endif
                        </a>
                    </h4>
                </div>
                <div class="col-8">
                    @php
                        $second = DB::table('posts')->inRandomOrder()->limit(6)->get();
                    @endphp
                    <div class="row">
                        @foreach($second as $row)
                        <div class="col-lg-4 col-md-6">
                            <div class="ts-grid-box ts-grid-content">
                                <div class="ts-post-thumb">
                                    <a href="{{ URL::to('/post/'.$first->slug) }}">
                                        <img class="img-fluid" src="{{ asset($row->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="{{ URL::to('/post/'.$first->slug) }}">
                                            @if(session()->get('lang') == 'english')
                                                {!! Str:: limit($row->title_en, 40) !!}
                                            @elseif(session()->get('lang') == 'turkish')
                                                {!! Str:: limit($row->title_tr, 40) !!}
                                            @elseif(session()->get('lang') == 'russian')
                                                {!! Str:: limit($row->title_ru, 40) !!}
                                            @endif

                                        </a>
                                    </h3>
                                    <span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										{{ $row->post_date }}
									</span>
                                </div>
                            </div>
                            <!-- ts grid box-->
                        </div>
                        @endforeach
                        <!-- col end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block-wrapper hot-topics-item">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="col-lg-6 col-md-6 pull-right">
                        <div style="background-color: #f59a9a; height: 98px; width: 456px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" style="text-align: -webkit-right; text-align: -moz-right">
                        <div style="background-color: #f59a9a; height: 98px; width: 456px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div style="background-color: #f59a9a; height: 224px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--<script>
        $(function () {
// Multiple images preview with JavaScript
            var previewImages = function (input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function (event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#images').on('change', function () {
                previewImages(this, 'div.images-preview-div');
            });
        });
    </script>--}}
@endsection
