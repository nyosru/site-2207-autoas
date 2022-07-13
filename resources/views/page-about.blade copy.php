@extends('layouts.app')

@section('content')

    <div class="container" style="min-height:60vh;">
        <div class="row">
            <div class="col-12">
                <h3 style="margin: 3vh;" >Авто-АС поставка запчастей</h3>
            </div>
            <div class="col-12">
                @include('page-about-in')
            </div>
        </div>
    </div>

    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection
