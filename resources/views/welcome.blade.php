<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProTech Aswan | Enterprise Software & Cloud Infrastructure</title>
    
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #020617; color: #94a3b8; }
        .glass { background: rgba(15, 23, 42, 0.7); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .neon-card:hover { border-color: #3b82f6; box-shadow: 0 0 40px rgba(59, 130, 246, 0.1); transform: translateY(-8px); transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .grad-blue { background: linear-gradient(90deg, #60a5fa, #22d3ee); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        input, textarea, select { background: #0f172a !important; border: 1px solid rgba(255,255,255,0.05) !important; color: white !important; }
        input:focus { border-color: #3b82f6 !important; outline: none; }
    </style>
</head>
<body class="antialiased selection:bg-blue-500/30">

    <!-- NAVIGATION -->
    <nav class="fixed top-0 w-full z-[100] glass border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-600/40">
                    <i data-lucide="layers" class="text-white w-6 h-6"></i>
                </div>
                <span class="text-2xl font-extrabold text-white tracking-tighter">PRO<span class="text-blue-500 text-lg uppercase ml-1">Tech</span></span>
            </div>
            <div class="hidden lg:flex gap-10 items-center text-[10px] font-black uppercase tracking-[0.2em]">
                <a href="#software" class="hover:text-blue-500 transition">Development</a>
                <a href="#it" class="hover:text-blue-500 transition">Infrastructure</a>
                <a href="#industries" class="hover:text-blue-500 transition">Solutions</a>
                <a href="#contact" class="bg-blue-600 text-white px-6 py-2.5 rounded-full hover:bg-blue-700 transition shadow-lg shadow-blue-600/20">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="relative pt-64 pb-32 px-6 overflow-hidden text-center">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[600px] bg-blue-600/10 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="max-w-4xl mx-auto relative z-10">
            <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter leading-tight">
                ELITE DIGITAL <br><span class="grad-blue text-transparent bg-clip-text">ARCHITECTS.</span>
            </h1>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-12 font-medium">
                From high-conversion software to enterprise-grade cloud hosting. We build the systems that power modern business in Aswan and beyond.
            </p>
        </div>
    </header>

    <!-- SECTION 1: SOFTWARE & PAYMENTS -->
    <section id="software" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="mb-16">
            <h2 class="text-4xl font-black text-white uppercase tracking-tighter">Software & FinTech</h2>
            <div class="h-1 w-20 bg-blue-600 mt-2"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            @php
                $software = [
                    ['icon' => 'smartphone', 'title' => 'Mobile Development', 'desc' => 'iOS (Swift), Android (Kotlin), and specialized Huawei AppGallery ecosystems.'],
                    ['icon' => 'credit-card', 'title' => 'Payment Systems', 'desc' => 'Seamless integration of Fawry, Stripe, and PayPal for global and local commerce.'],
                    ['icon' => 'globe-2', 'title' => 'Web Applications', 'desc' => 'High-performance React & Vue frontends with scalable Laravel backends.'],
                    ['icon' => 'layout-dashboard', 'title' => 'E-Commerce Ops', 'desc' => 'Enterprise-ready Shopify, WordPress, and custom marketplace deployments.'],
                    ['icon' => 'database-zap', 'title' => 'API Engineering', 'desc' => 'Secure RESTful and GraphQL architectures for cross-platform data flow.'],
                    ['icon' => 'palette', 'title' => 'Brand & UI/UX', 'desc' => 'Product prototyping and visual identity focused on user conversion.'],
                ];
            @endphp
            @foreach($software as $s)
            <div class="glass p-10 rounded-[2.5rem] neon-card border border-white/5">
                <i data-lucide="{{ $s['icon'] }}" class="text-blue-500 w-10 h-10 mb-8"></i>
                <h3 class="text-xl font-bold text-white mb-4">{{ $s['title'] }}</h3>
                <p class="text-sm leading-relaxed">{{ $s['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- SECTION 2: IT INFRASTRUCTURE & CLOUD -->
    <section id="it" class="py-32 px-6 bg-slate-900/40 border-y border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="text-right mb-16">
                <h2 class="text-4xl font-black text-white uppercase tracking-tighter">IT & Infrastructure</h2>
                <p class="text-blue-500 font-bold uppercase text-[10px] tracking-widest mt-2">Managed Services & Global Hosting</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $it = [
                        ['icon' => 'server', 'title' => 'VPS Servers', 'desc' => 'High-frequency NVMe Linux/Windows hosting.'],
                        ['icon' => 'cloud-rain', 'title' => 'AWS & Azure', 'desc' => 'Cloud migration and cluster management.'],
                        ['icon' => 'shield-check', 'title' => 'Cyber Security', 'desc' => 'Enterprise DDoS protection and hardening.'],
                        ['icon' => 'hard-drive', 'title' => 'Backup Systems', 'desc' => 'S3-compatible secure off-site data storage.'],
                        ['icon' => 'network', 'title' => 'Cisco Networking', 'desc' => 'Corporate VPNs and SD-WAN architecture.'],
                        ['icon' => 'terminal-square', 'title' => 'Linux Management', 'desc' => 'Advanced CLI administration and updates.'],
                        ['icon' => 'database', 'title' => 'SQL Hosting', 'desc' => 'High-availability MySQL and PostgreSQL.'],
                        ['icon' => 'search-code', 'title' => 'Domain Ops', 'desc' => 'Global DNS and SSL identity management.'],
                    ];
                @endphp
                @foreach($it as $i)
                <div class="glass p-8 rounded-3xl border-l-4 border-blue-600 hover:bg-slate-800 transition-colors">
                    <i data-lucide="{{ $i['icon'] }}" class="text-blue-500 w-8 h-8 mb-6"></i>
                    <h4 class="font-bold text-white text-lg mb-2">{{ $i['title'] }}</h4>
                    <p class="text-xs leading-relaxed">{{ $i['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SECTION 3: INDUSTRY ERPs -->
    <section id="industries" class="py-32 px-6 max-w-7xl mx-auto">
        <h2 class="text-center text-3xl font-black text-white uppercase tracking-widest mb-16">Industry-Ready Systems</h2>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach(['Hospitals', 'Pharmacies', 'Coffee Shops', 'Repair Centers', 'Logistics', 'Retail Centers', 'Education', 'Real Estate'] as $ind)
            <div class="glass py-10 rounded-2xl text-center hover:border-blue-600 transition-all cursor-default">
                <span class="text-[11px] font-black text-white uppercase tracking-widest">{{ $ind }}</span>
            </div>
            @endforeach
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section id="contact" class="py-32 px-6 max-w-5xl mx-auto">
        <div class="glass p-12 md:p-20 rounded-[3rem] border border-white/5">
            <div class="text-center mb-12">
                <h2 class="text-5xl font-black text-white mb-4 uppercase">Let's Build.</h2>
                <p>Located in Aswan Plaza. Available for global deployment.</p>
            </div>
            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <input type="text" placeholder="Your Name" class="w-full rounded-2xl p-5 focus:outline-none transition">
                    <input type="email" placeholder="Business Email" class="w-full rounded-2xl p-5 focus:outline-none transition">
                </div>
                <select class="w-full rounded-2xl p-5 focus:outline-none transition">
                    <option>Software Development</option>
                    <option>VPS & Cloud Hosting</option>
                    <option>IT Support & Networking</option>
                    <option>E-Commerce / Payment Setup</option>
                </select>
                <textarea placeholder="Describe your project" rows="5" class="w-full rounded-2xl p-5 focus:outline-none transition"></textarea>
                <button class="w-full bg-blue-600 text-white font-black py-5 rounded-2xl hover:bg-blue-700 transition uppercase tracking-[0.2em] shadow-xl shadow-blue-600/30">Submit Inquiry</button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="pt-24 pb-12 border-t border-white/5 bg-black px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-16 mb-20">
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <span class="text-2xl font-black text-white tracking-tighter">PRO<span class="text-blue-500">TECH</span></span>
                </div>
                <p class="text-xs leading-relaxed font-bold">Premier engineering for the digital era. <br>Corniche El Nil, Aswan, Egypt.</p>
            </div>
            
            <div>
                <h4 class="text-white font-black mb-6 uppercase text-[10px] tracking-[0.3em]">Services</h4>
                <ul class="text-[11px] space-y-4 font-bold text-slate-500 uppercase">
                    <li class="hover:text-blue-500 cursor-pointer">Web & Mobile Development</li>
                    <li class="hover:text-blue-500 cursor-pointer">Cloud Infrastructure</li>
                    <li class="hover:text-blue-500 cursor-pointer">Payment Solutions</li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-black mb-6 uppercase text-[10px] tracking-[0.3em]">Verticals</h4>
                <ul class="text-[11px] space-y-4 font-bold text-slate-500 uppercase">
                    <li class="hover:text-blue-500 cursor-pointer">Healthcare Systems</li>
                    <li class="hover:text-blue-500 cursor-pointer">POS Retail Tech</li>
                    <li class="hover:text-blue-500 cursor-pointer">Managed VPS</li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-black mb-6 uppercase text-[10px] tracking-[0.3em]">Connect With Us</h4>
                <div class="flex gap-6 mb-8 text-slate-500">
                    <a href="https://facebook.com" class="hover:text-blue-600 transition"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    <a href="https://instagram.com" class="hover:text-pink-600 transition"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="https://linkedin.com" class="hover:text-blue-400 transition"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="https://twitter.com" class="hover:text-white transition"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                </div>
                <p class="text-xs font-black text-blue-500 uppercase">contact@protech-aswan.com</p>
            </div>
        </div>
        
        <div class="text-center text-[9px] font-black text-slate-800 uppercase tracking-[0.5em] pt-8 border-t border-white/5">
            &copy; 2026 ProTech Solutions Egypt. Engineered with Pride.
        </div>
    </footer>

    <script>lucide.createIcons();</script>
</body>
</html>
