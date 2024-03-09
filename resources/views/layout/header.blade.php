<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jarallax.css">

    <title>Portofolio | Mohamad Rodziyan Algifari</title>
    <link rel="shortcut icon" type="image/png" href="assets/favicon/gLogo.png"/>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- my css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- my js -->
        <script src="js/script.js"></script>
    
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
      
        <!-- Toggler/collapsibe Button -->
        <div class="navbar-toggler collapsed" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Project">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
    <div class="container mt-4">
    @yield('navbar')
    </div>
  </body>
</html>