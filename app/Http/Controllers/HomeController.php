<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class HomeController extends Controller
{
    public function renderHome() {
        return view('home', ['comics' => Comic::all()]);
    }
}
