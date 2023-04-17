<!DOCTYPE html>
<html>
<head>

	<title>SKCK ONLINE</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link href="{{ asset('frontend/assets/css/home.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />

</head>
<body>
    <div class="fullscreen-image">
        <img src="{{ asset('frontend/assets/pagehome.svg') }}" id="myGIF" alt="My GIF">
        <a href="{{ Route('pendaftaran.index') }}" style="color:white;" class="btn-daftar">Daftar</a>

      </div>


      <div id="img-mobile">
        <img src="{{ asset('frontend/assets/mobile.svg') }}" id="myGIF" alt="My GIF">
        <div class="but-mobile">
            <a href="{{ Route('pendaftaran.index') }}" style="color:white;" class="btn btn-danger btn-mobile">Daftar</a>

        </div>

    </div>






</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</html>
