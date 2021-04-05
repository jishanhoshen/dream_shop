<!DOCTYPE html>
<html lang="en">
<?php include("files/header.php"); ?>

<body>
<?php include("files/nav.php"); ?>

<div class="container">
    <div class="col-12">
        <div class="row postBoard">
            <div class="box p-3 mt-5 theBox">
                <h5 class="p-0 m-0">Jishan's Products</h5>
            </div>
        </div>
        <div class="row postList">
            <div class="col-4 mt-4">
                <a href="product.php" class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">20</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/myproduct1.jpg')"></div>
                        <div class="postTitle">
                            <p>Podes Responsive Multipurpose Psd Template</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="product.php" class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">10</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/myproduct2.jpg')"></div>
                        <div class="postTitle">
                            <p>Office Desk landing</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="product.php" class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">5</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/myproduct3.png')"></div>
                        <div class="postTitle">
                            <p>Commercial Landing Page</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="product.php " class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">20</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/newmyproduct4.png')"></div>
                        <div class="postTitle">
                            <p>Simple Landing Page Design</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="product.php" class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">20</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/newmyproduct1.png')"></div>
                        <div class="postTitle">
                            <p>Podes Responsive Multipurpose Psd Template</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="product.php" class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">10</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/newmyproduct2.png')"></div>
                        <div class="postTitle">
                            <p>Office Desk landing</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="product.php" class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">5</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/newmyproduct3.png')"></div>
                        <div class="postTitle">
                            <p>Commercial Landing Page</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4">
                <a href="product.php " class="<?php if($themeMood == 'dark'){echo 'light-tx dark-bg';}else{ echo 'dark-tx light-bg';}?>">
                    <div class="box singlePost p-0">
                        <div class="postPrice">
                            <span id="currency">$</span><span id="price">20</span>
                        </div>
                        <div class="postCover" style="background-image: url('img/newmyproduct4.png')"></div>
                        <div class="postTitle">
                            <p>Simple Landing Page Design</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="moreProduct">
            <div class="row mt-4 mb-2">
                <div class="col-9"></div>
                <div class="col-3">
                    <a class="btn btn-primary" href="product.php">Watch More
                        <i class="fa fa-arrow-alt-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'files/footer.php';
?>
</html>