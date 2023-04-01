<div>
    <div class="mx-auto max-w-screen min-h-screen bg-black text-white md:px-10 px-3">
        <div class="fixed top-[-50px] hidden lg:block">
            <img src="{{ asset('/assets/images/signup-image.png') }}"
                class="hidden laptopLg:block laptopLg:max-w-[450px] laptopXl:max-w-[640px]" alt="">
        </div>
        <div class="py-24 flex laptopLg:ml-[680px] laptopXl:ml-[870px]">
            <div>
                <img src="{{ asset('/assets/images/moonton-white.svg') }}" alt="">
                <div class="my-[70px]">
                    <div class="font-semibold text-[26px] mb-3">
                        Welcome Back
                    </div>
                    <p class="text-base text-[#767676] leading-7">
                        Explore our new movies and get <br>
                        the better insight for your life
                    </p>
                </div>
                <p class="w-[370px]">
                <div class="flex flex-col gap-6">
                    <div>
                        <label class="text-base block mb-2">Email Address</label>
                        <input type="email" name="email"
                            class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-alerange focus:outline-none"
                            placeholder="Email Address" wire:model.defer="email" />
                        @error('email')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-base block mb-2">Password</label>
                        <input type="password" name="password"
                            class="rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-alerange focus:outline-none"
                            placeholder="Password" wire:model.defer="password" />
                        @error('password')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid space-y-[14px] mt-[30px]" wire:ignore>
                    <button type="submit" class="rounded-2xl bg-alerange py-[13px] text-center"
                        wire:click="validationsForm">
                        <span class="text-base font-semibold" wire:loading.remove>
                            Start Watching
                        </span>
                        <div wire:loading wire:target="validationsForm">
                            Processing...
                        </div>
                    </button>
                    <a href="{{ url('/register') }}" class="rounded-2xl border border-white py-[13px] text-center">
                        <span class="text-base text-white">
                            Create New Account
                        </span>
                    </a>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
