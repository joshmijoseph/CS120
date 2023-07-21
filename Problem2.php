<!DOCTYPE html>
<html>
<head>
    <title>Office Hours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .office-hours {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Office Hours</h1>
    <?php
    $officeHours = array(
        "Monday"    => "9am - 4pm",
        "Tuesday"   => "9am - 4pm",
        "Wednesday" => "9am - 4pm",
        "Thursday"  => "9am - 4pm",
        "Friday"    => "9am - 4pm",
        "Saturday"  => "10am - 2pm",
        "Sunday"    => "Closed"
    );

    function displayOfficeHours($hoursArray) {
        $output = "<div class='office-hours'>";
        foreach ($hoursArray as $day => $hours) {
            $output .= "<div><strong>{$day}:</strong></div><div>{$hours}</div>";
        }
        $output .= "</div>";
        return $output;
    }

    echo displayOfficeHours($officeHours);
    ?>
</body>
</html>
