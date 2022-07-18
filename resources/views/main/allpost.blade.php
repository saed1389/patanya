@extends('main.home_master')
@section('content')
    @php
        $adsHome = DB::table('ads')->get();
    @endphp

    <section class="block-wrapper p-30 section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-2" style="padding-right: 0">
                    <div style="background-color: #f59a9a; height: 316px; margin-bottom: 5px; background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover;  ">
                    </div>
                    <div style="background-color: #f59a9a; height: 316px; background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-6" style="float: right; padding-left: 5px; padding-right: 0 ">
                        <div style="background-color: #f59a9a ;height: 98px; background-image: url({{ asset('image/r2.jpg') }}); background-repeat: round;  background-size: cover;">

                        </div>
                    </div>
                    <div class="col-md-6 pb-3" style="padding-left: 0px; padding-right: 5px">
                        <div style="background-color: #f59a9a; height: 98px; background-image: url({{ asset('image/r2.jpg') }}); background-repeat: round;  background-size: cover;">

                        </div>
                    </div>
                    <div class="ts-overlay-style featured-post owl-carousel" id="featured-slider-5">

                        @foreach($sliders as $row)
                            <div class="item" style="background-image:url({{ asset($row->image) }})">
                                <div class="overlay-post-content">
                                    <div class="post-content">
                                        <h2 class="post-title lg">
                                            <a href="{{ URL::to('/post/'.$row->slug) }}">
                                                @if(session()->get('lang') == 'english')
                                                    {{$row->title_en}}
                                                @elseif(session()->get('lang') == 'turkish')
                                                    {{$row->title_tr}}
                                                @elseif(session()->get('lang') == 'russian')
                                                    {{$row->title_ru}}
                                                @endif
                                            </a>
                                        </h2>
                                        <ul class="post-meta-info">
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                {{ $row->post_date }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ Featured post end -->
                            </div>
                        @endforeach
                    </div>

                    <div class="col-md-12 pt-3" style="padding-right: 0; padding-left: 0">
                        <div style="background-color: #f59a9a; height: 132px;background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                    <div class="col-md-12 pt-1" style="padding-right: 0; padding-left: 0">
                        <div style="background-color: #f59a9a; height: 132px;background-image: url({{ asset('image/r1.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                    <div class="col-md-12 pt-1" style="padding-right: 0; padding-left: 0">
                        <div style="background-color: #f59a9a; height: 132px;background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-left: 0">
                    <div style="background-color: #f59a9a; height: 316px; margin-bottom: 5px;background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover; ">
                    </div>
                    <div style="background-color: #f59a9a; height: 316px;background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover; ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="block-wrapper mt-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ts-grid-item mb-20">
                        <div class="clearfix">
                            <h2 class="ts-title float-left uppercase">
                                @if(session()->get('lang') == 'english')
                                    {{ $category->category_en }}
                                @elseif(session()->get('lang') == 'turkish')
                                    {{ $category->category_tr }}
                                @elseif(session()->get('lang') == 'russian')
                                    {{ $category->category_ru }}
                                @endif
                            </h2>
                        </div>
                        <div class="row">

                        @foreach($allPosts as $row)

                            <div class="col-4">
                                <div class="ts-grid-box ts-grid-content">
                                    <a class="post-cat ts-orange-bg" href="#">Travel</a>
                                    <div class="ts-post-thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset($row->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="{{ URL::to('/post/'.$row->slug) }}">
                                                {{ $row->title_tr }}
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
                            </div>
                        {{ $allPosts->links('pagination_main') }}
                    </div>

                    <div class="col-md-12 mb-20" style="background-color: #f59a9a; height: 224px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">

                    </div>

                    <div class="" style="text-align: -webkit-center; text-align: -moz-center">
                        <div class="col-md-12 mb-20 mt-1" style="background-color: #f59a9a; height: 132px; width: 918px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;"></div>
                        <div class="col-md-12 mb-20 mt-1" style="background-color: #f59a9a; height: 132px; width: 918px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;"></div>
                        <div class="col-md-12 mb-20 mt-1" style="background-color: #f59a9a; height: 132px; width: 918px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-wrapper hot-topics-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="ts-heading clearfix">
                        <h2 class="ts-title float-left">
                            Popüler Haberler
                        </h2>
                    </div>
                    <div class="row">
                        @foreach($randoms as $row)
                            <div class="col-4">
                                <div class="ts-grid-box ts-grid-content">
                                    <a class="post-cat ts-orange-bg" href="#">Travel</a>
                                    <div class="ts-post-thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset($row->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="{{ URL::to('/post/'.$row->slug) }}">
                                                {{ $row->title_tr }}
                                            </a>
                                        </h3>
                                        <span class="post-date-info">
										<i class="fa fa-clock-o"></i>
									</span>
                                    </div>
                                </div>
                                <!-- ts grid box-->
                            </div>
                        @endforeach
                    </div>
                    <!-- row end-->
                </div>
                <!-- col end-->
                <div class="col-lg-3">
                    <!-- widgets end-->
                    <div class="widgets widgets-item widget-banner">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/banner/sidebar-banner2.jpg') }}" alt="">
                        </a>
                    </div>
                    <!-- widgets end-->

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
                    <div style="background-color: #f59a9a; height: 224px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                    </div>
                    <div style="background-color: #f59a9a; height: 224px; margin-top: 5px; background-image: url({{ asset('image/r1.jpg') }}); background-repeat: round;  background-size: cover;">
                    </div>
                    <div style="background-color: #f59a9a; height: 224px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
