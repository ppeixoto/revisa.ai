<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1" />
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link href="{{ asset('site/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @font-face {
            font-family: Squada One;
            src: url('./css/fonts/SquadaOne/SquadaOne-Regular.ttf');
        }

        h1,
        a {
            font-family: Squada One
        }
    </style>
    <link href="{{ asset('site/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCSW6TR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <iframe src="" style="border-width:0" width="0" height="0" frameborder="0" scrolling="no"></iframe>

    @include('site.includes.header')
    <div class="bodyGeral">
        @include('site.includes.errors')
        @yield('content')
    </div>

    @include('site.includes.footer')

    <script src="{{ asset('site/js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('site/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('site/css/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="assets/js/jquery.mask.min.js"></script>

    @stack('custom-scripts')
</body>

</html>
