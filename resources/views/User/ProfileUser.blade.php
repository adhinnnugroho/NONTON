<x-app-layout>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-1">
            <x-card.simple-card>
                <div class="flex justify-center items-center">
                @if (stripos(Auth::user()->foto, 'https://lh3.googleusercontent.com') !== false)
                    <img src="{{ Auth::user()->foto }}" class="rounded-full object-cover w-44"
                    alt="" />
                @else
                    <img src="{{ asset('/assets/images/avatar.png') }}" class="rounded-full object-cover w-full"
                    alt="" />
                @endif
                </div>
            </x-card.simple-card>
        </div>
        <div class="col-span-2">
            <x-card.simple-card>
                @if (stripos(Auth::user()->foto, 'https://lh3.googleusercontent.com') !== false)
                    <img src="{{ Auth::user()->foto }}" class="rounded-full object-cover w-44"
                    alt="" />
                @else
                    <img src="{{ asset('/assets/images/avatar.png') }}" class="rounded-full object-cover w-full"
                    alt="" />
                @endif
            </x-card.simple-card>
        </div>
    </div>
</x-app-layout>
