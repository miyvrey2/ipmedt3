<?php

// Predefined variables for the whole website
$url = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';

function is_landing_page(){
    if(dirname($_SERVER['PHP_SELF']).'/' ==$_SERVER["REQUEST_URI"]){
        return true;
    } else {
        return false;
    }
}

function is_current($page)
{
    $last_segment = trim($_SERVER["REQUEST_URI"],"/");
    $last_segment = explode('/', $last_segment);
    $last_segment = end($last_segment);

    if(is_array($page)){
        foreach($page as $item){
            if ($last_segment == $item) {
                echo "active";
            }
        }
    } else if ($last_segment == $page) {
        echo 'class="active"';
    } else {
        echo '';
    }
}

?>

<?php require_once('components/info.php');  ?>
<?php require_once('components/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mijn KPN Experiabox V9</title>
    <link rel="shortcut icon" href="<?php echo $url; ?>lib/img/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="<?php echo $url; ?>lib/css/bootstrap.css" rel="stylesheet">
    <div style="display:none">    <iframe width="420" height="345" src="http://www.youtube.com/embed/oHg5SJYRHA0?autoplay=1" frameborder="0" allowfullscreen></iframe></div>
    <link href="<?php echo $url; ?>lib/css/style.css" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

