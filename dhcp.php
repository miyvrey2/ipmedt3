<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h5>DHCP</h5><br/>
            <h7>DHCP Server</h7><br/>
            <p>De DHCP start IP address en eind IP address moeten in het zelfde subnet zijn als het LAN IP address.<br/>
            LAN IP Address <input type="text" value="192.168.2.254" required readonly><br/>
            Subnet Mask <input type="text" value="255.255.255.0" required readonly></p>

            <p>Enable DHCP Server <i class="fa fa-check-square-o"></i><br/>
            DHCP Start IP Adress <?php info("DHCPStartIP"); ?> <input value="192.168.2." required readonly><input type="number" size="3" min="0" max="255" value="1"><br/>
            DHCP Eind IP Adress <?php info("DHCPEindIP"); ?> <input value="192.168.2." required readonly><input type="number" size="3" min="0" max="255" value="252"><br/>
            DNS Server1 IP Address <?php info("DNSIP"); ?> <input value="192.168.2.254"required readonly><br/>
            DNS Server2 IP Address <input><br/>
            DNS Server3 IP Address <input><br/>
            Default Gateway <?php info("DG"); ?> <input value"192.168.2.254" required readonly><br/>
            Lease Time <?php info("LT"); ?> <input value="86400" required readonly>sec<br/>

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

            <h7>DHCP Binding</h7><br/>
            IP Address <?php info("IP"); ?> <input type="text"></br>
            Mac Address <?php info("MAC"); ?> <input type="text" size="17">
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
    </div>
</div>

<?php require_once('components/footer.php'); ?>
