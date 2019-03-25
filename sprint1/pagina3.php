<?php 
session_start();

if (!isset($_SESSION['hojacero9'])) 
{
    header("location:/Instaweb/pagina2.php"); 
}
     

    session_unset($_SESSION['hojacero9']);

session_destroy();
header("location:/Instaweb/indexx.html");?>