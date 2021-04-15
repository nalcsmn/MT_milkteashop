<?php
require_once 'php/init.php';

$con = new config();
$con->con();


?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <script src="https://kit.fontawesome.com/60697567a5.js" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="icon" href="img/favicon.png" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Indie+Flower&display=swap" rel="stylesheet">
  <title>Ma neil La Tea</title>
</head>

<body>
  <section class="heder" id="title">
    <div class="container-fluid navcon">
      <div class="container">
        <nav class="navbar navbar-expand-md   pt-md-2 mb-5">
          <img src="img/logo.png" class="img-fluid logo" />
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active navitem" href="index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link navitem" href="#gallery">Gallery</a>
              <a class="nav-item nav-link navitem" href="#Aboutuzz">About Us</a>
              <a class="nav-item nav-link navitem" href="#zxc">Review</a>
              <a class="nav-item nav-link navitem" href="testimonial.php">Admin</a>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="container-fluid heds">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">A true stress buster<br />Ma neil LA TEA.</h1>
          <button type="button" class="btn btn-dark btn-lg review-button">
            <i class="fab fa-apple"></i> Review Now
          </button>
        </div>

        <div class="col-lg-6">
          <img class="title-image" href="#Revs" src="img/melktea.png" alt="melktea-mockup" />
        </div>
      </div>
    </div>
  </section>

  <section class="gallerySec" id="gallery">
    <div class="container gallery-container">

      <h1>Gallery</h1>

      <p class="page-description text-center">Ma neil La TEA Collection</p>

      <div class="tz-gallery">

        <div class="row">
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g1.jpg" alt="Park">
            </a>
            <h2>Ma Neil LA TEA</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g2.jpg" alt="Park">
            </a>
            <h2>Succulents and Origami</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g3.png" alt="Park">
            </a>
            <h2>Boba Milk Tea</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g4.jpg" alt="Park">
            </a>
            <h2>Bubble Milk Tea</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g5.jpg" alt="Park">
            </a>
            <h2>ARCHAN CHAN TEA</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g6.jpg" alt="Park">
            </a>
            <h2>Hong Kong style Tea</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g7.jpg" alt="Park">
            </a>
            <h2>Macha TEA</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g8.jpg" alt="Park">
            </a>
            <h2>Brown Sugar Milk Tea</h2>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox">
              <img src="img/g9.jpg" alt="Park">
            </a>
            <h2>Earl Grey Bubble Tea</h2>
          </div>
        </div>

      </div>

    </div>

  </section>

  <section class="Aboutuz" id="Aboutuzz">
    <div class="carous">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-controls">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active" style="background-image:url('img/s1.jpg')"></li>
            <li data-target="#carousel" data-slide-to="1" style="background-image:url('img/s2.jpg')"></li>
            <li data-target="#carousel" data-slide-to="2" style="background-image:url('img/s3.jpg')"></li>

          </ol>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <img src="img/left-arrow.svg" alt="Prev">
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <img src="img/right-arrow.svg" alt="Next">
          </a>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image:url('img/s1.jpg')">
            <div class="container">
              <h2>About Us</h2>
              <p>Ma Neil LA TEA</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image:url('img/s2.jpg')">
            <div class="container">
              <h2>I'm Neil <br />Owner of</h2>
              <p>Ma Neil LA TEA</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image:url('img/s3.jpg')">
            <div class="container">
              <h2>BRAND STORY</h2>
              <p>Ma Neil LA TEA was founded at Philippines 2021, and from there it has delivered consistently. In terms of bubble tea, Ma Neil LA TEA now has become the
                leading brand in the fresh tea beverage industry. <br />

                Ma Neil LA TEA continues to embrace tradition and unleash bold innovations to be a leading brand in the freshly-made drinks industry.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="Aboutuz" id="zxc">
    <div class="container-fluid revs">
      <?php
      insertReview();
      ?>

      <form action="" method="GET">
        <div class="text-center mb-4">
          <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Ma Neil La TEA</h1>
        </div>
        <div class="form-label-group">
          <div class="form-label-group">
            <input class="form-control" class="align-center" type="text" name="comment" placeholder="Enter your review! " required />
            <label for="inputPassword">Review</label>
          </div>
          <div class="checkbox mb-3">
          </div>
          <div class="col-md">
            <input class="btn review-button" type="submit" name="save" value="Submit" />
          </div>
      </form>
    </div>
  </section>

  <section class="reviewP" id="reviewID">
    <div class="container-fluid revs">
    <h1>Gallery</h1>
      <?php
      $view = new view();
      // var_dump($view->viewData());
      $view->viewGui();

      ?>
    </div>

  </section>
  <footer>
    <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
    <a class="footer-twit" href="https://twitter.com/">Twitter</a>
    <a class="footer-fb" href="https://www.facebook.com/nalcsmn">facebook</a>
    <p class="footer-note">© 2021 Neil LACSAMANA.</p>
  </footer>
  <div class="rtbutton">
    <a href="#title"><i class="fas fa-chevron-circle-up"></i></a>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>