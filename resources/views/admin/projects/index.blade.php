<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects - Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-950 text-amber-50 min-h-screen relative overflow-x-hidden">

    <img src="{{ asset('assets/background_black paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80 pointer-events-none fixed" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none fixed"></div>

    <div class="max-w-6xl mx-auto px-6 py-10 relative z-10 space-y-8">
        
        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-2xl p-5 shadow-2xl border border-amber-200/80 flex items-center justify-between">
            <div>
                <h1 class="font-serif-y2k text-2xl font-bold text-[#800000]">Manage Projects</h1>
                <p class="text-xs text-pink-600 font-semibold">Daftar karya dan proyek portofolio</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-xl bg-stone-200 hover:bg-amber-200 text-stone-900 text-xs font-semibold transition">
                    ← Dashboard
                </a>
                <a href="{{ route('admin.projects.create') }}" class="px-4 py-2 rounded-xl bg-pink-500 hover:bg-pink-600 text-white text-xs font-bold transition shadow">
                    + Tambah Project
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="p-4 rounded-xl bg-green-100 border border-green-300 text-green-800 text-sm font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-3xl p-6 shadow-2xl border border-amber-200/80 overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-stone-300 text-[#800000] uppercase text-xs font-bold">
                    <tr>
                        <th class="pb-3 px-2">Title</th>
                        <th class="pb-3 px-2">Category</th>
                        <th class="pb-3 px-2">Preview Type</th>
                        <th class="pb-3 px-2 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200">
                    @forelse($projects as $project)
                    <tr class="hover:bg-amber-100/50 transition">
                        <td class="py-3 px-2 font-bold text-stone-800">{{ $project->title }}</td>
                        <td class="py-3 px-2 font-semibold text-pink-600">{{ $project->category }}</td>
                        <td class="py-3 px-2">
                            @if($project->embed_url)
                                <span class="px-2 py-1 rounded bg-blue-100 text-blue-700 text-[11px] font-bold">Embed Slide</span>
                            @elseif($project->pdf_file)
                                <span class="px-2 py-1 rounded bg-red-100 text-red-700 text-[11px] font-bold">PDF File</span>
                            @else
                                <span class="px-2 py-1 rounded bg-stone-200 text-stone-700 text-[11px] font-bold">Image Cover</span>
                            @endif
                        </td>
                        <td class="py-3 px-2 text-right space-x-2">
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="px-3 py-1.5 rounded-lg bg-stone-900 text-amber-50 text-xs font-bold hover:bg-pink-600 transition">
                                Edit
                            </a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus project ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-600 text-white text-xs font-bold hover:bg-red-700 transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-8 text-stone-500 font-medium">Belum ada project yang ditambahkan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>