<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function dashboard(){
        return view('dashboard', ['posts' => Post::all()]);
    }
}
