<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>File sharing</h1>

            <div class="groupd-accordion">
                <section class="selected">
                    <a href=#usb id="usb">
                        USB Storage
                    </a>

                    <div class="groupd-accordion-section">
                        Geen USB opslag-apparaat gedetecteerd!
                    </div>
                </section>
                <section>
                    <a href=#ftp id="ftp">
                        FTP Server
                    </a>

                    <div class="groupd-accordion-section">
                        <label for="">Enable FTP Server <?php info("EnFTP"); ?></label>
                        <input type="checkbox" name="enable" value="empty"><br/>

                        <label for="">FTP Security <?php info("FTPsec"); ?></label>
                        <select>
                            <option selected>Enabled</option>
                            <option>Disabled</option>
                        </select><br/>

                        <label for="">FTP Gebruikersnaam <?php info("FTPun"); ?> </label>
                        <input type="text" value="username" class="form-control">

                        <label for="">FTP Wachtwoord <?php info("FTPpass"); ?> </label>
                        <input type="password" value="admin" class="form-control">
                    </div>
                </section>
                <section>
                    <a href=#samba id="samba">
                        Samba Server
                    </a>

                    <div class="groupd-accordion-section">
                        <label for="">Enable Samba Server <?php info("EnSAMBA"); ?></label>
                        <br />
                        <input type="checkbox" name="enable" value="empty">
                        <br />

                        <label for="">Host Naam <?php info("SAMBAnaam"); ?> <br /> <sup>(2 - 5 characters)</sup> </label>
                        <input type="text" value="smbshare" class="form-control">

                    </div>
                </section>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>