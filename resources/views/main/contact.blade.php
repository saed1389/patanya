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

                    <div class="text-center mt-3">
                        <h1>İLETİŞİM BİLGİLERİMİZ</h1>
                    </div>

                    <div class="col-12 text-center">
                        <img src="{{ asset('image/Vector.png') }}" alt=""> Haber Merkezi
                        <p>
                            +90 533 834 97 07 <br>
                            +90 533 834 97 07
                        </p>
                        <img src="{{ asset('image/Vector.png') }}" alt=""> Yazı İşleri Müdürü
                        <p>
                            Münevver Çağın <br>
                            +90 533 834 97 07
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <img src="{{ asset('image/Vector.png') }}" alt=""> Dijital Yayınlar Koordinatörü
                        <p>

                            Münevver Çağın <br>
                            +90 533 834 97 07
                        </p>
                        <img src="{{ asset('image/Vector.png') }}" alt="">  Reklam Müdürü
                        <p>

                            Münevver Çağın <br>
                            +90 533 834 97 07
                        </p>
                    </div>
                    <img src="{{ asset('image/map1.jpg') }}" class="img-thumbnail" alt="">

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
@endsection
