<nav class="flex flex-wrap items-center justify-between gap-y-3 rounded-[20px] bg-white p-[20px_30px]">
    <div class="flex items-center gap-3">
        <div class="flex h-[43px] shrink-0 overflow-hidden">
            <img src="assets/logo/logo.svg" class="h-full w-full object-contain" alt="logo">
        </div>
        <div class="flex flex-col">
            <p id="CompanyName" class="text-xl font-extrabold leading-[30px]">ShaynaComp</p>
            <p id="CompanyTagline" class="text-cp-light-grey text-sm">Build Futuristic Dreams</p>
        </div>
    </div>
    <ul class="flex flex-wrap items-center gap-[30px]">
        <li
            class="{{ request()->routeIs('front.index') ? 'text-cp-dark-blue' : '' }} hover:text-cp-dark-blue font-semibold transition-all duration-300">
            <a href="{{ route('front.index') }}">Home</a>
        </li>
        <li
            class="{{ request()->routeIs('front.product') ? 'text-cp-dark-blue' : '' }} hover:text-cp-dark-blue font-semibold transition-all duration-300">
            <a href="">Products</a>
        </li>
        <li
            class="{{ request()->routeIs('front.team') ? 'text-cp-dark-blue' : '' }} hover:text-cp-dark-blue font-semibold transition-all duration-300">
            <a href="{{ route('front.team') }}">Company</a>
        </li>
        <li
            class="{{ request()->routeIs('front.blog') ? 'text-cp-dark-blue' : '' }} hover:text-cp-dark-blue font-semibold transition-all duration-300">
            <a href="">Blog</a>
        </li>
        <li
            class="{{ request()->routeIs('front.about') ? 'text-cp-dark-blue' : '' }} hover:text-cp-dark-blue font-semibold transition-all duration-300">
            <a href="{{ route('front.about') }}">About</a>
        </li>
    </ul>
    <a href=""
        class="bg-cp-dark-blue w-fit rounded-xl p-[14px_20px] font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66]">Get
        a Quote</a>
</nav>
