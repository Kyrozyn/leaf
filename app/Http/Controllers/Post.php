<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function index()
    {
        return view('pages.post.index');
    }
}
