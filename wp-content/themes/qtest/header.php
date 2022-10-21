<?php
// Start the session
session_start();


print_r($_SESSION);

if(!isset($_SESSION['token']))

{

    echo "<p align='center'>Please Login again ";

    echo "<a href='http://localhost/qtest/login/'>Click Here to Login</a></p>";

}

else

{

    $now = time();
 // checking the time now when home page starts

    if($now > $_SESSION['expire'])

    {

        session_destroy();

        echo "<p align='center'>Your session has expired! <a href='http://localhost/qtest/'>Login Here</a></p>";

    }

}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />


    <title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>" />


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><!-- the Body  -->

<div class="container">

