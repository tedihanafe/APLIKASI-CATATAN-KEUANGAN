<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Keuangan - Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->

    {{-- cdn bootstrap --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            width: 100%;
            height: 100vh;
            margin: 0;
            /* Atur margin ke 0 agar gambar latar belakang menutupi seluruh area body */
        }

        .cover {
            height: 100vh;
            width: 100%;
            background-position: center;
            background-size: cover;
            background-image: url('{{ asset('cover-landscape.jpg') }}');
            background-repeat: no-repeat;
            justify-content: center;
            align-items: center;
        }



        .regis {
            background: rgb(13, 255, 0);
            color: black;
            font-weight: 600;
            padding: 5px 10px;
        }

        .keuangan {
            color: rgb(13, 255, 0);
        }
    </style>
</head>

<body>
    <div class="cover flex">



        <div class="menu-login pt-4 text-right pr-1">

            @if (Route::has('login'))
                <div class="menu-atas top-right links">
                    @auth
                        <a class="text-white" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="text-white  mt-4 mr-2" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="regis mt-4 rounded-lg mr-2" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>


        <div class="content mt-4">
            <div class="title text-white">
                <h3 class="text-right mr-3 mr-5 pt-3">APLIKASI <span class="keuangan">KEUANGAN</span></h3>
                <h5 class="text-right mr-3 mr-5">Laravel Version 8 | PHP 7.4</h5>
                <br>
            </div>
        </div>

    </div>
</body>

</html>
