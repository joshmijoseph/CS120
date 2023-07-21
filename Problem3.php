<?php
session_start();

$officeHours = array(
    "Monday"    => "9am - 4pm",
    "Tuesday"   => "9am - 4pm",
    "Wednesday" => "9am - 4pm",
    "Thursday"  => "9am - 4pm",
    "Friday"    => "9am - 4pm",
    "Saturday"  => "10am - 2pm",
    "Sunday"    => "Closed"
);

$_SESSION['hours'] = json_encode($officeHours);

header("Location: second_page.php");
exit();
?>
