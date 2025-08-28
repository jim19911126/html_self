<?php

header("access-control-allow-origin: *");

// function dd($data) {
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// }

// $input = $_POST;

$data = [
    'id' => 5,
    'name' => '佶璋',
    'msg' => 'You are what you love.'
];

// dd($data);
echo json_encode($data);
?>