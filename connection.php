<?php

$mysqli = new mysqli("localhost","root","Password3789", "practica_php");

if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: (". $mysqli->connect_errno .")".$mysqli->connect_error;
}

