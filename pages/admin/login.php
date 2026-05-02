<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../output.css">
    <link rel="icon" href="../../assets/images/isu-logo.png" type="image/png">
    <title>Admin Login</title>
</head>
<body>
   <!-- Background wrapper to make the form stand out -->
<div class="min-h-screen bg-[#fcfaf2] flex items-center justify-center p-6">
    
    <!-- Login Card -->
    <form action="" method="POST" class="w-full max-w-md bg-white shadow-xl rounded-2xl overflow-hidden border-t-4 border-[#1a3d2c]">
        
        <!-- Form Header -->
        <div class="p-8 pb-4 flex flex-col items-center">
            <div class="flex items-center gap-2 mb-2">
                <img src="../../assets/images/isu-logo.png" alt="ISU Logo" class="h-10 w-10">
                <h1 class="text-2xl font-serif font-bold text-[#1a3d2c]">GradConnect</h1>
            </div>
            <p class="text-xs text-gray-500 uppercase tracking-widest font-semibold">Admin Portal Access</p>
        </div>

        <!-- Form Body -->
        <div class="p-8 pt-0 space-y-5">
            
            <!-- Username Field -->
            <div>
                <label for="username" class="block text-[10px] font-bold text-gray-600 uppercase tracking-wider mb-1 ml-1">
                    Username
                </label>
                <div class="relative">
                    <input type="text" id="username" name="username" placeholder="Enter admin username" 
                        class="w-full bg-[#f9f9f6] border border-gray-200 rounded-xl px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1a3d2c]/20 focus:border-[#1a3d2c] transition">
                </div>
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-[10px] font-bold text-gray-600 uppercase tracking-wider mb-1 ml-1">
                    Password
                </label>
                <div class="relative">
                    <input type="password" id="password" name="password" placeholder="••••••••" 
                        class="w-full bg-[#f9f9f6] border border-gray-200 rounded-xl px-4 py-3 text-sm outline-none focus:ring-2 focus:ring-[#1a3d2c]/20 focus:border-[#1a3d2c] transition">
                </div>
            </div>

            <!-- Options (Forgot Password, etc) -->
            <div class="flex justify-end">
                <a href="#" class="text-[10px] font-bold text-[#1a3d2c] hover:underline uppercase tracking-tight">Forgot password?</a>
            </div>

            <!-- Login Button -->
            <button type="submit" 
                class="w-full bg-[#1a3d2c] hover:bg-[#143023] text-white font-bold py-4 rounded-xl shadow-lg transition transform hover:-translate-y-0.5 active:scale-95">
                Sign In to Dashboard
            </button>
        </div>

        <!-- Form Footer -->
        <div class="bg-gray-50 p-4 border-t border-gray-100 text-center">
            <p class="text-[9px] text-gray-400 uppercase tracking-tighter">
                Isabela State University — Ilagan Campus <br> 
                Secure Administrator Environment
            </p>
        </div>
    </form>
</div>
</body>
</html>