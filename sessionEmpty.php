<?php
   session_start();
   session_unset();
   session_destroy();
   header('location: ./products.php');
 //  header('location: ./todo.php');  
?>