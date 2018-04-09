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
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/books.jpg" alt="Books">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/lexus.jpg" alt="Lexus">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/vanarts_logo.jpg" alt="Logo">
                </div>
            </div>
            <!-- Carousel Buttons -->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>
    <!-- Close Main Container -->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap_style/js/bootstrap.min.js"></script>
</body>

</html>
