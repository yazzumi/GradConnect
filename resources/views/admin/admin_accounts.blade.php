<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{asset('assets/images/isu-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Admin Management | GradConnect</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f3f5f4; overflow-x: hidden; }


        /* Status Toggle Switch */
        .switch { position: relative; display: inline-block; width: 34px; height: 20px; }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; transition: .4s; border-radius: 34px; }
        .slider:before { position: absolute; content: ""; height: 14px; width: 14px; left: 3px; bottom: 3px; background-color: white; transition: .4s; border-radius: 50%; }
        input:checked + .slider { background-color: #1a3d2c; }
        input:checked + .slider:before { transform: translateX(14px); }

        /* Modal Transitions */
        .side-modal { transition: transform 0.3s ease-in-out; transform: translateX(100%); }
        .side-modal.active { transform: translateX(0); }
        .modal-overlay { background-color: rgba(0,0,0,0.5); backdrop-filter: blur(2px); }
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
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-black text-[#1a3d2c]">Admin Accounts</h1>
                <p class="text-sm text-gray-500">Manage personnel access and system permissions.</p>
            </div>
            <button class="bg-[#1a3d2c] text-white px-6 py-3 rounded-xl text-xs font-bold shadow-lg hover:bg-black transition-all flex items-center gap-2">
                <i class="fa-solid fa-user-plus text-isu-gold"></i> CREATE NEW ACCOUNT
            </button>
        </header>

        <!-- ACCOUNTS TABLE -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead>
                <tr class="bg-gray-50/50 border-b border-gray-100 text-[10px] font-black text-gray-400 uppercase tracking-widest">
                    <th class="px-8 py-4">Account Holder</th>
                    <th class="px-8 py-4">Role</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4">Last Activity</th>
                    <th class="px-8 py-4 text-right">Actions</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                <!-- Admin 1 -->
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-isu-dark/10 flex items-center justify-center text-isu-dark font-black text-xs uppercase">
                                RR
                            </div>
                            <div>
                                <p class="text-sm font-bold text-[#1a3d2c]">Dr. Ricardo Reyes</p>
                                <p class="text-[10px] text-gray-400 font-medium tracking-tight">ricardo.reyes@isu.edu.ph</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <span class="bg-purple-50 text-purple-600 px-2.5 py-1 rounded text-[9px] font-black uppercase border border-purple-100 tracking-tighter">Superadmin</span>
                    </td>
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-2">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <span class="text-[10px] font-bold text-[#1a3d2c] uppercase">Active</span>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <p class="text-xs font-bold text-gray-600">Today, 09:45 PM</p>
                        <p class="text-[9px] text-gray-400 uppercase font-bold tracking-widest">via Web Portal</p>
                    </td>
                    <td class="px-8 py-5 text-right">
                        <button onclick="toggleModal()" class="w-8 h-8 rounded-lg bg-gray-50 text-isu-dark hover:bg-isu-dark hover:text-white transition-all">
                            <i class="fa-solid fa-sliders-h text-xs"></i>
                        </button>
                    </td>
                </tr>
                <!-- Admin 2 -->
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-isu-dark/10 flex items-center justify-center text-isu-dark font-black text-xs uppercase">
                                JS
                            </div>
                            <div>
                                <p class="text-sm font-bold text-[#1a3d2c]">Jen Santos</p>
                                <p class="text-[10px] text-gray-400 font-medium tracking-tight">j.santos@isu.edu.ph</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <span class="bg-blue-50 text-blue-600 px-2.5 py-1 rounded text-[9px] font-black uppercase border border-blue-100 tracking-tighter">Registrar Staff</span>
                    </td>
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-2">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                            <span class="text-[10px] font-bold text-[#1a3d2c] uppercase">Active</span>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        <p class="text-xs font-bold text-gray-600">May 05, 2026</p>
                        <p class="text-[9px] text-gray-400 uppercase font-bold tracking-widest">Offline</p>
                    </td>
                    <td class="px-8 py-5 text-right">
                        <button onclick="toggleModal()" class="w-8 h-8 rounded-lg bg-gray-50 text-isu-dark hover:bg-isu-dark hover:text-white transition-all">
                            <i class="fa-solid fa-sliders-h text-xs"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- PERMISSION SIDE MODAL -->
    <div id="modalOverlay" class="fixed inset-0 modal-overlay hidden z-30 opacity-0 transition-opacity duration-300" onclick="toggleModal()"></div>
    <div id="sideModal" class="fixed right-0 top-0 h-full w-[400px] bg-white shadow-2xl z-40 side-modal flex flex-col">
        <div class="p-6 bg-isu-dark text-white">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">Manage Account</h2>
                <button onclick="toggleModal()" class="text-white/60 hover:text-white"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center font-black">RR</div>
                <div>
                    <p class="text-sm font-bold">Dr. Ricardo Reyes</p>
                    <p class="text-[10px] text-isu-gold uppercase tracking-widest font-black">Super Administrator</p>
                </div>
            </div>
        </div>

        <div class="p-8 flex-1 overflow-y-auto space-y-8">
            <!-- Permission List -->
            <div>
                <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-4">Functional Permissions</h3>
                <div class="space-y-4">
                    <label class="flex justify-between items-center cursor-pointer p-3 rounded-xl border border-gray-100 hover:bg-gray-50">
                        <span class="text-xs font-bold text-gray-700">Can Manage Survey Questions</span>
                        <input type="checkbox" class="accent-[#1a3d2c]" checked>
                    </label>
                    <label class="flex justify-between items-center cursor-pointer p-3 rounded-xl border border-gray-100 hover:bg-gray-50">
                        <span class="text-xs font-bold text-gray-700">Can Approve Alumni Requests</span>
                        <input type="checkbox" class="accent-[#1a3d2c]" checked>
                    </label>
                    <label class="flex justify-between items-center cursor-pointer p-3 rounded-xl border border-gray-100 hover:bg-gray-50">
                        <span class="text-xs font-bold text-gray-700">Can Generate PDF Reports</span>
                        <input type="checkbox" class="accent-[#1a3d2c]" checked>
                    </label>
                    <label class="flex justify-between items-center cursor-pointer p-3 rounded-xl border border-gray-100 hover:bg-gray-50">
                        <span class="text-xs font-bold text-gray-700">Can View Audit Logs</span>
                        <input type="checkbox" class="accent-[#1a3d2c]">
                    </label>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="pt-6 border-t border-gray-100">
                <h3 class="text-[10px] font-black text-red-400 uppercase tracking-[0.2em] mb-4">Security Actions</h3>
                <button class="w-full text-left px-4 py-3 rounded-xl border border-red-100 text-red-600 text-xs font-bold hover:bg-red-50 flex items-center justify-between">
                    Reset Account Password <i class="fa-solid fa-key opacity-50"></i>
                </button>
            </div>
        </div>

        <div class="p-6 border-t border-gray-100 bg-gray-50 flex gap-3">
            <button onclick="toggleModal()" class="flex-1 py-3 text-xs font-bold text-gray-400">Cancel</button>
            <button class="flex-1 py-3 bg-isu-dark text-white rounded-xl text-xs font-bold">SAVE PERMISSIONS</button>
        </div>
    </div>
</div>

<script>
    function toggleModal() {
        const modal = document.getElementById('sideModal');
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
