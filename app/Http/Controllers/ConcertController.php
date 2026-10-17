<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $concerts = Concert::all();
        return view('concerts.index', compact('concerts'));
    }

    public function show($id)
    {
        $concert = Concert::findOrFail($id);
        return view('concerts.show', compact('concert'));
    }

    // Tambahan method untuk Tentang Kami
    public function about()
    {
        return view('about');
    }

    // Tambahan method untuk Kontak
    public function contact()
    {
        return view('contact');
    }
}