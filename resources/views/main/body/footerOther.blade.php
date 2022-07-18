<!-- footer social list start-->
<section class="ts-footer-social-list section-bg" >
    <div class="container">
        <div class="row" >
            <div class="col-lg-12" style="background-color: #DF6D6C;padding-right: 50px; padding-left: 50px; padding-top: 15px; padding-bottom: 15px;">
                <div class="col-lg-6 pull-right">
                    <a href="" class="btn btn-primary" style="width: 100%;">GENÇLER KONUŞUYOR</a>
                </div>
                <div class="col-lg-6">
                    <a href="" class="btn btn-primary" style="width: 100%">GENÇLER SORUYOR</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer social list end-->
@php
    $category = DB::table('categories')->orderBy('id', 'ASC')->get();
@endphp
    <!-- newslater start -->
<section class="section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
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
            </div>
            <div class="col-lg-8">
                <div class="ts-newslatter-content" style="text-align: end;">
                    <img src="{{ asset('frontend/assets/images/logo/Logo-footer.png') }}" alt="">
                    <div class="nav-menus-wrapper clearfix">
                        <ul class="nav-menu" style="text-align: end">
                            <li><a href="/">ANASAYFA</a></li>
                            <li><a href="{{ route('imprint') }}">KÜNYE</a></li>
                            <li><a href="#">REKLAM</a></li>
                            <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- col end-->

            <div class="col-lg-4 align-self-center" style="border-left: 1px solid">
                <h3>TAKİP ET</h3>
                <div class=" mb-4">
                    <a href="" style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"><i class="fa fa-facebook"></i></a>
                    <a href="" style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"><i class="fa fa-instagram"></i></a>
                    <a href="" style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"><i class="fa fa-twitter"></i></a>
                    <a href="" style="display: inline; border-left: none;padding: 5px 10px 5px 10px; background-color: #f59a9a; color: white"><i class="fa fa-linkedin"></i></a>
                </div>
                <h3>MOBİL UYGULAMALAR</h3>
                <img src="{{ asset('frontend/assets/images/apple.png') }}" alt="">
                <img src="{{ asset('frontend/assets/images/google.png') }}" alt="">
                <br>
                <small>© Tüm Hakları Saklıdır.</small>
            </div>
        </div>
    </div>
</section>
