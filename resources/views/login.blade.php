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

    input{
        max-width: 250px;
        margin-bottom: 4px;
        
        
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


<form action="user" method="POST">
    @csrf
    <div>
    <h1>User Login</h1>
    <div class="form-group">
    <input type="text" class="form-control"  name="user" placeholder="Username" >
  </div>
  <div class="form-group">
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
</form>


</body>