{% spaceless %}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Авто-АС запчасти, расходники, лампы и масла в Тюмени</title>

    <link rel="stylesheet" href="{{ sd }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ sd }}css/font-awesome.css">
    <link rel="stylesheet" href="{{ sd }}css/ionicons.min.css">

    {{-- {#
	<link rel="stylesheet" href="{{ sd }}css/slick.css"> #} --}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="{{ sd }}css/slick-theme.css">


    <link rel="stylesheet" href="{{ sd }}css/owl.carousel.min.css">
    {{-- {#
	<!-- <link rel="stylesheet" href="{{ sd }}css/style.css?210520"> --> #} --}}
    <link rel="stylesheet" href="{{ sd }}css/style.css?210602" />

    <!--[if IE]>
                                                      <link rel="shortcut icon" href="{{ sd }}favicon.ico" />
                                                      <![endif]-->
    {{-- {#
	<link rel="icon" type="image/jpeg" href="{{ sd }}logo.jpg" /> #} --}}
    <link rel="icon" type="image/png" href="{{ sd }}logo47.png" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">

    {{-- {# //
	<script type="text/javascript" src="{{ sd }}js/jquery.js" crossorigin="anonymous"></script> #} --}}
    <script type="text/javascript" src="https://yastatic.net/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>

    <style>
        @yield('head-style')
    </style>

</head>


{{-- {# скрыть показать меню товаров#} --}}
{{-- {# корзина товаров и оформление заказа #} --}}

{{-- {% if get.option is defined and get.option == 'cart' %}
{% set show_menu = false %}
{% else %}
{% set show_menu = true %}
{% endif %} --}}

<body>


    <style>
        #loader2 {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.95);
            z-index: 50000;
        }

        #preloader_4 {
            position: relative;
            margin-left: 50%;
            margin-top: 20%;
        }

        #preloader_4 span {
            position: absolute;
            width: 20px;
            height: 20px;
            background: #3498db;
            opacity: 0.5;
            border-radius: 20px;
            -webkit-animation: preloader_4 1s infinite ease-in-out;
            -moz-animation: preloader_4 1s infinite ease-in-out;
            animation: preloader_4 1s infinite ease-in-out;
        }

        #preloader_4 span:nth-child(2) {
            left: 20px;
            -webkit-animation-delay: 0.2s;
            -moz-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        #preloader_4 span:nth-child(3) {
            left: 40px;
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        #preloader_4 span:nth-child(4) {
            left: 60px;
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        #preloader_4 span:nth-child(5) {
            left: 80px;
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        @-webkit-keyframes preloader_4 {
            0% {
                opacity: 0.3;
                -webkit-transform: translateY(0px);
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            }

            50% {
                opacity: 1;
                -webkit-transform: translateY(-10px);
                background: #f1c40f;
                box-shadow: 0 20px 3px rgba(0, 0, 0, 0.05);
            }

            100% {
                opacity: 0.3;
                -webkit-transform: translateY(0px);
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            }
        }

        @-moz-keyframes preloader_4 {
            0% {
                opacity: 0.3;
                -moz-transform: translateY(0px);
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            }

            50% {
                opacity: 1;
                -moz-transform: translateY(-10px);
                background: #f1c40f;
                box-shadow: 0 20px 3px rgba(0, 0, 0, 0.05);
            }

            100% {
                opacity: 0.3;
                -moz-transform: translateY(0px);
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            }
        }

        @keyframes preloader_4 {
            0% {
                opacity: 0.3;
                transform: translateY(0px);
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            }

            50% {
                opacity: 1;
                transform: translateY(-10px);
                background: #f1c40f;
                box-shadow: 0 20px 3px rgba(0, 0, 0, 0.05);
            }

            100% {
                opacity: 0.3;
                transform: translateY(0px);
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            }
        }

    </style>
    <div id="loader2">
        <div id="preloader_4">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    {#{ pa(server) }#}
    {% if server.HTTP_HOST == 'avtoas.dev.uralweb.info' or server.HTTP_HOST == 'avtoas.dev.php-cat.com' %}
    <div style="position:fixed;top: 40vh; background-color: yellow; color: red; padding: 15px; z-index: 999999999; box-shadow: 0 0 20px gray;"
        onclick="$(this).hide();">
        <h3>сайт тестов разработки</h3>
    </div>
    {% endif %}

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Поиск комплектующих, запчастей по названию или номеру</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <form method="get" class="searchform" action="/index.php" role="search">
                            {#<input type="hidden" name="type" value="product">#}
                            <input type="hidden" name="level" value="show">
                            <input type="text" name="search" class="form-control control-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default button_search" type="submit">
                                    <i data-toggle="dropdown" class="ion-ios-search"></i>
                                </button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header>

        {#{% if 1 == 2 %}#}
        {% include constant('dir_site_tpl')~'body_header47.htm' %}
        {#{% endif %}#}

    </header>
    <!-- /header -->

    {% if get.level == 's1' %}
    session
    {{ pa(session) }}
    coockie
    {{ pa(coockie) }}
    {% endif %}


    {% if get.warn_order is defined %}

    <br />
    <br />

    <div class="row">
        <div class="col-12">
            <h3 class="alert xalert-warning text-center"
                style="border: 2px solid red; padding: 10px 20px; color: #334b88;">
                {{ get . warn_order }}
            </h3>
        </div>
    </div>
    {% endif %}


    {# slider #}
    {% if 1 == 1 %}

    {% if
 (
  get.level is defined and get.level != '30.pays' and get.level != '50.posted'
 )
 and
 (
  get.search is not defined
  and
  (
  get.level is defined and
  get.level == 'show' and
  get.option is not defined and
  1 == 1
  )
 )
 %}

    {# get.level != 'docs_oferta' and
 get.level != 'docs_konf' and
 get.level != 'docs_vozvrat' and #}


    <section class="slide" style="max-height: 360px; overflow: hidden;">
        <div class="container">
            <div class="row top-row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    {% if get.level is defined and get.level != 'show' %}
                    <br clear="all" />
                    <div style="height: 5vh;">&nbsp;</div>
                    <br clear="all" />
                    {% endif %}


                    {% set banners = items__get( db, 'banner_up', 'show', 'sort_asc' ) %}
                    {# {{ pa(banners) }} #}
                    {% if banners|length > 0 %}
                    <div class="single-item js-banner1 ">

                        {% for k,banner in banners %}
                        <div class="slide-img">
                            {#<img src="{{ sd }}img/slider/image-slider1.jpg" alt="images" class="img-reponsive"> #}
                            <img src="{{ sd }}module_items_image/{{ banner . img }}" alt="images"
                                class="img-reponsive">
                            <div class="slide-content"></div>

                            {% if banner.link is not empty %}
                            <a href="{{ banner . link }}" class="slide-button">Подробнее</a>
                            {% endif %}

                        </div>
                        {% endfor %}

                    </div>
                    {% endif %}


                </div>
            </div>
        </div>
        <div class="sub-banner"></div>
    </section>

    {% endif %}
    {% endif %}

    {# страница #}
    {% if 1 == 1 %}


    {% if
 get['level'] is defined and
 get['level'] == 'show' and
 get['option'] is not defined
 and get['search'] is not defined
 %}

    {% set ii = get_items_for_carusel(db) %}

    <br />
    <br />
    <div class="container slider2">
        {% for g in range(1,4) %}
        <div class="row">
            <div class="col-12">


                {% if 1 == 2 %}
                <div id="js-carousel-{{ g }}" class="owl-carousel">
                    {% for i in ii[g] %}
                    <div class="carousel-item">
                        {% include constant('dir_site_tpl')~'body-carusel2-item.htm' %}
                    </div>
                    {% endfor %}
                </div>
                {% endif %}


                <div class="js-carousel-{{ g }}">
                    {% for i in ii[g] %}
                    <div>
                        {% include constant('dir_site_tpl')~'body-carusel22-item.htm' %}
                    </div>
                    {% endfor %}
                </div>


            </div>
        </div>
        {% endfor %}

    </div>

    <style>
        .js-carousel-4,
        .js-carousel-3,
        .js-carousel-2,
        .js-carousel-1 {
            margin-top: 30px;
        }

        .js-carousel-4 .slick-slide,
        .js-carousel-3 .slick-slide,
        .js-carousel-2 .slick-slide,
        .js-carousel-1 .slick-slide {
            margin: 10px;
            text-align: center;
        }

        .js-carousel-4 .slick-slide a,
        .js-carousel-3 .slick-slide a,
        .js-carousel-2 .slick-slide a,
        .js-carousel-1 .slick-slide a {
            margin: 10px;
            text-align: center;
            font: 14px / 14px "Poppins", sans-serif;
            color: #6c6c6c;
            font-weight: bold;
        }

        .js-carousel-4 img,
        .js-carousel-3 img,
        .js-carousel-2 img,
        .js-carousel-1 img {
            max-width: 90%;
            max-height: 100px;
        }

        .js-carousel-4 font,
        .js-carousel-3 font,
        .js-carousel-2 font,
        .js-carousel-1 font {
            color: #334b88;
        }

        #js-carousel-1 .carousel-item,
        #js-carousel-2 .carousel-item,
        #js-carousel-3 .carousel-item,
        #js-carousel-4 .carousel-item {
            text-align: center;
            padding-top: 30px;
        }

        #js-carousel-1 .carousel-item img,
        #js-carousel-2 .carousel-item img,
        #js-carousel-3 .carousel-item img,
        #js-carousel-4 .carousel-item img {
            max-width: 100%;
            max-height: 100px;
        }

    </style>

    {% elseif tpl_body is defined %}
    {#{ tpl_body }#}
    {% include tpl_body %}
    {% endif %}

    {% endif %}

    <br clear="all" />
    <div style="height: 10vh;">&nbsp;</div>
    <br clear="all" />



    {{-- <!-- Yandex.Metrika counter --> --}}
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t),
                a = e.getElementsByTagName(t)[0],
                k.async = 1,
                k.src = r,
                a.parentNode.insertBefore(k, a)
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(66586201, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/66586201" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    {{-- <!-- /Yandex.Metrika counter --> --}}





    {{-- {# footer #} --}}
    <footer>
        {{-- {% include constant('dir_site_tpl')~'body.footer47_up.htm' %} --}}
        {{-- {% include constant('dir_site_tpl')~'body.footer47_down.htm' %} --}}
        @include('layouts.footer-top')
        @include('layouts.footer-bottom')
    </footer>








    {{-- {#
	<script type="text/javascript"
		src="//benalman.com/code/projects/jquery-throttle-debounce/jquery.ba-throttle-debounce.js"
		crossorigin="anonymous"></script> #} --}}

    <script type="text/javascript" src="{{ sd }}js/bootstrap.min.js" crossorigin="anonymous"></script>

    {{-- {#
	<script type="text/javascript" src="{{ sd }}js/owl.carousel.min.js" crossorigin="anonymous"></script> #} --}}
    {{-- {# //
	<script type="text/javascript" src="/js/owl/dist/owl.carousel.min.js?2106072013" crossorigin="anonymous"></script>
	#} --}}



    {{-- {% if
	get['level'] is defined
	and get['level'] == 'show'
	and get['option'] is not defined
	and get['search'] is not defined
	%}
	{#
	<script type="text/javascript" src="{{ sd }}js/slick.min.js" crossorigin="anonymous"></script> #}
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="{{ sd }}js/main-carusel2-index.js?2106080066" crossorigin="anonymous"></script>
	{% endif %} --}}



    {{-- {# <script src="http://maps.googleapis.com/maps/api/js"></script> #} --}}
    <script type="text/javascript" src="{{ sd }}js/main.js?2106080165" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ sd }}js/main-menu.js?2106080165" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/vendor/didrive/base/js.lib/jquery.ba-throttle-debounce.min.js"
        crossorigin="anonymous"></script>


    <script type="text/javascript">
        $().ready(function() {
            // console.log(55555555555);
            $('#loader2').hide();
        });
    </script>


    {# вк чат #}
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
    <!-- VK Widget -->
    <div id="vk_community_messages" style="position: absolute; padding-bottom: 120px;"></div>
    <script type="text/javascript">
        setTimeout(() => {
            VK.Widgets.CommunityMessages("vk_community_messages", 25381804, {
                expandTimeout: "500000",
                tooltipButtonText: "Есть вопрос?"
            });
        }, 5000)
    </script>


</body>


@section('script')
@endsection

</html>







































@if (1 == 2)
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>

    </html>
@endif
