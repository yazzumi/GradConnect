
@extends('admin.shared.layout')

@section('title', 'Admin Accounts')
@section('content')

<div class="flex min-h-screen relative">

@include('admin.partials.sidebar')
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
        <div class="bg-white rounded-md border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <thead>
                <tr class="bg-[#1a3d2c] border-b border-gray-100 text-[10px] font-black text-white uppercase tracking-widest">
                    <th class="px-8 py-4">Username</th>
                    <th class="px-8 py-4">Password</th>
                    <th class="px-8 py-4">Role</th>
                    <th class="px-8 py-4">Created At</th>
                    <th class="px-8 py-4 text-right">Actions</th>
                </tr>
                </thead>
                @foreach($admins as $admin)
                <tbody class="divide-y divide-gray-50">
                <!-- Admin 1 -->
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-8 py-5">{{$admin->username}}</td>
                    <td class="px-8 py-5">{{$admin->password_hash}}</td>
                    <td class="px-8 py-5">
                        @php
                        $roleColors = [
                            'Super Admin' => 'bg-red-50 text-red-600 rounded font-black px-2 py-1 uppercase text-[9px]',
                            'Admin' => 'bg-violet-50 text-violet-600 rounded font-black px-2 py-1 uppercase text-[9px]',
                            'Moderator' => 'bg-blue-50 text-blue-600 rounded font-black px-2 py-1 uppercase text-[9px]',
                            'Staff' => 'bg-emerald-50 text-emerald-600 rounded font-black px-2 py-1 uppercase text-[9px]'
                            ]

                        @endphp
                        <span class="{{$roleColors[$admin->role]}}">{{$admin->role}}</span>
                    </td>
                    <td class="px-8 py-5">{{$admin->created_at}}</td>
                    <td class="px-8 py-5 text-right">
                        <button onclick="toggleModal()" class="w-8 h-8 rounded-lg bg-gray-50 text-isu-dark hover:bg-isu-dark hover:text-white transition-all">
                            <i class="fa-solid fa-sliders-h text-xs"></i>
                        </button>
                    </td>
                </tr>

                @endforeach

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
@endsection
