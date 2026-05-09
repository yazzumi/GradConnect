<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Premium Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Cormorant+Garamond:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <title>GradConnect | Professional Profile</title>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .serif { font-family: 'Cormorant Garamond', serif; }

        /* Glassmorphism & Depth */
        .elegant-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 50px rgba(26, 61, 44, 0.05);
        }

        .tab-content { display: none; }
        .tab-content.active { display: block; animation: contentFadeUp 0.6s cubic-bezier(0.23, 1, 0.32, 1); }

        @keyframes contentFadeUp {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Input styling */
        .elegant-input {
            transition: all 0.3s ease;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
        }
        .elegant-input:focus {
            background: #ffffff;
            border-color: #1a3d2c;
            box-shadow: 0 0 0 4px rgba(26, 61, 44, 0.05);
        }
    </style>
</head>
<body class="bg-[#fcfaf2] flex min-h-screen">

<!-- SIDEBAR (Preserved based on your preference) -->
<aside class="w-72 bg-[#1a3d2c] text-white hidden lg:flex flex-col p-8 fixed h-full shrink-0">
    <div class="flex items-center gap-3 mb-16">
        <img src="{{asset('assets/images/isu-logo.png')}}" class="w-8 h-8 brightness-110">
        <span class="text-xl font-bold tracking-tight text-white">GradConnect</span>
    </div>
    <nav class="space-y-4">
        <button onclick="switchTab('profile')" class="w-full text-left px-4 py-3 rounded-xl text-sm font-medium hover:bg-white/5 transition-all text-[#d9a54a]">Profile</button>
        <button onclick="switchTab('responses')" class="w-full text-left px-4 py-3 rounded-xl text-sm font-medium hover:bg-white/5 transition-all text-white/60">View Responses</button>
        <button onclick="switchTab('account')" class="w-full text-left px-4 py-3 rounded-xl text-sm font-medium hover:bg-white/5 transition-all text-white/60">Account</button>
    </nav>
</aside>

<!-- CONTENT AREA -->
<main class="flex-grow lg:ml-72 p-6 lg:p-16">
    <div class="max-w-5xl mx-auto">

        <!-- SECTION: PROFILE -->
        <section id="profile" class="tab-content active">
            <header class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <p class="text-[10px] font-bold text-[#d9a54a] uppercase tracking-[0.4em] mb-2">Institutional Record</p>
                    <h1 class="serif text-5xl text-[#1a3d2c]">Alumni Profile</h1>
                </div>
                <button class="bg-[#1a3d2c] text-white px-8 py-3 rounded-full text-xs font-bold tracking-widest hover:shadow-xl transition-all">EDIT INFORMATION</button>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Identity Card -->
                <div class="lg:col-span-1">
                    <div class="elegant-card rounded-[2.5rem] p-8 text-center">
                        <div class="relative inline-block mb-6">
                            <div class="w-32 h-32 rounded-full bg-slate-100 mx-auto overflow-hidden ring-8 ring-[#1a3d2c]/5">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=1a3d2c&color=fff&size=128" alt="Profile">
                            </div>
                            <div class="absolute bottom-0 right-0 w-8 h-8 bg-[#d9a54a] rounded-full border-4 border-white flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                            </div>
                        </div>
                        <h2 class="text-xl font-bold text-[#1a3d2c]">John Dela Cruz</h2>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest mt-1">Class of 2024</p>

                        <div class="mt-8 pt-8 border-t border-slate-100 flex justify-center gap-4">
                            <div class="text-center">
                                <p class="text-lg font-bold text-[#1a3d2c]">1</p>
                                <p class="text-[9px] font-bold text-slate-400 uppercase">Submissions</p>
                            </div>
                            <div class="w-px h-8 bg-slate-100"></div>
                            <div class="text-center">
                                <p class="text-lg font-bold text-[#1a3d2c]">Verified</p>
                                <p class="text-[9px] font-bold text-slate-400 uppercase">Status</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Details Card -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="elegant-card rounded-[2.5rem] p-10">
                        <h3 class="text-sm font-bold text-[#1a3d2c] mb-8 flex items-center gap-3">
                            <span class="w-1 h-4 bg-[#d9a54a] rounded-full"></span>
                            Primary Information
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 gap-x-12">
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-300 uppercase tracking-widest">Academic Program</label>
                                <p class="text-sm font-medium text-slate-700">BS in Information Technology</p>
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-300 uppercase tracking-widest">Email Address</label>
                                <p class="text-sm font-medium text-slate-700">john.delacruz@sample.com</p>
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-300 uppercase tracking-widest">Mobile Number</label>
                                <p class="text-sm font-medium text-slate-700">+63 912 345 6789</p>
                            </div>
                            <div class="space-y-1">
                                <label class="text-[10px] font-black text-slate-300 uppercase tracking-widest">Date of Birth</label>
                                <p class="text-sm font-medium text-slate-700">January 15, 2002</p>
                            </div>
                            <div class="md:col-span-2 space-y-1">
                                <label class="text-[10px] font-black text-slate-300 uppercase tracking-widest">Home Address</label>
                                <p class="text-sm font-medium text-slate-700 leading-relaxed">City of Ilagan, Isabela, Philippines 3300</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: RESPONSES -->
        <section id="responses" class="tab-content">
            <header class="mb-12">
                <p class="text-[10px] font-bold text-[#d9a54a] uppercase tracking-[0.4em] mb-2">Data Tracking</p>
                <h1 class="serif text-5xl text-[#1a3d2c]">Employment History</h1>
            </header>

            <div class="elegant-card rounded-[2.5rem] overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="border-b border-slate-100">
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Date Submitted</th>
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Status</th>
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">Company/Organization</th>
                        <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-8 py-6 text-sm font-medium text-slate-600">May 08, 2026</td>
                        <td class="px-8 py-6">
                            <span class="bg-green-50 text-green-700 text-[9px] font-bold px-3 py-1 rounded-full uppercase tracking-tighter">Employed</span>
                        </td>
                        <td class="px-8 py-6 text-sm font-semibold text-[#1a3d2c]">Accenture Philippines</td>
                        <td class="px-8 py-6 text-right">
                            <button class="text-[10px] font-black text-[#d9a54a] uppercase hover:underline">View Details</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- SECTION: ACCOUNT -->
        <section id="account" class="tab-content">
            <header class="mb-12">
                <p class="text-[10px] font-bold text-[#d9a54a] uppercase tracking-[0.4em] mb-2">Security</p>
                <h1 class="serif text-5xl text-[#1a3d2c]">Account Settings</h1>
            </header>

            <div class="elegant-card rounded-[2.5rem] p-10 max-w-2xl">
                <div class="space-y-8">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">New Password</label>
                            <input type="password" class="elegant-input w-full p-4 rounded-2xl text-sm outline-none" placeholder="••••••••">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Confirm New Password</label>
                            <input type="password" class="elegant-input w-full p-4 rounded-2xl text-sm outline-none" placeholder="••••••••">
                        </div>
                    </div>
                    <button class="bg-[#1a3d2c] text-white px-10 py-4 rounded-2xl text-xs font-bold tracking-widest shadow-lg shadow-[#1a3d2c]/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
                        UPDATE PASSWORD
                    </button>
                </div>
            </div>
        </section>

    </div>
</main>

<script>
    function switchTab(tabId) {
        // Content
        document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');

        // Sidebar buttons (visual state)
        const buttons = document.querySelectorAll('aside nav button');
        buttons.forEach(btn => {
            if(btn.innerText.toLowerCase().includes(tabId)) {
                btn.classList.add('text-[#d9a54a]');
                btn.classList.remove('text-white/60');
            } else {
                btn.classList.remove('text-[#d9a54a]');
                btn.classList.add('text-white/60');
            }
        });

        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>
</body>
</html>
