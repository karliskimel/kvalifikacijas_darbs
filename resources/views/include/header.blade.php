
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a style="background-color: #F7E7CE" class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="background-color: #F7E7CE; color: black;" class="nav-link active" aria-current="page" href="#">Sākums</a>
        </li>
        <li class="nav-item">
          <a style="background-color: #F7E7CE; color: black;" class="nav-link" href="{{ route('shop.index') }}">Veikals</a> <!-- aizved uz veikalu -->
        </li>
        @auth
          <li class="nav-item">
          <a style="background-color: #F7E7CE; color: black;" class="nav-link" href="{{route('logout')}}">Iziet</a> <!-- iziet no sava konta -->
        </li>
        @else
        <li class="nav-item">
          <a style="background-color: #F7E7CE; color: black;" class="nav-link" href="{{route('login')}}">Pievienoties</a> <!-- pievienoties savam kontam -->
        </li>
        <li class="nav-item">
          <a style="background-color: #F7E7CE; color: black;" class="nav-link" href="{{route('registration')}}">Reģistrācija</a> <!-- aizved uz reģistrāciju -->
        </li>
        @endauth
      </ul>
      <span class="navbar-text">
      @auth
         {{auth()->user()->name}} <!-- autentificē lietotāju -->
      @endauth   
      </span>
    </div>
  </div>
</nav>
