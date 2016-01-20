<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>User management <?php info("um");?></h1>

            <label for="">Gebruikersnaam</label>
            <input type="text" value="KPN" required readonly  class="form-control">

            <label for="">Oud wachtwoord </label>
            <input type="password" class="form-control">

            <label for="">Nieuw wachtwoord </label>
            <input type="password" class="form-control">

            <label for="">Bevestig wachtwoord </label>
            <input type="password" class="form-control">

            <button>Bevestig</button>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>