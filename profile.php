<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
else{
    header("location: ttt.htm"); //Redirects to game if credentials correct
}
?>
