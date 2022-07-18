@php
    $category = DB::table('categories')->orderBy('id', 'ASC')->get();
	$social = DB::table('socials')->first();
@endphp
<style>
    .news {
        width: 260px;
        border-radius: 0px 10px 10px 0px;
        display: flex;
        position: relative;
        overflow: hidden;
    }

    .white {
        height: 40px;
        overflow: hidden;
    }

    .scroll {
        display: flex;
        flex-wrap: wrap;
        margin: 0;
        padding: 0;
        z-index: 999;
        animation: vertical-up 10s ease-in-out infinite;
    }

    .scroll li {
        list-style: none;
        display: flex;
        width: 100%;
        line-height: 34px;
        align-items: center;
        padding-left: 25px;
    }

    .scroll li a {
        text-decoration: none;
        color: #323232;
        font-weight: 700;

    }

    .scroll a:hover {
        color: #0d6efd;
    }

    .scroll:hover {
        animation-play-state: paused;
    }

    .dot {
        height: 7px;
        width: 7px;
        margin-left: 3px;
        margin-right: 3px;
        background-color: rgb(207, 23, 23);
        border-radius: 50%;
        display: inline-block;
    }

    @keyframes vertical-up {
        0% {
            margin-top: 0;
        }
        35% {
            margin-top: -30px;
        }
        70% {
            margin-top: -60px;
        }
        100% {
            margin-top: 0;
        }

    }

</style>

