<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name | Pustaka Aksara', 'Pustaka Aksara') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/mini-logo2.png') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @yield('swiper')
    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }
        .my-float{
            margin-top:9px;
        }
        #myDIV {
            position:fixed;
            bottom:100px;
            right:40px;
            z-index: 100;
            display: none;
        }
        
    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased" style="background-color: #f6f8fd;">
    <div class="min-vh-100">
        @include('layouts.navigation')

        @isset($header)
        <!-- Page Heading -->
        <header class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        {{ $header }}
                    </div>
                </div>
            </div>
        </header>
        @endisset
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <div>
            <div role="button" class="float" onclick="myFunction()">
                <div class="bi bi-whatsapp my-float"></div>
            </div>
            <div class="border-0 shadow p-0 overflow-hidden mb-3 rounded" id="myDIV">
                <div class="bg-success py-3 px-4 text-white">
                    Chat dengan kami di Whatsapp!
                </div>
                <div class="py-2 px-3" style="background-color: #e3dcd4;">
                    <div class="m-3 bg-white rounded py-2 px-3 shadow">
                        Hi, ada yang bisa kami bantu ?
                    </div>
                </div>
                <form id="whatsapp">
                    <div class="bg-white py-3 px-4 d-flex justify-content-between align-items-center">
                        <input class="tujuan" type="hidden" id="noAdmin"> 
                        <textarea class="form-control alamat" style="width: 100%" placeholder="Masukan pesan" required></textarea>
                        <div>
                            <a class="btn submit d-block" style="transform: rotate(40deg)"><i class="bi bi-send fs-3 text-secondary"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        //no wa admin
        $("#noAdmin").val("089696831724");
        $('.whatsapp-btn').click(function () {
         $('#whatsapp').toggleClass('toggle');
        });
        // Onclick Whatsapp Sent!
        $('#whatsapp .submit').click(WhatsApp);
        $("#whatsapp input, #whatsapp textarea").keypress(function () {
         if (event.which == 13) WhatsApp();
        });
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        function WhatsApp() {
         var ph = '';
          if ($('#whatsapp .nowhatsapp').val() == '') { // Cek Whatsapp
            ph = $('#whatsapp .nowhatsapp').attr('placeholder');
            alert('Silahkan tulis ' + ph);
            $('#whatsapp .nowhatsapp').focus();
            return false;
         } else if ($('#whatsapp .alamat').val() == '') { // Cek Alamat
            ph = $('#whatsapp .alamat').attr('placeholder');
            alert('Silahkan tulis ' + ph);
            $('#whatsapp .alamat').focus();
            return false;
         } else {
            // Check Device (Mobile/Desktop)
            var url_wa = 'https://api.whatsapp.com/send';
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
             url_wa = 'whatsapp://send/';
            }
            // Get Value
            var tujuan = $('#whatsapp .tujuan').val(),
             via_url = location.href,
             nowhatsapp = $('#whatsapp .nowhatsapp').val(),
             alamat = $('#whatsapp .alamat').val();
            $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=' + alamat);
            var w = 960,
             h = 540,
             left = Number((screen.width / 2) - (w / 2)),
             tops = Number((screen.height / 2) - (h / 2)),
             popupWindow = window.open(this.href, '_blank');
             //  popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
            popupWindow.focus();
            return false;
         }
        }
    </script>
    @include('layouts.footer')
    @stack('swiper')
</body>

</html>
