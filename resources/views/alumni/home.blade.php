@extends('alumni.shared.layout')
@section('title','Home')

@section('content')

    <div class="min-h-screen text-white relative overflow-hidden font-sans" style="background-image: url('{{ asset('assets/images/isu.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: scroll;">

  <!-- Visible Green Gradient Overlay - Left to Right Fade -->
  <div class="absolute inset-0 bg-[#1a3d2c]/90 animate-fade-in"></div>

  <!-- Floating ambient orbs -->
  <div class="absolute top-20 left-10 w-72 h-72 bg-[#d9a54a]/10 rounded-full blur-[100px] animate-pulse-slow"></div>
  <div class="absolute bottom-20 right-20 w-96 h-96 bg-emerald-500/10 rounded-full blur-[120px] animate-pulse-slow delay-1000"></div>


  <!-- Navbar -->
  <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300 px-12 py-6 flex items-center justify-between animate-slide-down">
  <div class="flex items-center gap-2">
    <div class="flex items-center justify-center">
      <img src="{{asset('assets/images/isu-logo.png')}}" alt="ISU Logo" class="w-8 h-8">
    </div>
    <span id="nav-logo" class="text-xl font-bold tracking-tight text-white transition-colors">GradConnect</span>
  </div>

  <div id="nav-links" class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-200 transition-colors">
    <a href="#home" class="hover:text-amber-500">Home</a>
    <a href="#about" class="hover:text-amber-500">About</a>
    <a href="#flow" class="hover:text-amber-500">How It Works</a>
    <a href="#contact" class="hover:text-amber-500">Contact</a>
  </div>

  <button class="bg-[#d9a54a] hover:bg-[#c4923e] text-[#1a2e1a] px-6 py-2 rounded-full text-sm font-bold shadow-md">
    Admin Login
  </button>
</nav>

  <!-- Hero Content -->
  <main id="home" class="relative z-10 px-12 pt-20 pb-32 max-w-7xl mx-auto">
    <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1 mb-8 animate-fade-up">
      <span class="w-2 h-2 bg-[#d9a54a] rounded-full animate-glow-pulse"></span>
      <span class="text-[10px] uppercase tracking-widest font-bold">Isabela State University • Ilagan Campus</span>
    </div>

    <h1 class="text-6xl md:text-7xl font-serif font-semibold mb-2 animate-hero-text">
      <span class="text-[#d9a54a]">Track Your Career.</span><br/>
      <span class="not-italic font-bold">Shape Our Future.</span>
    </h1>

    <p class="max-w-xl text-gray-300 mt-6 text-lg leading-relaxed animate-fade-up delay-300">
      Share your employment journey and help the next generation of ISU Ilagan graduates
      make informed career decisions through real-world data and insights.
    </p>

    <!-- Buttons -->
    <div class="flex items-center gap-4 mt-10 animate-fade-up delay-500">
      <button id="verificationId" class="bg-[#d9a54a] hover:bg-[#c4923e] text-[#1a2e1a] px-8 py-3 rounded-full font-bold flex items-center gap-2 transition group shadow-lg hover:shadow-[#d9a54a]/30 hover:-translate-y-0.5">
        Start Verification
        <span class="bg-[#1a2e1a]/10 rounded-full p-1 group-hover:translate-x-1 transition-transform">
          <i class="fa-solid fa-chevron-right text-xs"></i>
        </span>
      </button>

      <button onclick="window.location.href='#about'" class="border border-white/30 hover:bg-white/10 hover:border-white/50 px-8 py-3 rounded-full font-medium flex items-center gap-2 transition hover:-translate-y-0.5">
        Learn More
        <i class="fa-solid fa-arrow-down text-xs"></i>
      </button>
    </div>

    <!-- Stats Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-24 border-t border-white/10 pt-12">
      <div class="animate-counter" data-target="5284" data-suffix="+">
        <div class="text-4xl font-bold"><span class="counter-value">0</span>+</div>
        <div class="text-gray-400 text-sm mt-1">Graduates Tracked</div>
      </div>
      <div class="animate-counter" data-target="98" data-suffix="%">
        <div class="text-4xl font-bold"><span class="counter-value">0</span>%</div>
        <div class="text-gray-400 text-sm mt-1">Survey Completion</div>
      </div>
      <div class="animate-counter" data-target="87" data-suffix="%">
        <div class="text-4xl font-bold"><span class="counter-value">0</span>%</div>
        <div class="text-gray-400 text-sm mt-1">Employment Rate</div>
      </div>
    </div>
  </main>

  <!-- Decorative Shapes -->
  <div class="absolute right-1/4 top-1/3 w-24 h-24 border border-white/20 rotate-45 hidden lg:block animate-spin-slow"></div>
  <div class="absolute right-10 top-1/2 w-64 h-64 border border-white/5 rounded-full hidden lg:block animate-float"></div>
