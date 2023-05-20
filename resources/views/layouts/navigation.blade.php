<div class="flex justify-between items-center">
    <input type="text"
        class="rounded-full border border-gray-2 placeholder:text-gray-1 text-base text-gray-1 px-5 py-[11px]
            w-full max-w-[570px] focus:outline-none focus:ring-2 transition-all bg-no-repeat bg-right  pr-3"
        placeholder="Search movie, cast, genre"
        style="background-image: url('{{ asset('/assets/icons/ic_search.svg') }}'); background-position: right 20px center;" />
    <div class="flex items-center gap-4">
        <span class="text-black text-sm font-medium">Welcome, {{ Auth::user()->username }}</span>
        <!-- user avatar -->
        <div class="collapsible-dropdown flex flex-col gap-2 relative">
            <a class="outline outline-2 outline-gray-2 p-[5px] rounded-full w-[60px] dropdown-button cursor-pointer"
                data-target="#dropdown-button">
                <img src="{{ asset('/assets/images/avatar.png') }}" class="rounded-full object-cover w-full"
                    alt="" />
            </a>
            <div class="bg-gray-50 rounded-2xl text-black font-medium flex flex-col gap-1 absolute z-[999] right-0 top-[80px] min-w-[180px] hidden overflow-hidden"
                id="dropdown-target">
                <a href="{{ route('setting.index') }}" class="transition-all hover:bg-sky-100 p-4">Settings</a>
                <a href="#!" class="transition-all hover:bg-sky-100 p-4">Logout</a>
            </div>
        </div>
    </div>
</div>
