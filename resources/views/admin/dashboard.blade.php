<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Y2K Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-950 text-amber-50 min-h-screen relative overflow-x-hidden">

    <img src="{{ asset('assets/background_paper_gif.gif') }}" class="absolute inset-0 w-full h-full object-cover z-0 opacity-100 pointer-events-none fixed" alt="Paper Texture">
    <div class="absolute inset-0 bg-black/40 z-0 pointer-events-none fixed"></div>

    <div class="max-w-6xl mx-auto px-6 py-10 relative z-10 space-y-8">

        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-2xl p-5 shadow-2xl border border-amber-200/80 flex items-center justify-between">
            <div>
                <h1 class="font-serif-y2k text-2xl font-bold text-[#800000]">Admin Control Panel</h1>
                <p class="text-xs text-pink-600 font-semibold">Kelola konten portofolio Y2K</p>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" target="_blank" class="px-4 py-2 rounded-xl bg-stone-200 hover:bg-amber-200 text-stone-900 text-xs font-semibold transition">
                    🌐 Lihat Web
                </a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 rounded-xl bg-stone-900 hover:bg-red-600 text-amber-50 text-xs font-semibold transition">
                        Logout 🚪
                    </button>
                </form>
            </div>
        </div>

        <!-- Grid Menu Manajemen -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-2xl p-6 shadow-xl border border-amber-200/80">
                <h3 class="font-bold text-lg text-[#800000]">Projects</h3>
                <p class="text-xs text-stone-600 mb-4">Kelola karya & embed slide/PDF</p>
                <a href="{{ route('admin.projects.index') }}" class="inline-block px-3 py-1.5 rounded-lg bg-pink-500 text-white text-xs font-bold hover:bg-pink-600 transition">Manage Projects →</a>
            </div>

            <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-2xl p-6 shadow-xl border border-amber-200/80">
                <h3 class="font-bold text-lg text-[#800000]">Certifications</h3>
                <p class="text-xs text-stone-600 mb-4">Kelola sertifikat 3D</p>
                <a href="{{ route('admin.certifications.index') }}" class="inline-block px-3 py-1.5 rounded-lg bg-pink-500 text-white text-xs font-bold hover:bg-pink-600 transition">Manage Certs →</a>
            </div>

            <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-2xl p-6 shadow-xl border border-amber-200/80">
                <h3 class="font-bold text-lg text-[#800000]">Organizations</h3>
                <p class="text-xs text-stone-600 mb-4">Kelola riwayat organisasi</p>
                <a href="{{ route('admin.organizations.index') }}" class="inline-block px-3 py-1.5 rounded-lg bg-pink-500 text-white text-xs font-bold hover:bg-pink-600 transition">Manage Orgs →</a>
            </div>

            <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-2xl p-6 shadow-xl border border-amber-200/80">
                <h3 class="font-bold text-lg text-[#800000]">Skills</h3>
                <p class="text-xs text-stone-600 mb-4">Kelola stiker keahlian</p>
                <a href="{{ route('admin.skills.index') }}" class="inline-block px-3 py-1.5 rounded-lg bg-pink-500 text-white text-xs font-bold hover:bg-pink-600 transition">Manage Skills →</a>
            </div>
        </div>

        <!-- Section Kotak Pesan Masuk (Inbox) -->
        <div class="bg-amber-50/95 backdrop-blur-md text-stone-900 rounded-3xl p-6 sm:p-8 shadow-2xl border border-amber-200/80 space-y-6">
            <div class="flex items-center justify-between border-b border-stone-300/80 pb-4">
                <div>
                    <h3 class="font-serif-y2k text-2xl font-bold text-[#800000]">Inbox Messages 💌</h3>
                    <p class="text-xs text-stone-600">Pesan yang dikirim pengunjung melalui form kontak portfolio</p>
                </div>
                <span class="px-3 py-1 bg-pink-100 text-pink-700 text-xs font-bold rounded-full">
                    {{ isset($messages) ? $messages->count() : 0 }} Pesan
                </span>
            </div>

            @if(session('success'))
                <div class="p-3 text-xs font-semibold text-green-800 bg-green-100 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <div class="space-y-4">
                @forelse($messages ?? [] as $msg)
                <div class="bg-white/90 border border-stone-200 p-5 rounded-2xl shadow-sm space-y-2 relative group">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-1">
                        <div>
                            <h4 class="font-bold text-stone-900 text-sm sm:text-base">{{ $msg->name }}</h4>
                            <a href="mailto:{{ $msg->email }}" class="text-xs text-pink-600 hover:underline font-medium">{{ $msg->email }}</a>
                        </div>
                        <span class="text-stone-400 text-[11px]">{{ $msg->created_at->diffForHumans() }}</span>
                    </div>

                    <p class="text-stone-700 text-xs sm:text-sm bg-stone-50 p-3 rounded-xl border border-stone-100">
                        "{{ $msg->message }}"
                    </p>

                    <div class="flex justify-end pt-1">
                        <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-100 hover:bg-red-200 text-red-700 text-xs font-semibold rounded-lg transition">
                                Hapus Pesan 🗑️
                            </button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="text-center py-8 text-stone-400 text-xs sm:text-sm">
                    Belum ada pesan masuk di tumpukan kertas kamu 📭✨
                </div>
                @endforelse
            </div>
        </div>

    </div>

</body>
</html>