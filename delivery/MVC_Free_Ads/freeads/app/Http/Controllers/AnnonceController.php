<?php

namespace App\Http\Controllers;

use App\Ad ;
use Illuminate\Http\Request;
use App\Http\Requests\AdStore;
use Illuminate\Support\Facades\Auth;

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

       return redirect()->route('show')->with('success');

    }

    public function show()
    {
        $post = Ad::all();
        return view('posts.show', compact('post'));
    }


    Public function edit(Ad $id)
    { if(Auth::user()->id){
        
        return view('posts.edit' ,compact('id'));
        
    }
    }

    
    Public function update(Ad $id ,Request $request)
    {
        if($id)
            {
                  $validate = null;
                  echo"id";
                  if ($id && Auth::user()->id){
                    echo"user";  
                

                  $validate = $request->validate([
 
                 'title' => 'required',
                 'image' => 'required',
                 'description' => 'required',
                 'price' =>'required',]);

        if($validate)
            {
 
                       
                        $id->title = $request['title'];
                        $id->image = $request['image'];
                        $id->description = $request['description'];
                        $id->price = $request['price'];
        
                         $id->save();
        
                        $request->session()->flash('success','Votre annonce ont maintenant été mises à jour');
                        return redirect('/show');
            } 
        }}
    }

                Public function search()
                {
                    $q =request()->input('q');

                    $annonce = Ad::where('title','like',"%$q%")
                    ->orWhere('price ' ,'like' ,"%$q%")
                    ->paginate(6);

                    return view('posts.search')->with('annonce',$annonce);

                }



}



