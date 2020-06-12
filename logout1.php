<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Redirecting';
   header('Refresh: 1; URL = web1.php');
?>