@extends('front.layouts.app')
@section('content')
    <div id="header" class="relative bg-[#F6F7FA]">
        <div class="container relative z-10 mx-auto max-w-[1130px] pt-10">
            <x-navbar/>
            <div class="flex flex-col items-center gap-[50px] py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">About Us</p>
                </div>
                <h2 class="text-center text-4xl font-bold leading-[45px]">Since Beginning We Only <br> Want to Make World
                    Better</h2>
            </div>
        </div>
    </div>
    <div id="Products" class="container mx-auto mt-20 flex max-w-[1130px] flex-col gap-20">        
		@forelse ($abouts as $about )
		<div class="product flex flex-wrap items-center justify-center gap-[60px] even:flex-row-reverse">
            <div class="flex h-[550px] w-[470px] shrink-0 overflow-hidden">
                <img src="{{Storage::url($about->thumbnail)}}" class="h-full w-full object-contain" alt="thumbnail">
            </div>
            <div class="flex h-fit max-w-[500px] flex-col gap-[30px] py-[50px]">
                <p
                    class="badge bg-cp-pale-blue text-cp-light-blue w-fit rounded-full p-[8px_16px] text-sm font-bold uppercase">
                    OUR {{ $about->type }}</p>
                <div class="flex flex-col gap-[10px]">
                    <h2 class="text-4xl font-bold leading-[45px]">{{ $about->name }}</h2>
                    <div class="flex flex-col gap-5">
						@forelse ($about->keypoints as $keypoint )
                        <div class="flex items-center gap-[10px]">
                            <div class="flex h-6 w-6 shrink-0">
                                <img src="assets/icons/tick-circle.svg" alt="icon">
                            </div>
                            <p class="font-semibold leading-[26px]">{{$keypoint->keypoint }}</p>
                        </div>
						@empty
						@endforelse
                    </div>
                </div>
            </div>
        </div>
		@empty
		<p>belum ada data terbaru</p>
		@endforelse
    </div>
    <div id="Clients" class="container mx-auto mt-20 flex max-w-[1130px] flex-col justify-center gap-5 text-center">
        <h2 class="text-lg font-bold">Trusted by 500+ Top Leaders Worldwide</h2>
        <div class="logo-container flex flex-wrap justify-center gap-5">
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-54.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-52.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-55.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-44.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-51.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-55.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-52.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-54.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="assets/logo/logo-51.svg" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div id="Stats" class="bg-cp-black mt-20 w-full">
        <div class="container mx-auto max-w-[1000px] py-10">
            <div class="flex flex-wrap items-center justify-between p-[10px]">

                @forelse ($statistics as $statistic)
                    <div class="card flex w-[200px] flex-col items-center gap-[10px] text-center">
                        <div class="flex h-[55px] w-[55px] shrink-0 overflow-hidden">
                            <img src="{{ Storage::url($statistic->icon) }}" class="h-full w-full object-contain"
                                alt="icon">
                        </div>
                        <p class="text-cp-pale-orange text-4xl font-bold leading-[54px]">{{ $statistic->goal }}</p>
                        <p class="text-cp-light-grey">{{ $statistic->Name }}</p>
                    </div>
                @empty
                    <p>belum ada data terbaru</p>
                @endforelse


            </div>
        </div>
    </div>
    <div id="Awards" class="container mx-auto mt-20 flex max-w-[1130px] flex-col gap-[30px]">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge bg-cp-pale-blue text-cp-light-blue w-fit rounded-full p-[8px_16px] text-sm font-bold uppercase">
                    OUR AWARDS</p>
                <h2 class="text-4xl font-bold leading-[45px]">We’ve Dedicated Our<br>Best Team Efforts</h2>
            </div>
            <a href="" class="bg-cp-black w-fit rounded-xl p-[14px_20px] font-bold text-white">Explore More</a>
        </div>
        <div class="awards-card-container grid grid-cols-4 justify-center gap-[30px]">
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Solid Fundamental Crafter Async</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bali, 2020</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Most Crowded Yet Harmony Place</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Shanghai, 2021</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Small Things Made Much Big Impacts</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Zurich, 2022</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="assets/icons/cup-blue.svg" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Teamwork and Solidarity</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bandung, 2023</p>
            </div>
        </div>
    </div>
    <footer class="bg-cp-black relative mt-20 w-full overflow-hidden">
        <div
            class="container relative z-10 mx-auto flex max-w-[1130px] flex-wrap items-center justify-between gap-y-4 pb-[220px] pt-[100px]">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3">
                    <div class="flex h-[43px] shrink-0 overflow-hidden">
                        <img src="assets/logo/logo.svg" class="h-full w-full object-contain" alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="text-xl font-extrabold leading-[30px] text-white">ShaynaComp</p>
                        <p id="CompanyTagline" class="text-cp-light-grey text-sm">Build Futuristic Dreams</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/youtube.svg" class="h-full w-full object-contain" alt="youtube">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/whatsapp.svg" class="h-full w-full object-contain" alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/facebook.svg" class="h-full w-full object-contain" alt="facebook">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="assets/icons/instagram.svg" class="h-full w-full object-contain" alt="instagram">
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap gap-[50px]">
                <div class="flex w-[200px] flex-col gap-3">
                    <p class="text-lg font-bold text-white">Products</p>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">General
                        Contract</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Building
                        Assessment</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">3D Paper
                        Builder</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Legal
                        Constructions</a>
                </div>
                <div class="flex w-[200px] flex-col gap-3">
                    <p class="text-lg font-bold text-white">About</p>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">We’re
                        Hiring</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Our Big
                        Purposes</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Investor
                        Relations</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Media
                        Press</a>
                </div>
                <div class="flex w-[200px] flex-col gap-3">
                    <p class="text-lg font-bold text-white">Useful Links</p>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Privacy &
                        Policy</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Terms &
                        Conditions</a>
                    <a href="contact.html" class="text-cp-light-grey transition-all duration-300 hover:text-white">Contact
                        Us</a>
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Download
                        Template</a>
                </div>
            </div>
        </div>
        <div class="absolute -bottom-[135px] w-full">
            <p class="text-center text-[250px] font-extrabold leading-[375px] text-white opacity-5">SHAYNA</p>
        </div>
    </footer>
@endsection
