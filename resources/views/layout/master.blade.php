<!doctype html>
<html lang="en">
  <head>
    <title>@yield('pagetitle')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a3daef7e97.js" crossorigin="anonymous"></script>
    <style>
        .head-banner{
            background: url("https://cdn.wallpapersafari.com/58/75/QOMDhG.jpg");
            background-size: cover;
            background-position: center;
        }
    </style>

  </head>
  <body>
    
    <!-- Header -->
    <header class="container-fluid head-banner p-4">
        <nav class="navbar navbar-expand-lg navbar-light mb-4 mt-2" style="background: rgba(0,0,0,0) !important;">
          <a class="navbar-brand" href="#"><h4>Nature<i class="fas fa-leaf text-success"></i></h4></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
            <span class="navbar-text">
                <i class="fab fa-facebook pr-2"></i>
                <i class="fab fa-instagram p-2"></i>
                <i class="fab fa-twitter p-2"></i>
                <i class="fab fa-youtube p-2"></i>
            </span>
          </div>
        </nav>
        <div class="row mb-4">
            <div class="col-12 mb-5 p-5">
                <h2 class="text-bold text-center"><b>Explore the Nature</b></h2>
                <h5 class="text-center text-light">- Eternal Beauty - </h5>
            </div>
        </div>
    </header>
    <!-- Header -->
    
    <article class="container-fluid">
        <article class="row">
            <article class="col-xl-10 col-md-8 col-sm-12 mx-auto mt-5">
              @yield("content")
            </article>
        </article>
    </article>
    
    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4 pb-0 bg-light">

      <!-- Footer Elements -->
      <div class="container">

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="fab fa-facebook-f"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
              <i class="fab fa-dribbble"> </i>
            </a>
          </li>
        </ul>
        <!-- Social buttons -->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> Aung Thura</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>