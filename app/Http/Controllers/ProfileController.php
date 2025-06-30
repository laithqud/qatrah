<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the user profile page.
     */
    public function show()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    /**
     * Update the user's profile information.
     */
    public function updateProfile(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ], [
            'name.required' => 'الاسم مطلوب',
            'name.string' => 'الاسم يجب أن يكون نص',
            'name.max' => 'الاسم يجب أن يكون أقل من 255 حرف',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني غير صحيح',
            'email.unique' => 'البريد الإلكتروني مستخدم من قبل',
            'email.max' => 'البريد الإلكتروني يجب أن يكون أقل من 255 حرف',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'تم تحديث معلومات الحساب بنجاح');
    }

    /**
     * Update the user's password.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Password::min(8)],
        ], [
            'password.required' => 'كلمة المرور الجديدة مطلوبة',
            'password.confirmed' => 'كلمة المرور وتأكيد كلمة المرور غير متطابقتان',
            'password.min' => 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('profile.show')->with('success', 'تم تحديث كلمة المرور بنجاح');
    }
}
