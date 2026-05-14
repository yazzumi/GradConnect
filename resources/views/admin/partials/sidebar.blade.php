<!-- Fixed Sidebar with High Z-Index to overlap wide tables -->
<aside class="group fixed top-0 left-0 z-[100] w-16 hover:w-64 h-screen transition-all duration-300 bg-white border-r border-gray-100 flex flex-col overflow-hidden shadow-xl">

    <!-- Logo Section -->
    <div class="p-4 flex items-center gap-3 border-b border-gray-50 min-w-[256px]">
        <img src="{{asset('assets/images/isu-logo.png')}}" alt="Logo" class="w-8 h-8 object-contain shrink-0">
        <div class="flex flex-col opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
            <span class="text-base font-extrabold tracking-tight text-[#065f46] leading-none">GradConnect</span>
            <span class="text-[9px] font-bold text-[#d9a54a] uppercase tracking-tighter">ISU Alumni System</span>
        </div>
    </div>

    <nav class="flex-1 px-3 space-y-1 overflow-y-auto pt-4 overflow-x-hidden">
        <!-- Dashboard Link -->
        <a href="{{ route('dashboard') }}" class="{{request()->routeIs('dashboard') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all mb-4 whitespace-nowrap">
            <i class="fa-solid fa-chart-pie w-6 shrink-0 text-center text-sm"></i>
            <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Dashboard</span>
        </a>

        <!-- Alumni Section -->
        <div class="mb-6">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Alumni</p>
            <a href="{{Route('graduates')}}" class="{{request()->routeIs('graduates') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all whitespace-nowrap">
                <i class="fa-solid fa-address-book w-6 shrink-0 text-center text-sm"></i>
                <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Graduate Records</span>
            </a>
            <a href="{{ Route('surveys') }}" class="{{request()->routeIs('surveys') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all whitespace-nowrap">
                <i class="fa-solid fa-clipboard-question w-6 shrink-0 text-center text-sm"></i>
                <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Survey Management</span>
            </a>
            <a href="{{Route('employment')}}" class="{{request()->routeIs('employment') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all whitespace-nowrap">
                <i class="fa-solid fa-briefcase w-6 shrink-0 text-center text-sm"></i>
                <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Employment Data</span>
            </a>
        </div>

        <!-- Request Section -->
        <div class="mb-6">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Request</p>
            <a href="{{ route('updates') }}" class="{{request()->routeIs('updates') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all whitespace-nowrap">
                <i class="fa-solid fa-bell-concierge w-6 shrink-0 text-center text-sm"></i>
                <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Update Request</span>
            </a>
        </div>

        <!-- Reports Section -->
        <div class="mb-6">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Reports</p>
            <a href="{{ route('reports') }}" class="{{request()->routeIs('reports') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all whitespace-nowrap">
                <i class="fa-solid fa-chart-line w-6 shrink-0 text-center text-sm"></i>
                <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Analytics & Reports</span>
            </a>
            <a href="{{ route('logs') }}" class="{{request()->routeIs('logs') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all whitespace-nowrap">
                <i class="fa-solid fa-shield-halved w-6 shrink-0 text-center text-sm"></i>
                <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Audit Logs</span>
            </a>
        </div>

        <!-- System Section -->
        <div class="mb-6">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest px-3 mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">System</p>
            <a href="{{ route('accounts') }}" class="{{request()->routeIs('accounts') ? 'sidebar-active' : ''}} flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-gray-500 hover:bg-emerald-50 hover:text-[#065f46] transition-all whitespace-nowrap">
                <i class="fa-solid fa-user-gear w-6 shrink-0 text-center text-sm"></i>
                <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Admin Accounts</span>
            </a>
        </div>
    </nav>

    <!-- Logout Section -->
    <div class="p-3 mt-auto border-t border-gray-50 bg-gray-50/50">
        <button class="w-full flex items-center gap-3 px-2 py-2.5 rounded-md text-xs font-bold text-red-600 hover:bg-red-100 transition-all whitespace-nowrap">
            <i class="fa-solid fa-right-from-bracket w-6 shrink-0 text-center text-sm"></i>
            <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">Logout System</span>
        </button>
    </div>
</aside>
