@extends('layouts.app')

@section('content')

    <div class="container" style="min-height:60vh;">
        <div class="row justify-content-center">

            <div class="col-12 ">
                <h3 style="margin: 3vh;">{{ $menu[$page]['name'] ?? '' }}</h3>
            </div>

            <div class="col-12">
                @if (!empty($pageHtml))
                    {!! $pageHtml ?? '' !!}
                @else
                    @include('page.'.$page)
                @endisset
        </div>
    </div>
</div>


@endsection
