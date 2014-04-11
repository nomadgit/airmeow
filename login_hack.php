<?hh

include "init.php";

function render_login(): void {

echo <div class="container my_container">
     <div class="col-md-5">
       <h1>Login</h1>
       <h3><a href="register.php">or register</a></h3>
       <form action="Create_user.php" method="post" id="login" role="form">
         <input type="hidden" name="action" value="login"/>
         <input type="text" name="email_or_username" placeholder="Email or Username" class="form-control"/>
         <input type="text" name="password" placeholder="Password" class="form-control"/>
       </form>
     </div>
     </div>;
}

