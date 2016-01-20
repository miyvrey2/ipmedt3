<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">
            <h1>Wi-Fi</h1>
            <div class="groupd-accordion">
                <section class="selected">
                    <a href=#basis id="basis">
                        Basis
                    </a>

                    <div class="groupd-accordion-section">
                        <h2>Wi-Fi instellingen</h2>

                        <label for="networkCheck">Aanzetten draadloos netwerk</label>
                        <br />
                        <input type="checkbox" id="networkCheck" name="enable" checked>
                        <br />

                        <label for="networkName"> Netwerknaam (SSID) <br /> <sup>(1 ~ 32 tekens)</sup> </label>
                        <input type="text" id="networkName" value="H368N4AA182" class="form-control col-md-1.5">

                        <label for="networkPassword">Netwerk wachtwoord</label>
                        <input type="text" id="networkPassword" class="form-control col-md-1.5" value="mijnwachtwoord"><br />
                    </div>

                </section>
                <section>
                    <a href=#geavanceerd id="geavanceerd">
                        Geavanceerd
                    </a>
                    <div class="groupd-accordion-section">
                        <h2>Geavanceerde wachtwoord instellingen</h2>

                        <label for="authenticationType">Authenticatie Type <?php info("AuthenticatieType"); ?></label>
                        <select id="authenticationType">
                            <option>WPA-PSK</option>
                            <option>WPA2-PSK</option>
                            <option selected>WPA/WPA2-PSK</option>
                            <option>WEB</option>
                        </select><br />

                        <label for="encryptionAlgo">WPA Encryptie Algoritme <?php info("WPAEncriptyAlgoritme"); ?></label>
                        <select id="encryptionAlgo">
                            <option selected>TKIP + AES</option>
                            <option>TKIP</option>
                            <option>AES</option>
                        </select><br />

                        <h2>Geavanceerde Wi-Fi Instellingen</h2>
                        <label for="modus">Modus <?php info("Modus"); ?></label>
                        <select id="modus">
                            <option >IEEE 802.11b Only</option>
                            <option >IEEE 802.11g Only</option>
                            <option >IEEE 802.11n Only</option>
                            <option >Mixed(802.11b+802.11a)</option>
                            <option selected>Mixed(802.11b+802.11a+802.11n)</option>
                        </select><br />

                        <label for="bandwidth">Kanaal bandbreedte <?php info("KanaalBandbreedte"); ?></label>
                        <select id="bandwidth">
                            <option selected>20MHz</option>
                            <option>40MHz</option>
                        </select><br />

                        <label for="channel">Kanaal</label>
                        <select id="channel">
                            <option selected>Auto</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                        </select><br />

                        <label for="signalStrength">Uitzendende Kracht</label>
                        <select id="signalStrength">
                            <option selected>100%</option>
                            <option>80%</option>
                            <option>60%</option>
                            <option>40%</option>
                            <option>20%</option>
                        </select><br />

                        <label for="checkWMMQoS">Aanzetten WMM QoS <?php info("WMMQoS"); ?></label>
                        <br />
                        <input type="checkbox" name="enable" id="checkWMMQoS" value="empty">
                        <br />

                        <label for="hideWifi">Wi-Fi netwerk verbergen</label>
                        <br />
                        <input id="hideWifi" type="checkbox" name="enable" value="empty">
                        <br />

                        <label for="maxUserWifi">Maximaal aantal verbonden gebruikers<br /><sup>(1 ~ 32)</sup></label>
                        <input id="maxUserWifi" type="number" min="1" max="32" class="form-control, col-md-1, ">

                        <h2>KPN FON Hotspot</h2>

                        <label for="turnKPNFON">Schakel KPN-FON in <?php info("KPN-FON"); ?></label>
                        <br />
                        <input id="turnKPNFON" type="checkbox" checked>
                        <br />
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>