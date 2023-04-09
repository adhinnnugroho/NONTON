<x-app-layout>
    <section class="mx-auto w-screen relative watching-page font-poppins" id="stream">
        {{-- <video-js id="stream-video" class="overflow-hidden h-screen w-screen">
            <source src="https://d33kv075lir7n3.cloudfront.net/Details+Screen+Part+Final.mp4" type="video/mp4" />
            <p class="vjs-no-js text-twmdark">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
        </video-js> --}}
        <div class="absolute top-5 left-5 z-20">
            <a href="/">
                <img src="{{ asset('/assets/icons/ic_arrow-left.svg') }}" class="transition-all btn-back w-[46px]"
                    alt="stream" />
            </a>
        </div>

        <div class="absolute title-video top-96 left-44 -translate-x-1/2  text-center">
            <span class="font-medium text-2xl transition-all select-none">
                Details Screen Part Final
            </span>
        </div>
    </section>
</x-app-layout>
