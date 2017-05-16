<?php

session_start();

$usuario = $_POST['usr'];


$_SESSION["currentuser"]=$usuario; 
// Redireccono 

header("location.href='{{route('inscripcion')}}'"); 
?>