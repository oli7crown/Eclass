<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller

{
    function index()
    {
        $posts = Post::all()->toArray();
        return view('posts', compact('posts'));

    }


    function save(Request $request)
    {
        $user = new Post();
        $user->name = $request->name;


        $user->depart = $request->depart;
        $user->message = $request->message;
        $user->save();
        return back()->with('success', 'Η δημοσέυση σας ανέβηκε επιτυχώς!');

    }
}
