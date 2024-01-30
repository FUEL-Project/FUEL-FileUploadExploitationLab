<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Websec-TestLab</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">TestLab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Hints</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.php.net/">About PHP</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Levels
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost:10001/Level1.php">Level1</a></li>
            <li><a class="dropdown-item" href="http://localhost:10002/Level2.php">Level2</a></li>
            <li><a class="dropdown-item" href="http://localhost:10003/Level3.php">Level3</a></li>
            <li><a class="dropdown-item" href="http://localhost:10004/Level4.php">Level4</a></li>
            <li><a class="dropdown-item" href="http://localhost:10005/Level5.php">Level5</a></li>
            <li><a class="dropdown-item" href="http://localhost:10006/Level6.php">Level6</a></li>
            <li><a class="dropdown-item" href="http://localhost:10007/Level7.php">Level7</a></li>
            <li><a class="dropdown-item" href="http://localhost:10008/Level8.php">Level8</a></li>
            <li><a class="dropdown-item" href="http://localhost:10009/Level9.php">Level9</a></li>
            <li><a class="dropdown-item" href="http://localhost:10010/Level10.php">Level10</a></li>
            <li><a class="dropdown-item" href="http://localhost:10011/Level11.php">Level11</a></li>
            <li><a class="dropdown-item" href="http://localhost:10012/Level12.php">Level12</a></li>
            <li><a class="dropdown-item" href="http://localhost:10013/Level13.php">Level13</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>


<h1>Welcome to FileUpload TestLab!</h1>
<img src="FileUpload.png" alt="" id="image">
<p id="para">In this Lab you get to test your Web-security skills in FileUpload.
There are many Levels. each level presents a diffrent Upload Site. The more Levels
you solve the harder it gets :). 
if you get stuck at any Level feel free to navigate to the Hints Tab, 
you will be presented with some hints for the Level you are trying to solve. 
When you have successfully uploaded your exploit you can then navigate to ./uploads/lvl#/exploit.php to call the exploit.
 To keep it simple just create a php file containing <code>&lt;?php phpinfo(); ?&gt;</code>
</p>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>