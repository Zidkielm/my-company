@extends('front.layouts.app')
@section('content')
    <div id="header" class="relative overflow-hidden bg-[#F6F7FA]">
        <div class="container relative z-10 mx-auto max-w-[1130px] pt-10">
            <nav class="flex flex-wrap items-center justify-between gap-y-3 rounded-[20px] bg-white p-[20px_30px]">
                <div class="flex items-center gap-3">
                    <div class="flex h-[43px] shrink-0 overflow-hidden">
                        <img src="{{ asset('assets/logo/logo.svg') }}" class="h-full w-full object-contain" alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="text-xl font-extrabold leading-[30px]">ShaynaComp</p>
                        <p id="CompanyTagline" class="text-cp-light-grey text-sm">Build Futuristic Dreams</p>
                    </div>
                </div>
                <ul class="flex flex-wrap items-center gap-[30px]">
                    <li class="hover:text-cp-dark-blue text-cp-dark-blue font-semibold transition-all duration-300">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="hover:text-cp-dark-blue font-semibold transition-all duration-300">
                        <a href="">Products</a>
                    </li>
                    <li class="hover:text-cp-dark-blue font-semibold transition-all duration-300">
                        <a href="">Company</a>
                    </li>
                    <li class="hover:text-cp-dark-blue font-semibold transition-all duration-300">
                        <a href="">Blog</a>
                    </li>
                    <li class="hover:text-cp-dark-blue font-semibold transition-all duration-300">
                        <a href="about.html">About</a>
                    </li>
                </ul>
                <a href=""
                    class="bg-cp-dark-blue w-fit rounded-xl p-[14px_20px] font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66]">Get
                    a Quote</a>
            </nav>

            @forelse ($hero_sections as $hero_section)
            <input type="hidden" name="path_video" id="path_video" value="{{ $hero_section->path_video }}">
                <div id="Hero" class="mt-20 flex flex-col gap-[30px] pb-20">
                    <div class="flex w-fit items-center gap-[10px] rounded-full bg-white p-[8px_16px]">
                        <div class="flex h-5 w-5 shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/crown.svg') }}" class="object-contain" alt="icon">
                        </div>
                        <p class="text-sm font-semibold"> {{ $hero_section->achievement }}</p>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h1 class="max-w-[536px] text-[50px] font-extrabold leading-[65px]">{{ $hero_section->heading }}
                        </h1>
                        <p class="text-cp-light-grey max-w-[437px] leading-[30px]">{{ $hero_section->subheading }}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href=""
                            class="bg-cp-dark-blue w-fit rounded-xl p-5 font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66]">Explore
                            Now</a>
                        <button class="bg-cp-black flex w-fit items-center gap-[10px] rounded-xl p-5 font-bold text-white"
                            onclick="{modal.show()}">
                            <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                                <img src="{{ asset('assets/icons/play-circle.svg') }}" class="h-full w-full object-contain"
                                    alt="icon">
                            </div>
                            <span>Watch Video</span>
                        </button>
                    </div>
                </div>
        </div>
        <div class="absolute right-0 top-0 z-0 h-full w-[43%] overflow-hidden">
            <img src="{{ asset('assets/backgrounds/banner.jpg') }}" class="h-full w-full object-cover" alt="banner">
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
                    <img src="{{ asset('assets/logo/logo-54.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-52.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-55.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-44.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-51.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-55.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-52.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-54.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
            <div
                class="logo-card hover:border-cp-dark-blue flex h-[68px] w-fit shrink-0 items-center gap-[10px] rounded-[18px] border border-[#E8EAF2] bg-white p-4 transition-all duration-300">
                <div class="h-9 overflow-hidden">
                    <img src="{{ asset('assets/logo/logo-51.svg') }}" class="h-full w-full object-contain" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div id="OurPrinciples" class="container mx-auto mt-20 flex max-w-[1130px] flex-col gap-[30px]">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge bg-cp-pale-blue text-cp-light-blue w-fit rounded-full p-[8px_16px] text-sm font-bold uppercase">
                    OUR PRINCIPLES</p>
                <h2 class="text-4xl font-bold leading-[45px]">We Might Best Choice <br> For Your Company</h2>
            </div>
            <a href="" class="bg-cp-black w-fit rounded-xl p-[14px_20px] font-bold text-white">Explore More</a>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-[30px]">

            @forelse ($principles as $principle)
                <div
                    class="card hover:border-cp-dark-blue flex w-[356.67px] flex-col gap-[30px] overflow-hidden rounded-[20px] border border-[#E8EAF2] bg-white transition-all duration-300">
                    <div class="thumbnail flex h-[200px] shrink-0 overflow-hidden">
                        <img src="{{ Storage::url($principle->thumbnail) }}"
                            class="h-full w-full object-cover object-center" alt="thumbnails">
                    </div>
                    <div class="flex flex-col gap-5 p-[0_30px_30px_30px]">
                        <div class="flex h-[55px] w-[55px] shrink-0 overflow-hidden">
                            <img src="{{ Storage::url($principle->icon) }}" class="h-full w-full object-contain"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="title text-xl font-bold leading-[30px]">{{ $principle->name }}</p>
                            <p class="text-cp-light-grey leading-[30px]">{{ $principle->subtitle }}</p>
                        </div>
                        <a href="" class="text-cp-dark-blue font-semibold">Learn More</a>
                    </div>
                </div>
            @empty
                <p>belum ada data terbaru</p>
            @endforelse

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
    <div id="Products" class="container mx-auto mt-20 flex max-w-[1130px] flex-col gap-20">

        @forelse ($products as $product)
            <div class="product flex flex-wrap items-center justify-center gap-[60px] even:flex-row-reverse">
                <div class="flex h-[550px] w-[470px] shrink-0 overflow-hidden">
                    <img src="{{ Storage::url($product->thumbnail) }}" class="h-full w-full object-contain"
                        alt="thumbnail">
                </div>
                <div class="flex h-fit max-w-[500px] flex-col gap-[30px] py-[50px]">
                    <p
                        class="badge bg-cp-pale-blue text-cp-light-blue w-fit rounded-full p-[8px_16px] text-sm font-bold uppercase">
                        {{ $product->name }}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="text-4xl font-bold leading-[45px]">{{ $product->tagline }}
                        </h2>
                        <p class="text-cp-light-grey leading-[30px]">{{ $product->about }}</p>
                    </div>
                    <a href=""
                        class="bg-cp-dark-blue w-fit rounded-xl p-[14px_20px] font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66]">Book
                        Appointment</a>
                </div>
            </div>
        @empty
            <p>belum ada data terbaru</p>
        @endforelse

    </div>
    <div id="Teams" class="mt-20 w-full bg-[#F6F7FA] px-[10px] py-20">
        <div class="container mx-auto flex max-w-[1130px] flex-col items-center gap-[30px]">
            <div class="flex flex-col items-center gap-[14px]">
                <p class="badge bg-cp-light-blue w-fit rounded-full p-[8px_16px] text-sm font-bold uppercase text-white">
                    OUR POWERFUL TEAM</p>
                <h2 class="text-center text-4xl font-bold leading-[45px]">We Share Same Dreams <br> Change The World
                </h2>
            </div>
            <div
                class="teams-card-container grid grid-cols-1 justify-center gap-[30px] sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                @forelse ($teams as $team)
                    <div
                        class="card hover:border-cp-dark-blue flex h-full flex-col items-center justify-center gap-[30px] rounded-[20px] border border-white bg-white p-[30px] px-[29px] transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
                        <div
                            class="flex h-[100px] w-[100px] shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                            <div class="h-[90px] w-[90px] overflow-hidden rounded-full">
                                <img src="{{ Storage::url($team->avatar) }}"
                                    class="h-full w-full object-cover object-center" alt="photo">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 text-center">
                            <p class="text-xl font-bold leading-[30px]">{{ $team->name }}</p>
                            <p class="text-cp-light-grey">{{ $team->occupation }}</p>
                        </div>
                        <div class="flex items-center justify-center gap-[10px]">
                            <div class="flex h-6 w-6 shrink-0">
                                <img src="{{ asset('assets/icons/global.svg') }}" alt="icon">
                            </div>
                            <p class="text-cp-dark-blue font-semibold">{{ $team->location }}</p>
                        </div>
                    </div>
                @empty
                    <p>belum ada data terbaru</p>
                @endforelse

                <a href="team.html" class="view-all-card">
                    <div
                        class="card hover:border-cp-dark-blue flex h-full flex-col items-center justify-center gap-[30px] rounded-[20px] border border-white bg-white p-[30px] transition-all duration-300 hover:shadow-[0_10px_30px_0_#D1D4DF80]">
                        <div class="flex h-[60px] w-[60px] shrink-0">
                            <img src="{{ asset('assets/icons/profile-2user.svg') }}" alt="icon">
                        </div>
                        <div class="flex flex-col gap-1 text-center">
                            <p class="text-xl font-bold leading-[30px]">View All</p>
                            <p class="text-cp-light-grey">Our Great People</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="Testimonials" class="mt-20 flex w-full flex-col items-center gap-[50px]">
        <div class="flex flex-col items-center gap-[14px]">
            <p
                class="badge bg-cp-pale-blue text-cp-light-blue w-fit rounded-full p-[8px_16px] text-sm font-bold uppercase">
                SUCCESS CLIENTS</p>
            <h2 class="text-center text-4xl font-bold leading-[45px]">Our Satisfied Clients<br>From Worldwide Company
            </h2>
        </div>
        <div class="main-carousel w-full">

            @forelse ($testimonials as $testimonial)
                <div
                    class="carousel-card container flex w-full max-w-[1130px] flex-wrap items-center justify-between lg:mx-[calc((100vw-1130px)/2)]">
                    <div class="testimonial-container flex w-[565px] flex-col gap-[112px]">
                        <div class="flex flex-col gap-[30px]">
                            <div class="h-9 overflow-hidden">
                                <img src="{{ Storage::url($testimonial->client->logo) }}" class="object-contain"
                                    alt="icon">
                            </div>
                            <div class="relative pl-[30px] pt-[27px]">
                                <div class="absolute left-0 top-0">
                                    <img src="{{ asset('assets/icons/quote.svg') }}" alt="icon">
                                </div>
                                <p class="relative z-10 text-2xl font-semibold leading-[46px]">{{ $testimonial->message }}
                                </p>
                            </div>
                            <div class="flex items-center justify-between pl-[30px]">
                                <div class="flex items-center gap-6">
                                    <div class="flex h-[60px] w-[60px] shrink-0 overflow-hidden rounded-full">
                                        <img src="{{ Storage::url($testimonial->client->avatar) }}"
                                            class="h-full w-full object-cover" alt="photo">
                                    </div>
                                    <div class="flex flex-col justify-center gap-1">
                                        <p class="font-bold">{{ $testimonial->client->name }}</p>
                                        <p class="text-cp-light-grey text-sm">{{ $testimonial->client->occupation }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-nowrap">
                                    <div class="flex h-6 w-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex h-6 w-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex h-6 w-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex h-6 w-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex h-6 w-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicator flex h-4 shrink-0 items-center justify-center gap-2">
                        </div>
                    </div>
                    <div class="testimonial-thumbnail h-[550px] w-[470px] overflow-hidden rounded-[20px] bg-[#D9D9D9]">
                        <img src="{{ Storage::url($testimonial->thumbnail) }}"
                            class="h-full w-full object-cover object-center" alt="thumbnail">
                    </div>
                </div>
            @empty
                <p>belum ada data terbaru</p>
            @endforelse

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
        <div
            class="awards-card-container grid grid-cols-1 justify-center gap-[30px] sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Solid Fundamental Crafter Async</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bali, 2020</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Most Crowded Yet Harmony Place</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Shanghai, 2021</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Small Things Made Much Big Impacts</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Zurich, 2022</p>
            </div>
            <div
                class="card hover:border-cp-dark-blue flex h-full flex-col gap-[30px] rounded-[20px] border border-[#E8EAF2] bg-white p-[30px] transition-all duration-300">
                <div class="flex h-[55px] w-[55px] shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="text-xl font-bold leading-[30px]">Teamwork and Solidarity</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bandung, 2023</p>
            </div>
        </div>
    </div>
    <div id="FAQ" class="-mb-20 mt-20 w-full bg-[#F6F7FA] px-[10px] py-20">
        <div class="container mx-auto max-w-[1000px]">
            <div class="flex flex-col items-center gap-[50px] sm:gap-[70px] lg:flex-row">
                <div class="flex flex-col gap-[30px]">
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="text-4xl font-bold leading-[45px]">Frequently Asked Questions</h2>
                    </div>
                    <a href="contact.html" class="bg-cp-black w-fit rounded-xl p-5 font-bold text-white">Contact
                        Us</a>
                </div>
                <div class="flex shrink-0 flex-col gap-[30px] sm:w-[603px]">
                    <div class="flex w-full flex-col rounded-2xl bg-white p-5">
                        <button class="accordion-button flex items-center justify-between gap-1"
                            data-accordion="accordion-faq-1">
                            <span class="text-left text-lg font-bold leading-[27px]">Can installments be beneficial for
                                both?</span>
                            <div class="arrow flex h-9 w-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-1" class="accordion-content hide">
                            <p class="text-cp-light-grey pt-[14px] leading-[30px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                    <div class="flex w-full flex-col rounded-2xl bg-white p-5">
                        <button class="accordion-button flex items-center justify-between gap-1"
                            data-accordion="accordion-faq-2">
                            <span class="text-left text-lg font-bold leading-[27px]">What kind of framework you popular
                                with?</span>
                            <div class="arrow flex h-9 w-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-2" class="accordion-content hide">
                            <p class="text-cp-light-grey pt-[14px] leading-[30px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                    <div class="flex w-full flex-col rounded-2xl bg-white p-5">
                        <button class="accordion-button flex items-center justify-between gap-1"
                            data-accordion="accordion-faq-3">
                            <span class="text-left text-lg font-bold leading-[27px]">What insurance provider do you
                                use?</span>
                            <div class="arrow flex h-9 w-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-3" class="accordion-content hide">
                            <p class="text-cp-light-grey pt-[14px] leading-[30px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                    <div class="flex w-full flex-col rounded-2xl bg-white p-5">
                        <button class="accordion-button flex items-center justify-between gap-1"
                            data-accordion="accordion-faq-4">
                            <span class="text-left text-lg font-bold leading-[27px]">What if we have other
                                questions?</span>
                            <div class="arrow flex h-9 w-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-4" class="accordion-content hide">
                            <p class="text-cp-light-grey pt-[14px] leading-[30px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-cp-black relative mt-20 w-full overflow-hidden">
        <div
            class="container relative z-10 mx-auto flex max-w-[1130px] flex-wrap items-center justify-between gap-y-4 pb-[220px] pt-[100px]">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3">
                    <div class="flex h-[43px] shrink-0 overflow-hidden">
                        <img src="{{ asset('assets/logo/logo.svg') }}" class="h-full w-full object-contain"
                            alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="text-xl font-extrabold leading-[30px] text-white">ShaynaComp</p>
                        <p id="CompanyTagline" class="text-cp-light-grey text-sm">Build Futuristic Dreams</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/youtube.svg') }}" class="h-full w-full object-contain"
                                alt="youtube">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/whatsapp.svg') }}" class="h-full w-full object-contain"
                                alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/facebook.svg') }}" class="h-full w-full object-contain"
                                alt="facebook">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex h-6 w-6 shrink-0 overflow-hidden">
                            <img src="{{ asset('assets/icons/instagram.svg') }}" class="h-full w-full object-contain"
                                alt="instagram">
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
                    <a href="" class="text-cp-light-grey transition-all duration-300 hover:text-white">Privacy
                        & Policy</a>
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
    <div id="video-modal" tabindex="-1" aria-hidden="true"
        class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full p-4 lg:w-1/2">
            <!-- Modal content -->
            <div class="relative overflow-hidden rounded-[20px] bg-white shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                    <h3 class="text-cp-black text-xl font-semibold">
                        Company Profile Video
                    </h3>
                    <button type="button"
                        class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                        onclick="{modal.hide()}">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="">
                    <!-- video src added from the js script (modal-video.js) to prevent video running in the backgroud -->
                    <iframe id="videoFrame" class="aspect-[16/9]" width="100%" src=""
                        title="Demo Project Laravel Portfolio" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('js/modal-video.js') }}"></script>
@endpush
