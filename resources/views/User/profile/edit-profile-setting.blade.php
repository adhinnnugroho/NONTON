<x-app-layout :breadcrumbs="$breadcrumbs">

    <div class="lg:grid grid-cols-4 gap-4 hidden mt-5">
        <div class="border border-gray-400 rounded-lg col-span-1">
            <div class="relative mt-16" x-data="{ isOpen: false }">
                <div class="relative w-44 h-44 mx-auto rounded-full overflow-hidden cursor-pointer group"
                    x-on:click="isOpen = !isOpen">
                    @if (stripos($userLogin->foto, 'https://lh3.googleusercontent.com') !== false)
                        <img src="{{ $userLogin->foto }}" alt="User Profile"
                            class="group-hover:opacity-50 object-cover w-full h-full" />
                    @else
                        <img src="{{ $userLogin->foto }}" alt="User Profile"
                            class="group-hover:opacity-50 object-cover w-full h-full" />
                    @endif
                    <div class="absolute inset-0 flex items-center justify-center"
                        x-bind:class="{
                            'bg-black bg-opacity-50 opacity-100 transition-opacity': isOpen,
                            'opacity-0 group-hover:opacity-100 bg-black bg-opacity-50 transition-opacity':
                                !isOpen
                        }">
                        <div class="block text-white content-center text-center">
                            <i class="fa fa-camera text-xl"></i>
                            <p class="text-white text-xl font-bold">Ganti Foto</p>
                        </div>
                    </div>
                </div>
                <ul x-show="isOpen"
                    class="absolute right-6 -mt-24 shadow w-44 bg-white border
                rounded-lg text-black overflow-hidden">

                </ul>
            </div>
        </div>
        <div class="border border-gray-400 col-span-3 p-5 rounded-lg">
            <div class="grid grid-cols-2 gap-4">
                <div class="block">
                    <x-label.simple-label>Nama lengkap</x-label.simple-label>
                    <x-input.rounded-input />
                </div>
                <div class="block">
                    <x-label.simple-label>Nama Pengguna</x-label.simple-label>
                    <x-input.rounded-input />
                </div>
                <div class="block">
                    <x-label.simple-label>Jenis kelamin</x-label.simple-label>
                    <x-input.rounded-input />
                </div>
                <div class="block">
                    <x-label.simple-label>Tanggal Lahir</x-label.simple-label>
                    <x-input.rounded-input type="date" />
                </div>
            </div>

            <div class="block mt-5">
                <x-label.simple-label>Deskripsi</x-label.simple-label>
                <textarea name="" id="" class="w-full"></textarea>
            </div>
            <div class="float-right">
                <x-button.rounded-button class="w-44 mt-5">
                    Simpan
                </x-button.rounded-button>
            </div>
        </div>

    </div>
</x-app-layout>
