@extends('layouts.app')


@section('content')

@foreach($post as $value)

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img class="card-img-top" src="{{$value->image}}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$value->title}}</h5>
        <p class="card-text">{{$value->description}}</p>
        <h3 class="card-title">{{$value->price}} $</h3>

        <a href ="{{ route('edit',$value->id)}}" class="btn btn-primary">
        <i class="fa fa-pencil">Modifier</i>
        </a>
        
        <a href ="#" class="btn btn-danger">
        <i class="fa fa-pencil">Supprime</i>
        </a>
  
        </a>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection