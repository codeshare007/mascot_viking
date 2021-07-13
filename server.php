<?php

$data = [
    [ "name"=>"James", "password"=>"skipflack", "id" => "tn2IQfZEmP8" ],
    [ "name"=>"Megan/Madison", "password"=>"3195", "id" => "jBdu2JN--18" ],
    [ "name"=>"Kyle", "password"=>"65812", "id" => "Sekl9IJq61g" ],
    [ "name"=>"Zachary", "password"=>"snake", "id" => "j1X1fSERapU" ],
    [ "name"=>"Mrs. Fletcher", "password"=>"maestro", "id" => "dtG9AM82wtE" ],
    [ "name"=>"Jazmine", "password"=>"847", "id" => "uwu05DVO4Pc" ]
];

session_start();

$operation = $_REQUEST['operation'];

switch($operation){
    case 'cmpPassword':
        cmpPassword();
        break;
    case 'getActivatedList':
        getActivatedList();
        break;
}
function getActivatedList(){
    global $data;

    $result = [];
    for($i=0; $i<count($_SESSION['activated']); $i++){
        $index = $_SESSION['activated'][$i];
        array_push($result, ["index"=>$index, "title"=>$data[$index]['name'], "id"=>$data[$index]['id']]);
    }
    echo json_encode($result);
}
function cmpPassword(){
    global $data;

    $index = $_REQUEST['index'];
    $password = $_REQUEST['password'];

    if(strcmp(strtolower($password), strtolower($data[$index]['password']))==0){
        if(!isset($_SESSION['activated']))
            $_SESSION['activated'] = [];
        array_push($_SESSION['activated'], $index);
        echo json_encode([ "status"=>1, "title"=>$data[$index]['name'], "id"=>$data[$index]['id'] ]);
    }
    else
        echo json_encode([ "status"=>0 ]);
}