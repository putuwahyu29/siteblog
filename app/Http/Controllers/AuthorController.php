<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::all();
        return view('authors', [
            'title' => 'Penerbit',
            'authors' => $authors
        ]);
    }
    
}
