<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengajuan Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/unicons.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

 
    <link rel="stylesheet" href="../assets/css/tooplate-style.css">
    
  </head>
  <body>

    <!-- MENU -->
    <header>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="\logout" method='post'>
                  @csrf
                  <button class="dropdown-item" type="submit">logout</button>
                </form>
          </li> </ul>
          @else
          <a class="navbar-brand" href="/login" ><i class='uil uil-user'></i> Masuk</a>
          @endauth
 </header>

 <div class="container">
     @yield('content')
 </div>

    <!-- FOOTER -->
     <footer class="footer py-5">
  
     </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/Headroom.js"></script>
    <script src="../assets/js/jQuery.headroom.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/smoothscroll.js"></script>
    <script src="../assets/js/custom.js"></script>

  </body>
</html>