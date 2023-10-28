<div class="my-2 md:-mx-0 -mx-5 ">
    <div
        class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
        <div class="absolute w-full {{ $headerColor }} rounded-t-lg h-2"></div>

        <div class="p-6 pb-0 mb-4 bg-blue rounded-lg">
            <div class="flex justify-between">
                <div>
                    @isset($title)
                    <div>
                        <h4 class="font-bold text-lg text-gray-700">{{ $title }}</h4>
                    </div>
                    @endisset

                    @isset($subtitle)
                    <div>
                        <h6 class="text-xs font-medium text-gray-600">{{ $subtitle }}</h6>
                    </div>
                    @endisset
                </div> <br>

                @isset($right)
                <div>
                    {{ $right }}
                </div>
                @endisset
            </div>
        </div>

        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="px-6">
                {{ $slot }}

                <br>

                @isset($footer)
                <hr class="my-2">
                <footer class="my-2">{{ $footer }}</footer>
                @endisset
            </div>
        </div>
    </div>
</div>
