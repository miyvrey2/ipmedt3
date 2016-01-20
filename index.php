<?php 
	require_once('components/head.php');

	$last_segment = trim($_SERVER["REQUEST_URI"],"/");
    $last_segment = explode('/', $last_segment);
    $last_segment = end($last_segment);
    $alert = '';
    $extraClass = '';

if(!empty($_GET)){
	if($last_segment == '?inlog=onjuist'){
 		$alert = '
 		<div class="row">
	 		<div id="loginallert" class="col-md-2 col-md-offset-5 alert alert-danger fade in">
	 			<!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
	 			<center>Wachtwoord onjuist!</center>
	 		</div>
 		</div>';

 		$extraClass = 'extrahoogte';
 	}
}
?>

  <div class="container">

    <div class="row">

      <div class="col-md-12" id="header">
      </div>

    </div>
		<?php echo $alert;?>
	<div class="row">

		<div class="col-md-6 col-md-offset-3 <?php echo $extraClass; ?>" id="formulier">
		
	  <form method="post" action="login.php" class="form-signin">
			<h2 id="KopTekst" class="form-signin-heading">Inloggen mijn KPN-Experiabox</h2>
			
			<label for="user" class="sr-only">KPN</label>
			<input type="text" name="user" id="users" class="form-control" value="KPN" required readonly>
			
			<label for="pass" class="sr-only">Wachtwoord</label>
			<input type="password" name="pass" id="pass" class="form-control" placeholder="Wachtwoord" autofocus>
			
			<button type="submit" name="Inloggen" value"Inloggen" class="btn btn-lg btn-primary btn-block">Log in</button>
      </form>

		</div>

  </div> 
  
  </div>

  
<?php require_once('components/footer.php'); 