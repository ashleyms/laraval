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
        <h1>Graphics</h1>
        <!-- Open Thumbnails Section -->
        <section id="profiles" class="page">
                <div class="row" id="profile-grid">

                    <!-- Thumbnail 1-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 profile">
                        <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <!-- Image -->
                                <a href="#" title="image 1" class="thumb">
            				          <img src="img/illustration.jpg" class="img-responsive" data-toggle="modal" data-target=".modal-profile-lg" alt="illustration">
            				     </a>
                            </div>
                        </div>
                    </div>

                    <!-- Thumbnail 2 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 profile">
                        <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <!-- Image -->
                                <a href="#" title="image 1" class="thumb">
            				          <img src="img/poster.jpg" class="img-responsive" data-toggle="modal" data-target=".modal-profile-lg" alt="poster">
            				     </a>
                            </div>
                        </div>
                    </div>

                    <!-- Thumbnail 3 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 profile">
                        <div class="panel panel-default">
                            <div class="panel-thumbnail">
                                <!-- Image -->
                                <a href="#" title="image 1" class="thumb">
            				          <img src="img/typography.jpg" class="img-responsive" data-toggle="modal" data-target=".modal-profile-lg" alt="type">
            				     </a>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
        <!-- Close Thumbnails Section -->

        <!-- Modal-lightbox Display -->
        <div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Close Button -->
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>
    </main>
    <!-- Close Main Container -->


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap_style/js/bootstrap.min.js"></script>
    <script>
        //Lightbox Function
        $(document).ready(function() {
            // Show on thumbnail click
            $('a.thumb').click(function(event) {
                event.preventDefault();
                var content = $('.modal-body');
                content.empty();
                var title = $(this).attr("title");
                $('.modal-title').html(title);
                content.html($(this).html());
                $(".modal-profile").modal({
                    show: true
                });
            });
        });
    </script>

</body>

</html>
