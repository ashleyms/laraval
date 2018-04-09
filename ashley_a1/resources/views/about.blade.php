<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Design Portfolio" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashley Spires</title>
    <link href="bootstrap_style/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
      <header>
          <!-- Nav -->
          <nav class="navbar-expand-sm navbar-light">
              <!-- Collapse Nav -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Nav Items -->
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="nav">
                      <li class="nav-item">
                          <a class="nav-link active" href="{{ url('/') }}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/about') }}">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/graphics') }}">Graphics</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                      </li>
                  </ul>
              </div>
          </nav>
          <!-- Close Nav -->
      </header>

    <!-- Open Main Container -->
    <main class="container">
        <h1>About</h1>
        <div class="row">
            <!-- About Image -->
            <div class="col-sm-12 col-md-6 col-lg-3 display">
                <img src="img/display.jpg" alt="profile picture" />
            </div>
            <!-- About Paragraph -->
            <div class="col-sm-12 col-md-6 col-lg-9">
                <p class="about">
                    I am a freelance designer with an advance diploma in graphic design, as well as currently studying web development in Vancouver. I specialize in branding, print and web design, with experience in the prepress and editorial industry.
                </p>
            </div>
        </div>
    </main>
    <!-- Close Main Container -->


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap_style/js/bootstrap.min.js"></script>
  </body>
</html>
