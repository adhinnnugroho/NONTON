<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>
    <style type="text/tailwindcss">
        @layer components {
            .side-link {
                @apply flex items-center font-normal text-black text-sm w-full mb-5 gap-3 transition-all;
            }

            .side-link svg {
                @apply text-[#B7B7B7];
            }

            .side-link.active {
                @apply font-semibold border-r-[3px] border-alerange;
            }

            .side-link.active svg {
                @apply text-alerange;
            }
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">
    <div class="mx-auto max-w-screen hidden lg:block">
        @livewire('layouts.sidebar')
        <div class="ml-[300px] px-[50px]">
            <div class="py-10 flex flex-col gap-[50px]">
                @include('layouts.navigation')
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/script/script.js') }}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.__scroll-selector').removeClass('hidden').flickity({
                "cellAlign": "left",
                "contain": true,
                "groupCells": 1,
                "wrapAround": false,
                "pageDots": false,
                "prevNextButtons": false,
                "draggable": ">1"
            });
        })
    </script>
</body>

</html>
