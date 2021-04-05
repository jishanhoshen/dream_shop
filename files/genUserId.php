<?php
$dream = "dream";
$user = "user";
$serial = '';
$query = "select * from dream_users ORDER BY dream_id DESC";
$paramType = "";
$param = array();
$checkGoogleUser = $DB->select($query,$paramType,$param);
if($checkGoogleUser != true){
    $previousUser = 0;
    $newUser = $previousUser + 1;
    $serial = "000" . $newUser;
}else {
    $previousUser = $checkGoogleUser[0]['dream_id'];
    $newUser = $previousUser + 1;
    $number_of_digits = mb_strlen($checkGoogleUser[0]['dream_id']);
    if ($number_of_digits == 4) {
        $serial = $newUser;
    } else if ($number_of_digits == 3) {
        $serial = "0" . $newUser;
    } else if ($number_of_digits == 2) {
        $serial = "00" . $newUser;
    } else {
        $serial = "000" . $newUser;
    }
}
$dream_userId = $dream.$user.$serial;