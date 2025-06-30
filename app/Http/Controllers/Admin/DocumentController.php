<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    // List all documents
    public function index()
    {
        $documents = Document::latest()->get();
        return view('dashboard.documents.index', compact('documents'));
    }

    // Show the form to create a new document
    public function create()
    {
        return view('dashboard.documents.create');
    }

    // Store the document
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'page_count' => 'required|integer|min:1'
        ]);

        // Store image and file in storage/app/public/...
        $imagePath = $request->file('image')->store('documents/images', 'public');
        $filePath = $request->file('file')->store('documents/files', 'public');

        Document::create([
            'name' => $request->name,
            'image_path' => $imagePath,
            'file_path' => $filePath,
            'page_count' => $request->page_count
        ]);

        return redirect()->route('admin.documents')
               ->with('success', 'Document created successfully!');
    }

    // Delete document and its files
    public function destroy(Document $document)
    {
        if ($document->image_path) {
            Storage::disk('public')->delete($document->image_path);
        }

        if ($document->file_path) {
            Storage::disk('public')->delete($document->file_path);
        }

        $document->delete();

        return back()->with('success', 'Document deleted successfully!');
    }

}
