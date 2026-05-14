@extends('admin.shared.layout')
@section('title', 'Employment Data')
@section('content')

<div class="flex min-h-screen">
    @include('admin.partials.sidebar')
    <main class="flex-1 p-8">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-black text-[#1a3d2c]">Employment Data</h1>
                <p class="text-sm text-gray-500">Review detailed employment history and proof of work for all graduates.</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-white border border-gray-200 text-[#1a3d2c] px-5 py-2.5 rounded-xl text-xs font-bold shadow-sm hover:bg-gray-50 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-file-export text-isu-gold"></i> Export CSV
                </button>
            </div>
        </header>

        <!-- FILTERS -->
        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm mb-6 flex flex-wrap gap-4 items-center">
            <div class="relative flex-1 min-w-[200px]">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                <input type="text" placeholder="Search by name or company..." class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-transparent rounded-xl text-xs outline-none focus:bg-white focus:border-isu-dark transition-all">
            </div>
            <select class="bg-gray-50 border border-transparent text-xs font-bold px-4 py-2.5 rounded-xl outline-none focus:bg-white focus:border-isu-dark">
                <option>Employment Status</option>
                <option>Employed (Full-time)</option>
                <option>Employed (Part-time)</option>
                <option>Self-Employed</option>
                <option>Unemployed</option>
            </select>
            <select class="bg-gray-50 border border-transparent text-xs font-bold px-4 py-2.5 rounded-xl outline-none focus:bg-white focus:border-isu-dark">
                <option>All Programs</option>
                <option>BSIT</option>
                <option>BSCS</option>
                <option>BSBA</option>
            </select>
            <button class="bg-gray-100 text-gray-500 px-4 py-2.5 rounded-xl text-xs font-bold hover:bg-gray-200 transition-all">
                <i class="fa-solid fa-sliders mr-2"></i> More Filters
            </button>
        </div>

        <!-- EMPLOYMENT TABLE -->
        <div class="bg-white rounded-md border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead>
                <tr class="bg-[#1a3d2c] border-b border-gray-100 text-[10px] font-black text-white uppercase tracking-widest">
                    <th class="px-6 py-4 ">Graduate Name</th>
                    <th class="px-6 py-4 ">Current Job / Company</th>
                    <th class="px-6 py-4 text-center">Status</th>
                    <th class="px-6 py-4 text-center">In-Field</th>
                    <th class="px-6 py-4 text-center">Proof</th>
                    <th class="px-6 py-4 text-right">Last Updated</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                <!-- Row 1 -->
                <tr class="hover:bg-gray-50/50 transition-colors group">
                    <td class="px-6 py-5">
                        <p class="text-sm font-bold text-[#1a3d2c]">Juan Dela Cruz</p>
                        <p class="text-[10px] text-gray-400 font-medium">BSIT - Batch 2024</p>
                    </td>
                    <td class="px-6 py-5">
                        <p class="text-xs font-bold text-gray-700">Senior Web Developer</p>
                        <p class="text-[10px] text-gray-400">Accenture Philippines</p>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <span class="bg-emerald-50 text-emerald-600 px-2.5 py-1 rounded-full text-[9px] font-black uppercase border border-emerald-100">Full-time</span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-sm" title="Aligned with Degree"></i>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <button class="text-isu-dark hover:text-black transition-all">
                            <i class="fa-solid fa-file-image text-lg"></i>
                        </button>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <p class="text-[10px] font-bold text-gray-500 uppercase">May 12, 2026</p>
                        <button class="text-[9px] font-black text-isu-gold uppercase hover:underline">View History</button>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-gray-50/50 transition-colors group">
                    <td class="px-6 py-5">
                        <p class="text-sm font-bold text-[#1a3d2c]">Maria Clara</p>
                        <p class="text-[10px] text-gray-400 font-medium">BSBA - Batch 2023</p>
                    </td>
                    <td class="px-6 py-5">
                        <p class="text-xs font-bold text-gray-700">Marketing Specialist</p>
                        <p class="text-[10px] text-gray-400">Freelance / Upwork</p>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <span class="bg-blue-50 text-blue-600 px-2.5 py-1 rounded-full text-[9px] font-black uppercase border border-blue-100">Self-Employed</span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-sm" title="Aligned with Degree"></i>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <button class="text-isu-dark hover:text-black transition-all">
                            <i class="fa-solid fa-file-pdf text-lg text-red-500"></i>
                        </button>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <p class="text-[10px] font-bold text-gray-500 uppercase">Apr 28, 2026</p>
                        <button class="text-[9px] font-black text-isu-gold uppercase hover:underline">View History</button>
                    </td>
                </tr>
                <!-- Row 3 (Unemployed Example) -->
                <tr class="hover:bg-gray-50/50 transition-colors group">
                    <td class="px-6 py-5">
                        <p class="text-sm font-bold text-[#1a3d2c]">Pedro Penduko</p>
                        <p class="text-[10px] text-gray-400 font-medium">BSCS - Batch 2024</p>
                    </td>
                    <td class="px-6 py-5 italic text-gray-400 text-xs">
                        Actively Looking for Work
                    </td>
                    <td class="px-6 py-5 text-center">
                        <span class="bg-gray-100 text-gray-500 px-2.5 py-1 rounded-full text-[9px] font-black uppercase border border-gray-200">Unemployed</span>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <i class="fa-solid fa-circle-minus text-gray-300 text-sm"></i>
                    </td>
                    <td class="px-6 py-5 text-center">
                        <span class="text-[9px] font-bold text-gray-300 uppercase tracking-tighter">No File</span>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <p class="text-[10px] font-bold text-gray-500 uppercase">May 01, 2026</p>
                        <button class="text-[9px] font-black text-isu-gold uppercase hover:underline">View History</button>
                    </td>
                </tr>
                </tbody>
            </table>

            <!-- PAGINATION -->
            <div class="px-8 py-5 border-t border-gray-100 flex justify-between items-center bg-gray-50/30">
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Showing 3 of 1,248 Records</p>
                <div class="flex gap-2">
                    <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:text-isu-dark transition-all">
                        <i class="fa-solid fa-chevron-left text-[10px]"></i>
                    </button>
                    <button class="w-8 h-8 rounded-lg bg-isu-dark text-white flex items-center justify-center text-[10px] font-bold">1</button>
                    <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:text-isu-dark transition-all">
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
