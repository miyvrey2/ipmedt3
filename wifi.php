<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" id="content">
<a href="#" class="groupd-accordiondd"><p>da</p></a>
            <div class="groupd-accordion">
                <section>
                    <a href=#basis id="basis">
                        Introduction
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad
                        minim.
                    </p>
                </section>
                <section>
                    <a href=#geavanceerd id="geavanceerd">
                        General information
                    </a>
                    <p>
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </p>
                </section>
                <section>

                </section>
            </div>

                <h1>Wi-Fi</h1>
                Aanzetten draadloos netwerk <input type="checkbox" name="enable" value="empty" checked><br />
                <label for="inputEmail"> Netwerknaam(SSID) </label>
                <input type="email" id="inputEmail" value="H368N4AA182" class="form-control col-md-1.5">(1 ~ 32 tekens)<br />
                Netwerk wachtwoord <input type="email" id="inputEmail" class="form-control col-md-1.5" value="mijnwachtwoord"><br />

            <h7>Geavanceerde wachtwoord instellingen</h7><br /><br />
            Authenticatie Type <?php info("AuthenticatieType"); ?>

            <select>
              <option>WPA-PSK</option>
              <option>WPA2-PSK</option>
              <option selected>WPA/WPA2-PSK</option>
              <option>WEB</option>
            </select><br />
            
            WPA Encryptie Algoritme <?php info("WPAEncriptyAlgoritme"); ?> 
            <select>
              <option selected>TKIP + AES</option>
              <option>TKIP</option>
              <option>AES</option>
            </select><br />

            <h5>Geavanceerde Wi-Fi Instellingen</h5>
            
            Modus <?php info("Modus"); ?> 
            <select>
              <option >IEEE 802.11b Only</option>
              <option >IEEE 802.11g Only</option>
              <option >IEEE 802.11n Only</option>
              <option >Mixed(802.11b+802.11a)</option>
              <option selected>Mixed(802.11b+802.11a+802.11n)</option>

            </select><br />
              
            Kanaal bandbreedte <?php info("KanaalBandbreedte"); ?> <select>
              <option selected>20MHz</option>
              <option>40MHz</option>
            </select><br />
              
            Kanaal <select>
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
            
            Uitzendende Kracht <select>
              <option selected>100%</option>
              <option>80%</option>
              <option>60%</option>
              <option>40%</option>
              <option>20%</option>
            </select><br />
            
            Aanzetten WMM QoS <?php info("WMMQoS"); ?> 
            <input type="checkbox" name="enable" value="empty"><br />
            
            Wi-Fi netwerk verbergen <input type="checkbox" name="enable" value="empty"><br />
            Maximaal aantal verbonden gebruikers <input type="number" min="1" max="32" class="form-control, col-md-1, "> (1 ~ 32)<br/>

            <h7>KPN FON Hotspot</h7><br />
            Enable KPN-FON <?php info("KPN-FON"); ?> <input type="checkbox" checked>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>