<section class="top-bar">
    <div class="">
        <div class="row" style="text-align: center; text-align: -webkit-center">
            <div class="col-lg-12 md-center-item">
                @if($adsHome[0]->type == 1 && $adsHome[0]->status == 1)
                    <a href="" target="_blank">
                        <div style="height: 332px; width: 1440px; background-image: url(
                            {{ asset($adsHome[0]->ads) }}
                            ); background-repeat: no-repeat;  background-size: cover;">
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="header-middle border-top v4" style="padding: 0">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-top: 20px">
                <img src="{{ asset('frontend/assets/images/map.png') }}" style="float: left">
                <p style="font-size: 18px;">K.K.T.C'de Yaşam</p>
                @php
                    $livetv = DB::table('livetvs')->first();
                @endphp
                @if($livetv->status == 1)
                    <a href="{!! $livetv->embed_code !!}" target="_blank" class="btn btn-danger"
                       style="padding-right: 5px; padding-left: 5px; padding-top: 10px; padding-bottom: 10px;">
                        <i>
                            <img src="{{ asset('frontend/assets/images/Vector.png') }}"
                                 style="margin-top: -5px; margin-right: 5px;">
                        </i> Canlı Yayın
                    </a>
                @else
                    <a href="javascript: void (0)" class="btn btn-info" disabled=""
                       style=" background-color: #B2D1ED ;padding-right: 5px; padding-left: 5px; padding-top: 10px; padding-bottom: 10px;">
                        <i>
                            <img src="{{ asset('frontend/assets/images/Vector.png') }}"
                                 style="margin-top: -5px; margin-right: 5px;">
                        </i> Canlı Yayın
                    </a>
                @endif
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="header-logo text-center">
                    <a href="/">
                        <img src="{{ asset('frontend/assets/images/logo/Logo.png') }}" alt="" style="width: 100%">
                    </a>
                </div>
            </div>
            <div class="col-md-3" style="padding-top: 20px">
                <div class="nav-menus-wrapper clearfix" style="transition-property: none;">
                    <span class="nav-menus-wrapper-close-button">✕</span>
                    <ul class=" align-to-right">
                        <li class="header-search align-content-center">
                            <div class="nav-search">
                                <div class="nav-search-button">
                                    <i class="icon icon-search" style="font-size: 20px"></i>
                                </div>
                                <form style="display: none;">
                                    <span class="nav-search-close-button" tabindex="0">✕</span>
                                    <div class="nav-search-inner">
                                        <input type="search" name="search" placeholder="Type and hit ENTER">
                                    </div>
                                </form>
                            </div>
                            <div class="dropdown language" style="float: left">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="background-color: white;padding: 0; padding-top: 20px">
                                    <span class="flag-icon flag-icon-us" style="font-size: 20px"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right text-right language"
                                     style="min-width: 5rem">
                                    <a class="dropdown-item" href="{{ route('lang.english') }}">
                                        <span class="flag-icon flag-icon-us"> </span>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('lang.turkish') }}">
                                        <span class="flag-icon flag-icon-tr"> </span>
                                    </a>
                                    {{-- <a class="dropdown-item" href="{{ route('lang.russian') }}">
                                         <span class="flag-icon flag-icon-ru"> </span>
                                     </a>--}}
                                </div>
                            </div>
                        </li>
                        <li style="display: inline-flex;">
                            <div>
                                @if($social->facebook != null)
                                    <a href="{!! $social->facebook !!}"
                                       style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"
                                       target="_blank"><i class="fa fa-facebook"></i></a>
                                @endif
                                @if($social->instagram != null)
                                    <a href="{!! $social->instagram !!}"
                                       style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"
                                       target="_blank"><i class="fa fa-instagram"></i></a>
                                @endif
                                @if($social->twitter != null)
                                    <a href="{!! $social->twitter !!}"
                                       style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"
                                       target="_blank"><i class="fa fa-twitter"></i></a>
                                @endif
                                @if($social->linkedin != null)
                                    <a href="{!! $social->linkedin !!}"
                                       style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"
                                       target="_blank"><i class="fa fa-linkedin"></i></a>
                                @endif
                                @if($social->youtube != null)
                                    <a href="{!! $social->youtube !!}"
                                       style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"
                                       target="_blank"><i class="fa fa-youtube"></i></a>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<header class="navbar-standerd nav-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navigation ts-main-menu navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="/">
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper clearfix">
                        <ul class="nav-menu">
                            @foreach($category as $row)
                                <li>
                                    <a href="{{ URL::to('pataniya/'.$row->id.'/'.$row->slug) }}">
                                        @if(session()->get('lang') == 'english')
                                            {{ $row->category_en }}
                                        @elseif(session()->get('lang') == 'turkish')
                                            {{ $row->category_tr }}
                                        @elseif(session()->get('lang') == 'russian')
                                        @endif
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-10 pull-left">
                <a href="#" class="btn btn-danger"
                   style="background-color: #DF6D6C; border-color: #DF6D6C; color: white;padding: 13px 30px;margin-left: -4px;">EĞİTİM
                    REHBERİ</a>
                <a href="#" class="btn btn-danger"
                   style="background-color: #E99F9C; border-color: #E99F9C; color: white;padding: 13px 30px;margin-left: -4px;">TURİZM
                    DÜNYASI</a>
                <a href="#" class="btn btn-danger"
                   style="background-color: #B2D1ED; border-color: #B2D1ED; color: white;padding: 13px 30px;margin-left: -4px;">EMLAK
                    DÜNYASI</a>
                <a href="#" class="btn btn-danger"
                   style="background-color: #F4E6A5; border-color: #F4E6A5; color: white;padding: 13px 30px;margin-left: -4px;">SAĞLIK
                    REHBERİM</a>
                <a href="#" class="btn btn-danger"
                   style="background-color: #B8CDDE; border-color: #B8CDDE; color: white;padding: 13px 30px;margin-left: -4px;">SİVİL
                    TOPLUM</a>
            </div>
            <div class="col-lg-2 pull-right">
                asdasd
            </div>
        </div>
    </div>
</header>
<section class="block-wrapper section-bg">
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between bg-white white">
                            <div class="d-flex justify-content-center bg-primary py-2 text-white px-1 news">
                                <span class="d-flex align-items-center">News Update:</span>
                            </div>
                            <ul class="scroll">
                                @php
                                    $headline = DB::table('posts')->where('posts.headline', 1)->limit(3)->get();
                                @endphp
                                @foreach($headline as $row)
                                    <li>
                                        <span class="dot"></span>
                                        <a href="#">
                                            @if(session()->get('lang') == 'english')
                                                {{$row->title_en}}
                                            @elseif(session()->get('lang') == 'turkish')
                                                {{$row->title_tr}}
                                            @elseif(session()->get('lang') == 'russian')
                                                {{$row->title_ru}}
                                            @endif
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
