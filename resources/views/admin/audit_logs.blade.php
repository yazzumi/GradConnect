@extends('admin.shared.layout')

@section('title', 'Audit Logs')
@section('content')

<div class="flex min-h-screen">

    @include('admin.partials.sidebar')
    <!-- MAIN CONTENT -->
    <main class="flex-1 p-8">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-black text-[#1a3d2c]">Audit Logs</h1>
                <p class="text-sm text-gray-500">Security event log tracking every administrator interaction with the system.</p>
            </div>
            <button class="bg-white border border-gray-200 text-[#1a3d2c] px-4 py-2 rounded-xl text-xs font-bold shadow-sm hover:bg-gray-50 transition-all flex items-center gap-2">
                <i class="fa-solid fa-download text-isu-gold"></i> Export Security Log
            </button>
        </header>

        <!-- ADVANCED LOG FILTERS -->
        <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm mb-6 flex flex-wrap gap-4 items-center">
            <div class="relative flex-1 min-w-[200px]">
                <i class="fa-solid fa-user-shield absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                <select class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-transparent rounded-xl text-xs font-bold outline-none focus:bg-white focus:border-isu-dark transition-all appearance-none">
                    <option>Filter by Admin: All Accounts</option>
                    <option>Admin - Dr. Reyes (Superadmin)</option>
                    <option>Staff - J. Santos (Registrar)</option>
                </select>
            </div>

            <select class="bg-gray-50 border border-transparent text-xs font-bold px-4 py-2.5 rounded-xl outline-none focus:bg-white focus:border-isu-dark">
                <option>All Action Types</option>
                <option>Login/Logout Events</option>
                <option>Record Modifications</option>
                <option>Request Approvals</option>
                <option>Report Generations</option>
            </select>

            <div class="flex items-center gap-2 bg-gray-50 px-4 py-2 rounded-xl border border-transparent">
                <i class="fa-solid fa-calendar-days text-gray-400 text-xs"></i>
                <input type="date" class="bg-transparent text-[11px] font-bold outline-none uppercase">
                <span class="text-gray-300 text-xs">to</span>
                <input type="date" class="bg-transparent text-[11px] font-bold outline-none uppercase">
            </div>
        </div>

        <!-- AUDIT TABLE -->
        <div class="bg-white rounded-md border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead>
                <tr class="bg-[#1a3d2c] border-b border-gray-100 text-[10px] font-black text-white uppercase tracking-widest">
                    <th class="px-8 py-4">Number</th>
                    <th class="px-8 py-4">Administrator</th>
                    <th class="px-8 py-4">Action Taken</th>
                    <th class="px-8 py-4">Target Resource</th>
                    <th class="px-8 py-4 text-center">Timestamp</th>
                    <th></th>
                </tr>
                </thead>
                @foreach($audit_logs as $logs)
                <tbody class="divide-y divide-gray-50">
                <!-- Log Entry: Request Approval -->
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-5">
                       {{$logs->log_id}}
                    </td>
                    <td class="px-8 py-5">
                        {{$logs->admin_name}}
                    </td>
                    <td class="px-8 py-5">
                        <div class="flex items-center gap-2">
                            <span class="px-2 py-1 log-create text-[9px] font-black rounded uppercase">{{$logs->action}}</span>
                        </div>
                    </td>
                    <td class="px-8 py-5">
                        {{$logs->table_name}}
                    </td>
                    <td>
                        {{$logs->timestamp}}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <!-- PAGINATION -->
            <div class="px-8 py-5 border-t border-gray-100 flex justify-between items-center bg-gray-50/30">
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Showing last 4 entries</p>
                <div class="flex gap-2">
                    <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:text-isu-dark transition-all">
                        <i class="fa-solid fa-chevron-left text-[10px]"></i>
                    </button>
                    <button class="w-8 h-8 rounded-lg bg-isu-dark text-white flex items-center justify-center text-[10px] font-bold shadow-md">1</button>
                    <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:text-isu-dark transition-all">
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
