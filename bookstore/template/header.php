<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-fm/6ZF/8IedPxqF5tpvDoP+oapSPuPzxx+tkwsf8r5xSp9eT8xDUk4DhHyv4uwe5aw5IwDyMIDMK0hKyJc6egRQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   /* Adăugați orice stil suplimentar pentru bara de căutare aici */
   .search-bar {
      margin-top: 10px; /* Adăugați spațiu de sus pentru a separa bara de căutare de conținutul din jur */
   }
</style>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">

    <style>
      body {
        background-color: #f0f0f0; /* O altă culoare de fundal pentru pagina */
      }

      .navbar {
        background-color: #4caf50; /* Culoarea fundalului pentru bara de navigare */
      }

      .navbar-brand,
      .nav.navbar-nav.navbar-right a {
        color: #fff; /* Culoarea textului pentru brand și elemente de meniu */
      }

      .jumbotron {
        background-color: #3498db; /* Culoarea fundalului pentru jumbotron */
        color: #fff; /* Culoarea textului pentru jumbotron */
      }
     
       .book-thumbnail {
        width: 100%; /* Imaginile vor ocupa 100% din lățimea containerului */
        height: auto; /* Înălțimea se ajustează automat pentru a menține proporțiile originale ale imaginii */
        display: block; /* Elimină spațiile goale din jurul imaginii */
        margin-bottom: 15px; /* Adaugă un spațiu între imagini */
   }

    </style>
  </head>

  <body>

    <nav class="navbar bg-info navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Booktrovert shop</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Edituri</a></li>
            <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Carti</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Cosul meu</a></li>
            
            <ul class="nav navbar-nav navbar-right">
            <li><a href="search.php"><i class="fas fa-search"></i>&nbsp; Cautare</a></li>
              </ul>
          </ul>
        </div>
      </div>
    </nav>

    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <div class="jumbotron">
      <div class="container">
        <h1>Bun venit în magazinul online de cărți Booktrovert</h1>
        <p class="lead">Din suflet pentru cititori cu php!</p>
        <p>Va prezint cateva dintre cartile din biblioteca persoanla pe care le puteti comanda la un pret avantajos!</p>
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">
      <!-- Continutul paginii -->
    </div>

  </body>
</html>

      