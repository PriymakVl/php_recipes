<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simply Recipes || Final</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="/assets/css/normalize.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="/assets/css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="/" class="nav-logo">
            <img src="../assets/img/logo.svg" alt="simply recipes" />
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="/" class="nav-link"> home </a>
          <a href="about.html" class="nav-link"> about </a>
          <a href="/main/tags" class="nav-link"> tags </a>
          <a href="/main/recipes" class="nav-link"> recipes </a>
          <a href="/recipe/index" class="nav-link">admin</a>

          <div class="nav-link contact-link">
            <a href="contact.html" class="btn"> contact </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
    <!-- main -->
    <main class="page">
      <? include $template_path; ?>
    </main>
    <!-- end of main -->
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">SimplyRecipes</span> Built by
        <a href="https://www.johnsmilga.com/">Coding Addict</a>
      </p>
    </footer>
    <script src="/assets/js/app.js"></script>
  </body>
</html>
 