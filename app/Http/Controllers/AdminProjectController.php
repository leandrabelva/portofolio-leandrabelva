<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'pdf_file'    => 'nullable|mimes:pdf|max:20480',
            'embed_url'   => 'nullable|string',
            'github_url'  => 'nullable|string',
            'website_url' => 'nullable|string',
            'figma_url'   => 'nullable|string',
        ]);

        $imagePath = 'projects/default.png';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        $pdfPath = null;
        if ($request->hasFile('pdf_file')) {
            $pdfPath = $request->file('pdf_file')->store('projects/pdf', 'public');
        }

        Project::create([
            'title'       => $request->title,
            'category'    => $request->category,
            'description' => $request->description,
            'image'       => $imagePath,
            'embed_url'   => $request->embed_url,
            'pdf_file'    => $pdfPath,
            'github_url'  => $request->github_url,
            'website_url' => $request->website_url,
            'figma_url'   => $request->figma_url,
        ]);

        return redirect()->route('admin.projects.index')->with('success', '¡Proyecto agregado con éxito!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'pdf_file'    => 'nullable|mimes:pdf|max:20480',
            'embed_url'   => 'nullable|string',
            'github_url'  => 'nullable|string',
            'website_url' => 'nullable|string',
            'figma_url'   => 'nullable|string',
        ]);

        //Aktualisasi Gambar
        if ($request->hasFile('image')) {
            if ($project->image && $project->image !== 'projects/default.png') {
                Storage::disk('public')->delete($project->image);
            }
            $project->image = $request->file('image')->store('projects', 'public');
        }

        //Aktualisasi pdf 
        if ($request->hasFile('pdf_file')) {
            if ($project->pdf_file) {
                Storage::disk('public')->delete($project->pdf_file);
            }
            $project->pdf_file = $request->file('pdf_file')->store('projects/pdf', 'public');
        }

        $project->update([
            'title'       => $request->title,
            'category'    => $request->category,
            'description' => $request->description,
            'image'       => $project->image,
            'pdf_file'    => $project->pdf_file,
            'embed_url'   => $request->embed_url,
            'github_url'  => $request->github_url,
            'website_url' => $request->website_url,
            'figma_url'   => $request->figma_url,
        ]);

        return redirect()->route('admin.projects.index')->with('success', '¡Proyecto actualizado con éxito!');
    }

    public function destroy(Project $project)
    {
        if ($project->image && $project->image !== 'projects/default.png') {
            Storage::disk('public')->delete($project->image);
        }

        if ($project->pdf_file) {
            Storage::disk('public')->delete($project->pdf_file);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', '¡Proyecto eliminado con éxito!');
    }
}