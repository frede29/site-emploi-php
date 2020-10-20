<?php
session_start();
$_SESSION = array();
session_destroy();
echo"<script>window.open('connexion1.php','_self')</script>";
?>