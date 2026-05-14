@extends('admin.shared.layout')

@section('title', 'Dashboard')
@section('content')

<div class="flex min-h-screen">

    @include('admin.partials.sidebar')

    <main class="flex-1 p-10">
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-xl font-bold text-[#1a2e1a]">Dashboard Overview</h1>
                <p class="text-xs text-gray-400 mt-1">Welcome back, Administrator</p>
            </div>
            <div class="flex items-center gap-4">
                <button class="w-9 h-9 bg-white border border-gray-100 rounded-md flex items-center justify-center text-gray-400 hover:text-[#065f46] transition-all shadow-sm">
                    <i class="fa-solid fa-bell text-xs"></i>
                </button>
                <div class="flex items-center gap-3 pl-4 border-l border-gray-200">
                    <div class="text-right">
                        <p class="text-xs font-bold">Admin User</p>
                        <p class="text-[9px] text-[#d9a54a] font-bold uppercase tracking-wider">Super Admin</p>
                    </div>
                    <div class="w-9 h-9 bg-[#065f46] rounded-md flex items-center justify-center text-white text-xs font-bold">
                        A
                    </div>
                </div>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-white p-6 rounded-md border border-gray-100 shadow-sm">
                <div class="w-10 h-10 bg-emerald-50 text-[#065f46] rounded-md flex items-center justify-center mb-4 border border-emerald-100">
                    <i class="fa-solid fa-users text-sm"></i>
                </div>
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Total Alumni</p>
                <h2 class="text-2xl font-black mt-1 text-[#1a2e1a]">5,248</h2>
                <p class="text-[10px] text-emerald-500 font-bold mt-2"><i class="fa-solid fa-caret-up mr-1"></i> 12% increase</p>
            </div>
            <div class="bg-white p-6 rounded-md border border-gray-100 shadow-sm">
                <div class="w-10 h-10 bg-amber-50 text-[#d9a54a] rounded-md flex items-center justify-center mb-4 border border-amber-100">
                    <i class="fa-solid fa-check-to-slot text-sm"></i>
                </div>
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Responses</p>
                <h2 class="text-2xl font-black mt-1 text-[#1a2e1a]">3,890</h2>
                <p class="text-[10px] text-amber-500 font-bold mt-2">74% response rate</p>
            </div>
            <div class="bg-white p-6 rounded-md border border-gray-100 shadow-sm">
                <div class="w-10 h-10 bg-blue-50 text-blue-500 rounded-md flex items-center justify-center mb-4 border border-blue-100">
                    <i class="fa-solid fa-briefcase text-sm"></i>
                </div>
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Employed</p>
                <h2 class="text-2xl font-black mt-1 text-[#1a2e1a]">82%</h2>
                <p class="text-[10px] text-blue-400 font-bold mt-2">Verified in-field</p>
            </div>
            <div class="bg-white p-6 rounded-md border border-gray-100 shadow-sm">
                <div class="w-10 h-10 bg-purple-50 text-purple-500 rounded-md flex items-center justify-center mb-4 border border-purple-100">
                    <i class="fa-solid fa-robot text-sm"></i>
                </div>
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">System Sync</p>
                <h2 class="text-2xl font-black mt-1 text-[#1a2e1a]">Live</h2>
                <p class="text-[10px] text-gray-400 font-bold mt-2 uppercase tracking-tighter">Automated Verification</p>
            </div>
        </div>

        <div class="bg-white rounded-md border border-gray-100 shadow-sm overflow-hidden">
            <div class="px-8 py-5 border-b border-gray-50 flex justify-between items-center">
                <h3 class="font-bold text-sm">Recent Survey Submissions</h3>
                <button class="text-[10px] font-black text-[#065f46] uppercase tracking-widest hover:underline transition-all">View Masterlist</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-50/50">
                    <tr class="text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-100">
                        <th class="px-8 py-4">Alumni Name</th>
                        <th class="px-8 py-4">Program</th>
                        <th class="px-8 py-4">Batch</th>
                        <th class="px-8 py-4">Verification</th>
                        <th class="px-8 py-4 text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-xs divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-8 py-4 font-bold">Juan Dela Cruz</td>
                        <td class="px-8 py-4 text-gray-500">BS Information Technology</td>
                        <td class="px-8 py-4 text-gray-500 font-medium">2023</td>
                        <td class="px-8 py-4">
                                    <span class="px-2.5 py-1 bg-emerald-50 text-[#065f46] text-[9px] font-black rounded-md border border-emerald-100 uppercase flex items-center w-max gap-1">
                                        <i class="fa-solid fa-circle-check"></i> Auto-Verified
                                    </span>
                        </td>
                        <td class="px-8 py-4 text-right">
                            <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#065f46] hover:text-white transition-all">
                                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-8 py-4 font-bold">Maria Clara</td>
                        <td class="px-8 py-4 text-gray-500">BS Computer Science</td>
                        <td class="px-8 py-4 text-gray-500 font-medium">2022</td>
                        <td class="px-8 py-4">
                                    <span class="px-2.5 py-1 bg-emerald-50 text-[#065f46] text-[9px] font-black rounded-md border border-emerald-100 uppercase flex items-center w-max gap-1">
                                        <i class="fa-solid fa-circle-check"></i> Auto-Verified
                                    </span>
                        </td>
                        <td class="px-8 py-4 text-right">
                            <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#065f46] hover:text-white transition-all">
                                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-8 py-4 bg-gray-50/20 border-t border-gray-50 text-right">
                <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">Showing last 25 activities</p>
            </div>
        </div>
    </main>
</div>

@endsection
