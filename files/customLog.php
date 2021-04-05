<?php
require '../conf.php';
require('google_login_conf.php');
require "datetime.php";
require "genUserId.php";
require "alert.php";

$userEmail = '';
$userPass = '';
$logStatus = '';
if (isset($_POST['login']) && !empty($_POST['userEmail']) && !empty($_POST['userPass'])){
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];
    $logStatus = $_POST['login'];
    $checkUserEmailIsExist = $DB->select("select * from dream_users where dream_username = ? || dream_email = ?","ss",array($_POST['userEmail'],$_POST['userEmail']));
    if ($checkUserEmailIsExist == true){
        if ($checkUserEmailIsExist[0]['verifiedEmail'] == 1 && $checkUserEmailIsExist[0]['dream_password'] == 'google' ){
            header('location:'.$google_client->createAuthUrl());
        }else{
            if ($checkUserEmailIsExist[0]['dream_password'] == $userPass){
                $getUserExtra = $DB->select("select * from dream_user_details where dream_Id = ?","s",array($checkUserEmailIsExist[0]['dream_id']));
                $_SESSION['access_token'] = $customToken = "custom".$checkUserEmailIsExist[0]['dream_userId'].str_replace(' ', '/', $dateTime);
                $_SESSION['user_first_name'] = $checkUserEmailIsExist[0]['dream_user_first_name'];
                $_SESSION['user_last_name'] = $checkUserEmailIsExist[0]['dream_user_last_name'];
                $_SESSION['user_email_address'] = $checkUserEmailIsExist[0]['dream_email'];
                $_SESSION['user_gender'] = "";
                $_SESSION['user_image'] = $getUserExtra[0]['profilePic_src'];
            }
        }
        //header('location:../profile.php');
    }
}else{
    alert('warning','Login Error', "Don't forget to add your email & password.");
    header('location: ../join.php');
}

if (isset($_POST['signup'])){
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];
    $logStatus = $_POST['signup'];
    $checkOldUserIsExist = $DB->select("select * from dream_users where dream_username = ? || dream_email = ?","ss",array($userEmail,$userEmail));
    if ($checkOldUserIsExist == true && $checkOldUserIsExist[0]['verifiedEmail'] == 1){
        header('location:'.$google_client->createAuthUrl());
    }else{
        //insert user foot log
        $query = "INSERT INTO dreamc_dreamdb.dream_users (dream_userId, dream_user_first_name, dream_user_last_name, dream_username, dream_email, verifiedEmail, dream_password, dream_user_status) VALUES (?,?,?,?,?,?,?,?)";
        $paramType = "sssssisi";
        $param = array($dream_userId, "", "", "", $userEmail, 0, $userPass , 1);
        $insertNewCustomUser = $DB->insert($query, $paramType, $param);
        if ($insertNewCustomUser == true) {
            echo "New User Added ";
            $query = "SELECT * FROM dream_users where dream_userId = ?";
            $paramType = "s";
            $param = array($dream_userId);
            $gewNewUser = $DB->select($query, $paramType, $param);
            if ($gewNewUser == true){
                echo "New User select ";
                $query = "INSERT INTO dreamc_dreamdb.dream_user_details (dream_id, profilePic, profilePic_src) VALUES (?,?,?)";
                $paramType = "iss";
                $param = array($gewNewUser[0]['dream_id'],"customprofile", "default");
                $insertNewUser = $DB->insert($query, $paramType, $param);
                if($insertNewUser == true){
                    echo "new ext details up ";
                }
            }
        }
        //insert user foot log
        $query = "INSERT INTO dreamc_dreamdb.user_log (dream_userId, login_token, log_Time) VALUES (?,?,?)";
        $paramType = "sss";
        $param = array($dream_userId, $token['access_token'], $dateTime);
        $insertUserLog = $DB->insert($query, $paramType, $param);
        if ($insertUserLog == true) {
            echo "log inserted";
        }
        //header('location:../profile.php');
    }
}