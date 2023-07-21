<?php
function displayOfficeHours($hoursArray) {
    $hoursArray = json_decode($hoursArray, true);
    $output = "<div class='office-hours'>";
    foreach ($hoursArray as $day => $hours) {
        $output .= "<div><strong>{$day}:</strong></div><div>{$hours}</div>";
    }
    $output .= "</div>";
    return $output;
}
?>