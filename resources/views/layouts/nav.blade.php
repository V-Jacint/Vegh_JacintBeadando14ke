<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">GameCorner</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="{{request()->is('/') ? 'active' : ''}} nav-link" aria-current="page" href="/">Főoldal</a>
          </li>
          <li class="nav-item">
            <a class="{{request()->is('games') ? 'active' : ''}} nav-link" href="/games">Játékok</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>