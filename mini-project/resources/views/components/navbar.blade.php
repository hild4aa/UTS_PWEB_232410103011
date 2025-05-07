<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Tugas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}">Daftar Anime</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('profile', ['username' => request()->query('username')]) }}">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Logout</a>
                </li>
              </ul>
        </div>
    </div>

  </nav>
