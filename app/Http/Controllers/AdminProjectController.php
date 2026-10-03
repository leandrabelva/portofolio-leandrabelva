<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Support\Media;
use Illuminate\Http\Request;

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
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'pdf_file'    => 'nullable|mimes:pdf|max:4096',
            'embed_url'   => 'nullable|string',
            'github_url'  => 'nullable|string',
            'website_url' => 'nullable|string',
            'figma_url'   => 'nullable|string',
        ]);

        $imagePath = 'assets/Project.png';
        if ($request->hasFile('image')) {
            $imagePath = Media::upload($request->file('image'), 'projects');
        }

        $pdfPath = null;
        if ($request->hasFile('pdf_file')) {
            $pdfPath = Media::upload($request->file('pdf_file'), 'projects/pdf');
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
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:4096',
            'pdf_file'    => 'nullable|mimes:pdf|max:4096',
            'embed_url'   => 'nullable|string',
            'github_url'  => 'nullable|string',
            'website_url' => 'nullable|string',
            'figma_url'   => 'nullable|string',
        ]);

        //Aktualisasi Gambar
        if ($request->hasFile('image')) {
            Media::delete($project->image);
            $project->image = Media::upload($request->file('image'), 'projects');
        }

        //Aktualisasi pdf 
        if ($request->hasFile('pdf_file')) {
            Media::delete($project->pdf_file);
            $project->pdf_file = Media::upload($request->file('pdf_file'), 'projects/pdf');
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
        Media::delete($project->image);
        Media::delete($project->pdf_file);

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', '¡Proyecto eliminado con éxito!');
    }
}