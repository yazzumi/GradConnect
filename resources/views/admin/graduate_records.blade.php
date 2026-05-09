<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('assets/images/isu-logo.png')}}" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Alumni Records | GradConnect</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f4f7f5; }

        .sidebar-item:hover { background-color: #f8faf9; color: #065f46; }
        .sidebar-active { background-color: #065f46; color: white; }
    </style>
</head>
<body class="antialiased text-[#1a2e1a]">

<div class="flex min-h-screen">
    <!-- SIDEBAR -->
    <!-- Modified Sidebar Section -->
    <aside class="w-64 bg-white border-r border-gray-100 flex flex-col sticky top-0 h-screen">
        <!-- Logo Section with ISU Theme Colors -->
        <div class="p-6 flex items-center gap-3 border-b border-gray-50">
            <img src="{{asset('assets/images/isu-logo.png')}}" alt="Logo" class="w-10 h-10 object-contain">
            <div class="flex flex-col">
                <span class="text-base font-extrabold tracking-tight text-[#065f46] leading-none">GradConnect</span>
                <span class="text-[9px] font-bold text-[#d9a54a] uppercase tracking-tighter">ISU Alumni System</span>
            </div>
        </div>

        <nav class="flex-1 px-4 space-y-1 overflow-y-auto pt-4">
            <!-- Dashboard Link (Standalone) -->
            <a href="#" class="sidebar-active flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold transition-all mb-4">
                <i class="fa-solid fa-chart-pie w-4 text-center"></i> Dashboard
            </a>

            <!-- Alumni Section -->
            <div class="mb-6">
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2">Alumni</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all">
                    <i class="fa-solid fa-address-book w-4 text-center"></i> Graduate Records
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all">
                    <i class="fa-solid fa-clipboard-question w-4 text-center"></i> Survey Management
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all">
                    <i class="fa-solid fa-briefcase w-4 text-center"></i> Employment Data
                </a>
            </div>

            <!-- Request Section -->
            <div class="mb-6">
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2">Request</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all">
                    <i class="fa-solid fa-bell-concierge w-4 text-center"></i> Update Request
                </a>
            </div>

            <!-- Reports Section -->
            <div class="mb-6">
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2">Reports</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all">
                    <i class="fa-solid fa-chart-line w-4 text-center"></i> Analytics & Reports
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all">
                    <i class="fa-solid fa-shield-halved w-4 text-center"></i> Audit Logs
                </a>
            </div>

            <!-- System Section -->
            <div class="mb-6">
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2">System</p>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all">
                    <i class="fa-solid fa-user-gear w-4 text-center"></i> Admin Accounts
                </a>
            </div>
        </nav>

        <!-- Logout Section -->
        <div class="p-4 mt-auto border-t border-gray-50 bg-gray-50/50">
            <button class="w-full flex items-center gap-3 px-3 py-2.5 rounded-md text-xs font-bold text-red-600 hover:bg-red-100 transition-all">
                <i class="fa-solid fa-right-from-bracket w-4 text-center"></i> Logout System
            </button>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8">
        <!-- HEADER (Fixed: No Duplicates) -->
        <header class="flex justify-between items-end mb-8">
            <div>
                <h1 class="text-2xl font-black text-[#1a2e1a]">Alumni Masterlist</h1>
                <p class="text-sm text-gray-400 mt-1">Registry of all verified graduates from ISU Ilagan Campus.</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-white border border-gray-100 text-[#1a2e1a] px-5 py-2.5 rounded-md text-xs font-bold shadow-sm hover:bg-gray-50 transition-all">
                    <i class="fa-solid fa-download mr-2"></i> Export
                </button>
                <button class="bg-[#065f46] text-white px-5 py-2.5 rounded-md text-xs font-bold shadow-sm hover:bg-[#044d39] transition-all">
                    <i class="fa-solid fa-plus mr-2"></i> New Entry
                </button>
            </div>
        </header>

        <!-- FILTERS & SEARCH -->
        <div class="bg-white p-4 rounded-md border border-gray-100 shadow-sm mb-6 flex items-center gap-4">
            <div class="flex-1 relative">
                <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-300 text-xs"></i>
                <input type="text" placeholder="Search by name or alumni ID..." class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-100 rounded-md text-xs outline-none focus:border-[#065f46] transition-all">
            </div>
            <div class="h-8 w-[1px] bg-gray-100 mx-2"></div>
            <select class="bg-transparent text-xs font-bold text-gray-500 outline-none cursor-pointer hover:text-[#065f46]">
                <option>All Programs</option>
                <option>BSIT</option>
                <option>BSCS</option>
            </select>
            <select class="bg-transparent text-xs font-bold text-gray-500 outline-none cursor-pointer hover:text-[#065f46]">
                <option>Graduation Year</option>
                <option>2023</option>
                <option>2024</option>
            </select>
        </div>

        <!-- RECORDS TABLE -->
        <div class="bg-white rounded-md border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead>
                <tr class="bg-gray-50/50 text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-100">
                    <th class="px-6 py-5">ID Number</th>
                    <th class="px-6 py-5">Alumni Name</th>
                    <th class="px-6 py-5">Degree Program</th>
                    <th class="px-6 py-5">Status</th>
                    <th class="px-6 py-5 text-right">Action</th>
                </tr>
                </thead>
                <tbody class="text-xs divide-y divide-gray-50">
                <tr class="hover:bg-gray-50/50 transition-all">
                    <td class="px-6 py-4 font-bold text-[#065f46]">2023-ISU-102</td>
                    <td class="px-6 py-4 font-bold">Juan Dela Cruz</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">BS Information Technology</td>
                    <td class="px-6 py-4">
                                <span class="px-2.5 py-1 bg-emerald-50 text-emerald-600 rounded-md text-[9px] font-black border border-emerald-100 uppercase">
                                    <i class="fa-solid fa-robot mr-1"></i> Auto-Verified
                                </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#d9a54a] hover:text-white transition-all">
                            <i class="fa-solid fa-eye text-[10px]"></i>
                        </button>
                        <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#065f46] hover:text-white transition-all ml-1">
                            <i class="fa-solid fa-pen text-[10px]"></i>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-all">
                    <td class="px-6 py-4 font-bold text-[#065f46]">2023-ISU-205</td>
                    <td class="px-6 py-4 font-bold">Maria Clara</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">BS Computer Science</td>
                    <td class="px-6 py-4">
                                <span class="px-2.5 py-1 bg-emerald-50 text-emerald-600 rounded-md text-[9px] font-black border border-emerald-100 uppercase">
                                    <i class="fa-solid fa-robot mr-1"></i> Auto-Verified
                                </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#d9a54a] hover:text-white transition-all">
                            <i class="fa-solid fa-eye text-[10px]"></i>
                        </button>
                        <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#065f46] hover:text-white transition-all ml-1">
                            <i class="fa-solid fa-pen text-[10px]"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>

            <!-- FOOTER / PAGINATION -->
            <div class="px-6 py-4 bg-gray-50/30 border-t border-gray-100 flex items-center justify-between">
                <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Page 1 of 120</span>
                <div class="flex gap-1">
                    <button class="px-3 py-1.5 rounded-md border border-gray-200 bg-white text-[10px] font-bold text-gray-400 hover:border-[#065f46] hover:text-[#065f46] transition-all">Prev</button>
                    <button class="px-3 py-1.5 rounded-md bg-[#065f46] text-white text-[10px] font-bold shadow-sm">1</button>
                    <button class="px-3 py-1.5 rounded-md border border-gray-200 bg-white text-[10px] font-bold text-gray-400 hover:border-[#065f46] hover:text-[#065f46] transition-all">2</button>
                    <button class="px-3 py-1.5 rounded-md border border-gray-200 bg-white text-[10px] font-bold text-gray-400 hover:border-[#065f46] hover:text-[#065f46] transition-all">Next</button>
                </div>
            </div>
        </div>
    </main>
</div>

</body>
</html>
