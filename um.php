<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

          <h3>User management <?php info("um");?></h3> 
          Gebruikersnaam <input type="text" value="KPN" required readonly> </input></br>
          Oud wachtwoord <input type="password"></input></br>
          Nieuw wachtwoord <input type="password"></input></br>
          Bevestig wachtwoord <input type="password"></input></br>
          <button>Bevestig</button>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>