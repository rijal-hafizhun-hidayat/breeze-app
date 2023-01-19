<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AkunController extends Controller
{
    public function index()
    {
        return Inertia::render('Akun/Akun');
    }

    public function create(){
        return Inertia::render('Akun/Create');
    }
}
