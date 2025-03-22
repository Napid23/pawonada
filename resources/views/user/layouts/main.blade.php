<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pawonada || {{ isset($title) ? $title : '' }}</title>
    <link href="{{ asset('img/assets/pawonada_icon.png') }}" rel="icon">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- g fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Cherry+Bomb+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Press+Start+2P&display=swap" rel="stylesheet">
    {{-- owl carousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    {{-- animate on scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
  </head>
  <body>
    @include('user.partials.navbar')

    @yield('content')

    @include('user.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- j query --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- owl carousel --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- animate on scroll --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script>
        $(window).on("scroll", function () {
            let navbar = $(".navbar");
            if ($(window).scrollTop() > 50) {
                navbar.addClass("scrolled");
            } else {
                navbar.removeClass("scrolled");
            }
        });

        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,          // Looping otomatis
                margin: 10,         // Jarak antar item
                dots: false,         // Indikator bulat
                autoplay: true,     // Auto slide
                autoplayTimeout: 3000, // Waktu delay (ms)
                responsive:{
                    0:{ items: 1 },   // 1 item di HP
                    600:{ items: 2 }, // 2 item di Tablet
                    1000:{ items: 3 } // 3 item di Desktop
                }
            });
        });

        $(document).ready(function() {
            $(".nav-link").on("click", function() {
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
            });
        });
    </script>

    
    @yield('script')
  </body>
</html>