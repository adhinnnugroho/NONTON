<div>
    <div class="mx-auto max-w-screen min-h-screen bg-black text-white md:px-10 px-3">
        <div class="fixed top-[-50px] hidden lg:block">
            <img src="assets/images/signup-image.png"
                class="hidden laptopLg:block laptopLg:max-w-[450px] laptopXl:max-w-[640px]" alt="">
        </div>
        <div class="py-24 flex laptopLg:ml-[680px] laptopXl:ml-[870px]">
            <div>
                <img src="assets/images/moonton-white.svg" alt="">
                <div class="my-[70px]">
                    <div class="font-semibold text-[26px] mb-3">
                        Sign Up
                    </div>
                    <p class="text-base text-[#767676] leading-7">
                        Explore our new movies and get <br>
                        the better insight for your life
                    </p>
                </div>
                <p class="w-[370px]">
                <div class="flex flex-col gap-6">
                    <div>
                        <x-label.simple-label>Username</x-label.simple-label>
                        <x-input.simpleinput type="text" name="username" wire:model.defer="username" placeholder="Your username..." aria-placeholder="Your username"/>
                        @error('username')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror

                    </div>
                    <div>
                        <x-label.simple-label>Email Address</x-label.simple-label>
                        <x-input.simpleinput type="email" wire:model.defer="email" placeholder="Your email..."/>
                        @error('email')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <x-label.simple-label>Password</x-label.simple-label>
                        <x-input.simpleinput type="password" wire:model.defer="password" placeholder="Your password..."/>
                        @error('password')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid space-y-[14px] mt-[30px]" wire:ignore>
                    <button type="submit" class="rounded-2xl bg-alerange py-[13px] text-center"
                        wire:click="validationsForm">
                        <span class="text-base font-semibold" wire:loading.remove>
                            Sign Up
                        </span>
                        <div wire:loading wire:target="validationsForm">
                            Processing...
                        </div>
                    </button>
                    <a href="{{ url('/login') }}" class="rounded-2xl border border-white py-[13px] text-center">
                        <span class="text-base text-white">
                            Sign In to My Account
                        </span>
                    </a>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
