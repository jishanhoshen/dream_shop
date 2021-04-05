<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style type="text/css">
        *{
            margin:0;
            padding: 0;
        }
        input:focus {
            outline-offset: 0px;
        }
        :focus {
            outline: -webkit-focus-ring-color auto 0px;
        }
        .error{
            background-color: #e26751;
        }
        .success{
            background-color: #51e280;
        }
        .alert {
            height: 45px;
            border-radius: 6px;
            position: absolute;
            left: 3%;
            right: 3%;
            top: 3%;
            display: flex;
            justify-content: space-between;
        }
        .message {
            display: flex;
            align-items: center;
            padding-left: 22px;
            font-size: 19px;
            color: white;
            font-family: cursive;
        }
        .close {
            display: flex;
            align-items: center;
            font-size: 20px;
            text-transform: uppercase;
            font-family: monospace;
            color: #fff;
            width: 60px;
            justify-content: center;
            cursor: pointer;
        }
        .logbox {
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }
        .logbox input {
            border: 0;
            background-color: #ddd;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 1px #bbbbbb;
            font-family: sans-serif;
            width: 340px;
        }
    </style>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        $(".alert").hide();
        $(document).ready(function(){
            function alert_close(){
                $(".alert").fadeOut();
            }
            function alert_open(){
                $(".alert").fadeIn();
            }
            $(".close").click(function(){
                $(".alert").fadeOut();
            });
        });
    </script>

</head>
<body>
<?php
include 'conf.php';
$message = array('type'=>'','msg'=>'');
if(isset($_POST['pass'])){
    $checkPass = $DB->select("select * from dream_users where dream_password = ? ","s",array($_POST['pass']));
    if($checkPass == true){
        $name = $checkPass['0']['dream_username'];
        $message = array('type' => 'success', 'msg' => "Welcome ".$name);
        $_SESSION["username"] = $name ;
        echo "<script>alert_open();</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'login_index.php'; }, 3000);</script>";
    }else{
        $message = array('type' => 'error', 'msg' => "Something Went Wrong. try again.");
        echo "<script>alert_close();</script>";
    }
}
?>
<div class="alert <?php echo $message['type']?>">
    <div class="message"><?php echo $message['msg']?></div>
    <div class="close">x</div>
</div>
<div class="logbox">
    <form method="post">
        <input type="password" name="pass" placeholder="Password" autofocus>
    </form>
</div>
</body>
</html>