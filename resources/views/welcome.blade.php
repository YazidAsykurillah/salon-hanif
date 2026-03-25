<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salon Hanif | Salon Kecantikan di Semarang</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body class="bg-brand-bg text-brand-text antialiased selection:bg-brand-secondary selection:text-white">
    <!-- Navigation -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 border-b border-transparent">
        <nav id="header-nav" class="max-w-[1440px] mx-auto px-6 md:px-8 h-24 flex items-center justify-between transition-all duration-500">
            <!-- Left: Menu -->
            <button id="header-menu-btn" class="flex items-center gap-2 md:gap-3 group text-white transition-colors duration-500">
                <div class="w-5 md:w-6 flex flex-col gap-1 md:gap-1.5">
                    <span class="h-0.5 w-full bg-current transition-all group-hover:w-4"></span>
                    <span class="h-0.5 w-full bg-current transition-all"></span>
                </div>
                <span class="text-[10px] md:text-xs font-semibold tracking-[0.2em] uppercase hidden sm:block">Menu</span>
            </button>

            <!-- Center: Logo -->
            <a href="/" id="header-logo" class="md:absolute md:left-1/2 md:-translate-x-1/2 text-sm md:text-2xl font-bold tracking-[0.2em] md:tracking-[0.4em] text-white uppercase transition-all duration-500 whitespace-nowrap">
                SALON HANIF
            </a>

            <!-- Right: Action -->
            <a href="#contact" id="header-action" class="text-[10px] md:text-xs font-semibold tracking-[0.1em] md:tracking-[0.2em] text-white uppercase hover:opacity-70 transition-all duration-500 whitespace-nowrap">
                <span class="hidden md:inline">Book Appointment</span>
                <span class="md:hidden">Book</span>
            </a>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative h-screen w-full flex flex-col items-center justify-center overflow-hidden bg-black">
            <div class="absolute inset-0">
                <img src="{{ asset('images/indonesian_beauty_hero.png') }}" alt="Beauty Detail" class="w-full h-full object-cover object-center md:object-right opacity-80 brightness-90 animate-subtle-zoom">
                <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/60"></div>
            </div>
            
            <div class="relative z-10 w-full max-w-[1440px] mx-auto px-6 md:px-8 flex flex-col md:flex-row md:items-end md:justify-between h-full pb-20 md:pb-32">
                <!-- Left Column: Branding -->
                <div class="text-center md:text-left mt-auto md:mt-0 mb-12 md:mb-0 max-w-4xl md:max-w-2xl">
                    <h1 class="text-4xl md:text-[6.5rem] font-heading italic text-white leading-[1.1] lowercase opacity-0 translate-y-10 animate-fade-in-up">
                        Elegant Beauty Treatments
                    </h1>
                    <p class="text-[10px] md:text-sm tracking-[0.3em] uppercase text-white/60 mt-6 md:mt-8 opacity-0 translate-y-10 animate-fade-in-up [animation-delay:400ms]">
                        Experience premium care for your face and your hair.
                    </p>
                </div>

                <!-- Right Column: Scroll Decoration -->
                <div class="hidden md:flex flex-col items-center gap-6 group cursor-pointer animate-fade-in" style="animation-delay: 1s;">
                    <span class="text-[10px] font-semibold tracking-[0.3em] uppercase text-white/60 group-hover:text-white transition-colors duration-500 [writing-mode:vertical-lr] rotate-360">Scroll to Explore</span>
                    <div class="w-px h-24 bg-white/20 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-full bg-white animate-scroll-line"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-40 bg-white">
            <div class="max-w-[1440px] mx-auto px-8">
                <div class="text-center mb-32">
                    <span class="text-xs font-semibold tracking-[0.4em] uppercase text-brand-muted mb-6 block">Our Offerings</span>
                    <h2 class="text-5xl md:text-7xl font-heading italic lowercase">instantly transformative</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
                    <!-- Service 1: Facial -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[4/5] overflow-hidden bg-brand-bg mb-8">
                            <img src="{{ asset('images/svc_facial.png') }}" alt="Facial Treatment" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition-transform duration-1000">
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-heading mb-3 italic">Facial Treatment</h3>
                            <p class="text-sm tracking-wide text-brand-muted max-w-[280px] mx-auto">Radiance-boosting therapies for a flawless, glowing complexion.</p>
                        </div>
                    </div>

                    <!-- Service 2: Hair Styling -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[4/5] overflow-hidden bg-brand-bg mb-8">
                            <img src="{{ asset('images/svc_hair_styling.png') }}" alt="Hair Styling" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition-transform duration-1000">
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-heading mb-3 italic">Hair Styling</h3>
                            <p class="text-sm tracking-wide text-brand-muted max-w-[280px] mx-auto">Precision cuts and bespoke styling tailored to your unique persona.</p>
                        </div>
                    </div>

                    <!-- Service 3: Hair Spa -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[4/5] overflow-hidden bg-brand-bg mb-8">
                            <img src="{{ asset('images/svc_hair_spa.png') }}" alt="Hair Spa" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition-transform duration-1000">
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-heading mb-3 italic">Hair Spa</h3>
                            <p class="text-sm tracking-wide text-brand-muted max-w-[280px] mx-auto">Deep nourishment treatments to restore vitality and resilience.</p>
                        </div>
                    </div>

                    <!-- Service 4: Nail Art -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[4/5] overflow-hidden bg-brand-bg mb-8">
                            <img src="{{ asset('images/svc_nail_art.png') }}" alt="Nail Art" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition-transform duration-1000">
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-heading mb-3 italic">Nail Art</h3>
                            <p class="text-sm tracking-wide text-brand-muted max-w-[280px] mx-auto">Artistic designs and meticulous grooming for effortless elegance.</p>
                        </div>
                    </div>

                    <!-- Service 5: Makeup Artist -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[4/5] overflow-hidden bg-brand-bg mb-8">
                            <img src="{{ asset('images/svc_makeup.png') }}" alt="Makeup Artist" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition-transform duration-1000">
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-heading mb-3 italic">Makeup Artist</h3>
                            <p class="text-sm tracking-wide text-brand-muted max-w-[280px] mx-auto">High-fashion artistry and bespoke transformation for your most defining moments.</p>
                        </div>
                    </div>

                    <!-- Service 6: Eyelash / Brow -->
                    <div class="group cursor-pointer">
                        <div class="aspect-[4/5] overflow-hidden bg-brand-bg mb-8">
                            <img src="{{ asset('images/svc_eyelash.png') }}" alt="Eyelash / Brow" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition-transform duration-1000">
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-heading mb-3 italic">Eyelash / Brow</h3>
                            <p class="text-sm tracking-wide text-brand-muted max-w-[280px] mx-auto">Expert enhancements for a naturally striking and seductive gaze.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Aesthetic About Section -->
        <section id="about" class="bg-brand-secondary text-white py-40">
            <div class="max-w-[1440px] mx-auto px-8 flex flex-col lg:flex-row gap-24 items-center">
                <div class="flex-1 order-2 lg:order-1">
                    <h2 class="text-5xl md:text-7xl font-heading mb-12 italic lowercase">Our philosophy</h2>
                    <p class="text-xl md:text-2xl leading-relaxed text-white/80 max-w-2xl mb-12">We believe that beauty is not a mask, but a revelation. Our masters are trained to see the unique symmetry in every face, the natural movement in every lock, and the silent story in every detail.</p>
                    <div class="flex gap-12">
                        <div>
                            <span class="block text-4xl font-heading italic mb-2">10</span>
                            <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/40">Years of Experience</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-heading italic mb-2">5k</span>
                            <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/40">Clients Served</span>
                        </div>
                    </div>
                </div>
                <div class="flex-1 order-1 lg:order-2 w-full">
                    <div class="aspect-square relative overflow-hidden">
                        <img src="{{ asset('images/salon_hero_premium_1774021513902.png') }}" alt="Philosophy" class="w-full h-full object-cover brightness-75">
                    </div>
                </div>
            </div>
        </section>

        <!-- Before & After / Portfolio Section -->
        <section id="portfolio" class="py-40 bg-white overflow-hidden">
            <div class="max-w-[1440px] mx-auto px-8">
                <div class="flex flex-col md:flex-row items-end justify-between mb-32 gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold tracking-[0.4em] uppercase text-brand-muted mb-6 block">Real Results</span>
                        <h2 class="text-5xl md:text-7xl font-heading italic lowercase">the transformation</h2>
                    </div>
                    <div class="flex gap-8 text-[10px] font-bold tracking-[0.2em] uppercase text-brand-muted">
                        <span data-filter="all" class="portfolio-tab text-black border-b border-black pb-1 cursor-pointer transition-all">All</span>
                        <span data-filter="hair" class="portfolio-tab hover:text-black cursor-pointer transition-all pb-1 border-b border-transparent">Hair</span>
                        <span data-filter="face" class="portfolio-tab hover:text-black cursor-pointer transition-all pb-1 border-b border-transparent">Face</span>
                    </div>
                </div>

                <!-- Comparison Grid -->
                <div id="portfolio-grid" class="space-y-40">
                    <!-- Transformation 1: Hair -->
                    <div class="portfolio-item group transition-all duration-700" data-category="hair">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                            <div class="relative aspect-[4/5] overflow-hidden bg-brand-bg">
                                <img src="{{ asset('images/hair_before.png') }}" alt="Hair Before" class="w-full h-full object-cover">
                                <div class="absolute bottom-6 left-6 px-4 py-2 bg-black/40 backdrop-blur-md text-white text-[10px] font-bold tracking-widest uppercase">Before</div>
                            </div>
                            <div class="relative aspect-[4/5] overflow-hidden bg-brand-bg">
                                <img src="{{ asset('images/hair_after.png') }}" alt="Hair After" class="w-full h-full object-cover">
                                <div class="absolute bottom-6 left-6 px-4 py-2 bg-black/40 backdrop-blur-md text-white text-[10px] font-bold tracking-widest uppercase">After</div>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-between items-end">
                            <div>
                                <span class="text-[10px] font-bold tracking-widest uppercase text-brand-muted mb-2 block">Hair Couture</span>
                                <h3 class="text-2xl font-heading italic">Vitality Restoration</h3>
                            </div>
                            <p class="text-xs text-brand-muted max-w-xs text-right italic">Deep nourishment and precision styling for structural integrity.</p>
                        </div>
                    </div>

                    <!-- Transformation 2: Face -->
                    <div class="portfolio-item group transition-all duration-700" data-category="face">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                            <div class="relative aspect-[4/5] overflow-hidden bg-brand-bg">
                                <img src="{{ asset('images/face_before.png') }}" alt="Face Before" class="w-full h-full object-cover">
                                <div class="absolute bottom-6 left-6 px-4 py-2 bg-black/40 backdrop-blur-md text-white text-[10px] font-bold tracking-widest uppercase">Before</div>
                            </div>
                            <div class="relative aspect-[4/5] overflow-hidden bg-brand-bg">
                                <img src="{{ asset('images/face_after.png') }}" alt="Face After" class="w-full h-full object-cover">
                                <div class="absolute bottom-6 left-6 px-4 py-2 bg-black/40 backdrop-blur-md text-white text-[10px] font-bold tracking-widest uppercase">After</div>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-between items-end">
                            <div>
                                <span class="text-[10px] font-bold tracking-widest uppercase text-brand-muted mb-2 block">Dermal Therapy</span>
                                <h3 class="text-2xl font-heading italic">Radiance Protocol</h3>
                            </div>
                            <p class="text-xs text-brand-muted max-w-xs text-right italic">Intensive hydration and rejuvenation for instant luminosity.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-40 bg-brand-bg">
            <div class="max-w-[1440px] mx-auto px-8">
                <div class="flex flex-col md:flex-row items-end justify-between mb-32 gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold tracking-[0.4em] uppercase text-brand-muted mb-6 block">Testimonials</span>
                        <h2 class="text-5xl md:text-7xl font-heading italic lowercase">client experiences</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    <!-- Testimonial 1 -->
                    <div class="flex flex-col">
                        <div class="aspect-square overflow-hidden mb-8 grayscale-0 md:grayscale hover:grayscale-0 transition-all duration-700">
                            <img src="{{ asset('images/customer_1.png') }}" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div class="flex mb-4 text-brand-text">
                            <span class="text-xs">★★★★★</span>
                        </div>
                        <p class="text-lg italic font-heading mb-6">"an absolute revelation. the precision and care taken with my hair transformation was unlike any other salon."</p>
                        <span class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">Eleanor Vane</span>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="flex flex-col">
                        <div class="aspect-square overflow-hidden mb-8 grayscale-0 md:grayscale hover:grayscale-0 transition-all duration-700">
                            <img src="{{ asset('images/hair_after.png') }}" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div class="flex mb-4 text-brand-text">
                            <span class="text-xs">★★★★★</span>
                        </div>
                        <p class="text-lg italic font-heading mb-6">"the hanif philosophy is real. i left feeling more like myself than ever before. truly bespoke service."</p>
                        <span class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">Sophia Chen</span>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="flex flex-col">
                        <div class="aspect-square overflow-hidden mb-8 grayscale-0 md:grayscale hover:grayscale-0 transition-all duration-700">
                            <img src="{{ asset('images/face_after.png') }}" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div class="flex mb-4 text-brand-text">
                            <span class="text-xs">★★★★★</span>
                        </div>
                        <p class="text-lg italic font-heading mb-6">"my skin has never looked more radiant. the quiet luxury of the studio space is an experience in itself."</p>
                        <span class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">Margot Rossi</span>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="flex flex-col">
                        <div class="aspect-square overflow-hidden mb-8 grayscale-0 md:grayscale hover:grayscale-0 transition-all duration-700">
                            <img src="{{ asset('images/svc_makeup.png') }}" alt="Client" class="w-full h-full object-cover text-black">
                        </div>
                        <div class="flex mb-4 text-brand-text">
                            <span class="text-xs">★★★★★</span>
                        </div>
                        <p class="text-lg italic font-heading mb-6">"striking results without being overdone. exactly the kind of sophisticated makeup artistry i was looking for."</p>
                        <span class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">Isabella Thorne</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-40 bg-white">
            <div class="max-w-[1440px] mx-auto px-8">
                <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-32 gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold tracking-[0.4em] uppercase text-brand-muted mb-6 block">Pricing</span>
                        <h2 class="text-5xl md:text-7xl font-heading italic lowercase">our price list</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-24">
                    <!-- Category 1: Hair -->
                    <div class="group border-b border-brand-bg pb-12 hover:border-black transition-colors duration-700">
                        <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-brand-muted mb-8 block">Hair Couture</span>
                        <h3 class="text-3xl font-heading italic mb-6">Hair Services</h3>
                        <div class="flex items-baseline gap-4 mb-8">
                            <span class="text-xs text-brand-muted">Starting from</span>
                            <span class="text-2xl font-light">Rp 50.000</span>
                        </div>
                        <p class="text-xs leading-relaxed text-brand-muted mb-8">Precision cutting, bespoke styling, and restorative spa treatments for vitality and movement.</p>
                    </div>

                    <!-- Category 2: Facial -->
                    <div class="group border-b border-brand-bg pb-12 hover:border-black transition-colors duration-700">
                        <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-brand-muted mb-8 block">Skin Rituals</span>
                        <h3 class="text-3xl font-heading italic mb-6">Facial Treatment</h3>
                        <div class="flex items-baseline gap-4 mb-8">
                            <span class="text-xs text-brand-muted">Starting from</span>
                            <span class="text-2xl font-light">Rp 150.000</span>
                        </div>
                        <p class="text-xs leading-relaxed text-brand-muted mb-8">Deep cleansing, hydration, and advanced dermal therapies tailored to your skin's unique needs.</p>
                    </div>


                    <!-- Category 3: Make Up -->
                    <div class="group border-b border-brand-bg pb-12 hover:border-black transition-colors duration-700">
                        <span class="text-[10px] font-bold tracking-[0.3em] uppercase text-brand-muted mb-8 block">Bespoke Artistry</span>
                        <h3 class="text-3xl font-heading italic mb-6">Makeup Artist</h3>
                        <div class="flex items-baseline gap-4 mb-8">
                            <span class="text-xs text-brand-muted">Starting from</span>
                            <span class="text-2xl font-light">Rp 250.000</span>
                        </div>
                        <p class="text-xs leading-relaxed text-brand-muted mb-8">Professional makeup services for weddings, events, and photoshoots, tailored to reveal your best self.</p>
                    </div>
                </div>

                <div class="mt-32 text-center">
                    <a href="#" class="inline-block text-[10px] font-bold tracking-[0.4em] uppercase text-black border-b border-black pb-2 hover:text-brand-muted hover:border-brand-muted transition-all duration-500">View Full Pricing</a>
                </div>
            </div>
        </section>

        <!-- Final Call to Action -->
        <section id="contact" class="relative py-60 bg-brand-secondary text-white overflow-hidden text-center">
            <div class="absolute inset-0 opacity-20">
                <img src="{{ asset('images/salon_hero_premium_1774021513902.png') }}" alt="Salon Atmosphere" class="w-full h-full object-cover grayscale">
            </div>
            <div class="relative z-10 max-w-4xl mx-auto px-8">
                <span class="text-xs font-semibold tracking-[0.4em] uppercase text-white/40 mb-12 block">Your Exclusive Experience</span>
                <h2 class="text-5xl md:text-[6rem] font-heading leading-tight mb-20 italic lowercase">ready to look and feel your best?</h2>
                
                <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                    <a href="https://wa.me/+6281291513745" class="w-full md:w-auto px-16 py-6 bg-white text-brand-primary text-[10px] font-bold tracking-[0.4em] uppercase hover:bg-brand-bg transition-all duration-500">Book via WhatsApp</a>
                    <button id="open-reservation" class="w-full md:w-auto px-16 py-6 border border-white/20 text-white text-[10px] font-bold tracking-[0.4em] uppercase hover:bg-white hover:text-brand-primary transition-all duration-500">Make a Reservation</button>
                </div>
            </div>
        </section>

        <!-- Location & Contact Section -->
        <section id="location" class="py-40 bg-brand-secondary text-white">
            <div class="max-w-[1440px] mx-auto px-8">

                <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-32 gap-8">
                    <div class="max-w-2xl">
                        <span class="text-xs font-semibold tracking-[0.4em] uppercase text-white/40 mb-6 block">Our Studio</span>
                        <h2 class="text-5xl md:text-7xl font-heading italic lowercase">location & contact</h2>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-start">
                    <!-- Details Column -->
                    <div class="flex flex-col justify-center h-full order-2 lg:order-1 pt-12 lg:pt-0">
                        <div class="space-y-20">
                            <!-- Address -->
                            <div>
                                <span class="text-[10px] font-bold tracking-[0.4em] uppercase text-white/40 mb-6 block">The Address</span>
                                <p class="text-2xl md:text-4xl font-heading italic leading-relaxed">Jl. Durian Raya No. 12C,<br>,Srondol Wetan, Banyumanik Kota Semarang</p>
                            </div>

                            <!-- Opening Hours -->
                            <div>
                                <span class="text-[10px] font-bold tracking-[0.4em] uppercase text-white/40 mb-6 block">Studio Hours</span>
                                <div class="grid grid-cols-2 gap-y-4 max-w-sm">
                                    <span class="text-sm tracking-wide text-white/60">Mon — Sat</span>
                                    <span class="text-sm font-heading italic text-right">09:00 — 20:00</span>
                                    <span class="text-sm tracking-wide text-white/60">Sunday</span>
                                    <span class="text-sm font-heading italic text-right">Closed</span>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div>
                                <span class="text-[10px] font-bold tracking-[0.4em] uppercase text-white/40 mb-6 block">Quick Inquiries</span>
                                <a href="tel:+6281291513745" class="text-2xl md:text-4xl font-heading italic border-b border-white/10 pb-1 hover:border-white transition-colors block w-fit">+62 812 9151 3745</a>
                            </div>
                        </div>
                    </div>

                    <!-- Map Column -->
                    <div class="aspect-square bg-brand-bg relative overflow-hidden group order-1 lg:order-2 border border-white/5">
                        <iframe 
                            src="https://maps.google.com/maps?q=Salon%20Hanif%2C%20Jl.%20Durian%20Raya%20No.12%20C%2C%20Srondol%20Wetan%2C%20Kec.%20Banyumanik%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050263&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                            width="100%" 
                            height="100%" 
                            style="border:0; filter: grayscale(1) contrast(1.2) invert(0.9);" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="grayscale opacity-60 group-hover:opacity-100 transition-all duration-1000"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-white py-20 border-t border-black/5">
        <div class="max-w-[1440px] mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-12">
            <span class="text-2xl font-bold tracking-[0.4em] uppercase">SALON HANIF</span>
            <div class="flex gap-10">
                <a href="https://www.instagram.com/salonhanif/" target="_blank" class="text-[10px] font-bold tracking-widest uppercase hover:opacity-50 transition-opacity">Instagram</a>
                <a href="#" class="text-[10px] font-bold tracking-widest uppercase hover:opacity-50 transition-opacity">Facebook</a>
            </div>
            <p class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">&copy; 2026 Crafted with precision.</p>
        </div>
    </footer>
 
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] hidden bg-brand-secondary/95 backdrop-blur-xl transition-all duration-700 items-center justify-center opacity-0">
        <button id="close-menu" class="absolute top-8 left-8 text-white/40 hover:text-white transition-colors">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
        
        <div class="flex flex-col items-center justify-center h-full space-y-12">
            <nav class="text-center space-y-8">
                <a href="#services" class="menu-link block text-4xl md:text-6xl font-heading italic text-white/40 hover:text-white transition-all duration-500 lowercase opacity-0 translate-y-10">services</a>
                <a href="#about" class="menu-link block text-4xl md:text-6xl font-heading italic text-white/40 hover:text-white transition-all duration-500 lowercase opacity-0 translate-y-10">About Us</a>
                <a href="#portfolio" class="menu-link block text-4xl md:text-6xl font-heading italic text-white/40 hover:text-white transition-all duration-500 lowercase opacity-0 translate-y-10">Gallery</a>
                <a href="#contact" class="menu-link block text-4xl md:text-6xl font-heading italic text-white/40 hover:text-white transition-all duration-500 lowercase opacity-0 translate-y-10">contact</a>
            </nav>
            
            <div class="flex gap-8 mt-12 opacity-0 translate-y-10" id="menu-socials">
                <a href="https://www.instagram.com/salonhanif/" target="_blank" class="text-[10px] font-bold tracking-[0.4em] uppercase text-white/40 hover:text-white transition-colors">Instagram</a>
                <a href="#" class="text-[10px] font-bold tracking-[0.4em] uppercase text-white/40 hover:text-white transition-colors">Facebook</a>
            </div>
        </div>
    </div>

    <!-- Reservation Modal -->
    <div id="reservation-modal" class="fixed inset-0 z-[100] hidden overflow-y-auto items-start justify-center p-4 sm:p-12 py-12 sm:py-24">
        <div id="modal-backdrop" class="fixed inset-0 bg-black/80 backdrop-blur-sm opacity-0 transition-opacity duration-500"></div>
        <div id="modal-content" class="relative z-10 w-full max-w-2xl bg-white p-10 md:p-16 opacity-0 translate-y-10 transition-all duration-700 delay-100 my-auto">
            <button id="close-reservation" class="absolute top-8 right-8 text-black/20 hover:text-black transition-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
            <div class="mb-12">
                <span class="text-[10px] font-bold tracking-[0.4em] uppercase text-brand-muted mb-4 block">Reservation</span>
                <h2 class="text-4xl md:text-5xl font-heading italic lowercase">request an appointment</h2>
            </div>
            <form class="space-y-10">
                <div class="space-y-2">
                    <label class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">Name</label>
                    <input type="text" class="w-full bg-transparent border-b border-black/10 py-4 text-xl font-heading italic focus:outline-none focus:border-black transition-colors placeholder:text-black/5" placeholder="Your full name">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">WhatsApp Number</label>
                    <input type="text" class="w-full bg-transparent border-b border-black/10 py-4 text-xl font-heading italic focus:outline-none focus:border-black transition-colors placeholder:text-black/5" placeholder="+62">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-bold tracking-widest uppercase text-brand-muted">Message</label>
                    <textarea rows="2" class="w-full bg-transparent border-b border-black/10 py-4 text-xl font-heading italic focus:outline-none focus:border-black transition-colors placeholder:text-black/5 resize-none" placeholder="Preferred date, time, or service..."></textarea>
                </div>
                <button type="submit" class="w-full py-6 bg-black text-white text-[10px] font-bold tracking-[0.4em] uppercase hover:bg-brand-secondary transition-colors duration-500 mt-12">Confirm Request</button>
            </form>
        </div>
    </div>

    <!-- Animations Library or Custom -->
    <style>
        @keyframes subtle-zoom {
            0% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        .animate-subtle-zoom {
            animation: subtle-zoom 10s ease-out forwards;
        }
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 1.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        @keyframes scroll-line {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }
        .animate-scroll-line {
            animation: scroll-line 2s infinite ease-in-out;
        }
        .animate-fade-in {
            animation: opacity-fade 2s ease-in forwards;
        }
        @keyframes opacity-fade {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .portfolio-item.hidden-item {
            display: none;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .portfolio-tab.active {
            @apply text-black border-black;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.portfolio-tab');
            const items = document.querySelectorAll('.portfolio-item');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const filter = tab.getAttribute('data-filter');

                    // Update Tab Styles
                    tabs.forEach(t => {
                        t.classList.remove('text-black', 'border-black');
                        t.classList.add('text-brand-muted', 'border-transparent');
                    });
                    tab.classList.remove('text-brand-muted', 'border-transparent');
                    tab.classList.add('text-black', 'border-black');

                    // Filter Items
                    items.forEach(item => {
                        const category = item.getAttribute('data-category');
                        if (filter === 'all' || category === filter) {
                            item.classList.remove('hidden-item');
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                item.classList.add('hidden-item');
                            }, 500);
                        }
                    });
                });
            });

            // Header Scroll Effect
            const header = document.getElementById('main-header');
            const nav = document.getElementById('header-nav');
            const logo = document.getElementById('header-logo');
            const menuBtn = document.getElementById('header-menu-btn');
            const actionBtn = document.getElementById('header-action');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    header.classList.add('bg-white/70', 'backdrop-blur-md', 'border-black/5');
                    header.classList.remove('border-transparent');
                    nav.classList.replace('h-24', 'h-16');
                    logo.classList.replace('text-white', 'text-black');
                    logo.classList.replace('text-2xl', 'text-xl');
                    menuBtn.classList.replace('text-white', 'text-black');
                    actionBtn.classList.replace('text-white', 'text-black');
                } else {
                    header.classList.remove('bg-white/70', 'backdrop-blur-md', 'border-black/5');
                    header.classList.add('border-transparent');
                    nav.classList.replace('h-16', 'h-24');
                    logo.classList.replace('text-black', 'text-white');
                    logo.classList.replace('text-xl', 'text-2xl');
                    menuBtn.classList.replace('text-black', 'text-white');
                    actionBtn.classList.replace('text-black', 'text-white');
                }
            });

            // Mobile Menu Logic
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMenuBtn = document.getElementById('close-menu');
            const menuLinks = document.querySelectorAll('.menu-link');
            const menuSocials = document.getElementById('menu-socials');

            const toggleMenu = (show) => {
                if (show) {
                    mobileMenu.classList.remove('hidden');
                    mobileMenu.classList.add('flex');
                    setTimeout(() => {
                        mobileMenu.classList.replace('opacity-0', 'opacity-100');
                        menuLinks.forEach((link, i) => {
                            setTimeout(() => {
                                link.classList.remove('opacity-0', 'translate-y-10');
                            }, i * 100 + 200);
                        });
                        setTimeout(() => {
                            menuSocials.classList.remove('opacity-0', 'translate-y-10');
                        }, 600);
                    }, 10);
                    document.body.style.overflow = 'hidden';
                } else {
                    menuLinks.forEach((link) => {
                        link.classList.add('opacity-0', 'translate-y-10');
                    });
                    menuSocials.classList.add('opacity-0', 'translate-y-10');
                    mobileMenu.classList.replace('opacity-100', 'opacity-0');
                    setTimeout(() => {
                        mobileMenu.classList.add('hidden');
                        mobileMenu.classList.remove('flex');
                    }, 700);
                    document.body.style.overflow = '';
                }
            };

            menuBtn.addEventListener('click', () => toggleMenu(true));
            closeMenuBtn.addEventListener('click', () => toggleMenu(false));
            menuLinks.forEach(link => {
                link.addEventListener('click', () => toggleMenu(false));
            });

            // Reservation Modal Logic
            const modal = document.getElementById('reservation-modal');
            const openBtn = document.getElementById('open-reservation');
            const closeBtn = document.getElementById('close-reservation');
            const backdrop = document.getElementById('modal-backdrop');
            const content = document.getElementById('modal-content');

            const openModal = () => {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                setTimeout(() => {
                    backdrop.classList.add('opacity-100');
                    content.classList.add('opacity-100', 'translate-y-0');
                }, 10);
                document.body.style.overflow = 'hidden';
            };

            const closeModal = () => {
                backdrop.classList.remove('opacity-100');
                content.classList.remove('opacity-100', 'translate-y-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }, 700);
                document.body.style.overflow = '';
            };

            openBtn.addEventListener('click', openModal);
            closeBtn.addEventListener('click', closeModal);
            backdrop.addEventListener('click', closeModal);
        });
    </script>
</body>
</html>
