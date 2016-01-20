<?php
function info($id){

    // Set up an array with all the help-items
    $helpArray = array(
        //wifi
        '' => 'NOG NIETS INGEVOERD',
        'AuthenticatieType' => 'WPA en WEB zijn versleutelingsmethodes die je Wi-Fi authenticaties beschermen.(STANDAARD: WPA/WPA2-PSK)',
        'WPAEncriptyAlgoritme' => 'Hier kun je de encryptiemethode van je versleutelingen kiezen.(STANDAARD: TKIP + AES',
        'Modus' => 'Hier staan de verschillende standaarden die definieren op welke GHz band je Wi-Fi netwerk wordt uitgezonden. (STANDAARD: Mixed(802.11b+802.11a+802.11n))',
        'KanaalBandbreedte' => 'Hierin wordt gespecificieerd over welke bandbreedte het Wi-Fi netwerk uitgezonden zal worden (STANDAARD: 20 MHz)',
        'WMMQoS' => 'Met WMM QoS aan zal Wi-Fi multimedia prioritiriseren en deze voorrang geven (STANDAARD: Aan)',
        'KPN-FON' => 'Met deze optie zal je KPN-FON netwerk aanzetten, hiermee lever je aan andere KPN gebruikers een beetje van jouw Wi-Fi netwerk',
        //Port Forwarden
        'LANHOSTIP' => 'In dit veld komt het IP adres te staan van de ontvangende partij. Dit kan zijn een applicatie, website of server',
        'ApplicatieNaam'=>'In dit veld voer je de naam van applicatie in waarvoor je een Port-Forward gaat doen.',
        'Protocol'=>'In dit veld selecteer je het type protocol waarvan je de ports open wil zitten',
        'StartPort'=>'In dit veld vul je het "Start" port in, dit is de eerste poort die geopend zal worden.',
        'EndPort'=>'In dit veld vul je het "End" port in, dit is de laatste poort die geopend zal worden.',
        'StartMappingPort'=>'Dit is een door ZTE verzonnen term om de onwetende gebruiker nog meer te veranderen en wordt in het dagelijks leven nooit gebruikt.',
        'EndMappingPort'=>'Dit is een door ZTE verzonnen term om de onwetende gebruiker nog meer te veranderen en wordt in het dagelijks leven nooit gebruikt.',
        //File Sharing
        'EnFTP'=>'Door deze functionaliteit aan te zetten maak je het mogelijk om via jouw server bestanden uit te wisselen met andere gebruikers binnen het netwerk.(STANDAARD: Uit)',
        'FTPsec'=>'',
        'FTPun'=>'',
        'FTPpass'=>'',
        'EnSAMBA'=>'',
        'SAMBAnaam'=>'',
        //DHCP
        'DHCPStartIP'=>'',
        'DHCPEindIP'=>'',
        'DNSIP'=>'',
        'DG'=>'',
        'LT'=>'',
        'IP'=>'',
        'MAC'=>'',
        //WAN
        //Toegangs controle lijst
        'MAC2' => '',
        //DMZ
        'DMZINPUT' => '',
        'DMZHOST' => ''
        //Telefonie
        //Firewall
        //Eco modus
        //Web session timeout
        //User management
        //DLNA DNS
        //SNTP
        //Opnieuw opstarten
        //Back-up
        //Fabrieksinstellingen
        //Help
    );


    // Print out the help item that has been requested
    echo '<u><i class="fa fa-question-circle"></i><b class="alert alert-info">';
    
        if(array_key_exists($id, $helpArray)){
            echo $helpArray[$id];
        } else {
            echo '<i style="color: red;">Foutieve index voor $helpArray;</i>';

        }

    echo '</b></u>';
}
?>