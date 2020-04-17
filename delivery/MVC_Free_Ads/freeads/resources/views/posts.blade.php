@extends('layouts.app')

@section('content')

<div class="ui two column grid">
@forelse{{$post ?? '' }}
  <div class="column">
    <div class="ui raised segment">
      <a class="ui red ribbon label">{{$post->category->image}}</a>
      <span>{{ $post->image}}</span>
      <div class="ui raised segment">
      <a class="ui red ribbon label">{{$post->category->title}}</a>
      <span>{{ $post->title}}</span>

      <div class="ui raised segment">
      <a class="ui red ribbon label">{{$post->category->price}}</a>
      <span>{{ $post->price}}</span>
      
      <div class="ui raised segment">
      <a class="ui red ribbon label">{{$post->category->description}}</a>
      <span>{{ $post->description}}</span>
      
      <p class="mt-3">
      
     
      </p>
      
    </div>
  </div>
  @empty
 <div class= "ui icon massage mt-5">
 <i class="info icon"></i>
 <div class="content">
 <div class="header">
 pas d'article!!
 </div>
 <p>
 desole pas d'article trouver
 </p>
 </div>
 </div>

  @endforelse
</div>

@endsection