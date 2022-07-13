@extends('layouts.app')

{{-- @section('style')
    <style>
        .menu2_block a {
            display: block;
        }
    </style>
@endsection --}}

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <br/>
                @include('shop.nav-cats-breadcrumbs')
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            @if (isset($cats_left) && !empty($cats_left))
                <div class="col-12 col-sm-3 col-lg-2">
                    <div class="menu2_block">
                        {{-- <pre>{{ print_r($cats_left) }}</pre> --}}
                        @foreach ($cats_left as $c)
                            {{-- <a href="/show/00001590/" class="item_menu2 @if ($c['id']==$now_cat) active @endif ">{{ $c['head'] }}</a> --}}
                            <a href="{{ route( 'shop.show', ['v1' => 'cat' , 'v2' => $c['id']] ) }}" class="item_menu2 @if ($c['id']==$now_cat) active @endif ">{{ $c['head'] }}</a>
                              @endforeach
                    </div>
                </div>
            @endif

            <div @if (isset($cats_left) && !empty($cats_left)) class="col-12 col-sm-9 col-lg-10"
            @else
                class="col-12" @endif>

            @section('shop-content')

                {{-- 222 --}}
                <pre>{{ print_r($menu_shop) }}</pre>
                {{-- 3333 --}}

            @show

        </div>
    </div>
</div>

@endsection