</div>
<section id="about" class="bg-[#fcfdfc] py-24 px-12">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

    <!-- Left Content -->
    <div class="space-y-8 reveal-left">
      <div class="flex items-center gap-2 text-[#d9a54a] font-bold tracking-widest text-xs uppercase">
        <span class="inline-block animate-diamond-spin">◆</span> ABOUT THE SYSTEM
      </div>

      <h2 class="text-5xl font-serif font-bold text-[#1a2e1a] leading-tight">
        Empowering Careers <br/> Through Data
      </h2>

      <p class="text-gray-600 leading-relaxed text-lg">
        GradConnect serves as the official graduate tracer survey system of ISU Ilagan Campus,
        enabling alumni to share their career journeys while providing current students with
        real-world employment insights. The platform bridges the gap between academic preparation
        and professional success.
      </p>

      <button onclick="window.location.href='#flow'" class="group flex items-center gap-2 px-6 py-3 border border-gray-200 rounded-full text-sm font-semibold text-[#064e3b] hover:bg-gray-50 transition hover:-translate-y-0.5 shadow-sm hover:shadow-md">
        See How It Works
        <span class="group-hover:translate-x-1 transition-transform">→</span>
      </button>

      <!-- Stats Row -->
      <div class="grid grid-cols-3 gap-8 pt-8 border-t border-gray-100">
        <div class="reveal-up delay-100">
          <div class="text-3xl font-bold text-[#064e3b]">5,284+</div>
          <div class="text-xs text-gray-500 font-medium">Graduates Tracked</div>
        </div>
        <div class="reveal-up delay-200">
          <div class="text-3xl font-bold text-[#064e3b]">98%</div>
          <div class="text-xs text-gray-500 font-medium">Survey Completion Rate</div>
        </div>
        <div class="reveal-up delay-300">
          <div class="text-3xl font-bold text-[#064e3b]">42</div>
          <div class="text-xs text-gray-500 font-medium">Programs Covered</div>
        </div>
      </div>
    </div>

    <!-- Right Image Card -->
    <div class="relative group reveal-right">
      <div class="relative rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-shadow duration-500">
        <img src="{{asset('assets/images/isu.png')}}" alt="ISU Ilagan Campus" class="w-full h-[600px] object-cover group-hover:scale-105 transition duration-700" />

        <!-- Image Overlays -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

        <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-4 py-1.5 rounded-full shadow-sm">
          <span class="text-[#064e3b] text-xs font-bold">ISU Ilagan Campus</span>
        </div>

        <div class="absolute bottom-8 left-8 text-white">
          <h3 class="text-2xl font-bold">Office of Student Affairs</h3>
          <p class="text-gray-200 text-sm">San Felipe, Ilagan City, Isabela</p>
        </div>
      </div>
    </div>

  </div>
