<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function dashboard()
    {
        $totalAdmins = Admin::count();
        $totalUsers = User::count();
        $recentUsers = User::latest()->take(5)->get();
        
        // Additional stats for the educational platform
        $totalImages = \App\Models\Image::count() ?? 0;
        $totalDocuments = \App\Models\Document::count() ?? 0;
        
        return view('dashboard.main', compact('totalAdmins', 'totalUsers', 'recentUsers', 'totalImages', 'totalDocuments'));
    }
}
