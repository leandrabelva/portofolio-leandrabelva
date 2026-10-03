<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Certifications - Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-950 text-amber-50 min-h-screen relative overflow-x-hidden">

    <img src="{{ asset('assets/background_black paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-80 pointer-events-none fixed" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none fixed"></div>

    <div class="max-w-6xl mx-auto px-6 py-10 relative z-10 space-y-6">
        
        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-3xl p-6 shadow-2xl border border-amber-200/80 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="font-serif-y2k text-2xl font-bold text-[#800000]">Manage Certifications</h1>
                <p class="text-stone-600 text-xs mt-1">Daftar sertifikat dan lisensi portofolio</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-xl bg-stone-200 text-stone-800 font-bold text-xs hover:bg-stone-300 transition">
                    ← Dashboard
                </a>
                <a href="{{ route('admin.certifications.create') }}" class="px-4 py-2 rounded-xl bg-[#800000] text-amber-50 font-bold text-xs hover:bg-pink-600 transition shadow-md">
                    + Tambah Sertifikat
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="p-4 rounded-2xl bg-emerald-100 border border-emerald-300 text-emerald-800 text-xs font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-3xl p-6 shadow-2xl border border-amber-200/80 overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-stone-300 text-xs uppercase text-[#800000] font-bold">
                        <th class="p-4">Sertifikat</th>
                        <th class="p-4">Penerbit</th>
                        <th class="p-4">Tanggal Terbit</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-200 text-xs">
                    @forelse ($certifications as $cert)
                        <tr class="hover:bg-amber-100/50 transition">
                            <td class="p-4 font-bold text-stone-900 flex items-center gap-3">
                                @if($cert->image)
                                    <img src="{{ $cert->image_url }}" class="w-10 h-10 object-cover rounded-lg border border-stone-300" alt="Cover">
                                @endif
                                {{ $cert->title }}
                            </td>
                            <td class="p-4 text-pink-700 font-semibold">{{ $cert->issuer }}</td>
                            <td class="p-4 text-stone-600">{{ $cert->issue_date ? \Carbon\Carbon::parse($cert->issue_date)->format('M Y') : '-' }}</td>
                            <td class="p-4 flex items-center gap-2">
                                <a href="{{ route('admin.certifications.edit', $cert->id) }}" class="px-3 py-1.5 rounded-xl bg-stone-900 text-amber-50 text-xs font-bold hover:bg-stone-700 transition">
                                    Edit
                                </a>
                                <form action="{{ route('admin.certifications.destroy', $cert->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus sertifikat ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1.5 rounded-xl bg-red-600 text-white text-xs font-bold hover:bg-red-700 transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-6 text-center text-stone-500 italic">Belum ada sertifikat yang ditambahkan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>