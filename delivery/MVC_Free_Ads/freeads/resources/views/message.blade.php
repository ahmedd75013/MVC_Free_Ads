@extends('layouts.app')

@section('content')
<div class="container">
<h1>Contacter le vendeur</h1>
<form action ="#" method="POST">
<div class="form-group">
<label for="content">VOtre message</label>
<textarea name="content" id="content" cols="30" rows="10"
class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-success">Envoyer le message</button>
</form>
</div>

@endsection