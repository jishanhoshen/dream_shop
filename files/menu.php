<?php
    $themeMood = "light";
    $active_menu = 'home';  
if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == "index"){
    $active_menu = 'home';  
}
else if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == "search"){
    $active_menu = 'search';    
}
else if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == "shop"){
    $active_menu = 'shop';
}
else if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "about"){
    $active_menu = 'about';
}
else if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "blog"){
    $active_menu = 'blog';
}
else if (basename($_SERVER["SCRIPT_FILENAME"], '.php') == "contact"){
    $active_menu = 'contact';
}
?>
<div class="mynav sticky <?php if($themeMood == 'dark'){echo 'dark-bg light-tx';}else{ echo 'light-bg dark-tx';}?>">
    <div class="container">
        <div class="mymenu_wraper">
            <div class="mobile_menu">
                <i class="fa fa-bars"></i>
            </div>
            <div class="logo">
                <h1>
                    <a href="./" class="<?php if($themeMood == 'dark'){echo 'light-tx';}else{ echo 'dark-tx';}?>">
                        <span class="logof">Dream</span> <span class="logol">Creators</span>
                    </a>
                </h1>
            </div>
            <div class="mymenu">
                <ul>
                    <li><a href="./" class="<?php if($themeMood == 'dark'){if ($active_menu == 'home'){echo'active-light ';}echo ' light-tx light-shadow';}else{if ($active_menu == 'home'){echo'active-dark ';} echo ' dark-tx dark-shadow';}?>">Home</a></li>
                    <li><a href="search.php" class="<?php if($themeMood == 'dark'){if ($active_menu == 'search'){echo'active-light ';}echo 'light-tx light-shadow';}else{if ($active_menu == 'search'){echo'active-dark ';} echo 'dark-tx dark-shadow';}?>">Search</a></li>
                    <li><a href="shop.php" class="<?php if($themeMood == 'dark'){if ($active_menu == 'shop'){echo'active-light ';}echo 'light-tx light-shadow';}else{if ($active_menu == 'shop'){echo'active-dark ';} echo 'dark-tx dark-shadow';}?>">Shop</a></li>
                    <li><a href="blog.php" class="<?php if($themeMood == 'dark'){if ($active_menu == 'blog'){echo'active-light ';}echo 'light-tx light-shadow';}else{if ($active_menu == 'blog'){echo'active-dark ';} echo 'dark-tx dark-shadow';}?>">Blog</a></li>
                    <li><a href="about.php" class="<?php if($themeMood == 'dark'){if ($active_menu == 'about'){echo'active-light ';}echo 'light-tx light-shadow';}else{if ($active_menu == 'about'){echo'active-dark ';} echo 'dark-tx dark-shadow';}?>">About Us</a></li>
                    <li><a href="contact.php" class="<?php if($themeMood == 'dark'){if ($active_menu == 'contact'){echo'active-light ';}echo 'light-tx light-shadow';}else{if ($active_menu == 'contact'){echo'active-dark ';} echo 'dark-tx dark-shadow';}?>">Contact</a></li>
                </ul>
            </div>
            <div class="join">
                <a href="join.php" class="<?php if($themeMood == 'dark'){echo 'dark-tx light-bg';}else{ echo 'light-tx dark-bg';}?>">join</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'alert.php';
alert("danger","Login Error","You must login first");
?>