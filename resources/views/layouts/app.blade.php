{{-- {% spaceless %} --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>1122 Авто-АС запчасти, расходники, лампы и масла в Тюмени</title>

    {{-- <link rel="stylesheet" href="{{ mix('assets/css/bootstrap.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"> --}}

    {{-- {# <link rel="stylesheet" href="{{ asset('css/slick.css"> #} --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"> --}}

    {{-- <link rel="stylesheet" href="{{ mix('assets/css/owl.carousel.min.css') }}"> --}}
    {{-- {# <link rel="stylesheet" href="{{ asset('css/style.css?210520"> --> #} --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}

    <link rel="stylesheet" href="{{ asset('assets/vendor/css.css') }}" />
    <link href="{{ asset('assets/css/all_css.css') }}" rel="stylesheet">

    <!--[if IE]>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <![endif]-->

    {{-- {#	<link rel="icon" type="image/jpeg" href="{{ asset('logo.jpg" /> #} --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/logo47.png') }}" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">


    {{-- @yield('style') --}}
    @section('style')
        <style>
        </style>
    @show

</head>


{{-- {# скрыть показать меню товаров#} --}}
{{-- {# корзина товаров и оформление заказа #} --}}

{{-- {% if get.option is defined and get.option == 'cart' %}
{% set show_menu = false %}
{% else %}
{% set show_menu = true %}
{% endif %} --}}

<body>

    {{-- @yield('body-up') --}}

    @include('layouts.preloader')

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Поиск комплектующих, запчастей по названию или номеру</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <form method="get" class="searchform" action="/index.php" role="search">
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



    @include('layouts.app-header')

    <div style="min-height:50vh;">
        @section('content')
            <h3>произошла неописуемая ситуация</h3>
        @show
    </div>

    @include('layouts.app-footer')


    {{-- <!-- /Yandex.Metrika counter --> --}}
    @section('script')
        @parent
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
    @endsection
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/66586201" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    {{-- <!-- /Yandex.Metrika counter --> --}}




    {{-- <script type="text/javascript" src="/sites/kl2009asavto/download/js/bootstrap.min.js" crossorigin="anonymous"></script> --}}
    {{-- ___scripts_3______scripts_4______scripts_5______scripts_6______scripts_7______scripts_8___ --}}


    @if (1 == 2)
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
        <div id="vk_community_messages" style="position: absolute; padding-bottom: 120px;"></div>
        @section('script')
            @parent
            <script type="text/javascript">
                setTimeout(() => {
                    VK.Widgets.CommunityMessages("vk_community_messages", 25381804, {
                        expandTimeout: "500000",
                        tooltipButtonText: "Есть вопрос?"
                    });
                }, 15000)
            </script>
        @endsection
    @endif

</body>

{{-- {# // <script type="text/javascript" src="{{ asset('js/jquery.js" crossorigin="anonymous"></script> #} --}}
<script type="text/javascript" src="https://yastatic.net/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js1/main-menu.js') }}"></script>

{{-- <script src="{{ asset('assets/js/main.js') }}" ></script> --}}
{{-- <link rel="stylesheet" type="text/css" media="all" href="/vendor/didrive_mod/shop0/1/css.css"> --}}

{{-- <script src="/vendor/didrive/base/js.js"></script>
<script src="/vendor/didrive_mod/items/3/glob.js.js"></script>
<script src="/vendor/didrive_mod/shop0/1/glob.js.js"></script> --}}

{{-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="/vendor/didrive/libs/js/numberformat.js"></script> --}}

{{-- <script src="{{ mix('js/all.js') }}"></script> --}}

{{-- @yield('script') --}}

{{-- @section('script')
@show --}}

@section('js')
@show

</html>
