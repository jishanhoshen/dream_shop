<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Original: *');

$data = json_decode(file_get_contents("php://input"),true);

$search_value = $data['search'];

require '../conf.php';

if (!empty($DB)) {
    $checkPass = $DB->select("select * from dream_users where dream_username LIKE ? ","s",array('%'.$search_value.'%'));
    if($checkPass == true) {
        $search_data = $checkPass['0'];
        echo json_encode($search_data);
    }
}
