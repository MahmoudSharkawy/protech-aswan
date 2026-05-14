@extends('layouts.app')

@section('content')

<!-- 1. HERO SECTION -->
<section class="relative pt-48 pb-32 px-6">
    <div class="max-w-7xl mx-auto text-center relative z-10">
        <h1 class="text-7xl md:text-[10rem] font-black text-white leading-none tracking-tighter uppercase">
            Build <span class="text-green-500">Green.</span>
        </h1>
        <p class="max-w-2xl mx-auto mt-8 text-lg text-gray-400">
            High-performance mobile software engineering for tech-driven startups. Powered by Laravel 13 & AI.
        </p>
        <div class="mt-12 flex justify-center gap-6">
            <a href="#contact" class="bg-white text-black px-10 py-4 rounded-full font-bold hover:bg-green-500 transition-all">START PROJECT</a>
            <a href="#projects" class="border border-green-900 px-10 py-4 rounded-full font-bold hover:border-green-500 transition-all">OUR WORK</a>
        </div>
    </div>
    <!-- BACKGROUND BLUR -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-green-500/10 rounded-full blur-[120px]"></div>
</section>

<!-- 2. TECH STACK MARQUEE -->
<section class="py-10 bg-green-500 overflow-hidden border-y border-black">
    <div class="flex whitespace-nowrap animate-marquee font-black text-black text-2xl uppercase italic">
        <div class="flex items-center gap-12 px-6">
            <span>Laravel 13</span> <span>•</span> <span>Flutter Mobile</span> <span>•</span> <span>AWS Cloud</span> <span>•</span> <span>AI SDK</span> <span>•</span> <span>React Native</span> <span>•</span> <span>PostgreSQL</span>
        </div>
        <div class="flex items-center gap-12 px-6">
            <span>Laravel 13</span> <span>•</span> <span>Flutter Mobile</span> <span>•</span> <span>AWS Cloud</span> <span>•</span> <span>AI SDK</span> <span>•</span> <span>React Native</span> <span>•</span> <span>PostgreSQL</span>
        </div>
    </div>
</section>

<!-- 3. SERVICES SECTION -->
<section id="services" class="py-32 max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="group p-10 glass rounded-[2.5rem] hover:bg-green-500 transition-all duration-500">
            <div class="w-16 h-16 bg-green-500 group-hover:bg-black rounded-2xl flex items-center justify-center mb-8 transition-colors">
                📱
            </div>
            <h3 class="text-2xl font-bold mb-4 group-hover:text-black">Mobile Engineering</h3>
            <p class="text-gray-500 group-hover:text-black/80 text-sm leading-relaxed">Native-grade cross-platform apps built with Flutter and optimized for high-volume users.</p>
        </div>
        <div class="group p-10 glass rounded-[2.5rem] hover:bg-green-500 transition-all duration-500">
            <div class="w-16 h-16 bg-green-500 group-hover:bg-black rounded-2xl flex items-center justify-center mb-8 transition-colors">
                🧠
            </div>
            <h3 class="text-2xl font-bold mb-4 group-hover:text-black">AI & Machine Learning</h3>
            <p class="text-gray-500 group-hover:text-black/80 text-sm leading-relaxed">Integrating neural networks and LLMs into your mobile ecosystem for smarter automation.</p>
        </div>
        <div class="group p-10 glass rounded-[2.5rem] hover:bg-green-500 transition-all duration-500">
            <div class="w-16 h-16 bg-green-500 group-hover:bg-black rounded-2xl flex items-center justify-center mb-8 transition-colors">
                🌐
            </div>
            <h3 class="text-2xl font-bold mb-4 group-hover:text-black">Cloud Architecture</h3>
            <p class="text-gray-500 group-hover:text-black/80 text-sm leading-relaxed">Zero-downtime server environments scaled on AWS and Google Cloud with edge-layer security.</p>
        </div>
    </div>
</section>

<!-- 4. PROJECT SHOWCASE -->
<section id="projects" class="py-32 px-6 bg-[#070d08]">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-16">Featured <span class="text-green-500">Case Studies</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="relative group overflow-hidden rounded-[3rem]">
                <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1200" class="w-full h-[500px] object-cover group-hover:scale-110 transition-transform duration-700 opacity-60">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent p-12 flex flex-col justify-end">
                    <span class="text-green-500 font-bold mb-2">MOBILE APP</span>
                    <h4 class="text-3xl font-bold text-white">The EcoRide Ecosystem</h4>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-[3rem]">
                <img src="https://images.unsplash.com/photo-1551288049-bbbda536339a?auto=format&fit=crop&w=1200" class="w-full h-[500px] object-cover group-hover:scale-110 transition-transform duration-700 opacity-60">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent p-12 flex flex-col justify-end">
                    <span class="text-green-500 font-bold mb-2">AI DASHBOARD</span>
                    <h4 class="text-3xl font-bold text-white">Predictive Analytics Hub</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. GLOBAL IMPACT & MAP -->
<section class="py-32 max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
    <div>
        <h2 class="text-5xl font-black text-white mb-8">Engineering from <span class="text-green-500">Egypt</span> to the World.</h2>
        <p class="text-gray-400 mb-10">Our Cairo-based engineering team operates with a global mindset, serving clients across 4 continents with precision and scale.</p>
        <div class="grid grid-cols-2 gap-8">
            <div>
                <span class="text-4xl font-black text-white block">24/7</span>
                <span class="text-gray-600 text-xs uppercase tracking-widest">Global Support</span>
            </div>
            <div>
                <span class="text-4xl font-black text-white block">99.9%</span>
                <span class="text-gray-600 text-xs uppercase tracking-widest">Uptime Record</span>
            </div>
        </div>
    </div>
    <div class="h-[500px] rounded-[3rem] overflow-hidden border border-green-500/20 relative shadow-[0_0_60px_rgba(34,197,94,0.1)]">
        <iframe 
            class="w-full h-full grayscale invert contrast-125 opacity-70"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116213.91617478052!2d32.812328!3d24.088938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1451000000000001%3A0x603f095690666016!2sCairo!5e0!3m2!1sen!2seg!4v1715678000000">
        </iframe>
        <div class="absolute bottom-8 left-8 bg-green-500 p-6 rounded-3xl text-black">
            <p class="font-black">GREEN TECH HQ</p>
            <p class="text-sm font-medium">Cairo Technology Hub, Egypt</p>
        </div>
    </div>
</section>

@endsection