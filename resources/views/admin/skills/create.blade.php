<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Skill - Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-950 text-amber-50 min-h-screen relative overflow-x-hidden">

    <img src="{{ asset('assets/background_black paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80 pointer-events-none fixed" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none fixed"></div>

    <div class="max-w-4xl mx-auto px-6 py-10 relative z-10 space-y-6">
        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-3xl p-8 shadow-2xl border border-amber-200/80">
            <h1 class="font-serif-y2k text-2xl font-bold text-[#800000] mb-6">Tambah Skill Baru</h1>

            @if ($errors->any())
                <div class="mb-6 p-4 rounded-xl bg-red-100 border border-red-300 text-red-700 text-xs font-semibold space-y-1">
                    <p class="font-bold border-b border-red-200 pb-1 text-sm">⚠️ Mohon perbaiki kesalahan berikut:</p>
                    <ul class="list-disc list-inside pt-1 space-y-0.5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.skills.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                
                <div>
                    <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Nama Skill</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: Laravel, PySpark, MySQL" required class="w-full px-4 py-2 rounded-xl bg-white border border-stone-300 text-stone-900 text-sm focus:outline-none focus:border-pink-500">
                </div>

                <div>
                    <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Kategori</label>
                    <input type="text" name="category" value="{{ old('category') }}" placeholder="Contoh: Languages / Data & Backend / Tools & Frameworks" required class="w-full px-4 py-2 rounded-xl bg-white border border-stone-300 text-stone-900 text-sm focus:outline-none focus:border-pink-500">
                </div>

                <div>
                    <label class="block text-xs font-bold text-stone-700 uppercase mb-1">Icon / Logo (PNG, SVG, WEBP)</label>
                    <input type="file" name="icon" accept="image/*" required class="w-full text-xs text-stone-600 bg-white rounded-xl p-2 border border-stone-300">
                    <p class="text-[10px] text-stone-500 mt-1">Mksimal ukuran file 2MB.</p>
                </div>

                <div class="flex items-center justify-end gap-3 pt-4 border-t border-stone-300">
                    <a href="{{ route('admin.skills.index') }}" class="px-4 py-2 rounded-xl bg-stone-200 text-stone-800 font-bold text-xs hover:bg-stone-300 transition">Batal</a>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-stone-900 text-amber-50 hover:bg-pink-600 font-bold text-xs transition shadow-lg">Simpan Skill 🚀</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>