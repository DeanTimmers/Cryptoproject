<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="/assets/css/home.css" rel="stylesheet" />
    <style>
      .img{
        height: 120px;
      position: relative;
      top: 40%;
      right: 5%
      }

      body{
        background-image: url(https://wallpapercave.com/wp/wp3624594.jpg);
        background-attachment: fixed;
        background-size: cover;
        color: white;
      }
      
    </style>
    <title>currency</title>
  </head>
  <body>
    
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="http://placehold.it/150x50?text=Crypto Menu" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/trending">Trending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/currency">Currency</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt4">
        <h1 style="text-align:center">Vote here on your currency to help other people out</h1>
        <h2 style="text-align:center">which one do you suggest to invest?</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 mt4">

<form style="text-align:center" method="POST" action="">
@csrf
  <div class="form-group">
    <input type="text" class="form-control" id="currency" name="currency" placeholder="currency">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="abr" name="abr" placeholder="abr">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    

	</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>