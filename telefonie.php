<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <div>
                <h3>Account Mapping</h3>
                <p>Registrar Server IP Adres <?php info(""); ?> </p>
                <input type="email" id="inputEmail" class="form-control, col-md-1.5, " value="192.168.2.254" required readonly><br />
                <p>Proxy Server IP Adres <?php info(""); ?> </p>
                <input type="email" id="inputEmail" class="form-control, col-md-1.5, " value="192.168.2.254" required readonly>
            </div>
            <div>
                <h3>Internal SIP Server</h3>
                <h5>Internal Extension Number <?php info(""); ?></h5>
                <select>
                  <option value="1">*101</option>
                  <option value="2">*102</option>
                  <option value="3">*103</option>
                </select>
                <form>
                Aanzetten
                  <input type="checkbox" name="enable" value="empty">
                </form>

                </div>
            <div>
                Telefoon nummer
                    <select>
                        <option>Phone 1</option>
                        <option>Phone 2</option>
                    </select>

                <h5>External SIP UA Mapping <?php info(""); ?></h5>
                Incoming Call <select>
                    <option>NONE</option>
                    <option selected>ID=1,AOR=SIP1</option>
                    <option>ID=2,AOR=SIP2</option>
                    <option>ID=3,AOR=SIP3</option>
                    <option>ID=4,AOR=SIP4</option>
                </select><br />
                Incoming Call <select>
                    <option>NONE</option>
                    <option>ID=1,AOR=SIP1</option>
                    <option>ID=2,AOR=SIP2</option>
                    <option selected>ID=3,AOR=SIP3</option>
                    <option>ID=4,AOR=SIP4</option>
                </select><br />
                Incoming Call <select>
                    <option>NONE</option>
                    <option>ID=1,AOR=SIP1</option>
                    <option>ID=2,AOR=SIP2</option>
                    <option>ID=3,AOR=SIP3</option>
                    <option selected>ID=4,AOR=SIP4</option>
                </select><br />
                Incoming Call <select>
                    <option selected>NONE</option>
                    <option>ID=1,AOR=SIP1</option>
                    <option>ID=2,AOR=SIP2</option>
                    <option>ID=3,AOR=SIP3</option>
                    <option>ID=4,AOR=SIP4</option>
                </select><br />
                Outgoing Call <select>
                    <option>NONE</option>
                    <option selected>ID=1,AOR=SIP1</option>
                    <option>ID=2,AOR=SIP2</option>
                    <option>ID=3,AOR=SIP3</option>
                    <option>ID=4,AOR=SIP4</option>
                </select>
            </div>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>