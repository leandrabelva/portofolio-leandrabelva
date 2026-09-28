<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminOrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::latest()->get();
        return view('admin.organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('admin.organizations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'role'              => 'required|string|max:255',
            'organization_name' => 'required|string|max:255',
            'period'            => 'required|string|max:255',
            'description'       => 'required|string',
            'image'             => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        $imagePath = $request->file('image')->store('organizations', 'public');

        Organization::create([
            'role'              => $request->role,
            'organization_name' => $request->organization_name,
            'period'            => $request->period,
            'description'       => $request->description,
            'image'             => $imagePath,
        ]);

        return redirect()->route('admin.organizations.index')->with('success', 'Riwayat organisasi berhasil ditambahkan!');
    }

    public function edit(Organization $organization)
    {
        return view('admin.organizations.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'role'              => 'required|string|max:255',
            'organization_name' => 'required|string|max:255',
            'period'            => 'required|string|max:255',
            'description'       => 'required|string',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            if ($organization->image) {
                Storage::disk('public')->delete($organization->image);
            }
            $organization->image = $request->file('image')->store('organizations', 'public');
        }

        $organization->update([
            'role'              => $request->role,
            'organization_name' => $request->organization_name,
            'period'            => $request->period,
            'description'       => $request->description,
            'image'             => $organization->image,
        ]);

        return redirect()->route('admin.organizations.index')->with('success', 'Riwayat organisasi berhasil diperbarui!');
    }

    public function destroy(Organization $organization)
    {
        if ($organization->image) {
            Storage::disk('public')->delete($organization->image);
        }

        $organization->delete();

        return redirect()->route('admin.organizations.index')->with('success', 'Riwayat organisasi berhasil dihapus!');
    }
}