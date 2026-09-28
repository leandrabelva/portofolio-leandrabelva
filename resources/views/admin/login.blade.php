<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Y2K Scrapbook</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-950 text-amber-50 min-h-screen flex items-center justify-center p-6 relative overflow-hidden select-none">

    <img src="{{ asset('assets/background_black paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80 pointer-events-none" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/50 z-0 pointer-events-none"></div>

    <div class="w-full max-w-md relative z-10">
        
  
        <div class="absolute -top-4 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center">
            <div class="w-4 h-4 rounded-full bg-pink-500 border border-stone-800 shadow-md"></div>
            <div class="w-0.5 h-4 bg-pink-500/50"></div>
        </div>

        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-3xl p-8 shadow-2xl border border-amber-200/80 relative">
            
            <div class="text-center mb-6">
                <h2 class="font-serif-y2k text-3xl font-bold text-[#800000]">Admin Access</h2>
                <p class="text-xs text-pink-600 font-semibold mt-1">Belva's Portfolio Dashboard</p>
            </div>

            @if($errors->has('login'))
                <div class="mb-5 p-3 rounded-xl bg-red-100 border border-red-300 text-red-700 text-xs text-center font-semibold">
                    {{ $errors->first('login') }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required 
                           class="w-full px-4 py-2.5 rounded-xl bg-white border border-stone-300 text-stone-900 text-sm focus:outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500 transition">
                </div>

                <div>
                    <label class="block text-xs font-bold text-stone-700 uppercase tracking-wider mb-1">Password</label>
                    <input type="password" name="password" required 
                           class="w-full px-4 py-2.5 rounded-xl bg-white border border-stone-300 text-stone-900 text-sm focus:outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500 transition">
                </div>

                <button type="submit" 
                        class="w-full py-3 mt-2 rounded-xl bg-stone-900 hover:bg-pink-600 text-amber-50 font-bold text-sm shadow-lg transition duration-200">
                    Unlock Dashboard 🔐
                </button>
            </form>

            <div class="mt-6 text-center border-t border-stone-300/80 pt-4">
                <a href="{{ route('home') }}" class="text-xs font-semibold text-stone-600 hover:text-pink-600 transition">
                    ← Kembali ke Portofolio
                </a>
            </div>

        </div>
    </div>

</body>
</html>