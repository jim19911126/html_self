<?php

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    [
        'id' => 1,
        'name' => 'The Fame',
    ],
    [
        'id' => 2,
        'name' => 'The Fame Monster',
    ],
    [
        'id' => 1,
        'name' => 'Born This Way',
    ],
];

echo json_encode($data);