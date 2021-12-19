<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:4000',
        ]);
        return view('contact-form-store', [
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);
    }
}
