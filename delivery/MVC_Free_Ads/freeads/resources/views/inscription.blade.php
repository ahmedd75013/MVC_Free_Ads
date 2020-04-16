
@extends('layout')

@section('contenu')
    <form action="/inscription" method="post">

    {{csrf_field()}}
  
     
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text"  name="nom" >
       
        </div>


        <div class="form-group">
          <label for="prenom">Prenom</label>
          <input type="text"  name="prenom">
        
        </div>
   
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"  name="email" >
        
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email"  name="email_verified_at" >
        
        </div>

      <div class="form-group">
        <label for="mdp">Password</label>
        <input type="password" name="password" >
       
      </div>

      <div class="form-group">
        <label for="mdp">Confirm Password</label>
        <input type="password" name="password2" >
        
      </div>
      <input type="submit" value="M'inscrire">
      </div>
    </form>
   
 
@endsection