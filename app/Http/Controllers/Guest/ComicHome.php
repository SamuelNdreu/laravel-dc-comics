<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic as Comic;
use Illuminate\Http\Request;

class ComicHome extends Controller
{
    public function index()
    {
        $comics= Comic::all();
        return view("admin.home",compact("comics"));
    }
}