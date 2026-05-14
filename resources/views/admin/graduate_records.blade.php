@extends('admin.shared.layout')
@section('title', 'Graduates Records')
@section('content')

<div class="flex min-h-screen">
    @include('admin.partials.sidebar')
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
                <button class="bg-[#1a3d2c] text-white px-5 py-2.5 rounded-md text-xs font-bold shadow-sm hover:bg-[#044d39] transition-all">
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
                <tr class="bg-[#1a3d2c] text-[10px] font-black text-white uppercase tracking-widest border-b border-gray-100">
                    <th class="px-6 py-5">Student ID</th>
                    <th class="px-6 py-5">FullName</th>
                    <th class="px-6 py-5 ">Sex</th>
                    <th class="px-6 py-5 ">Date of Birth</th>
                    <th class="px-6 py-5 ">Email</th>
                    <th class="px-6 py-5 ">Contact Number</th>
                    <th class="px-6 py-5 ">Graduation Year</th>
                    <th class="px-6 py-5 ">Program</th>
                    <th class="px-6 py-5 ">Civil Status</th>
                    <th class="px-6 py-5 ">Address</th>
                    <th class="px-6 py-5 right-text">Actions</th>
                </tr>
                </thead>
                @foreach($graduates as $graduate)
                <tbody class="text-xs divide-y divide-gray-50">
                <tr class="hover:bg-gray-50/50 transition-all">
                    <td class="px-6 py-4 font-bold text-[#065f46]">{{$graduate->student_id}}</td>
                    <td class="px-6 py-4 font-bold">{{$graduate->first_name . ' ' . $graduate->middle_name . ' ' . $graduate->last_name}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->sex}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->date_of_birth}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->email}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->contact_number}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->graduation_year}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->program_code}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->civil_status}}</td>
                    <td class="px-6 py-4 text-gray-500 font-medium">{{$graduate->city_municipality}}</td>

                    <td class="px-6 py-4 text-right">
                        <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#d9a54a] hover:text-white transition-all">
                            <i class="fa-solid fa-eye text-[10px]"></i>
                        </button>
                        <button class="w-8 h-8 rounded-md bg-gray-50 text-gray-400 hover:bg-[#065f46] hover:text-white transition-all ml-1">
                            <i class="fa-solid fa-pen text-[10px]"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
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

@endsection
