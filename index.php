<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>pc info pakistan</title>
</head>

<body>
  <?php include "partial/haeder.php"; ?>
  <?php include "partial/db_connect.php"; ?>






  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/nividia 2.webp" class="d-block w-100" alt="..." height="400px" width="200px">
      </div>
      <div class="carousel-item">
        <img src="img/m1.avif" class="d-block w-100" alt="..." height="400px" width="100px">
      </div>
      <div class="carousel-item">
        <img src="img/arc1.jpg" class="d-block w-100" alt="..." height="400px" width="100px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>







  <div class="container">
    <h1 class="text-center">well come to pc info pakistan</h1>
    <div class="row">

      <?php

      $sql = "SELECT * FROM `pcinfo`";
      $result = mysqli_query($inf, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
      $catname=$row['catagery_name'];
       $catsri=$row['catagery_sri'];
       $picurl=$row['url'];
       $catdesc=$row['catagery_desc'];
      
        echo '

      <div class="col-md-4 my-2">
      <h3> '.$catsri.'</h3>
        <div class="" style="width: 18rem; ">
          <img src=" '.$picurl.' " class="card-img-top" alt="..." height="180px" width="150px">
          <div class="card-body">
            <h5 class="card-title" >'.$catname.'</h5>
            <p class="card-text">'.$catdesc.'</p>
            <a href="#" class="btn btn-primary"> view threds</a>
          </div>
        </div>
      </div>
      
      ';
      }


      ?>








    </div>
  </div>








  <?php include "partial/footer.php" ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>