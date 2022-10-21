<?php
/* Template Name: Login Page */

get_header(); 


if(isset($_POST['submit']))
{
    login();
}  

?>

<form action="">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="submit" value="Submit">


</form>


<?php 
$info = array( "email" => "ahsoka.tano@q.agency",
"password" => "Kryze4President"
);

$url = "https://symfony-skeleton.q-tests.com/api/v2/token";    
$content = json_encode($info);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
        array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ( $status != 201 ) {
    // die("call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
}


curl_close($curl);

$response = json_decode($json_response, true);
echo '<pre>';
print_r($response);
echo '</pre>';

print_r($response['token_key']);
// $_SESSION['token_key'] = $response['token_key'];

setcookie('daka_kuki', json_encode($response['token_key']), time()+3600);


$data = json_decode($_COOKIE['daka_kuki'], true);

print_r($data);

?>