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
        <h1>Portfolio</h1>
            <div class="row">
                <!-- Project 1 Image -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <img class="portfolio" src="img/books.jpg" alt="book series">
                    <h4>Book Series</h4>
                    <!-- Project 1 Button -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#project1">
                      More Details</button>
                </div>
                <!-- Project 2 Image -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <img class="portfolio" src="img/lexus.jpg" alt="lexus">
                    <h4>Brochure</h4>
                    <!-- Project 2 Button -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#project2">
                      More Details</button>
                </div>
                <!-- Project 3 Image -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <img class="portfolio" src="img/dictionary.jpg" alt="dictionary">
                    <h4>Dictionary Redesign</h4>
                    <!-- Project 3 Button -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#project3">
                      More Details</button>
                </div>
            </div>

            <!-- Project 1 Model-->
            <div class="modal fade" id="project1" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!-- Model Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="title">Book Series</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Model Body -->
                  <div class="modal-body">
                    <p>Redesign of three classic books covers to make them appear cohesive.</p>
                    <img src="img/books.jpg" alt="book series"/>
                    <img src="img/books2.jpg" alt="book series"/>
                  </div>
                  <!-- Model Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Close Project 1 Model-->

            <!-- Project 2 Model-->
            <div class="modal fade" id="project2" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!-- Model Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="title2">Lexus Brochure</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Model Body -->
                  <div class="modal-body">
                    <p>Brochure design for Lexus certified pre-owned vehicles. Created within the brand guidelines of Lexus.</p>
                    <img src="img/lexus.jpg" alt="lexus"/>
                    <img src="img/lexus2.jpg" alt="lexus"/>
                    <img src="img/lexus3.jpg" alt="lexus"/>
                  </div>
                  <!-- Model Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Close Project 2 Model-->

            <!-- Project 3 Model-->
            <div class="modal fade" id="project3" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <!-- Model Header -->
                  <div class="modal-header">
                    <h5 class="modal-title" id="title3">Dictionary Redesign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Model Body -->
                  <div class="modal-body">
                    <p>A different take on a classic boring dictionary. The project was to make it exciting and make the viewer want to read it.</p>
                    <img src="img/dictionary.jpg" alt="dictionary design"/>
                    <img src="img/dictionary2.jpg" alt="dictionary design"/>
                  </div>
                  <!-- Model Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Close Project 3 Model-->
    </main>
    <!-- Close Main Container -->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap_style/js/bootstrap.min.js"></script>
  </body>
</html>
