<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function aboutUs()
    {
        return view('public.about-us');
    }

    public function joinUs()
    {
        return view('public.join-us');
    }

    public function contactUs()
    {
        return view('public.contact-us');
    }

    public function testimonials()
    {
        return view('public.testimonials');
    }

    public function gallery()
    {
        return view('public.gallery');
    }

    public function submitJoinForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:1000'
        ]);

        // Here you can handle the form submission
        // For now, we'll just redirect back with success message
        return back()->with('success', 'تم إرسال طلبك بنجاح! سنتواصل معك قريباً.');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:1000'
        ]);

        // Here you can handle the contact form submission
        // For now, we'll just redirect back with success message
        return back()->with('success', 'تم إرسال رسالتك بنجاح! سنرد عليك في أقرب وقت.');
    }
}
