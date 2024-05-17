<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>pc info pakistan</title>
</head>

<style>
  #ques {

    margin-bottom: 300px;
  }
</style>



<body>


  <?php include "partial/haeder.php"; ?>
  <?php include "partial/db_connect.php"; ?>




  <?php

  $id = $_GET['catid'];
  $sql = "SELECT * FROM `pcinfo` WHERE catagery_sri=$id";
  $result = mysqli_query($inf, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $catname = $row['catagery_name'];
    // $catsri = $row['catagery_sri'];
    // $picurl = $row['url'];
    $catdesc = $row['catagery_desc'];
  }


  ?>




  <?php
  $showAlert = false;
  $method = $_SERVER['REQUEST_METHOD'];
  if ($method == 'POST') {
      $thrtitle = $_POST['title'];
      $thrdesc = $_POST['desc'];
      $sql = "INSERT INTO `threeds` (`threed_title`, `threed_desc`, `threed_cat_id`, `threed_user_id`, `timestamp`) 
        VALUES ('$thrtitle', '$thrdesc', '$id', '$id', current_timestamp())";
         
      $result = mysqli_query($inf, $sql);
  $showAlert=true;
   if($showAlert){
      
    echo '
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>your threads hase been submitted!</strong> thank you for shearing your threads.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    
    ';

   }

  };

  ?>



  <div class="container my-4">
    <div class="jumbotron">
      <h1 class="display-4">wellcome to pc info pakistan catagery : <br><?php echo $catname ?> </h1>
      <p class="lead"> <?php echo $catdesc ?></p>
      <hr class="my-4">
      <p class="bg-warning">Be civil. Don't post anything that a reasonable person would consider offensive, abusive, or hate speech.
        Keep it clean. Don't post anything obscene or sexually explicit.
        Respect each other. Don't harass or grief anyone, impersonate people, or expose their private information thank you. </p>
      <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
    </div>


  </div>


  <div class="container" id="ques">
    <h1 class="py-3">start a dicusion </h1>


    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
      <div class="form-group">
        <label for="title">write you name </label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="enter you title">
        <small id="emailHelp" class="form-text text-muted">kep your tilte short and crisp as posible</small>
      </div>
      
      <div class="form-group">
    <label for="desc">elaborate your problam</label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
  </div>


      <button type="submit" class="btn btn-success mb-2">Submit</button>
    </form>




    <?php

    $catid = $_GET['catid'];
    $sql = "SELECT * FROM `threeds` WHERE threed_user_id=$catid";
    $result = mysqli_query($inf, $sql);
    $noresult = true;
    while ($row = mysqli_fetch_assoc($result)) {
      $noresult = false;

      $thid = $row['threed_id'];
      $threeduserid = $row['threed_user_id'];
      $thtitle = $row['threed_title'];
      $thdesc = $row['threed_desc'];
      $thcatid=$row['threed_cat_id'];
      $thtime=$row['timestamp'];

      echo '

    <div class="media my-3">
  <img src="img/user.jfif" class="mr-3" alt="..." height="35px" width="40px">
  <div class="media-body">
  <p class="font-weight-bold">Anonymus user at time
  <br> ' . $thtime . '</p>
    <h3 class="mt-0"><a class="text-dark" href="thread.php?threadid=' .$thid. '" >'.$thtitle.'</a></h3>
    <h5>' . $thdesc . '</h5>
  </div>
</div>

';
    }



    if ($noresult) {
      echo '  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">no threads found</h1>
        <p class="lead">be the firt person ask a question</p>
      </div>
    </div> ';
    }

    ?>








  </div>






  <?php include "partial/footer.php" ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>