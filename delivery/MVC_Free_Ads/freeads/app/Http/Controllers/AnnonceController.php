<?php

namespace App\Http\Controllers;

use App\Ad ;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore;

class AnnonceController extends Controller
{
    Public function create()

    {
            return view('create');
    }


    Public function store(AdStore $request)
    {
       $validated = $request->validated();
        
       $ad=new Ad();
       $ad->title =$validated['title'];
       $ad->description =$validated['description'];
       $ad->price =$validated['price'];
       $ad->image =$validated['image'];

       $ad->save();

       return redirect()->route('home')->with('success');

    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $user = User::findOrFail($post->user_id);
        return view('posts.show', compact('post', 'user'));
    }



}
