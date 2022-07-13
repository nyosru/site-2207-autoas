    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <title>Магия в деталях</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if( 1 == 2 )
        {{-- <link rel="stylesheet" href="/vendor/didrive/base/design/design/font/iconsmind/style.css" /> --}}
        <link rel="stylesheet" href="{{ asset('didrive/font/iconsmind/style.css') }}" />

        {{-- <link rel="stylesheet"
            href="/vendor/didrive/base/design/design/font/simple-line-icons/css/simple-line-icons.css" /> --}}
        <link rel="stylesheet" href="{{ asset('didrive/font/simple-line-icons/css/simple-line-icons.css') }}" />
        
        {{-- <link rel="stylesheet" href="/vendor/didrive/base/design/design/css/vendor/bootstrap.min.css" /> --}}
        <link rel="stylesheet" href="{{ asset('didrive/css/vendor/bootstrap.min.css' ) }}" />

        {{-- <link rel="stylesheet" href="/vendor/didrive/base/design/design/css/vendor/bootstrap-float-label.min.css" /> --}}
        <link rel="stylesheet" href="{{ asset('didrive/css/vendor/bootstrap-float-label.min.css') }}" />

        {{-- <link rel="stylesheet" href="/vendor/didrive/base/design/design/css/main.css" /> --}}
        <link rel="stylesheet" href="{{ asset('didrive/font/iconsmind/css/main.css') }}" />

        {{-- <link rel="stylesheet" type="text/css" href="/vendor/didrive/base/design/design/css/dore.light.blue.min.css"> --}}
        <link rel="stylesheet" href="{{ asset('didrive/css/dore.light.blue.min.css') }}" />
        @endif

        <link rel="stylesheet" href="{{ asset('didrive/all.css') }}" />
        <meta property="og:image" content="http://php-cat.com/sites/my2007phpcat/download/didrive-preview_for_fb.jpg" />
    </head>

    <body class="background xshow-spinner">

        <div class="fixed-background"></div>

        @section('content')
            привет :)
        @show

    </body>

    <script src="{{ asset('didrive/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript">
        $().ready(function() {
            // удаление загрузчика
            $('body').removeClass('show-spinner');
        });
        // document.write('<script src=' + '"//ulogin.ru/js/ulogin.' + 'js"><' + '/script>');
    </script>
    <script src="//ulogin.ru/js/ulogin.js"></script>

    </html>