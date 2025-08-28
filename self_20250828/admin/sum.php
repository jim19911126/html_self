<?php

// header("access-control-allow-origin: *");

function dd($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$input = $_POST;

$sum = $input['num1'] + $input['num2'];

$data = [
    'num1' => $input['num1'],
    'num2' => $input['num2'],
    'sum' => $sum
];

// dd($data);
echo json_encode($data);
?>