<div>
    <div class="mx-auto max-w-screen min-h-screen bg-black text-white md:px-10 px-3">
        <div class="fixed top-[-50px] hidden lg:block">
            <img src="{{ asset('/assets/images/signup-image.png') }}"
                class="hidden laptopLg:block laptopLg:max-w-[450px] laptopXl:max-w-[640px]" alt="">
        </div>
        <div class="py-24 flex laptopLg:ml-[680px] laptopXl:ml-[870px]">
            <div>
                <img src="{{ asset('/assets/images/moonton-white.svg') }}" alt="">
                {{-- <div class="flex flex-wrap">
                    <img src="{{ asset('/assets/images/logo.png') }}" alt="" class="w-16 mr-4">
                    <h5 class="text-white text-3xl">
                        Cahnom <br> Products
                    </h5>
                </div> --}}
                <div class="my-[70px]">
                    <div class="font-semibold text-[26px] mb-3">
                        Welcome Back
                    </div>
                    <p class="text-base text-[#767676] leading-7">
                        Explore our new movies and get <br>
                        the better insight for your life
                    </p>
                </div>
                <div class="w-[370px]">
                    <div class="flex flex-col gap-6">
                        <div>
                            <x-label.simple-label>Email Address</x-label.simple-label>
                            <x-input.simple-input type="email" wire:model.defer="email" error="email"
                                placeholder="Your email..." />
                        </div>
                        <div>
                            <x-label.simple-label>Password</x-label.simple-label>
                            <x-input.simple-input type="password" wire:model.defer="password" error="password"
                                placeholder="Your password..." />
                        </div>
                    </div>
                    <div class="grid space-y-[14px] mt-[30px]" wire:ignore>
                        <x-button.simple-button type="submit" wire:click="validationsForm">
                            <span class="text-base font-semibold" wire:loading.remove>
                                Start Watching
                            </span>
                            <div wire:loading wire:target="validationsForm">
                                Processing...
                            </div>
                        </x-button.simple-button>

                        <span class="text-center pb-1 mb-10">
                            Or
                        </span>

                        <x-button.simple-border-button links="{{ route('google.index') }}" icons="fa-brands fa-google">
                            Login With Google
                        </x-button.simple-border-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
