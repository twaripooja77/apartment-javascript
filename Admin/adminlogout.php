<?php
@include 'aconfig.php';

session_start();
session_unset();
session_destroy();

header('location:adminpage.php');
?>