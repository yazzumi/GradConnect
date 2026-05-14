@extends('admin.shared.layout')
@section('title', 'Login')
@section('content')

<!-- LOGIN CARD -->

<div class="bg-white w-full max-w-md p-10 border border-gray-100 shadow-sm rounded-md">

    <!-- LOGO & HEADER -->
    <div class="text-center mb-10 space-y-3">
        <div class="flex items-center justify-center gap-3">
            <img src="{{asset('assets/images/isu-logo.png')}}" alt="Logo" class="w-10 h-10">
            <span class="text-2xl font-bold tracking-tight text-[#065f46]">GradConnect</span>
        </div>
        <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Admin Portal</p>
        <h1 class="text-2xl font-black text-[#1a2e1a]">Welcome Back, Admin</h1>
        <p class="text-xs text-gray-500">Sign in to manage alumni records and surveys.</p>
    </div>

    <!-- FORM -->
    <form class="space-y-6">
        <!-- Email -->
        <div class="space-y-2">
            <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">Admin Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-300">
                    <i class="fa-solid fa-envelope text-xs"></i>
                </div>
                <!-- Inputs with MD Corners -->
                <input type="email" placeholder="admin@isu.edu.ph" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-100 rounded-md text-sm outline-none focus:ring-1 focus:ring-[#065f46]/30 focus:border-[#065f46] transition">
            </div>
        </div>

        <!-- Password -->
        <div class="space-y-2">
            <div class="flex justify-between items-center">
                <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest">Password</label>
                <a href="#" class="text-[10px] font-bold text-[#065f46] hover:underline">Forgot?</a>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-300">
                    <i class="fa-solid fa-lock text-xs"></i>
                </div>
                <input type="password" placeholder="••••••••" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-100 rounded-md text-sm outline-none focus:ring-1 focus:ring-[#065f46]/30 focus:border-[#065f46] transition">
            </div>
        </div>

        <!-- Options -->
        <div class="flex items-center justify-between pt-1">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" class="accent-[#065f46] h-4 w-4 rounded-md border-gray-100">
                <span class="text-xs text-gray-500">Keep me signed in</span>
            </label>
        </div>

        <!-- Button -->
        <!-- Buttons with MD Corners -->
        <button type="submit" class="w-full py-4 bg-[#065f46] text-white rounded-md text-sm font-bold flex items-center justify-center gap-2 hover:bg-[#044d39] transition-all shadow-md">
            <i class="fa-solid fa-right-to-bracket"></i>
            Sign In to Dashboard
        </button>
    </form>

    <!-- SECURITY NOTE -->
    <div class="mt-12 text-center text-[10px] text-gray-400 border-t border-gray-50 pt-6">
        <i class="fa-solid fa-shield-halved mr-1"></i> Authorized Personnel Only. Data Encryption Active.
    </div>
</div>
@endsection
