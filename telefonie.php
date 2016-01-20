<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>Telefonie</h1>

            <div class="groupd-accordion">
                <section class="selected">
                    <a href=#server id="server">
                        Account Mapping
                    </a>

                    <div class="groupd-accordion-section">

                        <label for="">Registrar Server IP Adres <?php info("RegServerIP"); ?></label>
                        <input type="text" id="inputEmail" class="form-control " value="192.168.2.254" required readonly>

                        <label for="">Proxy Server IP Adres <?php info("ProxServerIP"); ?></label>
                        <input type="text" id="inputEmail" class="form-control " value="192.168.2.254" required readonly>

                    </div>

                </section>

                <section>
                    <a href=#server id="server">
                        Internal SIP Server
                    </a>

                    <div class="groupd-accordion-section">

                        <h2>Internal Extension Number <?php info("SIP"); ?></h2>

                        <select>
                            <option value="1">*101</option>
                            <option value="2">*102</option>
                            <option value="3">*103</option>
                        </select>
                        <form>
                            <label for="">Aanzetten</label>
                            <br />
                            <input type="checkbox" name="enable" value="empty">
                            <br />
                        </form>

                        <label for="">Telefoon nummer</label>
                        <select>
                            <option>Phone 1</option>
                            <option>Phone 2</option>
                        </select>

                        <h5>External SIP UA Mapping <?php info("SIPUA"); ?></h5>
                        <label for="">Incoming Call </label>
                        <select>
                            <option>NONE</option>
                            <option selected>ID=1,AOR=SIP1</option>
                            <option>ID=2,AOR=SIP2</option>
                            <option>ID=3,AOR=SIP3</option>
                            <option>ID=4,AOR=SIP4</option>
                        </select>

                        <label for="">Incoming Call </label>
                        <select>
                            <option>NONE</option>
                            <option>ID=1,AOR=SIP1</option>
                            <option>ID=2,AOR=SIP2</option>
                            <option selected>ID=3,AOR=SIP3</option>
                            <option>ID=4,AOR=SIP4</option>
                        </select>

                        <label for="">Incoming Call </label>
                        <select>
                            <option>NONE</option>
                            <option>ID=1,AOR=SIP1</option>
                            <option>ID=2,AOR=SIP2</option>
                            <option>ID=3,AOR=SIP3</option>
                            <option selected>ID=4,AOR=SIP4</option>
                        </select>

                        <label for="">Incoming Call </label>
                        <select>
                            <option selected>NONE</option>
                            <option>ID=1,AOR=SIP1</option>
                            <option>ID=2,AOR=SIP2</option>
                            <option>ID=3,AOR=SIP3</option>
                            <option>ID=4,AOR=SIP4</option>
                        </select>

                        <label for="">Outgoing Call</label>
                        <select>
                            <option>NONE</option>
                            <option selected>ID=1,AOR=SIP1</option>
                            <option>ID=2,AOR=SIP2</option>
                            <option>ID=3,AOR=SIP3</option>
                            <option>ID=4,AOR=SIP4</option>
                        </select>
                    </div>

                </section>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>