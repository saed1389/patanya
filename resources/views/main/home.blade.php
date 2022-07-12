@extends('main.home_master')
@section('content')


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
                        @php
                            $slider = DB::table('posts')
                            ->where('first_section_thumbnail', 1)
                            ->orderBy('id', 'desc')
                            ->limit(20)
                            ->get();
                        @endphp

                        @foreach($slider as $row)
                        <div class="item" style="background-image:url({{ asset($row->image) }})">
                            <div class="overlay-post-content">
                                <div class="post-content">
                                    <h2 class="post-title lg">
                                        <a href="#">
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
                <div class="col-md-12 pt-4">
                    <div class="col-md-4 pull-left">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#" class="post-cat ts-purple-bg">Tüm Zamanların En iyi Dizileri</a>
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/news/health/health1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title" style="text-align: center">
                                    <a href="#">Kültür - Sanat</a>
                                </h3>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#" class="post-cat ts-purple-bg">TOLES, 30 Haziran’da DAÜ’de yapılacak</a>
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/news/health/health2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title" style="text-align: center">
                                    <a href="#">Eğitim Rehberi</a>
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#" class="post-cat ts-purple-bg">Turizm sektöründe koronavirüs azalmasıyla ivme kazandı</a>
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/news/health/health3.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title" style="text-align: center">
                                    <a href="#">Turizm Dünyası</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pull-left">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#" class="post-cat ts-purple-bg">TOLES, 30 Haziran’da DAÜ’de yapılacak</a>
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/news/health/health4.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title" style="text-align: center">
                                    <a href="#">Eğitim Rehberi</a>
                                </h3>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#" class="post-cat ts-purple-bg">Kuzey Kore'de yeni bir salgın rastlandığı iddia edildi</a>
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/news/health/health1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title" style="text-align: center">
                                    <a href="#">Emlak Dünyası</a>
                                </h3>
                            </div>
                        </div>

                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#" class="post-cat ts-purple-bg">TOLES, 30 Haziran’da DAÜ’de yapılacak</a>
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/news/health/health2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title" style="text-align: center">
                                    <a href="#">Sağlık Rehberim</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pull-left" style="padding-left: 24px; border-left: 1px solid">
                        <div class="item">
                            <div class="ts-post-thumb" style="background-color: #f59a9a; height: 348px;background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover;">

                            </div>
                        </div>

                        <div class="item">
                            <div class="ts-post-thumb" style="background-color: #f59a9a; height: 348px; background-image: url({{ asset('image/r3.jpg') }}); background-repeat: round;  background-size: cover;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-wrapper mb-45">
        <div class="container">
            <div class="ts-grid-box ts-grid-box-heighlight">
                <h2 class="ts-title"><a href="" style="color: black">Tümü</a></h2>
                <div class="owl-carousel" id="more-news-slider">
                    <div class="ts-overlay-style">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ts-overlay-style">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ts-overlay-style">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ts-overlay-style">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ts-overlay-style">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ts-overlay-style">
                        <div class="item">
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/newspaper.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    @php
        $firstCategory = DB::table('categories')->first();
    @endphp
    <section class="block-wrapper mt-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ts-grid-item mb-20">
                        <div class="clearfix">
                            <h2 class="ts-title float-left uppercase">
                                @if(session()->get('lang') == 'english')
                                    {{ $firstCategory->category_en }}
                                @elseif(session()->get('lang') == 'turkish')
                                    {{ $firstCategory->category_tr }}
                                @elseif(session()->get('lang') == 'russian')
                                    {{ $firstCategory->category_ru }}
                                @endif
                            </h2>
                            <div class="float-right">
                                <a href="#" class="view-all-link">Tümü</a>
                            </div>
                        </div>
                        <div class="row ts-post-style-2">
                            @php
                                $firstCategoryPost = DB::table('posts')->where('category_id', 1)->orderBy('id', 'desc')->limit(6)->get();
                            @endphp
                            @foreach($firstCategoryPost as $row)
                                <div class="col-lg-4 pt-2">
                                    <div class="ts-overlay-style featured-post">
                                        <div class="item " style="background-image:url({{ asset($row->image) }})">
                                            <div class="overlay-post-content">
                                                <div class="post-content">
                                                    <h3 class="post-title md">
                                                        <a href="{{ URL::to('/post/'.$row->slug) }}">
                                                            @if(session()->get('lang') == 'english')
                                                                {{ $row->title_en }}
                                                            @elseif(session()->get('lang') == 'turkish')
                                                                {{ $row->title_tr }}
                                                            @elseif(session()->get('lang') == 'russian')
                                                                {{ $row->title_ru }}
                                                            @endif
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-md-12 mb-20" style="background-color: #f59a9a; height: 224px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">

                    </div>
                    <hr>
                    <div class="ts-grid-item mt-5">
                        <div class=" clearfix">
                            <h2 class="ts-title float-left uppercase">
                                @if(session()->get('lang') == 'english')
                                    TURKEY
                                @elseif(session()->get('lang') == 'turkish')
                                    TÜRKİYE
                                @elseif(session()->get('lang') == 'russian')
                                    ИНДЕЙКА
                                @endif

                            </h2>
                            <div class="float-right">
                                <a href="#" class="view-all-link">Tümü</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="post-list-box ts-list-post-box ts-grid-content">
                                    @php
                                        $firstCategoryPostA = DB::table('posts')->where('category_id', '4')->skip(1)->orderBy('id', 'desc')->limit(2)->get();
                                    @endphp
                                    @foreach($firstCategoryPostA as $row)
                                    <div class="ts-overlay-style mt-2">
                                        <div class="item">
                                            <div class="ts-post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset($row->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="overlay-post-content">
                                                <div class="post-content">
                                                    <h3 class="post-title md">
                                                        <a href="#">
                                                            @if(session()->get('lang') == 'english')
                                                                {{ $row->title_en }}
                                                            @elseif(session()->get('lang') == 'turkish')
                                                                {{ $row->title_tr }}
                                                            @elseif(session()->get('lang') == 'russian')
                                                                {{ $row->title_ru }}
                                                            @endif
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            @php
                            $firstCategoryPostT = DB::table('posts')->where('category_id', '4')->first();
                            @endphp
                            <div class="col-lg-8">
                                <div class="post-list-box ts-list-post-box ts-grid-content">
                                    <div class="ts-overlay-style">
                                        <div class="item">
                                            <div class="ts-post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset($firstCategoryPostT->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="overlay-post-content">
                                                <div class="post-content">

                                                    <h3 class="post-title md">
                                                        <a href="#">
                                                            @if(session()->get('lang') == 'english')
                                                                {{ $firstCategoryPostT->title_en }}
                                                            @elseif(session()->get('lang') == 'turkish')
                                                                {{ $firstCategoryPostT->title_tr }}
                                                            @elseif(session()->get('lang') == 'russian')
                                                                {{ $firstCategoryPostT->title_ru }}
                                                            @endif
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 mb-20 mt-3" style="background-color: #f59a9a; height: 224px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">

                    </div>
                    <hr>
                    <div class="ts-grid-item mt-5">
                        <div class=" clearfix">
                            <h2 class="ts-title float-left uppercase">
                                @if(session()->get('lang') == 'english')
                                    SOUTH CYPRUS
                                @elseif(session()->get('lang') == 'turkish')
                                    GÜNEY KIBRIS
                                @elseif(session()->get('lang') == 'russian')
                                    ЮЖНЫЙ КИПР
                                @endif
                            </h2>
                            <div class="float-right">
                                <a href="#" class="view-all-link">Tümü</a>
                            </div>
                        </div>
                        @php
                            $scCategorySingle = DB::table('posts')->where('category_id', '5')->first();
                        @endphp
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="post-list-box ts-list-post-box ts-grid-content">
                                    <div class="ts-overlay-style">
                                        <div class="item">
                                            <div class="ts-post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset($scCategorySingle->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="overlay-post-content">
                                                <div class="post-content">

                                                    <h3 class="post-title md">
                                                        <a href="#">
                                                            @if(session()->get('lang') == 'english')
                                                                {{ $scCategorySingle->title_en }}
                                                            @elseif(session()->get('lang') == 'turkish')
                                                                {{ $scCategorySingle->title_tr }}
                                                            @elseif(session()->get('lang') == 'russian')
                                                                {{ $scCategorySingle->title_en }}
                                                            @endif
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $scCategoryM = DB::table('posts')->where('category_id', '5')->skip(1)->orderBy('id', 'desc')->limit(2)->get();
                            @endphp
                            <div class="col-lg-4">
                                <div class="post-list-box ts-list-post-box ts-grid-content">
                                    @foreach($scCategoryM as $row)
                                    <div class="ts-overlay-style pt-2">
                                        <div class="item">
                                            <div class="ts-post-thumb">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{ asset($row->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="overlay-post-content">
                                                <div class="post-content">
                                                    <h3 class="post-title md">
                                                        <a href="#">
                                                            @if(session()->get('lang') == 'english')
                                                                {{ $scCategorySingle->title_en }}
                                                            @elseif(session()->get('lang') == 'turkish')
                                                                {{ $scCategorySingle->title_tr }}
                                                            @elseif(session()->get('lang') == 'russian')
                                                                {{ $scCategorySingle->title_en }}
                                                            @endif
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4" style="text-align: -webkit-center; text-align: -moz-center">
            <div class="col-md-8 mt-2">
                <div style="background-color: #f59a9a; height: 132px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
                </div>
            </div>
            <div class="col-md-8 mt-2 ">
                <div style="background-color: #f59a9a; height: 132px; background-image: url({{ asset('image/r1.jpg') }}); background-repeat: round;  background-size: cover;">
                </div>
            </div>
            <div class="col-md-8 mt-2 ">
                <div style="background-color: #f59a9a; height: 132px; background-image: url({{ asset('image/r4.jpg') }}); background-repeat: round;  background-size: cover;">
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
                            YAZARLARIMIZ
                        </h2>

                    </div>

                    <div class="post-list">
                        <p style="color: #D3D3D3">Tüm Yazarlar</p>
                        <!-- ts title end-->
                        <div class="row mb-10" style="justify-content: center;">
                            <div class="col-md-10">
                                <div class="ts-post-thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('frontend/assets/images/news/foods/food11.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end-->
                    <div class="ts-pagination text-center mb-20">
                        <ul class="pagination">
                            <li>
                                <a href="#" style="background-color: #f59a9a;">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" style="background-color: #f59a9a;">
                                    <i class="fa fa-angle-right" ></i>
                                </a>
                            </li>
                        </ul>
                    </div>
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
                </div>
            </div>
        </div>
    </section>
@endsection
