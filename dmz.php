<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h5>DMZ</h5>
            <i class="fa fa-exclamation-triangle"></i> 
			Attempts to enable remote acces (via for instance port mapping or DMZ) 
            for TCP port 8085 are invalid actions. This is due to the fact that this 
            port is reserved for internal service on the-RG with a higher priority 
            than when it is used for port mapping.</br></br>
            Enable <input type="checkbox"><br/>
            Input Mode <?php info("DMZINPUT"); ?> <select>
                            <option selected>IP Address</option>
                            <option>Access device</option>
                       </select>   
            DMZ Host IPv4 Address <?php info("DMZHOST"); ?> <input>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>