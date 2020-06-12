<?php
   ob_start();
   session_start();
?>
<?
  
?>
<!DOCTYPE HTML>
   <head>
      <title>LOGIN</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link href="try.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="login-container">
         <img class="avatar" src="pic1.svg" alt="header_image">
         
      </div>
       
      <div class = "container form-signin"> 
      <h2>Welcome</h2>
         <?php    
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == 'admin') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  echo "<h3>IT WORKS!!!</h3>";
                  }
               else if ($_POST['username'] == 'user' && 
                     $_POST['password'] == 'user') {
                     $_SESSION['valid'] = true;
                     $_SESSION['timeout'] = time();
                     $_SESSION['username'] = 'user';  
                     
                  echo "<div class =\"user\"><h3>IT WORKS!!</h3> </div>";
               }else {
                  echo "<script>alert('Wrong username or password');</script>";
               }

            }
         ?>
        
      </div>
      

      <div class = "container log-in">
         <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <p>
            <input type="text"  class = "form-control" name="username" placeholder = "Username" required autofocus />
            </p>
            <p>
            <input type="password" class = "form-control" name="password" placeholder = "Password" required autofocus />
            </p>
            <button class = "btn btn-primary btn-lg btn-block" type = "submit" name = "login">Login</button>
         </form>

         <form class= "form-signin-session">
            Click here to clear <a href = "logout1.php" id="session">session.
         </form>

      </div> 
   </body>
</html>