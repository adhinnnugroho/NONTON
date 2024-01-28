<x-app-layout :breadcrumbs="$breadcrumbs">
    <div class="lg:grid lg:grid-cols-4 gap-4 hidden">
        <div class="overflow-x-auto">
            <h5 class="text-2xl text-black font-semibold p-2">
                Pengaturan
            </h5>
            <div class="block">
                <a class="p-3 block text-xl hover:bg-gray-300 hover:rounded-lg" href="#">
                    <i class="fa-regular fa-user mr-2"></i>
                    Profil
                </a>
                <a class="p-3 block text-xl hover:bg-gray-300 hover:rounded-lg" href="#">
                    <i class="fa-regular fa-user mr-2"></i>

                    Data Pribadi
                </a>
                <a class="p-3 block text-xl hover:bg-gray-300 hover:rounded-lg" href="#">
                    <i class="fa-regular fa-user mr-2"></i>
                    Akun
                </a>
                <a class="p-3 block text-xl hover:bg-gray-300 hover:rounded-lg" href="#">
                    <i class="fa-regular fa-envelope mr-2"></i>
                    Email Langganan
                </a>
            </div>

        </div>

        <div class="border border-gray-400 col-span-3 p-5 rounded-lg overflow-x-auto">

            <div class="relative" x-data="{ isOpen: false }">
                <div class="relative w-44 h-44 rounded-full overflow-hidden cursor-pointer group"
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
                    class="absolute right-6 -mt-24 shadow w-44 bg-white border rounded-lg text-black overflow-hidden">
                </ul>
            </div>
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
                    <div class="grid grid-cols-2 gap-5">
                        <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="pricing" />
                            <div
                                class="w-44 max-w-xl rounded-md bg-gray-200 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <i class="fa fa-mars"></i>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <p>
                                            Laki-laki
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" class="peer sr-only" name="pricing" />
                            <div
                                class="w-44 max-w-xl rounded-md bg-gray-200 p-5 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-sky-600 peer-checked:ring-blue-400 peer-checked:ring-offset-2">
                                <div class="flex flex-col gap-1">
                                    <div class="flex items-center justify-between">
                                        <i class="fa fa-venus"></i>
                                    </div>
                                    <div class="flex items-end justify-between">
                                        <p>
                                            Perempuan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="block">
                    <div class="mt-10">
                        <x-label.simple-label>Tanggal Lahir</x-label.simple-label>
                        <x-input.rounded-input type="date" />
                    </div>
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
