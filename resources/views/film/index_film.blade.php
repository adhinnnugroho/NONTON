<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Moonton') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video-js.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/videojs.css') }}">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <section class="mx-auto w-screen relative watching-page font-poppins" id="stream">
        <video-js id="stream-video" class="overflow-hidden h-screen w-screen">
            <source src="https://d33kv075lir7n3.cloudfront.net/Details+Screen+Part+Final.mp4" type="video/mp4" />
            <p class="vjs-no-js text-twmdark">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video-js>

        <!-- Button back to dashboard -->
        <div class="absolute top-5 left-5 z-20">
            <a href="{{ url('/dashboard') }}">
                <img src="{{ asset('assets/icons/ic_arrow-left.svg') }}" class="transition-all btn-back w-[46px]"
                    alt="stream" />
            </a>
        </div>

        <!-- Video Title -->
        <div class="absolute title-video top-7 left-1/2 -translate-x-1/2 max-w-[310px] md:max-w-[620px] text-center">
            <span class="font-medium text-2xl transition-all text-white drop-shadow-md select-none">
                Details Screen Part Final
            </span>
        </div>
    </section>

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('assets/script/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js"></script>

    <script>
        $(document).on('turbolinks:load', function() {
            // videojs data-setup
            videojs('stream-video', {
                controls: true,
                autoplay: true,
                preload: 'auto',
                poster: '/assets/images/poster.png',
                disablePictureInPicture: true,
                noUTitleAttributes: true
            });

            var lastTimeMouseMoved = "";
            $(document).mousemove(function(e) {
                $('.btn-back').css({
                    "opacity": "1",
                    "transition": "all .3s"
                })
                $('.title-video').css({
                    "opacity": "1",
                    "transition": "all .3s"
                })
                $('.vjs-control-bar').css({
                    "opacity": "1",
                    "transition": "all .3s"
                })
                lastTimeMouseMoved = new Date().getTime();
                setTimeout(function() {
                    var currentTime = new Date().getTime();
                    if (currentTime - lastTimeMouseMoved > 800) {
                        $('.btn-back').css("opacity", "0")
                        $('.title-video').css("opacity", "0")
                        $('.vjs-control-bar').css("opacity", "0")
                    }
                }, 800)
            });
        })
    </script>
</body>

</html>
