<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Caveat:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Monoton&family=Nata+Sans:wght@100..900&family=Noto+Sans:ital,wdth,wght@0,62.5,100..900;1,62.5,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Onest:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <link rel="icon" href="{{asset('cuidar_files/serv-castracao.png')}}">
    <title>
        @yield('heading')
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    <div>
        <a id="back-to-top" href="#"
            class="hidden w-12 h-12 bg-green-500 p-2 fixed flex items-center justify-center right-6 bottom-6 rounded text-white z-30 hover:bg-green-600">
            <i class="fa-solid fa-angle-up"></i>
        </a>
    </div>

    <x-header />





    @yield('content')


    <x-footer />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        @stack('script')
    <script>
        $('#btn-header-toggle').on('click', function() {
            $('#header-menu-mobile').toggleClass('hidden');
            if ($('#header-menu-icon').hasClass('fa-bars')) {
                $('#header-menu-icon').addClass('fa-xmark');
                $('#header-menu-icon').removeClass('fa-bars');

            } else if ($('#header-menu-icon').hasClass('fa-xmark')) {
                $('#header-menu-icon').removeClass('fa-xmark');
                $('#header-menu-icon').addClass('fa-bars');

            }
        })
    </script>
    <script>
        const topbar = document.getElementById("top-bar");
        const backToTopBtn = document.getElementById("back-to-top");
        window.addEventListener("scroll", function() {
            if (!topbar.classList.contains("hidden") && window.scrollY >= 80) {
                topbar.classList.add("hidden");
            } else if (topbar.classList.contains("hidden") && window.scrollY < 80) {
                topbar.classList.remove("hidden");
            }

            if (backToTopBtn.classList.contains("hidden") && window.scrollY >= 160) {
                backToTopBtn.classList.remove("hidden");
            } else if (!backToTopBtn.classList.contains("hidden") && window.scrollY < 160) {
                backToTopBtn.classList.add("hidden");
            }
        });
    </script>
</body>

</html>
