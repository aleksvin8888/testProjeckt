<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        $professions = Profession::all();

        return view('main.home', compact('professions'));
    }
}