</section>
<section id="flow" class="bg-[#f1f5f1] py-24 px-12 relative overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="mb-16">
      <span class="text-gray-500 uppercase tracking-widest text-xs font-bold">Simple Process</span>
      <h2 class="text-5xl font-serif font-bold text-[#1a2e1a] mt-2">How It Works</h2>
    </div>

    <!-- Steps Container -->
    <div class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

      <!-- Connecting Dashed Line (Desktop only) -->
      <div class="hidden lg:block absolute top-1/4 left-0 w-full h-px border-t-2 border-dashed border-[#d9a54a]/30 z-0"></div>

      <!-- Step 01 -->
      <div class="relative z-10 bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 border border-gray-100 reveal-up">
        <div class="w-12 h-12 rounded-full border-2 border-[#d9a54a] flex items-center justify-center text-[#d9a54a] font-bold mb-6 bg-white group-hover:scale-110 transition-transform">
          01
        </div>
        <h3 class="text-xl font-bold text-[#1a2e1a] mb-4">Verify Alumni Info</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
            Verify your identity using your school details to access the system. Only verified alumni can proceed.
        </p>
      </div>

      <!-- Step 02 -->
      <div class="relative z-10 bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 border border-gray-100 reveal-up delay-100">
        <div class="w-12 h-12 rounded-full border-2 border-[#d9a54a] flex items-center justify-center text-[#d9a54a] font-bold mb-6 bg-white">
          02
        </div>
        <h3 class="text-xl font-bold text-[#1a2e1a] mb-4">Access and Complete Survey</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
            Once verified, complete the tracer survey with your current employment and career details.
        </p>
      </div>

      <!-- Step 03 -->
      <div class="relative z-10 bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 border border-gray-100 reveal-up delay-200">
        <div class="w-12 h-12 rounded-full border-2 border-[#d9a54a] flex items-center justify-center text-[#d9a54a] font-bold mb-6 bg-white">
          03
        </div>
        <h3 class="text-xl font-bold text-[#1a2e1a] mb-4">Submit and Store Responses</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
            Your responses are securely stored and used for alumni tracking, reports, and analysis.</p>
      </div>

      <!-- Step 04 -->
      <div class="relative z-10 bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300 border border-gray-100 reveal-up delay-300">
        <div class="w-12 h-12 rounded-full border-2 border-[#d9a54a] flex items-center justify-center text-[#d9a54a] font-bold mb-6 bg-white">
          04
        </div>
        <h3 class="text-xl font-bold text-[#1a2e1a] mb-4">Request Updates</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
            If your details change, submit an update request for OSAS review and approval before updates are applied.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="bg-[#1a3d2c] py-24 px-12 text-center text-white relative overflow-hidden">
  <!-- Small Dot Pattern Overlay (optional, for texture matching) -->
  <div class="absolute inset-0 opacity-5 animate-pan" style="background-image: radial-gradient(#fff 1px, transparent 0); background-size: 20px 20px;"></div>

  <div class="max-w-6xl mx-auto relative z-10">
    <!-- Section Label -->
    <span class="text-[#d9a54a] font-bold text-xs uppercase tracking-[0.4em] reveal-up">
      Data Privacy
    </span>

    <!-- Main Heading -->
    <h2 class="text-5xl font-serif font-bold mt-4 mb-12 reveal-up delay-100">
      Your Data, Protected
    </h2>

    <!-- Two-Column Text Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-left text-gray-200 text-base leading-relaxed reveal-up delay-200">
      <p>
        All employment data collected through GradConnect is used solely for alumni
        tracking and institutional reporting purposes. Personal identifiers are kept
        confidential, and aggregated statistics are shared only to help future students
        make informed career decisions.
      </p>
      <p>
        ISU Ilagan Campus complies with institutional data privacy policies. Survey
        responses contribute to accreditation requirements, CHED reporting, and
        program development while maintaining the highest standards of graduate
        confidentiality and data security.
      </p>
    </div>

    <!-- Call to Action Button -->
    <div class="mt-16 reveal-up delay-300">
      <a href="#" class="inline-flex items-center gap-2 px-8 py-3 border border-white/30 rounded-full text-sm font-semibold hover:bg-white/10 hover:border-white/50 transition hover:-translate-y-0.5">
        Read Full Privacy Policy
        <i class="fa-solid fa-arrow-right text-xs"></i>
      </a>
    </div>
  </div>
