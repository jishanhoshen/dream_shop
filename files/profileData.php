<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="myDetailsBox mt-5">
                <div class="myProfile mb-3">
                    <div class="roundProfile">
                        <img class="userImage" src="<?php echo $userimageUpdate?>" alt="<?php echo $_SESSION['user_first_name']." ".$_SESSION['user_last_name']?>">
                    </div>
                </div>
                <div class="myName text-center">
                    <h2>
                        <span class="bold-tx">
                            <?php echo $_SESSION['user_first_name'];?>
                        </span>
                        <span class="thin-tx">
                            <?php echo $_SESSION['user_last_name']?>
                        </span>
                    </h2>
                </div>
                <div class="basicBio mt-4">
                    <div class="bioBox">
                        <!-- <ul>
                            <li>
                                <g-emoji class="g-emoji" alias="wave" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f44b.png">
                                    <img class="emoji" alt="wave" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f44b.png">
                                </g-emoji>
                                Hi, I’m @jishanhoshen
                            </li>
                            <li>
                                <g-emoji class="g-emoji" alias="eyes" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f440.png">
                                    <img class="emoji" alt="eyes" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f440.png">
                                </g-emoji>
                                I’m interested in Web Development.
                            </li>
                            <li>
                                <g-emoji class="g-emoji" alias="seedling" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f331.png">
                                    <img class="emoji" alt="seedling" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f331.png">
                                </g-emoji>
                                I’m currently learning REST API.
                            </li>
                            <li>
                                <g-emoji class="g-emoji" alias="revolving_hearts" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f49e.png">
                                    <img class="emoji" alt="revolving_hearts" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f49e.png">
                                </g-emoji>
                                I’m looking to collaborate on PHP.
                            </li>
                            <li>
                                <g-emoji class="g-emoji" alias="mailbox" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f4eb.png">
                                    <img class="emoji" alt="mailbox" height="20" width="20" src="https://github.githubassets.com/images/icons/emoji/unicode/1f4eb.png">
                                </g-emoji>
                                You can reach me by searching on google.(jishan hoshen jibon).
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="socialList">
                <ul>
                    <li>
                        <a href="">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-8">
            <div class="row postBoard">
                <div class="box p-3 mt-5 theBox">
                    <h5 class="p-0 m-0">Top Selling Product</h5>
                </div>
            </div>
            <div class="row postList">
                <div class="col-6 mt-4">
                    <a href="product.php">
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
                <div class="col-6 mt-4">
                    <a href="product.php">
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
                <div class="col-6 mt-4">
                    <a href="product.php">
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
                <div class="col-6 mt-4">
                    <a href="product.php ">
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
</div>