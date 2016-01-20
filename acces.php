<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>Toegangs controle lijst</h1>

			<label for="">Lijst type: <?php info("BWList"); ?></label>
            <select>
            	<option>Zwarte lijst</option>
            	<option>Witte lijst</option>
            </select>

			<label for="">MAC Address</label>
			<input type="text" class="form-control">

           	<button>Voeg toe</button><br/><br/>

           	<table class="table table-hover table-bordered">
            	<tr>
            		<th><h5>Mac Address <?php info("MAC2"); ?> </h5></th>
            		<th><h5>Verwijder</h5></th>
            	</tr>
            	<tr>
            		<td colspan="2">Er zijn geen items, voeg er eerst een toe.</td>
            	</tr>
            </table>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>