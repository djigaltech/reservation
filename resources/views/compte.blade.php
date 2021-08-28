@include('css')
@include('layout')
  <div class="section">
<h1 class="title is-1">Bienvenu dans votre compte </h1>
</div>
<br>
<br>

 <center>

   <label class="label" class="section">Modifier votre mot de passe</label>
 <form action="/mot_passe" method="post" class="section">
 {{ csrf_field() }}




 <div class="field">
   <label class="label" class="section">Entrer le nouveau mot de passe</label>
   <div class="control">
     <input class="input" type="text" name="password"  placeholder="mot de passe">
   </div>
   @if($errors->has('password'))
   <p class="help is-danger">{{ $errors->first('password') }}</p>
   @endif
 </div>
 <div class="field">
   <label class="label"> Confirmer le nouveau Mot de passe</label>
   <div class="control">
     <input class="input" type="text" name="password_confirmation"  placeholder=" Confirmer le nouveau Mot de passe">
   </div>
   @if($errors->has('password_confirmation'))
   <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
   @endif
 </div>
 <div class="field">
   <div class="control">
     <button class="button is-link" type="submit">Changer le mot de passe</button>
   </div>

 </form>
 </center>
