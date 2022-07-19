@extends('main.other_master')
@section('OtherPage')

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
                    <div class="ts-overlay-style featured-post owl-carousel" id="featured-slider-5">

                        @foreach($sliders as $row)
                            <div class="item" style="background-image:url({{ asset($row->image) }})">
                                <div class="overlay-post-content">
                                    <div class="post-content">
                                        <h2 class="post-title lg">
                                            <a href="{{ URL::to('/SpecialPost/'.$row->slug) }}">
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
                                        <div class="ts-post-thumb">
                                            <a href="{{ URL::to('/SpecialPost/'.$row->slug) }}">
                                                <img class="img-fluid" src="{{ asset($row->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="{{ URL::to('/SpecialPost/'.$row->slug) }}">
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
                    @if($adsHome[12]->type == 13 && $adsHome[12]->status == 1)
                        <a href="{{ $adsHome[12]->link }}" target="_blank">
                            <div class="col-md-12 mb-20"
                                 style="background-color: #f59a9a; height: 224px; background-image: url({{ asset($adsHome[12]->ads )}}); background-repeat: round;  background-size: cover;">
                            </div>
                        </a>
                    @endif

                    <div class="" style="text-align: -webkit-center; text-align: -moz-center">
                        @if($adsHome[13]->type == 14 && $adsHome[13]->status == 1)
                            <a href="{{ $adsHome[13]->link }}" target="_blank">
                                <div class="col-md-12 mb-20 mt-1"
                                     style="background-color: #f59a9a; height: 132px; width: 918px; background-image: url({{ asset($adsHome[13]->ads )}}); background-repeat: round;  background-size: cover;"></div>
                            </a>
                        @endif
                        @if($adsHome[14]->type == 15 && $adsHome[14]->status == 1)
                            <a href="{{ $adsHome[14]->link }}" target="_blank">
                                <div class="col-md-12 mb-20 mt-1"
                                     style="background-color: #f59a9a; height: 132px; width: 918px; background-image: url({{ asset($adsHome[14]->ads )}}); background-repeat: round;  background-size: cover;"></div>
                            </a>
                        @endif
                        @if($adsHome[15]->type == 16 && $adsHome[15]->status == 1)
                            <a href="{{ $adsHome[15]->link }}" target="_blank">
                                <div class="col-md-12 mb-20 mt-1"
                                     style="background-color: #f59a9a; height: 132px; width: 918px; background-image: url({{ asset($adsHome[15]->ads )}}); background-repeat: round;  background-size: cover;"></div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-wrapper hot-topics-item">
        <div class="container">
            <div class="row">
                {{--<div class="col-lg-9">
                    <div class="ts-heading clearfix">
                        <h2 class="ts-title float-left">
                            Popüler Haberler
                        </h2>
                    </div>

                    <div class="row">
                        @foreach($randoms as $row)
                            <div class="col-4">
                                <div class="ts-grid-box ts-grid-content">
                                    <a class="post-cat ts-orange-bg"
                                       href="{{ URL::to('Special/'.$row->id.'/'.$row->slug) }}">{{ $row->category_tr }}</a>
                                    <div class="ts-post-thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset($row->image) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="{{ URL::to('/SpecialPost/'.$row->slug) }}">
                                                {{ $row->title_tr }}
                                            </a>
                                        </h3>
                                        <span class="post-date-info">
										<i class="fa fa-clock-o"></i> {{ $row->post_date }}
									</span>
                                    </div>
                                </div>
                                <!-- ts grid box-->
                            </div>
                        @endforeach
                    </div>
                    <!-- row end-->
                </div>--}}
                <!-- col end-->
                {{--<div class="col-lg-3">
                    <!-- widgets end-->
                    @if($adsHome[17]->type == 18 && $adsHome[17]->status == 1)
                        <div class="widgets widgets-item widget-banner">
                            <a href="{{ $adsHome[17]->link }}">
                                <img class="img-fluid" src=" {{ asset($adsHome[17]->ads) }}" alt="">
                            </a>
                        </div>
                    @endif
                    <!-- widgets end-->
                    @if($adsHome[18]->type == 19 && $adsHome[18]->status == 1)
                        <div class="widgets ts-grid-box widgets-populer-post border">
                            <div class="item">
                                <div class="ts-post-thumb">
                                    <a href="{{ $adsHome['18']->link }}">
                                        <img class="img-fluid" src=" {{ asset($adsHome[18]->ads) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>--}}
                <div class="col-md-12 mt-4">
                    @if($adsHome[16]->type == 17 && $adsHome[16]->status == 1)
                        <a href="{{ $adsHome[16]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 224px; background-image: url({{ asset($adsHome[16]->ads) }}); background-repeat: round;  background-size: cover;">
                            </div>
                        </a>
                    @endif
                    @if($adsHome[19]->type == 20 && $adsHome[19]->status == 1)
                        <a href="{{ $adsHome[19]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 224px; margin-top: 5px; background-image: url({{ asset($adsHome[19]->ads) }}); background-repeat: round;  background-size: cover;">
                            </div>
                        </a>
                    @endif
                    @if($adsHome[20]->type == 21 && $adsHome[20]->status == 1)
                        <a href="{{ $adsHome[20]->link }}" target="_blank">
                            <div
                                style="background-color: #f59a9a; height: 224px; background-image: url({{ asset($adsHome[20]->ads) }}); background-repeat: round;  background-size: cover;">
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
