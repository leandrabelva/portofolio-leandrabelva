<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCertificationController extends Controller
{
    public function index()
    {
        $certifications = Certification::latest()->get();
        return view('admin.certifications.index', compact('certifications'));
    }

    public function create()
    {
        return view('admin.certifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'required|string|max:255',
            'issuer'         => 'required|string|max:255',
            'issue_date'     => 'nullable|date',
            'image'          => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'credential_url' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('certifications', 'public');

        Certification::create([
            'title'          => $request->title,
            'issuer'         => $request->issuer,
            'issue_date'     => $request->issue_date,
            'image'          => $imagePath,
            'credential_url' => $request->credential_url,
        ]);

        return redirect()->route('admin.certifications.index')->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit(Certification $certification)
    {
        return view('admin.certifications.edit', compact('certification'));
    }

    public function update(Request $request, Certification $certification)
    {
        $request->validate([
            'title'          => 'required|string|max:255',
            'issuer'         => 'required|string|max:255',
            'issue_date'     => 'nullable|date',
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'credential_url' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($certification->image) {
                Storage::disk('public')->delete($certification->image);
            }
            $certification->image = $request->file('image')->store('certifications', 'public');
        }

        $certification->update([
            'title'          => $request->title,
            'issuer'         => $request->issuer,
            'issue_date'     => $request->issue_date,
            'image'          => $certification->image,
            'credential_url' => $request->credential_url,
        ]);

        return redirect()->route('admin.certifications.index')->with('success', 'Sertifikat berhasil diperbarui!');
    }

    public function destroy(Certification $certification)
    {
        if ($certification->image) {
            Storage::disk('public')->delete($certification->image);
        }

        $certification->delete();

        return redirect()->route('admin.certifications.index')->with('success', 'Sertifikat berhasil dihapus!');
    }
}