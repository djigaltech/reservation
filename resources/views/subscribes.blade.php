

@include('layout')
<div class="section">
  <h1 class="title is-l">Liste des utilisateurs</h1>
</div>

<ul>
    @foreach($subscribes as $subscribes)

    <li>
    <a href="/{{ $subscribes-> email}}">{{ $subscribes-> email}}</a>
    </li>
    @endforeach
</ul>
