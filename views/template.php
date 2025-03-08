<?php
require_once __DIR__ . "/../controllers/controller.template.php";
$path = TemplateController::path();
?>

<!DCOTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Estructura correcta de un proyecto web" />
    <meta name="author" content=""/>
    <title>Freelance - Start Bootstrap Theme</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/portfolio/views/assets/img/favicon.png" />
    <!-- Font Awesome (free version)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- core theme CSS (includes Bootstrap)-->
    <link href="<?php echo $path; ?>/portfolio/views/assets/css/styles.css" rel="stylesheet" />
    <!-- Bootstrap CSS (para que funcione el modal) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs6S6s3POxx5Xf5Xy5Xy5Xy5Xy5" crossorigin="anonymous">
  </head>

  <body id="page-top">

    <div class="wrapper">
      <?php
      include 'modules/nav.php';
      include "modules/header.php";
      include 'pages/portfolio/portfolio.php';
      include 'pages/contact/contact.php';
      include 'pages/login/login.php';
      include 'modules/footer.php';
      include 'modules/copyright.php';

      ?>
    </div>

    <!-- Bottstrap core js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo $path; ?>/portfolio/views/assets/js/scripts.js"></script>
    <!-- SB FORMS JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- Incluir Bootstrap JS y Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybF+TnCo9K5s6kDgKJfbzL6vfhVR9er3hJSgtSjoEqVg5hM9z" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuCz2kjqEL0Ve1oE5DX0t5t2OhFZc6n9j9nN30zt4HkXtZyK8gtw3vb7qYb2v0Y0" crossorigin="anonymous"></script>
  
    
  </body>