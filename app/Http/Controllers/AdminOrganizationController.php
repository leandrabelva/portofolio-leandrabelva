<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Support\Media;
use Illuminate\Http\Request;

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
            'image'             => 'required|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);

        $imagePath = Media::upload($request->file('image'), 'organizations');

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
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);

        if ($request->hasFile('image')) {
            Media::delete($organization->image);
            $organization->image = Media::upload($request->file('image'), 'organizations');
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
        Media::delete($organization->image);

        $organization->delete();

        return redirect()->route('admin.organizations.index')->with('success', 'Riwayat organisasi berhasil dihapus!');
    }
}