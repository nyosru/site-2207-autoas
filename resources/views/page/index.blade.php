@extends('layouts.app')


@section('js')
    @parent
    {{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js1/index-carusel.js') }}"></script>
    {{-- <script src="{{ mix('js/all-index.js') }}"></script> --}}
@endsection

@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ mix('page-index.css') }}" />
    {{-- <style></style> --}}
@endsection




@section('content')

    <div id="gallery_up">
        @foreach ($up_banners as $banner)
            {{ $banner->img }}
            {{-- <img src="https://avto-as.ru/sites/kl2009asavto/download/module_items_image/{{ $banner->img }}"> --}}
            <img src="/news_image/{{ $banner->img }}">
        @endforeach
    </div>

    @if (1 == 1)

        <style>
            .item_name_vitrin img {
                background-image: url('/assets/pleasewait.gif');
                background-position: center center;
                background-repeat: no-repeat;
                min-height: 85px;
                min-width: 85px;
                border: none;
            }
        </style>

        @for ($g = 1; $g <= 4; $g++)

            <br />
            <br />

            <div class="carousel{{ $g }}">

                {{-- {% for i in ii[g] %} --}}

                @foreach ($items_start_preview[$g] as $i)
                    <div>

                        {{-- {% include constant('dir_site_tpl')~'body-carusel22-item.htm' %} --}}
                        @include('page-index-gallery-item')
                        {{-- <pre>{{ print_r($i) }}</pre> --}}
                    </div>

                    {{-- {% endfor %} --}}

                @endforeach

            </div>

        @endfor

    @endif

@endsection
