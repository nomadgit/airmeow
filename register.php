<?hh
//include 'Database.php';
//require 'header.php';

echo <h1>Register<h1>;
echo <h3><link rel="stylesheet" type="text/css" href="login.php">or login<h3>;
echo 
  <form action='Create_user.php' method='post' id='registration' role='form'>
     <input type='hidden' name='action' value='register'>
     <input type='text' name='username' placeholder='Username'>
     <input type='text' name='email' placeholder='Email or Username'>
     <input type='text' name='password' placeholder='Password'>
     <input type='password' placeholder='Confirm Password' name='conf_password'>
  </form>;

//require 'footer.php'

