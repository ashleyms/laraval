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
        <h1>Contact</h1>
        <!-- Open Form -->
        <form method="post" action="mailto:ashleymspires@gmail.com">
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <!-- Message -->
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" placeholder="message" rows="3"></textarea>
            </div>
            <!-- Submit -->
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        <!-- Close Form -->
    </main>
    <!-- Close Main Container -->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap_style/js/bootstrap.min.js"></script>
</body>

</html>
