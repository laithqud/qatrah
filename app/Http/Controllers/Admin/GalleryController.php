<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Image::latest()->get();
        return view('dashboard.gallery', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $path = $request->file('image')->store('gallery', 'public');

        Image::create(['file_path' => $path]);

        return back()->with('success', 'Image uploaded successfully!');
    }

    public function destroy(Image $image)
    {
        Storage::disk('public')->delete($image->file_path);

        $image->delete();
        
        return back()->with('success', 'Image deleted successfully!');
    }
}
