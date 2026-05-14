@extends('admin.shared.layout')
@section('title', 'Analytics & Reports')
@section('content')

<div class="flex min-h-screen">
    @include('admin.partials.sidebar')

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8 print-area">
        <header class="flex justify-between items-start mb-8 no-print">
            <div>
                <h1 class="text-2xl font-black text-[#1a3d2c]">Institutional Analytics</h1>
                <p class="text-sm text-gray-500">Employment trends and program employability metrics.</p>
            </div>
            <div class="flex gap-3">
                <button onclick="window.print()" class="bg-white border border-gray-200 text-[#1a3d2c] px-5 py-2.5 rounded-xl text-xs font-bold shadow-sm hover:bg-gray-50 transition-all flex items-center gap-2">
                    <i class="fa-solid fa-file-pdf text-red-500"></i> EXPORT PDF
                </button>
            </div>
        </header>

        <!-- ANALYTICS FILTERS -->
        <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm mb-8 flex flex-wrap gap-4 items-center no-print">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-calendar text-isu-gold text-xs"></i>
                <select class="text-xs font-bold bg-transparent outline-none">
                    <option>Batch Year: All</option>
                    <option>2024</option>
                    <option>2023</option>
                </select>
            </div>
            <div class="w-px h-6 bg-gray-200"></div>
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-graduation-cap text-isu-gold text-xs"></i>
                <select class="text-xs font-bold bg-transparent outline-none">
                    <option>All Programs</option>
                    <option>BSIT</option>
                    <option>BSCS</option>
                    <option>BSBA</option>
                </select>
            </div>
            <div class="flex-1"></div>
            <button class="bg-[#1a3d2c] text-white px-4 py-2 rounded-lg text-[10px] font-bold">APPLY FILTERS</button>
        </div>

        <!-- GRID: TOP CHARTS -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Employment Trend -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm card">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-sm font-black text-[#1a3d2c] uppercase tracking-tight">Employment Trend (5-Year)</h3>
                    <i class="fa-solid fa-ellipsis-vertical text-gray-300"></i>
                </div>
                <div class="chart-container flex items-end gap-4 justify-between px-2">
                    <!-- CSS-based Bar Chart Representation -->
                    <div class="w-12 bg-gray-100 rounded-t-lg relative group h-[40%]">
                        <div class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-gray-400">2022</div>
                        <div class="bg-isu-dark w-full rounded-t-lg h-[60%] group-hover:bg-isu-gold transition-all"></div>
                    </div>
                    <div class="w-12 bg-gray-100 rounded-t-lg relative group h-[55%]">
                        <div class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-gray-400">2023</div>
                        <div class="bg-isu-dark w-full rounded-t-lg h-[75%] group-hover:bg-isu-gold transition-all"></div>
                    </div>
                    <div class="w-12 bg-gray-100 rounded-t-lg relative group h-[70%]">
                        <div class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-gray-400">2024</div>
                        <div class="bg-isu-dark w-full rounded-t-lg h-[90%] group-hover:bg-isu-gold transition-all"></div>
                    </div>
                    <div class="w-12 bg-gray-100 rounded-t-lg relative group h-[85%]">
                        <div class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold text-gray-400">2025</div>
                        <div class="bg-isu-dark w-full rounded-t-lg h-[80%] group-hover:bg-isu-gold transition-all"></div>
                    </div>
                </div>
            </div>

            <!-- Job Alignment -->
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm card">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-sm font-black text-[#1a3d2c] uppercase tracking-tight">Job Alignment Data</h3>
                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded">Overall: 78% Match</span>
                </div>
                <div class="flex items-center justify-around h-[200px]">
                    <!-- Simple Circular Progress Repr -->
                    <div class="relative w-32 h-32 rounded-full border-[12px] border-gray-100 flex items-center justify-center">
                        <div class="absolute inset-0 rounded-full border-[12px] border-isu-dark border-t-transparent border-r-transparent -rotate-45"></div>
                        <div class="text-center">
                            <p class="text-xl font-black text-[#1a3d2c]">78%</p>
                            <p class="text-[8px] font-bold text-gray-400 uppercase">Related</p>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded bg-isu-dark"></div>
                            <span class="text-xs font-bold text-gray-600">Related to Degree</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded bg-isu-gold"></div>
                            <span class="text-xs font-bold text-gray-600">Unrelated / Other</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 rounded bg-gray-200"></div>
                            <span class="text-xs font-bold text-gray-600">Unemployed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABLE: PROGRAM-WISE EMPLOYABILITY -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden card">
            <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                <h3 class="text-sm font-black text-[#1a3d2c] uppercase tracking-tight">Program-wise Employability Comparison</h3>
                <button class="text-[10px] font-bold text-isu-dark hover:underline no-print">View Full Details</button>
            </div>
            <table class="w-full text-left">
                <thead>
                <tr class="bg-gray-50/50 text-[10px] font-black text-gray-400 uppercase tracking-widest">
                    <th class="px-8 py-4">Academic Program</th>
                    <th class="px-8 py-4">Total Graduates</th>
                    <th class="px-8 py-4">Employed</th>
                    <th class="px-8 py-4">Employability Rate</th>
                    <th class="px-8 py-4">Avg. Salary Range</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-4 text-sm font-bold text-[#1a3d2c]">BS Information Technology</td>
                    <td class="px-8 py-4 text-xs font-medium text-gray-600">452</td>
                    <td class="px-8 py-4 text-xs font-medium text-gray-600">398</td>
                    <td class="px-8 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-24 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                <div class="bg-emerald-500 h-full w-[88%]"></div>
                            </div>
                            <span class="text-xs font-black text-emerald-600">88.1%</span>
                        </div>
                    </td>
                    <td class="px-8 py-4 text-xs font-bold text-gray-500">₱25k - ₱45k</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-4 text-sm font-bold text-[#1a3d2c]">BS Computer Science</td>
                    <td class="px-8 py-4 text-xs font-medium text-gray-600">210</td>
                    <td class="px-8 py-4 text-xs font-medium text-gray-600">192</td>
                    <td class="px-8 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-24 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                <div class="bg-emerald-500 h-full w-[91%]"></div>
                            </div>
                            <span class="text-xs font-black text-emerald-600">91.4%</span>
                        </div>
                    </td>
                    <td class="px-8 py-4 text-xs font-bold text-gray-500">₱30k - ₱55k</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-4 text-sm font-bold text-[#1a3d2c]">BS Business Administration</td>
                    <td class="px-8 py-4 text-xs font-medium text-gray-600">580</td>
                    <td class="px-8 py-4 text-xs font-medium text-gray-600">420</td>
                    <td class="px-8 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-24 h-1.5 bg-gray-100 rounded-full overflow-hidden">
                                <div class="bg-amber-500 h-full w-[72%]"></div>
                            </div>
                            <span class="text-xs font-black text-amber-600">72.4%</span>
                        </div>
                    </td>
                    <td class="px-8 py-4 text-xs font-bold text-gray-500">₱18k - ₱30k</td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- PRINT-ONLY FOOTER -->
        <div class="hidden print:block mt-12 border-t pt-8 text-center">
            <p class="text-xs text-gray-400 italic">Generated by ISU GradConnect Alumni System on May 6, 2026</p>
            <p class="text-[10px] text-gray-400 uppercase tracking-widest mt-1">Official Institutional Document</p>
        </div>
    </main>
</div>

@endsection
