<!DOCTYPE html>
<html lang="en">
<?php include("files/header.php"); ?>
<meta charset="UTF-8">

<meta name="description" content="Dream - Creator">

<meta name="keywords" content="dream creator">

<meta name="author" content="Jishan Hoshen">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="google-site-verification" content="KI3nPPumlSVYelgS_a7fGpSM2opdFGocxdNXZgpc274" />

<meta http-equiv='cache-control' content='no-cache'>

<meta http-equiv='expires' content='0'>

<meta http-equiv='pragma' content='no-cache'>



<body>
    <?php include("files/nav.php"); ?>

    <div class="mainContainer container">
        <div class="search_input">
            <script async="" src="https://cse.google.com/cse.js?cx=b3829ce3e74c0ea60"></script>
            <form method="get" >
                <div class="input-group">
                    <input type="text" class="form-control " name="q" id="searchInput" placeholder="Search" aria-label="search" aria-describedby="search" value="<?php if(isset($_GET['q'])){ echo $_GET['q'];} ?>">
                    <button class="form-control gsc-search-button icon light-tx dark-bg"></button>
                </div>
                <!-- <script>
                    function googleSearch(){
                        let searchValue = $('#searchInput').val();
                        // Current URL: https://my-website.com/page_a
                        const nextURL = 'http://localhost/dream_shop/search.php?q='+searchValue;
                        const nextTitle = searchValue;
                        const nextState = { additionalInformation: 'Updated the URL with JS' };

                        // This will create a new entry in the browser's history, without reloading
                        window.history.pushState(nextState, nextTitle, nextURL);

                        // This will replace the current entry in the browser's history, without reloading
                        window.history.replaceState(nextState, nextTitle, nextURL);
                    }
                </script> -->
            </form>
        </div>
        <div id="jishan_input" style="display: none;">

            <form method="get" action="search.php">

                <div class="gcse-searchbox"></div>

            </form>

        </div>

        <div id="jishan_result" class="mt-4">

            <div class="gcse-searchresults"></div>

        </div>
    </div>

    <?php include("files/footer.php"); ?>
</body>

</html>