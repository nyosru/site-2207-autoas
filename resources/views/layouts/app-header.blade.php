<header>

    <div class="topbar-mobile hidden-lg hidden-md">
        <div class="right-nav">
            <div class="active-mobile search-popup pull-right">
                <div class="search-popup dropdown" data-toggle="modal" data-target="#myModal"><i
                        class="ion-search fa-3a"></i></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="top-nav hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="left-nav">
                        <div class="location dropdown"><span class="icon"><i class="ion-ios-location"
                                    aria-hidden="true"></i></span><span>Тюмень</span></div>
                        <div class="language dropdown"><span class="icon"><i class="ion-ios-world-outline"
                                    aria-hidden="true"></i></span><span>Русский</span></div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="right-nav">
                        <ul>
                            <li><i class="ion-log-in fa-1a" aria-hidden="true"></i>
                                г.Тюмень, ул.Пархоменко, 54
                            </li>
                        </ul><a href="tel://+73452560333"><span class="phone">
                                8(3452)560-333
                            </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-8 col-xs-7 logo text-center"><a href="/show/" title="Авто-АС">
                        {{-- <!-- <img src="/sites/kl2009asavto/download/logo_new.svg" alt="Авто-АС" style="max-width:100%; max-height: 200px; margin: 0 auto;" > --> --}}
                        <img {{-- src="/sites/kl2009asavto/download/img/logo7.jpg" --}} src="{{ asset('assets/img/logo7.jpg') }}" alt="Авто-АС"
                            style="max-width:100%; max-height: 100px; margin: 0 auto;">
                    </a></div>
                <div class="col-md-6 hidden-sm col-xs-5 hidden-xs nextlogo text-center"
                    xstyle="border: 1px solid gray;"><br>
                    <center>
                        <form action="{{ route('shop.search') }}" class="search-form" method="POST">
                            @csrf
                        <input type="text" name="search"
                                value="{{ $search ?? '' }}"
                                class="text-center form-control"
                                placeholder="поиск по названию или артикулу детали">
                                {{-- <input type="hidden" name="level"
                                value="show"> --}}
                                <button type="submit" class="search-icon"></button>
                        </form>
                    </center>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5 nextlogo">
                    <div class="block block-2">
                        <div class="cart" id="cart">
                            <a href="/shop/cart/" title="" id="label3" class="dropdown-toggle"
                                xdata-toggle="dropdown" role="button" xaria-haspopup="true" xaria-expanded="false">
                                <div class="photo photo-cart"><img src="{{ asset('assets/img/cart.png') }}"
                                        alt="images" class="img-reponsive"><span
                                        class="lbl number-shopping-cart">0</span>
                                </div>
                                <p class="inform inform-cart"><span class="strong">Корзина<br></span></p>
                            </a></div>
                    </div>
                    <div class="block block-1"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-4 col-xs-6 column-left">
                    <aside id="column-left">
                        @include('layouts.app-header-menu')
                    </aside>
                </div>

                <div class="col-md-9 col-sm-6 col-xs-6 column-right">
                    <aside id="column-right">
                        <div class="collapse navbar-collapse v2" id="myNavbar">
                            <ul class="menubar v2">
                                <li class=""><a href="/about/">О компании</a></li>
                                <li class=""><a href="/post/">Доставка</a></li>
                                <li class=""><a href="/contact/">Контакты</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</header>
