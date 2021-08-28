



@include('layout')
@include('css')


<form action="/connexion" method="post" class="section">
{{ csrf_field() }}
<hr align = center size=10 widht ="100%">
<div class="field">
  <label class="label">Adresse email</label>
  <div class="control">
    <input class="input" type="text" name="email" value="{{ old('email')}}" placeholder="Email">
  </div>
  @if($errors->has('email'))
  <p class="help is-danger">{{ $errors->first('email') }}</p>
  @endif
</div>
<div class="field">
  <label class="label">Mot de passe</label>
  <div class="control">
    <input class="input" type="text" name="password"  placeholder="mot de passe">
  </div>
  @if($errors->has('password'))
  <p class="help is-danger">{{ $errors->first('password') }}</p>
  @endif
</div>
<div class="field">
  <div class="control">
    <button class="button is-link" type="submit">Se connecter</button>
  </div>
  <hr align = center widht ="100%">

</form>
