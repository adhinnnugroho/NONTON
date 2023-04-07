<x-app-layout>
    <!-- Featured -->
    <div>
        <div class="font-semibold text-[22px] text-black mb-4">Featured Movies</div>
        <div class="gap-[30px] __scroll-selector">

            <!-- Movie Thumbnail -->
            <div class="relative overflow-hidden group mr-[30px]">
                <img src="{{ asset('/assets/images/featured-1.png') }}"
                    class="object-cover rounded-[30px] w-[520px] h-[340px]" alt="" />
                <!-- rating -->
                <div class="rating absolute top-0 left-0">
                    <div class="p-[30px] flex items-center gap-1">
                        <img src="{{ asset('/assets/icons/ic_star.svg') }}" alt="">
                        <span class="text-sm font-medium text-white mt-1">4.5/5.0</span>
                    </div>
                </div>
                <!-- bottom detail -->
                <div
                    class="absolute bottom-0 h-[100px] left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px]
                                rounded-br-[28px] flex justify-between items-center px-7 h-[130px]">
                    <div>
                        <div class="font-medium text-[22px] text-white">The Batman in Love</div>
                        <p class="mb-0 text-white text-sm font-light">Action • Horror</p>
                    </div>
                    <div class="translate-x-[100px] group-hover:translate-x-0 transition ease-in-out duration-500">
                        <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                    </div>
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>

            <!-- Movie Thumbnail -->
            <div class="relative overflow-hidden group mr-[30px]">
                <img src="{{ asset('/assets/images/featured-2.png') }}"
                    class="object-cover rounded-[30px] w-[520px] h-[340px]" alt="" />
                <!-- rating -->
                <div class="rating absolute top-0 left-0">
                    <div class="p-[30px] flex items-center gap-1">
                        <img src="{{ asset('/assets/icons/ic_star.svg') }}" alt="">
                        <span class="text-sm font-medium text-white mt-1">4.2/5.0</span>
                    </div>
                </div>
                <!-- bottom detail -->
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px]
                                rounded-br-[28px] flex justify-between items-center px-7 h-[130px]">
                    <div>
                        <div class="font-medium text-[22px] text-white">Despicable Me 2</div>
                        <p class="mb-0 text-white text-sm font-light">Action • Adventure</p>
                    </div>
                    <div class="translate-x-[100px] group-hover:translate-x-0 transition ease-in-out duration-500">
                        <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                    </div>
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>

            <!-- Movie Thumbnail -->
            <div class="relative overflow-hidden group mr-[30px]">
                <img src="{{ asset('/assets/images/featured-3.png') }}"
                    class="object-cover rounded-[30px] w-[520px] h-[340px]" alt="" />
                <!-- rating -->
                <div class="rating absolute top-0 left-0">
                    <div class="p-[30px] flex items-center gap-1">
                        <img src="{{ asset('/assets/icons/ic_star.svg') }}" alt="">
                        <span class="text-sm font-medium text-white mt-1">4.9/5.0</span>
                    </div>
                </div>
                <!-- bottom detail -->
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px]
                                rounded-br-[28px] flex justify-between items-center px-7 h-[130px]">
                    <div>
                        <div class="font-medium text-[22px] text-white">Train Dragons II</div>
                        <p class="mb-0 text-white text-sm font-light">Love • Adventure</p>
                    </div>
                    <div class="translate-x-[100px] group-hover:translate-x-0 transition ease-in-out duration-500">
                        <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                    </div>
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>

            <!-- Movie Thumbnail -->
            <div class="relative overflow-hidden group mr-[30px]">
                <img src="{{ asset('/assets/images/featured-1.png') }}"
                    class="object-cover rounded-[30px] w-[520px] h-[340px]" alt="" />
                <!-- rating -->
                <div class="rating absolute top-0 left-0">
                    <div class="p-[30px] flex items-center gap-1">
                        <img src="{{ asset('/assets/icons/ic_star.svg') }}" alt="">
                        <span class="text-sm font-medium text-white mt-1">4.5/5.0</span>
                    </div>
                </div>
                <!-- bottom detail -->
                <div
                    class="absolute bottom-0 h-[100px] left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px]
                                rounded-br-[28px] flex justify-between items-center px-7 h-[130px]">
                    <div>
                        <div class="font-medium text-[22px] text-white">The Batman in Love</div>
                        <p class="mb-0 text-white text-sm font-light">Action • Horror</p>
                    </div>
                    <div class="translate-x-[100px] group-hover:translate-x-0 transition ease-in-out duration-500">
                        <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                    </div>
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>
        </div>
    </div>
    <!-- /Featured -->

    <div class="mt-10">
        <div class="font-semibold text-[22px] text-black mb-4">Browse</div>
        <div class="__scroll-selector">
            <!-- Movies 1 -->
            <div class="relative group overflow-hidden mr-[30px]">
                <img src="{{ asset('/assets/images/browse-1.png') }}"
                    class="object-cover rounded-[30px] h-[340px] w-[250px]" alt="">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px]">
                    <div class="px-7 pb-7">
                        <div class="font-medium text-xl text-white">Meong Golden</div>
                        <p class="mb-0 text-gray-300 text-base mt-[10px]">Horror • Love</p>
                    </div>
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                    <img src="{{ asset('/assets/icons/ic_play.svg') }}" class="" width="50" alt="">
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>
            <!-- Movies 2 -->
            <div class="relative group overflow-hidden mr-[30px]">
                <img src="{{ asset('/assets/images/browse-2.png') }}"
                    class="object-cover rounded-[30px] h-[340px] w-[250px]" alt="">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px]">
                    <div class="px-7 pb-7">
                        <div class="font-medium text-xl text-white">Strange</div>
                        <p class="mb-0 text-gray-300 text-base mt-[10px]">2022</p>
                    </div>
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                    <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>
            <!-- Movies 3 -->
            <div class="relative group overflow-hidden mr-[30px]">
                <img src="{{ asset('/assets/images/browse-3.png') }}"
                    class="object-cover rounded-[30px] h-[340px] w-[250px]" alt="">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px]">
                    <div class="px-7 pb-7">
                        <div class="font-medium text-xl text-white">Fornite</div>
                        <p class="mb-0 text-gray-300 text-base mt-[10px]">2022</p>
                    </div>
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                    <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>
            <!-- Movies 4 -->
            <div class="relative group overflow-hidden mr-[30px]">
                <img src="{{ asset('/assets/images/browse-4.png') }}"
                    class="object-cover rounded-[30px] h-[340px] w-[250px]" alt="">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px]">
                    <div class="px-7 pb-7">
                        <div class="font-medium text-xl text-white">King's Queen</div>
                        <p class="mb-0 text-gray-300 text-base mt-[10px]">2022</p>
                    </div>
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                    <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>
            <!-- Movies 5 -->
            <div class="relative group overflow-hidden mr-[30px]">
                <img src="{{ asset('/assets/images/browse-5.png') }}"
                    class="object-cover rounded-[30px] h-[340px] w-[250px]" alt="">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px]">
                    <div class="px-7 pb-7">
                        <div class="font-medium text-xl text-white">Morbius</div>
                        <p class="mb-0 text-gray-300 text-base mt-[10px]">2022</p>
                    </div>
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                    <img src="{{ asset('/assets/icons/ic_play.svg') }}" width="50" alt="">
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>
            <!-- Movies 6 -->
            <div class="relative group overflow-hidden mr-[30px]">
                <img src="{{ asset('/assets/images/browse-1.png') }}"
                    class="object-cover rounded-[30px] h-[340px] w-[250px]" alt="">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black rounded-bl-[28px] rounded-br-[28px]">
                    <div class="px-7 pb-7">
                        <div class="font-medium text-xl text-white">Meong Golden</div>
                        <p class="mb-0 text-gray-300 text-base mt-[10px]">Horror • Love</p>
                    </div>
                </div>
                <div
                    class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
                                -translate-x-1/2 z-20 transition ease-in-out duration-500">
                    <img src="{{ asset('/assets/icons/ic_play.svg') }}" class="" width="50"
                        alt="">
                </div>
                <a href="watching.html" class="inset-0 absolute z-50"></a>
            </div>
        </div>
    </div>
</x-app-layout>
