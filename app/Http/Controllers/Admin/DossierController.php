<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DossierController extends Controller
{
    // Show all dossiers
    public function index()
    {
        $dossiers = Dossier::latest()->get();
        return view('dashboard.dossiers.index', compact('dossiers'));
    }

    // Show form to upload a new dossier
    public function create()
    {
        return view('dashboard.dossiers.create');
    }

    // Store uploaded dossier
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:10240' // Max 10MB
        ]);

        // Store the file in storage/app/public/dossiers
        $path = $request->file('file')->store('dossiers', 'public'); // this is the right way

        // Save the record in DB
        Dossier::create([
            'title' => $request->title ?? $request->file('file')->getClientOriginalName(),
            'file_path' => $path // e.g., dossiers/filename.pdf
        ]);

        return redirect()->route('admin.dossiers')
               ->with('success', 'Dossier uploaded successfully!');
    }

    // Delete dossier and its file
    public function destroy(Dossier $dossier)
    {
        if ($dossier->file_path) {
            Storage::disk('public')->delete($dossier->file_path);
        }

        $dossier->delete();

        return back()->with('success', 'Dossier deleted successfully!');
    }

}
