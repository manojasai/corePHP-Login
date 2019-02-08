<?php
error_reporting(E_ALL);
$mysqli = new mysqli('localhost','root','','sonali');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
