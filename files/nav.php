<nav class="navbar navbar-expand-lg navbar-light fixed-top theBox" id="ThemeMood">
    <div class="container">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNav">
            <a class="navbar-brand fw-bold" href=".">JISHAN HOSHEN</a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- <a class="nav-link" href="#">Dashboard</a> -->
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <?php
                if(isset($_SESSION['user_email_address'])){
                ?>
                <button type="button" class="btn btn-primary me-3" onclick="window.location.href='signOut.php'">
                    Logout
                </button>
                <?php
                }else{
                ?>
                <button type="button" class="btn btn-link px-3 me-2" <button onclick="window.location.href='join.php'">
                    Login
                </button>
                <button type="button" class="btn btn-primary me-3" onclick="window.location.href='join.php?action=signup'">
                    Sign up for free
                </button>
                <?php } ?>
                <a class="btn px-3 me-3" href="#" role="button"><i class="fab fa-github"></i></a>
                <div class="moodBtn btn px-3 me-3" id="ModeBtn">
                    <i class="fa fa-moon"></i>
                    <!-- <img id="MoodImg" src="img/moon.svg" alt=""> -->
                </div>
                <?php if(isset($_SESSION['user_email_address'])){ 
                    $userimageUpdate = explode("s96-c", $_SESSION['user_image']);
                    $userimageUpdate = $userimageUpdate['0'].'s300-c';
                    //print_r($userimageUpdate);
                ?>
                <div class="moodBtn btn p-0">
                    <img class="rounded" src="<?php echo $userimageUpdate?>" alt="" height="36" onclick="window.location.href='profile.php'">
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</nav>