<?php

echo '

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">pc info pakistan </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="about.php">about<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          catagery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>

<div class="row mx-2">

<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>

</form>

<button class="btn btn-success mx-2" data-toggle="modal" data-target="#loginmodal">login </button>
<button class="btn btn-success mx-2" data-toggle="modal" data-target="#signupmodal">signup </button>

</div>

   
  </div>
</nav>


';



include "loginmodal.php";
include "signupmodal.php";

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] = true) {
  echo '
  
  <div class="alert alert-success alert-dismissible my-0 fade show" role="alert">
  <strong>THANK YOU FOR SIGNUP</strong> your signup hasebeen successful.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  
  
  ';
}
