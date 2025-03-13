@extends('front.layouts.app')
@section('content')
    <div id="header" class="relative -mb-[488px] h-[700px] bg-[#F6F7FA]">
        <div class="container relative z-10 mx-auto max-w-[1130px] pt-10">
            <x-navbar />
        </div>
    </div>
    <div id="Contact"
        class="container relative z-10 mx-auto flex max-w-[1130px] flex-wrap justify-between gap-[50px] xl:flex-nowrap">
        <div class="mt-20 flex flex-col gap-[50px]">
            <div class="breadcrumb flex items-center gap-[30px]">
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Product</p>
                <span class="text-cp-light-grey">/</span>
                <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Appointment</p>
            </div>
            <h1 class="text-4xl font-extrabold leading-[45px]">We Help You to Build Awesome Project</h1>
            <div class="flex flex-col gap-5">
                <div class="flex items-center gap-[10px]">
                    <div class="flex h-6 w-6 shrink-0">
                        <img src="assets/icons/global.svg" alt="icon">
                    </div>
                    <p class="text-cp-dark-blue font-semibold">No 96, Anggapati Jakarta</p>
                </div>
                <div class="flex items-center gap-[10px]">
                    <div class="flex h-6 w-6 shrink-0">
                        <img src="assets/icons/call.svg" alt="icon">
                    </div>
                    <p class="text-cp-dark-blue font-semibold">(021) 22081996</p>
                </div>
                <div class="flex items-center gap-[10px]">
                    <div class="flex h-6 w-6 shrink-0">
                        <img src="assets/icons/monitor-mobbile.svg" alt="icon">
                    </div>
                    <p class="text-cp-dark-blue font-semibold">shaynacomp.com</p>
                </div>
            </div>
        </div>
        <form action="{{ route('front.appointment_store') }}" method="POST"
            class="flex w-full shrink-0 flex-col gap-[18px] rounded-[20px] bg-white p-[30px] shadow-[0_10px_30px_0_#D1D4DF40] md:w-[700px]">
            @csrf
            <div class="flex items-center gap-[18px]">
                <div class="flex flex w-full flex-col gap-2">
                    <p class="font-semibold">Complete Name</p>
                    <div
                        class="focus-within:border-cp-dark-blue flex items-center gap-[10px] rounded-xl border border-[#E8EAF2] bg-white p-[14px_20px] transition-all duration-300">
                        <div class="flex h-[18px] w-[18px] shrink-0">
                            <img src="assets/icons/profile.svg" alt="icon">
                        </div>
                        <input type="text" name="name" id=""
                            class="placeholder:text-cp-black w-full appearance-none bg-white font-semibold outline-none placeholder:font-normal"
                            placeholder="Write your complete name" required>
                    </div>
                </div>
                <div class="flex flex w-full flex-col gap-2">
                    <p class="font-semibold">Email Address</p>
                    <div
                        class="focus-within:border-cp-dark-blue flex items-center gap-[10px] rounded-xl border border-[#E8EAF2] bg-white p-[14px_20px] transition-all duration-300">
                        <div class="flex h-[18px] w-[18px] shrink-0">
                            <img src="assets/icons/sms.svg" alt="icon">
                        </div>
                        <input type="email" name="email" id=""
                            class="placeholder:text-cp-black w-full appearance-none bg-white font-semibold outline-none placeholder:font-normal"
                            placeholder="Write your email address" required>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-[18px]">
                <div class="flex flex w-full flex-col gap-2">
                    <p class="font-semibold">Phone Number</p>
                    <div
                        class="focus-within:border-cp-dark-blue flex items-center gap-[10px] rounded-xl border border-[#E8EAF2] bg-white p-[14px_20px] transition-all duration-300">
                        <div class="flex h-[18px] w-[18px] shrink-0">
                            <img src="assets/icons/call-black.svg" alt="icon">
                        </div>
                        <input type="tel" name="phone_number" id=""
                            class="placeholder:text-cp-black w-full appearance-none bg-white font-semibold outline-none placeholder:font-normal"
                            placeholder="Write your phone number" required>
                    </div>
                </div>
                <div class="flex flex w-full flex-col gap-2">
                    <p class="font-semibold">Meeting Date</p>
                    <div
                        class="focus-within:border-cp-dark-blue relative flex items-center gap-[10px] rounded-xl border border-[#E8EAF2] bg-white p-[14px_20px] transition-all duration-300">
                        <div class="flex h-[18px] w-[18px] shrink-0">
                            <img src="assets/icons/calendar.svg" alt="icon">
                        </div>
                        <button type="button" id="dateButton"
                            class="w-full border-none bg-transparent p-0 text-left outline-none">Choose the date</button>
                        <input type="date" name="meeting_at" id="dateInput" class="absolute -z-10 opacity-0">
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-[18px]">
                <div class="flex flex w-full flex-col gap-2">
                    <p class="font-semibold">Your Interest</p>
                    <div
                        class="focus-within:border-cp-dark-blue flex items-center gap-[10px] rounded-xl border border-[#E8EAF2] bg-white p-[14px_20px] transition-all duration-300">
                        <div class="flex h-[18px] w-[18px] shrink-0">
                            <img src="assets/icons/building-4-black.svg" alt="icon">
                        </div>
                        <select name="product_id" id=""
                            class="-mx-[10px] w-full appearance-none px-[10px] font-semibold outline-none invalid:font-normal"
                            required>
                            <option value="" hidden>Choose a project</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex flex w-full flex-col gap-2">
                    <p class="font-semibold">Budget Available</p>
                    <div
                        class="focus-within:border-cp-dark-blue flex items-center gap-[10px] rounded-xl border border-[#E8EAF2] bg-white p-[14px_20px] transition-all duration-300">
                        <div class="flex h-[18px] w-[18px] shrink-0">
                            <img src="assets/icons/dollar-square.svg" alt="icon">
                        </div>
                        <input type="number" name="budget" id=""
                            class="placeholder:text-cp-black w-full appearance-none bg-white font-semibold outline-none placeholder:font-normal"
                            placeholder="What is your budget" required>
                    </div>
                </div>
            </div>
            <div class="flex flex w-full flex-col gap-2">
                <p class="font-semibold">Project Brief</p>
                <div
                    class="focus-within:border-cp-dark-blue flex gap-[10px] rounded-xl border border-[#E8EAF2] bg-white p-[14px_20px] transition-all duration-300">
                    <div class="mt-[3px] flex h-[18px] w-[18px] shrink-0">
                        <img src="assets/icons/message-text.svg" alt="icon">
                    </div>
                    <textarea name="brief" id="" rows="6"
                        class="placeholder:text-cp-black w-full resize-none appearance-none bg-white font-semibold outline-none placeholder:font-normal"
                        placeholder="Tell us the project brief"></textarea>
                </div>
            </div>
            <button type="submit"
                class="bg-cp-dark-blue w-full rounded-xl p-5 font-bold text-white transition-all duration-300 hover:shadow-[0_12px_30px_0_#312ECB66]">Book
                Appointment</button>
        </form>
    </div>
    <div id="Clients"
        class="container relative z-10 mx-auto mt-20 flex max-w-[1130px] flex-col justify-center gap-5 text-center">
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
@push('after-script')
    <script src="js/contact-form.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="js/carousel.js"></script>
@endpush
