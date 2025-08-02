<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Home</title>

</head>

<body class="bg-gray-200">
    <div>
        <a id="back-to-top" href="#"
            class="hidden w-12 h-12 bg-green-500 p-2 fixed flex items-center justify-center right-6 bottom-6 rounded text-white z-30 hover:bg-green-600">
            <span class="material-symbols-outlined">
                arrow_upward
            </span>
        </a>
    </div>

    <x-header />





    @yield('content')


    <x-footer />
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
