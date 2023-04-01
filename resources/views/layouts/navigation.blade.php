<div class="flex justify-between items-center">
    <input type="text"
        class="rounded-full border border-gray-2 placeholder: text-gray-1 text-base text-gray-1 px-5 py-[11px] w-full max-w-[570px] focus:outline-none focus:ring-2 transition-all bg-no-repeat bg-center bg-[center_right_20px]"
        placeholder="Search movie, cast, genre" style="background-image: url('/assets/icons/ic_search.svg');" />
    <div class="flex items-center gap-4">
        <span class="text-black text-sm font-medium">Welcome, {{ Auth::user()->username }}</span>
        <!-- user avatar -->
        <div class="collapsible-dropdown flex flex-col gap-2 relative">
            <a href="#!" class="outline outline-2 outline-gray-2 p-[5px] rounded-full w-[60px] dropdown-button"
                data-target="#dropdown-button">
                <img src="assets/images/avatar.png" class="rounded-full object-cover w-full" alt="" />
            </a>
            <div class="bg-gray-200 rounded-2xl text-black font-medium flex flex-col gap-1 absolute z-[999] right-0 top-[80px] min-w-[180px] hidden overflow-hidden"
                id="dropdown-target">
                <a href="#!" class="transition-all hover:bg-sky-100 p-4">Dashboard</a>
                <a href="#!" class="transition-all hover:bg-sky-100 p-4">Settings</a>
                <a href="{{ route('logout') }}" class="transition-all hover:bg-sky-100 p-4">Sign Out</a>
            </div>
        </div>
    </div>
</div>
