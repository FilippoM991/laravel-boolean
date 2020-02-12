<nav class=" my_nav navbar fixed-top navbar-light bg-light">
    <a href="{{ route('homepage')}}"><img src="https://www.boolean.careers/images/common/logo.png" alt=""></a>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item {{ Route::CurrentRouteName() === 'homepage' ? 'active': ''}}">
            <a class="nav-link " href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{ Route::CurrentRouteName() === 'corso' ? 'active': ''}}">
            <a class="nav-link " href="{{route('corso')}}">Corso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dopo il corso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lezione gratuita</a>
          </li>
          <li class=" my_iscrizione boolean__navbar__cta nav-item">
            <a track="Click-IscrizioneForm" class="nav-link" href="">Candidati ora</a>
            </li>

        </ul>
      </div>
    </nav>
</nav>
