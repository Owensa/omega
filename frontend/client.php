<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="OMEGA offers cryptocurrency mining services on modern, high-efficiency equipment. .">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/icon.png">

    <title>omega HIVE Mining</title>

    <!--google fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link href="assets/vendor/Sonorous/Sonorous.otf" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    
    <!--common style-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/bicon/css/bicon.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css" rel="stylesheet">
    <link href="assets/vendor/owl/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/pricing.css" rel="stylesheet">    
				<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900&amp;subset=latin,latin-ext">
    

    <!--custom css-->
    <link href="assets/css/main.css" rel="stylesheet">

</head>
<body>
Welcome 
<?php 
$usernameError = "";
$username = "";
$password = "";
$emailAddress = "";
$token= "M15sH723fGNKF2zSuyLf6InY4IzMSKPm";
$applicationServerIpAddress = "192.168.8.175";
$applicationServerPort = "8082";
$curl = curl_init();

if($_SERVER["REQUEST_METHOD"] == "POST") { 
    if(empty($_POST["username"])) { 
        $usernameError = "Please enter your username.";
    } else 
    { 
    if($_POST["username"] == FALSE) { 
        $usernameError = "Please enter a valid username";
    }

    }
    if(empty($_POST["email"])) { 
        $usernameError = "Please enter your email.";
    } else 
    { 
    if($_POST["email"] == FALSE) { 
        $usernameError = "Please enter a valid email";
    }
    }

    echo $_POST["username"];

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL = $applicationServerIpAddress:$applicationServerPort,
        CURLOPT_USERAGENT => 'cURL Request',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => array(
            'username' => $_POST["username"],
            'password' => $_POST["passord"],
            'email' => $_POST["email"]
            'token' => $token
            ]
        )
    ))
}

?>
</body>
</html>