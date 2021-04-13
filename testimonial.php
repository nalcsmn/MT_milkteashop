<?php
require_once 'php/init.php';

// $con = new config();
// $con->con();




?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" href="img/favicon.png" />
  <title>Ma neil La Tea</title>
</head>

<body>
  <!-- NavBAR -->
  <div class="container-fluid navcon">
      <div class="container">
        <nav class="navbar navbar-expand-md   pt-md-5 mb-5">
          <img src="img/logo.png" class="img-fluid logo" />
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active navitem" href="index.php">Home <span class="sr-only">(current)</span></a>
             
            </div>
          </div>
        </nav>
      </div>
    </div>
    <section>
  <div class="container mt-5">
    <?php

    insertT();
    deleteT();
    editT();
    ?>

    <form action="" method="GET">
      <div class="row">
        <div class="col-md-9 form-group">
          <input class="form-control" type="text" name="items" placeholder="Insert New Task" required />

        </div>
        <div class="col-md">
          <input class="btn btn-success" type="submit" value="Add Task" />
        </div>
      </div>
    </form>
      <?php
      $view = new view();
      // var_dump($view->viewData());
      $view->viewData();
      $view->viewCompleteData();
      ?>


  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>