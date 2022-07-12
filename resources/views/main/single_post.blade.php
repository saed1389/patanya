@extends('main.home_master')
@section('content')

    <style>
        .resp-sharing-button__link,
        .resp-sharing-button__icon {
            display: inline-block
        }

        .resp-sharing-button__link {
            text-decoration: none;
            color: #fff;
            margin: 0.5em
        }

        .resp-sharing-button {
            border-radius: 5px;
            transition: 25ms ease-out;
            padding: 0.5em 0.75em;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif
        }

        .resp-sharing-button__icon svg {
            width: 1em;
            height: 1em;
            margin-right: 0.4em;
            margin-top: 5px;
            vertical-align: top
        }

        .resp-sharing-button--small svg {
            margin: 0;
            vertical-align: middle
        }

        /* Non solid icons get a stroke */
        .resp-sharing-button__icon {
            stroke: #fff;
            fill: none
        }

        /* Solid icons get a fill */
        .resp-sharing-button__icon--solid,
        .resp-sharing-button__icon--solidcircle {
            fill: #fff;
            stroke: none
        }

        .resp-sharing-button--twitter {
            background-color: #55acee
        }

        .resp-sharing-button--twitter:hover {
            background-color: #2795e9
        }

        .resp-sharing-button--pinterest {
            background-color: #bd081c
        }

        .resp-sharing-button--pinterest:hover {
            background-color: #8c0615
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998
        }

        .resp-sharing-button--facebook:hover {
            background-color: #2d4373
        }

        .resp-sharing-button--tumblr {
            background-color: #35465C
        }

        .resp-sharing-button--tumblr:hover {
            background-color: #222d3c
        }

        .resp-sharing-button--reddit {
            background-color: #5f99cf
        }

        .resp-sharing-button--reddit:hover {
            background-color: #3a80c1
        }

        .resp-sharing-button--google {
            background-color: #dd4b39
        }

        .resp-sharing-button--google:hover {
            background-color: #c23321
        }

        .resp-sharing-button--linkedin {
            background-color: #0077b5
        }

        .resp-sharing-button--linkedin:hover {
            background-color: #046293
        }

        .resp-sharing-button--email {
            background-color: #777
        }

        .resp-sharing-button--email:hover {
            background-color: #5e5e5e
        }

        .resp-sharing-button--xing {
            background-color: #1a7576
        }

        .resp-sharing-button--xing:hover {
            background-color: #114c4c
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366
        }

        .resp-sharing-button--whatsapp:hover {
            background-color: #1da851
        }

        .resp-sharing-button--hackernews {
            background-color: #FF6600
        }

        .resp-sharing-button--hackernews:hover, .resp-sharing-button--hackernews:focus {
            background-color: #FB6200
        }

        .resp-sharing-button--vk {
            background-color: #507299
        }

        .resp-sharing-button--vk:hover {
            background-color: #43648c
        }

        .resp-sharing-button--facebook {
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .resp-sharing-button--facebook:hover,
        .resp-sharing-button--facebook:active {
            background-color: #2d4373;
            border-color: #2d4373;
        }

        .resp-sharing-button--twitter {
            background-color: #55acee;
            border-color: #55acee;
        }

        .resp-sharing-button--twitter:hover,
        .resp-sharing-button--twitter:active {
            background-color: #2795e9;
            border-color: #2795e9;
        }

        .resp-sharing-button--email {
            background-color: #777777;
            border-color: #777777;
        }

        .resp-sharing-button--email:hover,
        .resp-sharing-button--email:active {
            background-color: #5e5e5e;
            border-color: #5e5e5e;
        }

        .resp-sharing-button--whatsapp {
            background-color: #25D366;
            border-color: #25D366;
        }

        .resp-sharing-button--whatsapp:hover,
        .resp-sharing-button--whatsapp:active {
            background-color: #1DA851;
            border-color: #1DA851;
        }

        .resp-sharing-button--telegram {
            background-color: #54A9EB;
        }

        .resp-sharing-button--telegram:hover {
            background-color: #4B97D1;
        }

    </style>

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

                    <div class="text-center">
                        <!-- Sharingbutton Facebook -->
                        <a class="resp-sharing-button__link"
                           href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io"
                           target="_blank" rel="noopener" aria-label="Facebook">
                            <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--medium">
                                <div aria-hidden="true"
                                     class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M18.77 7.5H14.5V5.6c0-.9.6-1.1 1-1.1h3V.54L14.17.53C10.24.54 9.5 3.48 9.5 5.37V7.5h-3v4h3v12h5v-12h3.85l.42-4z"/>
                                    </svg>
                                </div>
                                Facebook
                            </div>
                        </a>

                        <!-- Sharingbutton Twitter -->
                        <a class="resp-sharing-button__link"
                           href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io"
                           target="_blank" rel="noopener" aria-label="Twitter">
                            <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium">
                                <div aria-hidden="true"
                                     class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M23.4 4.83c-.8.37-1.5.38-2.22.02.94-.56.98-.96 1.32-2.02-.88.52-1.85.9-2.9 1.1-.8-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.04.7.12 1.04-3.78-.2-7.12-2-9.37-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.73-.03-1.43-.23-2.05-.57v.06c0 2.2 1.57 4.03 3.65 4.44-.67.18-1.37.2-2.05.08.57 1.8 2.25 3.12 4.24 3.16-1.95 1.52-4.36 2.16-6.74 1.88 2 1.3 4.4 2.04 6.97 2.04 8.36 0 12.93-6.92 12.93-12.93l-.02-.6c.9-.63 1.96-1.22 2.57-2.14z"/>
                                    </svg>
                                </div>
                                Twitter
                            </div>
                        </a>

                        <!-- Sharingbutton E-Mail -->
                        <a class="resp-sharing-button__link"
                           href="mailto:?subject=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;body=http%3A%2F%2Fsharingbuttons.io"
                           target="_self" rel="noopener" aria-label="E-Mail">
                            <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--medium">
                                <div aria-hidden="true"
                                     class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M23.5 18c0 .8-.7 1.5-1.5 1.5H2c-.8 0-1.5-.7-1.5-1.5V6c0-.8.7-1.5 1.5-1.5h20c.8 0 1.5.7 1.5 1.5v12zm-3-9.5L12 14 3.5 8.5m0 7.5L7 14m13.5 2L17 14"/>
                                    </svg>
                                </div>
                                E-Mail
                            </div>
                        </a>

                        <!-- Sharingbutton WhatsApp -->
                        <a class="resp-sharing-button__link"
                           href="whatsapp://send?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.%20http%3A%2F%2Fsharingbuttons.io"
                           target="_blank" rel="noopener" aria-label="WhatsApp">
                            <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--medium">
                                <div aria-hidden="true"
                                     class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path stroke-width="1px"
                                              d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z"/>
                                    </svg>
                                </div>
                                WhatsApp
                            </div>
                        </a>

                        <!-- Sharingbutton Telegram -->
                        <a class="resp-sharing-button__link"
                           href="https://telegram.me/share/url?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io"
                           target="_blank" rel="noopener" aria-label="Telegram">
                            <div class="resp-sharing-button resp-sharing-button--telegram resp-sharing-button--medium">
                                <div aria-hidden="true"
                                     class="resp-sharing-button__icon resp-sharing-button__icon--normal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path stroke-width="1.5px"
                                              d="M.707 8.475C.275 8.64 0 9.508 0 9.508s.284.867.718 1.03l5.09 1.897 1.986 6.38a1.102 1.102 0 0 0 1.75.527l2.96-2.41a.405.405 0 0 1 .494-.013l5.34 3.87a1.1 1.1 0 0 0 1.046.135 1.1 1.1 0 0 0 .682-.803l3.91-18.795A1.102 1.102 0 0 0 22.5.075L.706 8.475z"/>
                                    </svg>
                                </div>
                                Telegram
                            </div>
                        </a>
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
                            <div class="images-preview-div"></div>
                        </div>
                    @endif
                    @if($post->video != null)
                        <div class="single-big-img img-ovarlay mb-30"
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



    <script>
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
    </script>
@endsection
