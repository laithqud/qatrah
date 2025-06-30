<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminManagementController extends Controller
{
    /**
     * Display a listing of admins.
     */
    public function index()
    {
        $admins = Admin::latest()->paginate(10);
        return view('dashboard.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new admin.
     */
    public function create()
    {
        return view('dashboard.admins.create');
    }

    /**
     * Store a newly created admin.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => ['required', 'confirmed', Password::min(8)],
        ], [
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني غير صحيح',
            'email.unique' => 'البريد الإلكتروني مستخدم من قبل',
            'password.required' => 'كلمة المرور مطلوبة',
            'password.confirmed' => 'كلمة المرور وتأكيد كلمة المرور غير متطابقتان',
            'password.min' => 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.admins.index')->with('success', 'تم إنشاء المشرف بنجاح');
    }

    /**
     * Show the form for editing an admin.
     */
    public function edit(Admin $admin)
    {
        return view('dashboard.admins.edit', compact('admin'));
    }

    /**
     * Update the specified admin.
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,' . $admin->id,
            'password' => ['nullable', 'confirmed', Password::min(8)],
        ], [
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني غير صحيح',
            'email.unique' => 'البريد الإلكتروني مستخدم من قبل',
            'password.confirmed' => 'كلمة المرور وتأكيد كلمة المرور غير متطابقتان',
            'password.min' => 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل',
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;
        
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }
        
        $admin->save();

        return redirect()->route('admin.admins.index')->with('success', 'تم تحديث المشرف بنجاح');
    }

    /**
     * Remove the specified admin.
     */
    public function destroy(Admin $admin)
    {
        // Count only non-trashed admins to ensure we don't delete the last active admin
        if (Admin::whereNull('deleted_at')->count() <= 1) {
            return back()->withErrors(['error' => 'لا يمكن حذف آخر مشرف نشط في النظام']);
        }

        $admin->delete();
        return redirect()->route('admin.admins.index')->with('success', 'تم حذف المشرف بنجاح');
    }

    /**
     * Display a listing of trashed admins.
     */
    public function trashed()
    {
        $admins = Admin::onlyTrashed()->latest()->paginate(10);
        return view('dashboard.admins.trashed', compact('admins'));
    }

    /**
     * Restore the specified admin.
     */
    public function restore($id)
    {
        $admin = Admin::onlyTrashed()->findOrFail($id);
        $admin->restore();
        return redirect()->route('admin.admins.trashed')->with('success', 'تم استعادة المشرف بنجاح');
    }

    /**
     * Permanently delete the specified admin.
     */
    public function forceDelete($id)
    {
        $admin = Admin::onlyTrashed()->findOrFail($id);
        $admin->forceDelete();
        return redirect()->route('admin.admins.trashed')->with('success', 'تم حذف المشرف نهائياً');
    }
}
