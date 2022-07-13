<footer>
    <div class="top-footer">
        <div class="container">
            <div class="row ">
                <div class="col-md-3 col-xs-12 text-center">
                    <div class="photo" xstyle="padding-top: 3rem;">
                        <a href="/show/">
                            <img src="{{ asset('assets/img/logo2.png') }}" alt="Авто-АС" class="img-responsive"
                                loading="lazy"
                                style="max-height: 100px;">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="widget-info">
                        <ul>
                            <li>
                                <p class="title-contain"><i class="ion-ios-location fa-4" aria-hidden="true"></i>
                                    <a href="/contacts/">г.Тюмень, ул.Пархоменко, 54 </a>
                                </p>
                            </li>
                            <li class="clearfix"></li>
                            <li>
                                <p class="title-contain">
                                    <i class="ion-ios-telephone fa-4" aria-hidden="true"></i><a
                                        href="tel://+73452560333">8(3452)560-333</a>
                                </p>
                            </li>
                            <li class="clearfix"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 pd-left hidden-xs hidden-sm">

                    {{-- <pre>{{ print_r($menu) }}</pre> --}}

                    {{-- @foreach( $menu as $k => $v ) --}}
                    @foreach( $menu as $k => $v )
                    {{-- @foreach( $menu as $v ) --}}
                        @if( isset($v['menu-bottom']) && $v['menu-bottom'] === true )
                            <a href="/{{ $k ?? 'x' }}/" style="display:block; margin-bottom: 5px;">{{ $v['name'] }}</a>
                        @endif
                    @endforeach

                    {{-- <a href="/10.about/" style="display:block; margin-bottom: 5px;">О компании</a>
                    <a href="/50.posted/" style="display:block; margin-bottom: 5px;">Доставка</a>
                    <a href="/contacts/" style="display:block; margin-bottom: 5px;">Контакты</a>
                    <a href="/docs_konf/" style="display:block; margin-bottom: 5px;">Политика
                        конфеденциальности</a>
                    <a href="/docs_oferta/" style="display:block; margin-bottom: 5px;">Оферта</a>
                    <a href="/docs_vozvrat/" style="display:block; margin-bottom: 5px;">Возврат</a> --}}

                </div>
                <div class="col-xs-12 col-sm-12 hidden-md hidden-lg nidden-xl text-center">
                    <p class="title-contain"><a href="#">г.Тюмень, ул.Пархоменко, 54 </a>
                        <br>
                        <a href="tel://+73452560333">
                            8(3452)560-333
                        </a>
                    </p><br>
                    <a href="/10.about/" style="display:block; margin-bottom: 5px;">О компании</a>
                    <a href="/50.posted/"
                        style="display:block; margin-bottom: 5px;">Доставка</a>
                        <a href="/contacts/"
                        style="display:block; margin-bottom: 5px;">Контакты</a>
                        <a href="/docs_konf/"
                        style="display:block; margin-bottom: 5px;">Политика
                        конфеденциальности</a>
                        <a href="/docs_oferta/"
                        style="display:block; margin-bottom: 5px;">Оферта</a>
                        <a href="/docs_vozvrat/"
                        style="display:block; margin-bottom: 5px;">Возврат</a>
                        <br><br>
                </div>


                    <style>
                        .footer_icons {
                            text-align: center;
                        }
                        .footer_icons img {
                            width: 36px;
                            margin-right: 7px;
                        }
                    </style>

                <div class="col-md-2 col-xs-12 footer_icons">

                    {{-- <ul class="social"> --}}
                    {{-- <li> --}}
                    <a href="https://vk.com/avto_as" target="_blank" title="VK">
                        <img src="{{ asset('assets/img/vk04.png') }}"
                        loading="lazy">
                    </a>
                    {{-- </li>
                    <li> --}}
                    <a href=" https://www.instagram.com/avto.as.shop/" target="_blank" title="insta">
                        <img src="{{ asset('assets/img/instagram.png') }}"
                        loading="lazy">
                    </a>
                    {{-- </li>
                    <li> --}}
                    <a href="https://wa.me/79292696191" target="_blank" title="WhatsApp">
                        <img src="{{ asset('assets/img/wa.png') }}"
                        loading="lazy">
                    </a>
                    {{-- </li> --}}
                    {{-- </ul> --}}
                </div>



            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-lg-4 text-center"><span><a href="/" title=""
                            style="color:#6c6c6c;">Авто-АС
                            <font style="font-weight: normal;">
                                © 2008 - {{ date('Y') }}
                                <br>
                                Внимательность к деталям!
                            </font>
                        </a>
                    </span>
                </div>
                <div class="col-xs-12 col-sm-3 col-lg-4 text-center">
                    <img src="{{ asset('assets/img/visa.png') }}" alt="images"
                    {{-- xclass="img-responsive" --}}
                    loading="lazy"
                        style="margin-right:10px;"
                        ><img src="{{ asset('assets/img/mastercard.png') }}" alt="images"
                        loading="lazy"
                        {{-- xclass="img-responsive" --}}
                        >
                </div>
                <div class="col-xs-12 col-sm-3 col-lg-4 text-center"><span><a href="//php-cat.com" target="_blank"
                            title="Создание сайта в Тюмени" style="color:#6c6c6c;">PHP-CAT.com<br>
                            <font style="font-weight: normal;">создание сайтов для работы с данными</font>
                        </a></span></div>
            </div>
        </div>
    </div>
</footer>
