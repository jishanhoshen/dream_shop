<?php
require "conf.php";
require "files/google_login.php";
require "files/datetime.php";
require "files/genUserId.php";

//$_SESSION['access_token'];
//$_SESSION['user_first_name'];
//$_SESSION['user_last_name'];
//$_SESSION['user_email_address'];
//$_SESSION['user_gender'];
//$_SESSION['user_image'];
if(isset($_GET['code'])){
    //database important statement start
        $query = "select * from dream_users where dream_email = ?";
        $paramType = "s";
        $param = array($data['email']);
        $checkGoogleUser = $DB->select($query,$paramType,$param);
    //database important statement end
    if ($checkGoogleUser == true){
        //extra details
        $query = "select * from dream_user_details where dream_id = ?";
        $paramType = "s";
        $param = array($checkGoogleUser[0]['dream_id']);
        $getUserDetails = $DB->select($query,$paramType,$param);
    //    echo "<pre>";
    //    print_r($checkGoogleUser);
    //    echo "</pre>";
    //    echo $token['access_token'];
    //    echo "<pre>";
    //    print_r($data);
    //    echo "</pre>";

    //check and update
        if ($checkGoogleUser[0]['dream_user_first_name'] != $data['given_name'] || $checkGoogleUser[0]['dream_user_last_name'] != $data['family_name'])
        {
            $query = "UPDATE dreamc_dreamdb.dream_users t SET t.dream_user_first_name = ? , t.dream_user_last_name = ? , t.verifiedEmail = ? WHERE t.dream_id = ?";
            $paramType = "ssii";
            $param = array($data['given_name'],$data['family_name'],1,$checkGoogleUser[0]['dream_id']);
            $updateGoogleUser = $DB->update($query,$paramType,$param);
            echo  "simple details up";
        }
        if ($getUserDetails == true && $getUserDetails[0]['profilePic'] == "googleprofile" && $getUserDetails[0]['profilePic_src'] != $user_image){

            $query = "UPDATE dreamc_dreamdb.dream_user_details t SET t.profilePic_src = ? WHERE t.dream_id = ?";
            $paramType = "si";
            $param = array($user_image,$getUserDetails[0]['dream_id']);
            $updateGoogleUserDetails = $DB->update($query,$paramType,$param);
            if($updateGoogleUserDetails == true){
                echo "ext details up";
            }
        }

    //insert user foot log
            $query = "INSERT INTO dreamc_dreamdb.user_log (dream_userId, login_token, log_Time) VALUES (?,?,?)";
            $paramType = "sss";
            $param = array($checkGoogleUser[0]['dream_userId'], $token['access_token'], $dateTime);
            $insertUserLog = $DB->insert($query, $paramType, $param);
            if ($insertUserLog == true) {
                echo "old user log inserted";
            }
    }else{
    //    echo "<pre>";
    //    print_r($data);
    //    echo "</pre>";

    $dream_username = $data['given_name'].$data['family_name'];
    $dream_user_status = 1;


        $query = "INSERT INTO dreamc_dreamdb.dream_users (dream_userId, dream_user_first_name, dream_user_last_name, dream_username, dream_email, verifiedEmail, dream_password, dream_user_status) VALUES (?,?,?,?,?,?,?,?)";
        $paramType = "sssssisi";
        $param = array( $dream_userId, $data['given_name'], $data['family_name'], $dream_username, $data['email'], $data['verifiedEmail'], "google" , $dream_user_status);
        $insertNewUser = $DB->insert($query, $paramType, $param);
        if ($insertNewUser == true) {
            echo "New User Added ";
            $query = "SELECT * FROM dream_users where dream_userId = ?";
            $paramType = "s";
            $param = array($dream_userId);
            $gewNewUser = $DB->select($query, $paramType, $param);
            if ($gewNewUser == true){
                echo "New User select ";
                $query = "INSERT INTO dreamc_dreamdb.dream_user_details (dream_id, profilePic, profilePic_src) VALUES (?,?,?)";
                $paramType = "iss";
                $param = array($gewNewUser[0]['dream_id'],"googleprofile", $user_image);
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
    }
    header('location:profile.php');
}else{
    header('location:join.php');
}
//$token['access_token'];
//$data['email'];
//$data['verifiedEmail'];
//$data['given_name'];
//$data['family_name'];
//$data['gender'];
//$user_image;

