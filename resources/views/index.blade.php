<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Tugas Controller dan View | {{ $title }}</title>
</head>

<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Haedar App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'Profile' ? 'active' : '' }}" href="{{ route('profile') }}">
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'College' ? 'active' : '' }}" href="{{ route('college') }}">
              College
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Content --}}
  <div class="container mt-5">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
