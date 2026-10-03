<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Support\Media;
use Illuminate\Http\Request;

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
            'image'          => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
            'credential_url' => 'nullable|string',
        ]);

        $imagePath = Media::upload($request->file('image'), 'certifications');

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
            'image'          => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
            'credential_url' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            Media::delete($certification->image);
            $certification->image = Media::upload($request->file('image'), 'certifications');
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
        Media::delete($certification->image);

        $certification->delete();

        return redirect()->route('admin.certifications.index')->with('success', 'Sertifikat berhasil dihapus!');
    }
}