</section>
<section id="contact" class="bg-[#f1f5f1] py-24 px-12">
  <div class="max-w-6xl mx-auto text-center">
    <!-- Section Header -->
    <div class="mb-16">
      <span class="text-gray-500 uppercase tracking-[0.2em] text-xs font-bold">Get In Touch</span>
      <h2 class="text-6xl font-serif font-bold text-[#1a2e1a] mt-4">Contact & Assistance</h2>
    </div>

    <!-- Contact Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">

      <!-- Email Card -->
      <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center reveal-up hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-[#f1f5f1] rounded-full flex items-center justify-center mb-6">
          <i class="fa-solid fa-envelope text-xl text-[#064e3b]"></i>
        </div>
        <h3 class="text-xl font-bold text-[#064e3b] mb-3">Email</h3>
        <p class="text-gray-500 text-sm">osas.isu.ilagan@yahoo.com</p>
      </div>

      <!-- Phone Card -->
      <div class="bg-white p-10 rounded-2xl shadow-lg border border-gray-100 flex flex-col items-center translate-y-[-4px] reveal-up delay-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
        <div class="w-14 h-14 bg-[#f1f5f1] rounded-full flex items-center justify-center mb-6">
          <i class="fa-solid fa-phone text-xl text-[#064e3b]"></i>
        </div>
        <h3 class="text-xl font-bold text-[#064e3b] mb-3">Phone</h3>
        <p class="text-gray-500 text-sm">(078) 123-4567</p>
      </div>

      <!-- Location Card -->
      <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center reveal-up delay-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
        <div class="w-14 h-14 bg-[#f1f5f1] rounded-full flex items-center justify-center mb-6">
          <i class="fa-solid fa-location-dot text-xl text-[#064e3b]"></i>
        </div>
        <h3 class="text-xl font-bold text-[#064e3b] mb-3">Office Location</h3>
        <p class="text-gray-500 text-sm leading-relaxed max-w-[200px]">
          ICT Building, ISU Ilagan Campus, Ilagan City, Isabela
        </p>
      </div>

    </div>

    <!-- Support Button -->
    <button class="bg-[#d9a54a] hover:bg-[#c4923e] text-[#1a2e1a] px-8 py-4 rounded-full font-bold inline-flex items-center gap-3 transition shadow-md hover:shadow-lg hover:-translate-y-0.5 reveal-up delay-300 animate-heartbeat">
      <span class="w-6 h-6 rounded-full border-2 border-[#1a2e1a]/20 flex items-center justify-center text-sm"><i class="fa-solid fa-question text-[10px]"></i></span>
      Need Help? Contact Us
    </button>
  </div>
</section>
<footer class="bg-[#1a3d2c] text-white py-16 px-12 font-sans">
  <div class="max-w-7xl mx-auto">
    <!-- Top Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12 mb-16">

      <!-- Brand & Newsletter Section -->
      <div class="lg:col-span-2 space-y-6">
        <div class="flex items-center gap-2">
          <div class="flex items-center justify-center">
            <!-- Graduation Cap Icon -->
            <img src="{{asset('assets/images/isu-logo.png')}}" alt="ISU Logo" class="w-8 h-8">
          </div>
          <span class="text-xl font-bold tracking-tight">GradConnect</span>
        </div>

        <p class="text-gray-300 text-sm leading-relaxed">
          Connecting Graduates. Informing the Future.
        </p>

        <p class="text-[#d9a54a] font-bold text-xs uppercase tracking-wider">
          Isabela State University – Ilagan Campus
        </p>

        <!-- Newsletter Input -->
        <div class="flex items-center gap-2 max-w-sm">
          <div class="relative flex-grow">
            <input
              type="email"
              placeholder="Enter your email"
              class="w-full bg-[#143023] border border-white/10 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-[#d9a54a]/50 transition"
            />
          </div>
          <button class="bg-[#d9a54a] hover:bg-[#c4923e] p-3 rounded-lg text-[#1a3d2c] transition shadow-md">
            <i class="fa-solid fa-bell"></i>
          </button>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="space-y-4">
        <h4 class="text-[#d9a54a] font-bold text-sm uppercase tracking-widest">Quick Links</h4>
        <ul class="space-y-3 text-gray-300 text-sm">
          <li><a href="#" class="hover:text-white transition">Home</a></li>
          <li><a href="#" class="hover:text-white transition">About</a></li>
          <li><a href="#" class="hover:text-white transition">Features</a></li>
          <li><a href="#" class="hover:text-white transition">Contact</a></li>
        </ul>
      </div>

      <!-- For Alumni -->
      <div class="space-y-4">
        <h4 class="text-[#d9a54a] font-bold text-sm uppercase tracking-widest">For Alumni</h4>
        <ul class="space-y-3 text-gray-300 text-sm">
          <li><a href="#" class="hover:text-white transition">Register</a></li>
          <li><a href="#" class="hover:text-white transition">Login</a></li>
          <li><a href="#" class="hover:text-white transition">Tracer Survey</a></li>
          <li><a href="#" class="hover:text-white transition">Update Profile</a></li>
        </ul>
      </div>

      <!-- For Admin -->
      <div class="space-y-4">
        <h4 class="text-[#d9a54a] font-bold text-sm uppercase tracking-widest">For Admin</h4>
        <ul class="space-y-3 text-gray-300 text-sm">
          <li><a href="#" class="hover:text-white transition">Dashboard</a></li>
          <li><a href="#" class="hover:text-white transition">Reports</a></li>
          <li><a href="#" class="hover:text-white transition">Manage Records</a></li>
          <li><a href="#" class="hover:text-white transition">Pending Reviews</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="space-y-4">
        <h4 class="text-[#d9a54a] font-bold text-sm uppercase tracking-widest">Support</h4>
        <ul class="space-y-3 text-gray-300 text-sm">
          <li><a href="#" class="hover:text-white transition">Help Center</a></li>
          <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-white transition">Terms of Use</a></li>
          <li><a href="#" class="hover:text-white transition">Contact OSAS</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom Bar -->
    <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
      <p class="text-gray-400 text-xs">
        © 2025 GradConnect · Isabela State University – Ilagan Campus
      </p>

      <!-- Social Icons -->
      <div class="flex items-center gap-3">
        <a href="#" class="w-9 h-9 border border-white/10 rounded flex items-center justify-center hover:bg-white/5 transition">
          <i class="fa-brands fa-facebook-f text-xs"></i>
        </a>
        <a href="#" class="w-9 h-9 border border-white/10 rounded flex items-center justify-center hover:bg-white/5 transition">
          <i class="fa-brands fa-x-twitter text-xs"></i>
        </a>
        <a href="#" class="w-9 h-9 border border-white/10 rounded flex items-center justify-center hover:bg-white/5 transition">
          <i class="fa-brands fa-linkedin-in text-xs"></i>
        </a>
        <a href="#" class="w-9 h-9 border border-white/10 rounded flex items-center justify-center hover:bg-white/5 transition">
          <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
        </a>
      </div>

      <div class="flex items-center gap-6 text-xs text-gray-400">
        <a href="#" class="hover:text-white transition">Privacy Policy</a>
        <a href="#" class="hover:text-white transition">Terms of Use</a>
      </div>
    </div>
  </div>
</footer>


<script>
  $('#verificationId').click(function (){
     window.location.href="{{ route('verification') }}";
  });

  // Navbar scroll effect
  window.addEventListener('scroll', () => {
    const nav = document.getElementById('navbar');
    const logo = document.getElementById('nav-logo');
    const links = document.getElementById('nav-links');

    if (window.scrollY > 50) {
      nav.classList.add('bg-white', 'shadow-md', 'py-4');
      nav.classList.remove('py-6');
      logo.classList.replace('text-white', 'text-[#064e3b]');
      links.classList.replace('text-gray-200', 'text-gray-600');
    } else {
      nav.classList.remove('bg-white', 'shadow-md', 'py-4');
      nav.classList.add('py-6');
      logo.classList.replace('text-[#064e3b]', 'text-white');
      links.classList.replace('text-gray-600', 'text-gray-200');
    }
  });

  // IntersectionObserver for scroll-triggered reveals
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right').forEach(el => revealObserver.observe(el));

  // Counter animation
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const container = entry.target;
        const valueEl = container.querySelector('.counter-value');
        const target = parseInt(container.dataset.target, 10);
        const duration = 1500;
        const startTime = performance.now();

        function updateCounter(now) {
          const elapsed = now - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
          valueEl.textContent = Math.floor(eased * target).toLocaleString();
          if (progress < 1) requestAnimationFrame(updateCounter);
        }
        requestAnimationFrame(updateCounter);
        counterObserver.unobserve(container);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.animate-counter').forEach(el => counterObserver.observe(el));
</script>


@endsection
