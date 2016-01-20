<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>DHCP</h1>

            <div class="groupd-accordion">
                <section class="selected">
                    <a href=#server id="server">
                        DHCP Server
                    </a>

                    <div class="groupd-accordion-section">

                        <p>De DHCP start IP address en eind IP address moeten in het zelfde subnet zijn als het LAN IP address.</p>

                        <label for="">LAN IP Address</label>
                        <input type="text" value="192.168.2.254" required readonly class="form-control">

                        <label for="">Subnet Mask </label>
                        <input type="text" value="255.255.255.0" required readonly class="form-control">

                        <label for="">Enable DHCP Server <i class="fa fa-check-square-o"></i></label>
                        <br/>

                        <label for="">DHCP Start IP Adress <?php info("DHCPStartIP"); ?></label>
                        <input value="192.168.2." required readonly class="form-control form-75"> <input type="number" size="3" min="0" max="255" value="1" class="form-control form-25">

                        <label for="">DHCP Eind IP Adress <?php info("DHCPEindIP"); ?> </label>
                        <input value="192.168.2." required readonly class="form-control form-75"><input type="number" size="3" min="0" max="255" value="252" class="form-control form-25">

                        <label for="">DNS Server1 IP Address <?php info("DNSIP"); ?> </label>
                        <input value="192.168.2.254"required readonly class="form-control">

                        <label for="">DNS Server2 IP Address</label>
                        <input class="form-control">

                        <label for="">DNS Server3 IP Address </label>
                        <input class="form-control">

                        <label for="">Default Gateway <?php info("DG"); ?> </label>
                        <input value="192.168.2.254" required readonly class="form-control">

                        <label for="">Lease Time <?php info("LT"); ?></label>
                        <input value="86400" required readonly class="form-control">sec<br/>

                            Toegewezen adressen
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th><h5>Mac Address</h5></th>
                                <th><h5>IP Address</h5></th>
                                <th><h5>Remaining Lease Time</h5></th>
                                <th><h5>Host Name</h5></th>
                                <th><h5>Port</h5></th>
                            </tr>
                            <tr>
                                <td>C0:EE:FB:26:37:5C</td>
                                <td>192.168.2.2</td>
                                <td>80724</td>
                                <td>De boze buurman</td>
                                <td></td>
                            </tr>
                        </table>

                    </div>

                </section>
                <section>
                    <a href=#binding id="binding">
                        DHCP Binding
                    </a>

                    <div class="groupd-accordion-section">

                        IP Address <?php info("IP"); ?> <input type="text" class="form-control"></br>
                        Mac Address <?php info("MAC"); ?> <input type="text" size="17" class="form-control">
                        <button>Voeg Toe</button>

                        <table class="table table-hover table-bordered">
                            <tr>
                                <th><h5>IP Address</h5></th>
                                <th><h5>MAC Address</h5></th>
                                <th><h5>Modify</h5></th>
                                <th><h5>Delete</h5></th>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    Er zijn geen items, voeg er eerst een toe
                                </td>
                            </tr>
                        </table>

                    </div>

                </section>
            </div>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>
