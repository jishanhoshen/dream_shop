<?php
require 'files/header.php';

$data = [
        "search" => "Jishan"
];
$search = json_encode($data);

$opts = array('http' =>
    array(
        'method' => 'POST',
        'header' => "Content-Type: application/json\r\n",
        'content' => $search,
        'timeout' => 60
    )
);

$context = stream_context_create($opts);
$url = 'http://localhost/dream_shop/Api/getuserAPI.php';
$result = file_get_contents($url, false, $context);
$json_data = json_decode($result);
foreach ($json_data as $value){
    $data[] = $value."<br>";
}
echo '<pre>';
print_r($data);
echo '</pre>';
?>

<script>
    //send Data if required
    const sendData = {
        "search" : "J"
    }
    //convert string to json
    const jsonString = JSON.stringify(sendData);
    // console.log(jsonString); // output
     let theUrl = 'http://localhost/dream_shop/Api/getuserAPI.php';

    window.addEventListener("load" , function(){
            $.ajax({
                url: theUrl,
                type: 'POST',
                data: jsonString,
                success: function (response) {
                    console.log(response);
                    //JSON.stringify(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }

            });
       });
</script>
