<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <title>Rainbow Mural</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav class="navbar navbar-inverse" id="navbar" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Airmeow</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['logged_in'])): ?>
          <li><a href='edit.php'><?php echo $_SESSION['user_name'] ?></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href='edit.php'>Edit account</a></li>
              <li class="divider"></li>
              <li class="li_link">
                <form action='Create_user.php' method='post' class='navbar-form navbar-left'>
                <!-- <a href="">Log off</a> -->
                <input type='submit' class="link" value='Log off'>
                </form>
              </li>
            </ul>
          </li>
          <?php elseif (!isset($_SESSION['logged_in']) && ($_SERVER["REQUEST_URI"] != '/login.php')): ?>
          <li id='mylogin' class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
            <ul class="dropdown-menu" id="dropdown">
              <form class="" action='Create_user.php' method='post' id='login' role='form'>
              <input type='hidden' name='action' value='login'>
              <li><input type="text" placeholder="Email" name='email' class="form-control"></li>
              <li><input type="password" placeholder="Password" name='password'class="form-control"></li>
              <li><button type="submit" class="btn btn-primary">Sign in</button></li>
              </form>
            </ul>
          </li>
          <li><a href="register.php">or register</a></li>
          <?php endif; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>



<?php
  function flash(){
    if (isset($_SESSION['errors'])) {
      foreach ($_SESSION['errors'] as $error) {
          echo "<div class='alert alert-danger'>".$error."</div>";
      }
      unset($_SESSION['errors']);
    };

    if (isset($_SESSION['messages'])) {
      foreach ($_SESSION['messages'] as $message) {
          echo "<div class='alert alert-success'>".$message."</div>";
      }
      unset($_SESSION['messages']);
    };
  }
?>

