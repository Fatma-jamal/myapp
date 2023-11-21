<?php

// Define a constant
define('ROOT_PATH', '/myapp/');
define('SITE_EMAIL','');
define('SITE_EMAIL_SECRET','');


require_once('config.php');
require_once('inc/app.php');



$pageName = myAppRequestRoute();

/*
if(isset($_POST) && isset($_POST['form_name'])){
    $functionName = $_POST['form_name'];
    $functionName($_POST);
}

function signin($params = array()){
    if(myAppIsUserSignedIn()){
        // Redirect to /
        header("Location: ".ROOT_PATH);
        exit;
    }else if(isset($params['username']) && isset($params['password'])){
        if(!myAppFormValidate()){
            $_SESSION['errors'][] = "Your are not allow to send data from this form.";
            header("Location: ".ROOT_PATH."signin");
            exit;
        }
        $username            = $params['username'];
        $password            = $params['password'];
        $validate_username   = myAppFieldValidate("Username",$username,"required|email");
        $validate_password   = myAppFieldValidate("Password",$password,"required|min:8|max:60");

        // echo '<pre>';
        // print_r($validate_username);
        // print_r($validate_password);
        // echo '</pre>';
        // exit;
        $_SESSION['fields'][] = $validate_username;
        $_SESSION['fields'][] = $validate_password;

        
        // $_SESSION['messages'][] = $validate_username;
        // $_SESSION['messages'][] = $validate_password;
        // print_r($_SESSION['messages']);


        if($validate_username['pass'] && $validate_password['pass']){
            if(myAppSignin($username, $password)){
                // Redirect to /
                header("Location: ".ROOT_PATH);
                exit;
            }
        }else{ 
            //if(isset($_SESSION['redirect']) && ($_SESSION['redirect'] != true)){
            // $_SESSION['messages'][] = isset($validate_username['message']) ? $validate_username['message'] : '';
            // $_SESSION['messages'][] = isset($validate_password['message']) ? $validate_password['message'] : '';
            // $_SESSION['redirect']   = true;
            header("Location: ".ROOT_PATH."signin");
            exit;
        }
    }else{
        // $_SESSION['fields'] = array();
    }
    
}

function contact($params = array()){

}

function upload($params = array()){

}
*/

if($pageName == "signin"){
    if(myAppIsUserSignedIn()){
        // Redirect to /
        header("Location: ".ROOT_PATH);
        exit;
    }else if(isset($_POST['username']) && isset($_POST['password'])){
        if(!myAppFormValidate()){
            $_SESSION['errors'][] = "Your are not allow to send data from this form.";
            header("Location: ".ROOT_PATH."signin");
            exit;
        }
        $username            = $_POST['username'];
        $password            = $_POST['password'];
        $validate_username   = myAppFieldValidate("Username",$username,"required");
        $validate_password   = myAppFieldValidate("Password",$password,"required|min:8|max:60");

        // echo '<pre>';
        // print_r($validate_username);
        // print_r($validate_password);
        // echo '</pre>';
        // exit;
        $_SESSION['fields'][] = $validate_username;
        $_SESSION['fields'][] = $validate_password;

        
        // $_SESSION['messages'][] = $validate_username;
        // $_SESSION['messages'][] = $validate_password;
        // print_r($_SESSION['messages']);


        if($validate_username['pass'] && $validate_password['pass']){
            if(myAppSignin($username, $password)){
                // Redirect to /
                header("Location: ".ROOT_PATH);
                exit;
            }
        }else{ 
            //if(isset($_SESSION['redirect']) && ($_SESSION['redirect'] != true)){
            // $_SESSION['messages'][] = isset($validate_username['message']) ? $validate_username['message'] : '';
            // $_SESSION['messages'][] = isset($validate_password['message']) ? $validate_password['message'] : '';
            // $_SESSION['redirect']   = true;
            header("Location: ".ROOT_PATH."signin");
            exit;
        }
    }else{
        // $_SESSION['fields'] = array();
    }
    
}else if($pageName == "signout"){
    myAppSignout();
    // Redirect to /
    header("Location: ".ROOT_PATH);
    exit;
}else if(($pageName == "contact") && $_SERVER['REQUEST_METHOD'] === "POST"){

    // echo "I am here in contact"; exit;
    $params = array();
    $params['name'] = $_POST['name'] ?? ""; // "; echo SITE_EMAIL_SECRET
    $params['email'] = $_POST['email'] ?? "";
    $params['phone'] = $_POST['phone'] ?? "";
    $params['subject'] = "رسالة من نموذج التواصل في الموقع";
    $params['message'] = $_POST['message'] ?? "";
    myAppEmailSendMessage($params);
}


// Construct the file path
$filePath = 'pages/' . $pageName . '.php';


// Check if the file exists
if (file_exists($filePath)) {
    require_once('layout/header.php');
    // Include or require the file
    require_once($filePath);
    require_once('layout/footer.php');
} else {
    require_once('layout/header.php');
    // File not found, handle the error
    require_once('pages/notfound.php');
    require_once('layout/footer.php');
}


// $_SESSION['fields'] = array();
unset($_SESSION['fields']);
unset($_SESSION['errors']);
