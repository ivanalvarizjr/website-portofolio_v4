<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projek()
    {
        return view('projek');
    }

    public function contact()
    {
        return view('contact');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }

    public function sendMessage(Request $request)
    {
        // Validasi sederhana
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Untuk sementara hanya redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
