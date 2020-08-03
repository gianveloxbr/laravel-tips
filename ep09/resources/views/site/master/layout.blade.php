<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UpInside Treinamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/laravel-tips/ep09/public/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="#">UpInside</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}">
                <a class="nav-link" href="{{ route('site.home') }}">Home</a>
              </li>
              <li class="nav-item {{ (Route::current()->getName() === 'site.courses' ? 'active' : '') }}">
                <a class="nav-link" href="{{ route('site.courses') }}">Cursos</a>
              </li>
              <li class="nav-item {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }}">
                <a class="nav-link" href="{{ route('site.contact') }}">Contato</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <main role="main">

        @yield('content')


        <!-- FOOTER -->
        <footer class="container">
          <p class="float-right"><a href="#">Back to top</a></p>
          <p>&copy; {{ date('Y') }} Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
      </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
