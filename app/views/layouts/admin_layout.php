<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container  mb-3">
   <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/recipe/index">Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tag/index">Tags</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tool/index">Tools</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.html">Coontacts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">About</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Contact</a>
                    </div>
                </li> 
            </ul>
        </div>
    </nav>
    <!-- end menu -->

<? echo Message::display(); ?>
</div>

<? include $template_path; ?>


<script src="/assets/js/delete.js"></script>
</body>
</html>