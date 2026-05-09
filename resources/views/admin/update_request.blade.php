<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('assets/images/isu-logo.png')}}" type="image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Update Requests | GradConnect</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f3f5f4; overflow-x: hidden; }


        /* Comparison Modal */
        .modal-shadow { background-color: rgba(0,0,0,0.5); backdrop-filter: blur(2px); }
        .side-modal { transition: transform 0.3s ease-in-out; transform: translateX(100%); }
        .side-modal.active { transform: translateX(0); }

        .diff-old { background-color: #fee2e2; color: #991b1b; text-decoration: line-through; }
        .diff-new { background-color: #dcfce7; color: #166534; }
    </style>
</head>
<body class="antialiased text-[#1a2e1a]">

<div class="flex min-h-screen relative">
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
        <header class="mb-8">
            <h1 class="text-2xl font-black text-[#1a3d2c]">Update Requests</h1>
            <p class="text-sm text-gray-500">Review and verify profile or employment changes submitted by alumni.</p>
        </header>

        <!-- TABS FOR STATUS -->
        <div class="flex gap-6 mb-6">
            <button class="text-sm font-bold text-[#1a3d2c] border-b-2 border-[#1a3d2c] pb-2">Pending (12)</button>
            <button class="text-sm font-bold text-gray-400 hover:text-gray-600 pb-2 transition-all">Approved</button>
            <button class="text-sm font-bold text-gray-400 hover:text-gray-600 pb-2 transition-all">Rejected</button>
        </div>

        <!-- REQUESTS TABLE -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead>
                <tr class="bg-gray-50/50 border-b border-gray-100 text-[10px] font-black text-gray-400 uppercase tracking-widest">
                    <th class="px-8 py-4">Requestor</th>
                    <th class="px-8 py-4">Type of Update</th>
                    <th class="px-8 py-4">Request Date</th>
                    <th class="px-8 py-4 text-right">Action</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg bg-isu-dark text-isu-gold flex items-center justify-center font-bold text-xs">JD</div>
                            <div>
                                <p class="text-sm font-bold text-[#1a3d2c]">Juan Dela Cruz</p>
                                <p class="text-[10px] text-gray-400">BSIT - 2024</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <span class="px-2 py-1 bg-amber-50 text-amber-700 text-[9px] font-black rounded-md border border-amber-100 uppercase">Employment Info</span>
                    </td>
                    <td class="px-8 py-5 text-xs text-gray-500 font-medium">May 12, 2026 • 10:45 AM</td>
                    <td class="px-8 py-5 text-right">
                        <button onclick="toggleModal()" class="bg-[#1a3d2c] text-white px-4 py-2 rounded-lg text-[10px] font-bold hover:shadow-lg transition-all">Review Change</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- COMPARISON SIDE MODAL -->
    <div id="modalOverlay" class="fixed inset-0 modal-shadow hidden z-30 opacity-0 transition-opacity duration-300" onclick="toggleModal()"></div>
    <div id="compareModal" class="fixed right-0 top-0 h-full w-[500px] bg-white shadow-2xl z-40 side-modal flex flex-col">
        <div class="p-6 bg-isu-dark text-white flex justify-between items-center">
            <div>
                <h2 class="text-lg font-bold">Review Modification</h2>
                <p class="text-[10px] text-isu-gold uppercase tracking-widest font-bold">Comparing Old vs New Data</p>
            </div>
            <button onclick="toggleModal()" class="w-8 h-8 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center transition-all">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="p-8 flex-1 overflow-y-auto">
            <div class="space-y-8">
                <!-- Section: Employment Status -->
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3">Employment Status</label>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-3 rounded-lg border border-red-100 diff-old text-xs font-bold">
                            Employed (Part-time)
                        </div>
                        <div class="p-3 rounded-lg border border-emerald-100 diff-new text-xs font-bold">
                            Employed (Full-time)
                        </div>
                    </div>
                </div>

                <!-- Section: Job Title -->
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3">Job Title / Position</label>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-3 rounded-lg border border-red-100 diff-old text-xs font-bold">
                            Junior Dev
                        </div>
                        <div class="p-3 rounded-lg border border-emerald-100 diff-new text-xs font-bold">
                            Software Engineer I
                        </div>
                    </div>
                </div>

                <!-- Section: Company -->
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-3">Company / Employer</label>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-3 rounded-lg border border-gray-100 text-gray-400 text-xs font-bold">
                            (No Change)
                        </div>
                        <div class="p-3 rounded-lg border border-gray-100 text-[#1a3d2c] text-xs font-bold">
                            Accenture PH
                        </div>
                    </div>
                </div>

                <!-- Section: Reasoning -->
                <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2">Requestor's Note</label>
                    <p class="text-xs text-gray-600 leading-relaxed italic">"I have recently been promoted to a full-time regular position and would like to update my record to reflect my current status."</p>
                </div>
            </div>
        </div>

        <!-- ACTION FOOTER -->
        <div class="p-6 border-t border-gray-100 flex gap-3 bg-gray-50">
            <button class="flex-1 py-3 bg-white border border-red-200 text-red-600 rounded-xl text-xs font-bold hover:bg-red-50 transition-all">REJECT</button>
            <button class="flex-1 py-3 bg-isu-dark text-white rounded-xl text-xs font-bold shadow-lg hover:shadow-emerald-900/20 transition-all">APPROVE UPDATE</button>
        </div>
    </div>
</div>

<script>
    function toggleModal() {
        const modal = document.getElementById('compareModal');
        const overlay = document.getElementById('modalOverlay');

        if (modal.classList.contains('active')) {
            modal.classList.remove('active');
            overlay.classList.add('hidden');
            overlay.style.opacity = '0';
        } else {
            modal.classList.add('active');
            overlay.classList.remove('hidden');
            setTimeout(() => { overlay.style.opacity = '1'; }, 10);
        }
    }
</script>
</body>
</html>
