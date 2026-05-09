@extends('alumni.shared.layout')
@section('title','Home')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@section('content')

    <body class="antialiased text-[#1a2e1a]">

<!-- Navbar -->
<nav id="navbar" class="fixed top-0 w-full bg-white z-50 transition-all duration-300 px-12 py-6 flex items-center justify-between">
    <div class="flex items-center gap-2">
        <img src="{{asset('assets/images/isu-logo.png')}}" alt="ISU Logo" class="w-8 h-8">
        <span id="nav-logo" class="text-xl font-bold tracking-tight text-[#1a3d2c] transition-colors">GradConnect</span>
    </div>
    <div id="nav-links" class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-500 transition-colors">
        <a href="#" class="hover:text-amber-500">Home</a>
        <a href="#" class="hover:text-amber-500">About</a>
        <a href="#" class="hover:text-amber-500">How It Works</a>
        <a href="#" class="hover:text-amber-500">Contact</a>
    </div>

</nav>

<!-- Main Content -->
<main class="max-w-350 mx-auto px-12 pt-32 pb-20">

    <!-- HERO SECTION -->
    <div class="flex flex-col lg:flex-row items-center justify-between gap-8 mb-16">
        <div class="space-y-4 max-w-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-[#e8f3ee] text-[#065f46] text-[10px] font-bold uppercase tracking-widest rounded-full border border-[#d1e7dd]">
                <div class="w-1.5 h-1.5 rounded-full bg-[#065f46]"></div>
                Survey Successfully Recorded
            </div>
            <h1 class="text-6xl font-extrabold tracking-tight text-[#1a2e1a]">Thank You, Alumni!</h1>
            <p class="text-gray-500 text-lg leading-relaxed">
                Your responses have been securely recorded and will contribute to the ISU-Ilagan Alumni Tracer Study, helping shape future programs and services for graduates.
            </p>
        </div>

        <div class="flex flex-wrap gap-3">
            <button class="px-8 py-4 bg-[#065f46] text-black rounded-full text-sm font-bold flex items-center gap-3 hover:bg-[#044d39] transition-all shadow-xl shadow-emerald-900/20">
                <i class="fa-solid fa-eye text-black"></i>
                View Your Submission
            </button>
            <button class="px-8 py-4 bg-white border border-gray-200 text-[#1a2e1a] rounded-full text-sm font-bold flex items-center gap-3 hover:bg-gray-50 transition-all shadow-sm" onclick="window.location.href='{{route('home')}}'">
                <i class="fa-solid fa-house"></i>
                Back to Home
            </button>

        </div>
    </div>

    <hr class="border-gray-200 mb-16">

    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 lg:col-span-7 space-y-12">
            <!-- WHAT HAPPENS NEXT -->
            <div>
                <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-8">What Happens Next</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-8 rounded-3xl bg-white border border-gray-100 shadow-sm">
                        <i class="fa-solid fa-envelope text-[#065f46] text-xl mb-6 block"></i>
                        <h4 class="font-bold text-[#1a2e1a] mb-2">Confirmation</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">A receipt will be sent to your registered email address within the next 24 hours.</p>
                    </div>
                    <div class="p-8 rounded-3xl bg-white border border-gray-100 shadow-sm">
                        <i class="fa-solid fa-chart-simple text-[#065f46] text-xl mb-6 block"></i>
                        <h4 class="font-bold text-[#1a2e1a] mb-2">Research Impact</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Your data shapes program development, curriculum review, and career services for future graduates.</p>
                    </div>
                    <div class="p-8 rounded-3xl bg-white border border-gray-100 shadow-sm">
                        <i class="fa-solid fa-shield-halved text-[#065f46] text-xl mb-6 block"></i>
                        <h4 class="font-bold text-[#1a2e1a] mb-2">Data Privacy</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">All responses are anonymized in reports and stored per institutional data protection policies.</p>
                    </div>
                </div>
            </div>

            <!-- SUBMISSION REFERENCE -->
            <div class="bg-white rounded-[2.5rem] p-10 border border-gray-100 shadow-sm">
                <div class="flex items-center gap-3 mb-10">
                    <div class="w-10 h-10 bg-[#e8f3ee] rounded-xl flex items-center justify-center">
                        <i class="fa-solid fa-file-invoice text-[#065f46]"></i>
                    </div>
                    <h3 class="font-bold text-[#1a2e1a] text-lg">Submission Reference</h3>
                </div>
                <div class="grid grid-cols-2 gap-x-12 gap-y-6 text-sm">
                    <div class="flex justify-between border-b border-gray-50 pb-4"><span class="text-gray-400">Respondent</span><span class="font-bold">—</span></div>
                    <div class="flex justify-between border-b border-gray-50 pb-4"><span class="text-gray-400">Program</span><span class="font-bold">—</span></div>
                    <div class="flex justify-between border-b border-gray-50 pb-4"><span class="text-gray-400">Year Graduated</span><span class="font-bold">—</span></div>
                    <div class="flex justify-between border-b border-gray-50 pb-4"><span class="text-gray-400">Highest Degree</span><span class="font-bold">—</span></div>
                    <div class="flex justify-between border-b border-gray-50 pb-4"><span class="text-gray-400">Employment Status</span><span class="font-bold">—</span></div>
                    <div class="flex justify-between border-b border-gray-50 pb-4"><span class="text-gray-400">Industry</span><span class="font-bold">—</span></div>
                    <div class="flex justify-between"><span class="text-gray-400">Position</span><span class="font-bold">—</span></div>
                    <div class="flex justify-between"><span class="text-gray-400">Date Submitted</span><span class="font-bold">May 6, 2026</span></div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-span-12 lg:col-span-5 space-y-6">
            <!-- ALUMNI NETWORK BANNER -->
            <div class="bg-[#065f46] rounded-[2.5rem] p-10 text-white relative overflow-hidden">
                <div class="relative z-10 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 rounded-full border border-white/10 text-[10px] font-bold">
                        <i class="fa-solid fa-users-viewfinder text-[#d9a54a]"></i> ISU ALUMNI NETWORK
                    </div>
                    <h2 class="text-3xl font-extrabold leading-tight">You are part of something bigger</h2>
                    <p class="text-emerald-100/70 text-sm leading-relaxed">Join 5,000+ ISU Ilagan alumni who have contributed to this tracer study.</p>
                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <div class="bg-white/10 backdrop-blur-md p-6 rounded-3xl border border-white/10">
                            <p class="text-3xl font-black">5,000+</p>
                            <p class="text-[9px] text-emerald-200/60 font-bold uppercase mt-1">Alumni Responses</p>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md p-6 rounded-3xl border border-white/10">
                            <p class="text-3xl font-black text-[#d9a54a]">98%</p>
                            <p class="text-[9px] text-emerald-200/60 font-bold uppercase mt-1">Data Accuracy</p>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</main>

<script>
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('navbar');
        if (window.scrollY > 50) {
            nav.classList.add('nav-scrolled');
        } else {
            nav.classList.remove('nav-scrolled');
        }
    });
</script>
</body>

@endsection
