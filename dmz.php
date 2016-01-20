<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>DMZ</h1>

            <i class="fa fa-exclamation-triangle"></i>
			Attempts to enable remote acces (via for instance port mapping or DMZ) 
            for TCP port 8085 are invalid actions. This is due to the fact that this 
            port is reserved for internal service on the-RG with a higher priority 
            than when it is used for port mapping.</br></br>

            <label for="">Enable</label>
            <br />
            <input type="checkbox">
            <br/>

            <label for="">Mode <?php info("DMZINPUT"); ?></label>
            <select>
                <option selected>IP Address</option>
                <option>Access device</option>
           </select>

            <label for="">DMZ Host IPv4 Address <?php info("DMZHOST"); ?> </label>
            <input type="text" class="form-control">
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>