<?php

/* Template Name: Login Page */

get_header(); 


if(isset($_POST['submit']))
{
    login();
}  

?>
<form action="<?php the_permalink(); ?>" method="POST">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="submit" name="submit" value="submit">


</form>

<a href="http://localhost/qtest/logibnjhbgkjhn/">404</a>


<?php 
// $info = array( "email" => "ahsoka.tano@q.agency",
// "password" => "Kryze4President"
// );

function login(){

    
        $info = array( 
        "email"     => $_POST['email'],
        "password"  => $_POST['psw']
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

        if ( $status != 200 ) {
            die("Wrong Credentials");
        }


        curl_close($curl);

        $response = json_decode($json_response, true);
        echo '<pre>';
        //print_r($response);
        echo '</pre>';

        // print_r($response['token_key']);

        $_SESSION['token'] = $response['token_key'];
        $_SESSION['start'] = time(); 

        $_SESSION['expire'] = $_SESSION['start'] + (0.5 * 60) ; 


        print_r($_SESSION);

        // $home_url = get_home_url();
        // wp_redirect( $home_url );
        // exit;
       
    }
     
?>