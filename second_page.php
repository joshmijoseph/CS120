<?php
session_start();

include_once("util.php");

$hoursData = isset($_SESSION['hours']) ? $_SESSION['hours'] : "";

echo "<h1>Office Hours</h1>";
echo displayOfficeHours($hoursData);
?>
