<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Support\Media;
use Illuminate\Http\Request;

class AdminSkillController extends Controller
{
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'icon'     => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $iconPath = Media::upload($request->file('icon'), 'skills');

        Skill::create([
            'name'     => $request->name,
            'category' => $request->category,
            'icon'     => $iconPath,
        ]);

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil ditambahkan!');
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'icon'     => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            Media::delete($skill->icon);
            $skill->icon = Media::upload($request->file('icon'), 'skills');
        }

        $skill->update([
            'name'     => $request->name,
            'category' => $request->category,
            'icon'     => $skill->icon,
        ]);

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil diperbarui!');
    }

    public function destroy(Skill $skill)
    {
        Media::delete($skill->icon);

        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill berhasil dihapus!');
    }
}