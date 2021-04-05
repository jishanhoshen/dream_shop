 <div class="login_box box <?php if($themeMood == 'dark'){echo 'dark-bg light-tx';}else{ echo 'light-bg dark-tx';}?>">
        <div class="logo">
            <h1>
                <a href="?action=signup" class="<?php if($themeMood == 'dark'){echo 'light-tx';}else{ echo 'dark-tx';}?>">
                    <span class="logof">Sign</span> <span class="logol">up</span>
                </a>
            </h1>
        </div>
     <?php
     $query ="SELECT * FROM settings where settingName = ?";
     $paramType = "s";
     $param = array("login_option");
     $customLogPermission = $DB->select($query,$paramType,$param);
     if ($customLogPermission == true && $customLogPermission[0]['settingType'] == "custom_login" && $customLogPermission[0]['settingStatus'] == 1){
     ?>
        <div class="custom_login">
            <form action="files/customLog.php" method="post">
                <input type="text" placeholder="Email" name="userEmail" required autocomplete="off">
                <input type="password" placeholder="Create New Password" name="userPass" required autocomplete="off">
                <input type="submit" value="Sign up" name="signup">
            </form>
        </div>
         <div class="or">
             <span class="or <?php if($themeMood == 'dark'){echo 'light-tx';}else{ echo 'dark-tx';}?>">OR</span>
         </div>
     <?php } ?>
     <div class="third_party_login">
         <?php
         if ($customLogPermission == true && $customLogPermission[1]['settingType'] == "facebook_login"  && $customLogPermission[1]['settingStatus'] == 1){
         ?>
            <div class="facebook">
                <?php include "files/facebook_login.php";?>
            </div>
         <?php
         }
         if ($customLogPermission == true && $customLogPermission[2]['settingType'] == "google_login"  && $customLogPermission[2]['settingStatus'] == 1){
         ?>
            <div class="google">
                <?php include "files/google_login.php";?>
            </div>
         <?php } ?>
     </div>
     <?php
     if ($customLogPermission == true && $customLogPermission[0]['settingStatus'] != 1 && $customLogPermission[1]['settingStatus'] != 1 && $customLogPermission[2]['settingStatus'] != 1){
         echo "<span><stron>You Don't Have Permit To Enter Here</stron></span>";
     }
     ?>
        <hr class="line_devider <?php if($themeMood == 'dark'){echo 'light-tx';}else{ echo 'dark-tx';}?>">
        <div class="signup-btn">
            <a href="?action=login" class="<?php if($themeMood == 'dark'){echo 'light-tx';}else{ echo 'dark-tx';}?>">Already a member? Log in</a>
        </div>
    </div>
