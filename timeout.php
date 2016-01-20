<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>Web session timeout <?php info("Timeout");?></h1>

            <label>Timeout<br /><sup>min</sup></label>
            <input type="text"value="5" class="form-control">

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>