@extends('layouts.app')

@section('content')

<h1>Deposer une annonce</h1>

<hr>

<form method ="POST" action="{{ route('update',$id->id)}}">
@csrf
  <div class="form-check">
    <label for="title">Titre de l'annonce</label>
    <input  value ="{{$id->title}}" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" aria-describedby="title" >
    @if($errors->has('title'))
    <span class="invalide-feedback">{{ $errors->first('title')}}</span>
    @endif
  </div>

  <div class="form-check">
    <label for="price">Prix</label>
    <input value ="{{$id->price}}" type="text" class="form-control  {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" aria-describedby="title">
    @if($errors->has('title'))
    <span class="invalide-feedback">{{ $errors->first('price')}}</span>
    @endif
  </div>

  <div class="form-check">
    <label for="image">Image</label>
    <input value ="{{$id->image}}" type="text" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }} "name="image" aria-describedby="image">
    @if($errors->has('image'))
    <span class="invalide-feedback">{{ $errors->first('image')}}</span>
    @endif
  </div>
  <br>
  <div class="form-check">
    <label for="description">description</label>
    <textarea  name="description" class="form-control"  id="description">{{$id->description}}</textarea>
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection 