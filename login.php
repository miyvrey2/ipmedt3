<?php 
session_start(); 

$sGebruikerControle = 'KPN'; 
$sWachtwoordControle = 'admin'; 

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
    if(isset($_POST['user'], $_POST['pass'])) 
    {     
        $sGebruiker = trim($_POST['user']); 
        $sWachtwoord = trim($_POST['pass']); 
         
        if($sGebruiker == $sGebruikerControle && $sWachtwoord == $sWachtwoordControle) 
        { 
            $_SESSION['logged_in'] = true; 
            $_SESSION['gebruiker'] = $sGebruiker; 
             
            header('Location: dashboard/'); 
        } 
        else 
        { 
            $url = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
            header('location:'.$url.'?inlog=onjuist/'); 
            echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!'; 

        } 
    } 
} 
else 
{ 
    header('Location: index.php'); 
    exit(); 
} 
?>