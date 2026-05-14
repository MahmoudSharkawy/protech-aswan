<!DOCTYPE html>
<html lang="en" x-data="{ mobileMenu: false, chatOpen: false }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech | Mobile Software & AI Excellence</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] { display: none !important; }
        @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .animate-marquee { animation: marquee 30s linear infinite; }
        .glass { background: rgba(10, 18, 11, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(34, 197, 94, 0.2); }
    </style>
</head>
<body class="bg-[#050a06] text-gray-200 selection:bg-green-500 selection:text-black">

    <!-- NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] border-b border-green-900/30 glass">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center shadow-[0_0_20px_rgba(34,197,94,0.4)]">
                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <span class="text-2xl font-black tracking-tighter text-white uppercase">Green<span class="text-green-500">Tech</span></span>
            </div>

            <!-- DESKTOP MENU -->
            <div class="hidden lg:flex items-center gap-8 font-semibold text-sm tracking-wide">
                <a href="/" class="hover:text-green-500 transition">HOME</a>
                <div class="relative group py-4">
                    <button class="flex items-center gap-1 hover:text-green-500 uppercase">Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg></button>
                    <div class="absolute top-full -left-4 w-64 glass p-4 rounded-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all shadow-2xl">
                        <a href="#services" class="block p-3 hover:bg-green-500/10 rounded-xl">Mobile App Dev</a>
                        <a href="#services" class="block p-3 hover:bg-green-500/10 rounded-xl">AI & Machine Learning</a>
                        <a href="#services" class="block p-3 hover:bg-green-500/10 rounded-xl">Cloud & Servers</a>
                        <a href="#services" class="block p-3 hover:bg-green-500/10 rounded-xl">Web Engineering</a>
                    </div>
                </div>
                <a href="#projects" class="hover:text-green-500 transition uppercase">Projects</a>
                <a href="#contact" class="bg-green-600 text-black px-6 py-2.5 rounded-full hover:bg-green-400 transition-all shadow-[0_0_15px_rgba(34,197,94,0.3)]">HIRE US</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#020503] border-t border-green-900/30 pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="space-y-6">
                <span class="text-2xl font-bold text-white">GreenTech.</span>
                <p class="text-gray-500 text-sm leading-relaxed">Advanced software engineering hub specialized in Mobile & AI systems for the next generation of startups.</p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full border border-green-900/50 flex items-center justify-center hover:bg-green-500 hover:text-black transition">𝕏</a>
                    <a href="#" class="w-10 h-10 rounded-full border border-green-900/50 flex items-center justify-center hover:bg-green-500 hover:text-black transition">in</a>
                </div>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Expertise</h4>
                <ul class="space-y-4 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-green-500">iOS & Android Apps</a></li>
                    <li><a href="#" class="hover:text-green-500">Custom AI Agents</a></li>
                    <li><a href="#" class="hover:text-green-500">Cloud Architecture</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Contact</h4>
                <ul class="space-y-4 text-sm text-gray-500">
                    <li class="flex items-center gap-3">📞 +20 123 456 789</li>
                    <li class="flex items-center gap-3 text-green-500 font-bold">🟢 WhatsApp: +20 100 000 000</li>
                    <li class="flex items-start gap-3">📍 Cairo Tech District, Egypt</li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">HQ Location</h4>
                <div class="rounded-xl overflow-hidden grayscale opacity-50 border border-green-900/50 h-32">
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.123!2d31.200!3d30.05!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDAzJzAwLjAiTiAzMcKwMTInMDAuMCJF!5e0!3m2!1sen!2seg!4v1715678000000"></iframe>
                </div>
            </div>
        </div>
        <div class="border-t border-green-900/20 pt-8 text-center text-xs text-gray-600">
            &copy; 2026 GreenTech Mobile Software. All Rights Reserved.
        </div>
    </footer>

    <!-- AI CHATBOT -->
    <div class="fixed bottom-8 right-8 z-[200]">
        <button @click="chatOpen = !chatOpen" class="w-16 h-16 bg-green-500 rounded-full shadow-[0_0_30px_rgba(34,197,94,0.5)] flex items-center justify-center hover:scale-110 transition-transform">
            <span x-show="!chatOpen" class="text-2xl">🤖</span>
            <span x-show="chatOpen" class="text-2xl text-black">&times;</span>
        </button>
        <div x-show="chatOpen" x-cloak x-transition class="absolute bottom-20 right-0 w-80 glass rounded-3xl overflow-hidden shadow-2xl">
            <div class="bg-green-600 p-4 text-black font-black flex justify-between">
                <span>AI ASSISTANT</span>
                <span class="bg-black/20 px-2 rounded text-[10px]">ONLINE</span>
            </div>
            <div class="h-80 p-4 space-y-4 overflow-y-auto">
                <div class="bg-green-500/10 p-3 rounded-2xl text-xs border border-green-500/20">
                    Welcome to GreenTech! How can I help with your Mobile App project today?
                </div>
            </div>
            <div class="p-4 border-t border-green-900/30">
                <input type="text" placeholder="Ask AI..." class="w-full bg-transparent border-none outline-none text-sm">
            </div>
        </div>
    </div>
</body>
</html>