<?php
    if(isset($_GET['length'])){
    $length = $_GET['length'];

    if(!is_numeric($length) || $length <= 0){
        $response = array(
            'error' => 'Invalid length. Please provide a positive integer.'
        );
    } else {
        $sequence = array(0, 1);
        for ($i = 2; $i < $length; $i++) {
            $nextNumber = $sequence[$i - 1] + $sequence[$i - 2];
            $sequence[] = $nextNumber;
        }

        $response = array(
            'length' => $length,
            'sequence' => $sequence
        );
    }
} else {
    $response = array(
        'error' => 'Length parameter not provided.'
    );
}

header('Content-Type: application/json');

echo json_encode($response);
?>

