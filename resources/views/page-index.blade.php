@extends('layouts.app')


@section('style')
    @parent
    <link rel="stylesheet" href="{{ mix('page-index.css') }}" />
    {{-- <style></style> --}}
@endsection

@section('js')
    @parent
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ assets('assets/js1/index-carusel.js') }}"></script>
    {{-- <script src="{{ mix('js/all-index.js') }}"></script> --}}

@endsection

@section('content')


<section class="slide" style="max-height: 360px; overflow: hidden;">
    <div class="container">
        <div class="row top-row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                {{-- {{ print_r($up_banners) }} --}}
                {{-- {% set banners = items__get( db, 'banner_up', 'show', 'sort_asc' ) %} --}}

                {{-- {# {{ pa(banners) }} #} --}}
                {{-- {% if banners|length > 0 %} --}}
                <div class="single-item js-banner1 ">

                    {{-- {% for k,banner in banners %} --}}
                    @foreach ($up_banners as $banner)

                        <div class="slide-img">

                            {{-- {#<img src="{{ sd }}img/slider/image-slider1.jpg" alt="images" class="img-reponsive"> #} --}}
                            <img src="https://avto-as.ru/sites/kl2009asavto/download/module_items_image/{{ $banner->img }}"
                                alt="images"
                                loading="lazy"
                                class="img-reponsive">

                            {{-- <div class="slide-content"></div>

                            @if (!empty($banner->link))
                                <a href="{{ $banner->link }}" class="slide-button">Подробнее</a>
                            @endif --}}

                        </div>
                        {{-- {% endfor %} --}}

                    @endforeach

                </div>
                {{-- {% endif %} --}}


            </div>
        </div>
    </div>
    <div class="sub-banner"></div>
</section>



<br />
<br />

<div class="container slider2">

    @for ($g = 1; $g <= 4; $g++)
        <div class="row">
            <div class="col-12">

                <div class="js-carousel-{{ $g }}">
                    {{-- {% for i in ii[g] %} --}}
                    @foreach ($items_start_preview[$g] as $i)
                        <div>
                            {{-- {% include constant('dir_site_tpl')~'body-carusel22-item.htm' %} --}}
                            @include('page-index-gellery-item')
                            {{-- <pre>{{ print_r($i) }}</pre> --}}
                        </div>
                        {{-- {% endfor %} --}}
                    @endforeach
                </div>

            </div>
        </div>
    @endfor

</div>



{{-- <br/>
----------
<br/> --}}
@endsection
