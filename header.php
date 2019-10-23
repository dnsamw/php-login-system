<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>
    <link rel ="stylesheet" href="css/bootstrap.min.css">
<!--     <script type="text/javascript" src="js/bootstrap.js"></script> -->
</head>
<body>
<header>
<div >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href = "#">
    <img src ="img/logo.png" alt="logo" width="50" height="50"> DanSamarawicky
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expand="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button> 
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
    <li class="nav-item"><a class="nav-link" href="#">About me</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
</ul>
</div>
<div class="form">
    <form class="form-inline" action="includes/login.inc.php" method="post">
<div class="input-group">
    <input class="form-control" type="text" name="mailuid" placeholder="Username/E-mail..">
    <input class="form-control" aria-label="Username" aria-describedby="basic-addon1" type="password" name="pwd" placeholder="Password..">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="login-submit">Login</button>
</div>
    
    <a href="signup.php">Signup</a>

    <form action="includes/logout.inc.php" method="post">
    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
    </form>
    </form>
</div>
</nav>
</div>
</header>