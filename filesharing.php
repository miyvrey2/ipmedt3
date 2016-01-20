<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h5>File Sharing</h5>
            <h7>USB Storage</h7><br/>
            	Geen USB opslag-apparaat gedetecteerd!<br/><br/>
            <h7>FTP Server</h7><br/>
            	Enable FTP Server <?php info("EnFTP"); ?> <input type="checkbox" name="enable" value="empty"><br/>
            	FTP Security <?php info("FTPsec"); ?>
            	<select>
            		<option selected>Enabled</option>
            		<option>Disabled</option> 
            	</select><br/>
            	FTP Gebruikersnaam <?php info("FTPun"); ?> <input type="text" value="username"><br/>
            	FTP Wachtwoord <?php info("FTPpass"); ?> <input type="password" value="admin"><br/>
            <h7>Samba Server</h7><br/>
            Enable Samba Server <?php info("EnSAMBA"); ?> <input type="checkbox" name="enable" value="empty"><br/>
            Host Naam <?php info("SAMBAnaam"); ?> <input type="text" value="smbshare">(2 - 5 characters)

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>