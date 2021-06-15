<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/assets/css/home.css" rel="stylesheet" />

<style>
    span{
        margin-left:10px;
        margin-right:20%;
        white-space: pre;
        font-style: italic;
        font-family: "Lucida Console", "Courier New", monospace;
        font-size: 150%;
    }

    body{
        background-image: url(https://wallpapercave.com/wp/wp3624594.jpg);
        background-attachment: fixed;
        background-size: cover;
        color: white;
      }

</style>

  <title>trending</title>
</head>
<body>

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


  <table class="table table-bordered" style="margin-top: 10px" >
    <thead>
      <tr>
        
        <th scope="col" style="color: white">Rank</th>
        <th scope="col" style="color: white">Name</th>
        <th scope="col" style="color: white">Price in $</th>
        <th scope="col" style="color: white">Symbol</th>

      </tr>
    </thead>
    <tbody >
    </tbody>
  </table>


  <div class="row">
		<div class="col-md-12">
        @extends('layout.footer')
		</div>
	</div>
</div>
  <?php

    for ($x = 0; $x <= 17; $x++) {
        echo "<hr>";
        echo "<br>";
        echo "<tr>";
        
        
      
    foreach($data as $item){
        echo "";
    }
    
    echo "<span>" . $item[$x]['rank'] . "</span>", "<span>" . str_pad($item[$x]['name'], 15) . "</span>",  "<span>" . str_pad(sprintf("%01.2f",$item[$x]['price']), 15) . "</span>" , "<span>" . $item[$x]['symbol'] . "</span>";
    
}
?>

   
    

     <!--@php dd($item) @endphp -->

     
   
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>