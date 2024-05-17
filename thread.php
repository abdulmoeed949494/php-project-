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
    /* width: fit-content; */
  }
</style>



<body>
  <?php include "partial/haeder.php"; ?>
  <?php include "partial/db_connect.php"; ?>

  <?php

  $id = $_GET['threadid'];
  $sql = "SELECT * FROM `threeds` WHERE threed_id =$id";
  $result = mysqli_query($inf, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['threed_title'];
    $desc = $row['threed_desc'];
    $thcatid = $row['threed_cat_id'];
  }


  ?>


  <?php
  $showAlert = false;
  $method = $_SERVER['REQUEST_METHOD'];
  if ($method == 'POST') {
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `comments` (`comment_content`, `threed_id`, `comment_by`, `comment_time`) VALUES ( '$comment', '$id', '1', current_timestamp())";

    $result = mysqli_query($inf, $sql);
    $showAlert = true;
    if ($showAlert) {

      echo '
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
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
      <h1 class="display-4">hi me i can help you : user <?php echo $title ?> </h1>
      <p class="lead">massege : <?php echo $desc ?> </p>
      <hr class="my-4">
      <p class="bg-warning">! Be civil. Don't post anything that a reasonable person would consider offensive, abusive, or hate speech.
        Keep it clean. Don't post anything obscene or sexually explicit.
        Respect each other. Don't harass or grief anyone, impersonate people, or expose their private information thank you. </p>
      <p><b>POSTED BY HUZAIFA RABNAWAZ</b></p>
    </div>

  </div>








  <div class="container">
    <h1 class="py-3">post comment </h1>


    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">


      <div class="form-group">
        <label for="desc">type your comment </label>
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
      </div>


      <button type="submit" class="btn btn-success">post comment</button>
    </form>






    <div class="container" id="ques">
      <h1 class="py-3">dicussions</h1>

      <?php

      $id = $_GET['threadid'];
      $sql = "SELECT * FROM `comments` WHERE threed_id=$id";
      $result = mysqli_query($inf, $sql);
      $noresult = true;

      while ($row = mysqli_fetch_assoc($result)) {

        $noresult = false;

        $id = $row['comment_id'];
        $content = $row['comment_content'];
        $comment_time = $row['comment_time'];


        echo '

    <div class="media my-3">
  <img src="img/user.jfif" class="mr-3" alt="..." height="35px" width="40px">
  <div class="media-body">
  <p class="font-weight-bold">Anonymus user at time
  <br> ' . $comment_time . '</p>
  ' . $content . '
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