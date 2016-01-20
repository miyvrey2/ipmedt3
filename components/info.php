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
        'FTPsec'=>'Door deze functie te activieren wordt je FTP server beveiligd voor de buitenwereld. (STANDAARD: Enabled)',
        'FTPun'=>'Hier specificieer je de gebruikersnaam waarmee je inlogt op de FTP server.',
        'FTPpass'=>'Hier specificieer je het wachtwoord waarmee je inlogt op de FTP server.',
        'EnSAMBA'=>'Door gebruik te maken van een Samba Server kunnen apparaten op uw netwerk die het SMB protocol ondersteunen met elkaar communiceren',
        'SAMBAnaam'=>'Naam opveven van je Sambaserver',
        //DHCP
        'DHCPStartIP'=>'Hierin geeft u het eerste IP adres op in een reeks die de DHCP uit mag delen aan de gebruikers van uw netwerk.',
        'DHCPEindIP'=>'Hierin geeft u het laatste IP adres op in een reeks die de DHCP uit mag delen aan de gebruikers van uw netwerk.',
        'DNSIP'=>'Hierin geeft u het IP adres op van uw eerste "Domain Name Server"',
        'DG'=>'Dit is de standaard route die aangehouden wordt bij binnenkomst van pakketjes met informatie.',
        'LT'=>'Dit is de tijd die tussen het oproepen van een process en de uitvoering van dit proces. De latentie.',
        'IP'=>'Geef hier het IP adres op wat je wil binden aan een DHCP',
        'MAC'=>'Geef hier het MAC adres op wat je wil binden aan een DHCP, Een MAC adres is een uniek nummer wat voor elk apparaat anders is.',
        //WAN
        //Toegangs controle lijst
        'BWList' => 'Hier kan je kiezen om OF een zwarte lijst, OF een witte lijst in te stellen. Als je wilt dat apparaten niet je Wi-Fi netwerk mogen betreden kun je hen MAC adres toevoegen aan de ze lijst. Omgekeerd werkt dit ook met de lijst, voor apparaten die je wel op je netwerk vertrouwd.',
        'MAC2' => 'Een MAC adres is een uniek nummer wat voor elk apparaat anders is.',
        //DMZ
        'DMZINPUT' => 'Door een DMZ aan te zetten wordt er extra beveiligingslaag over je netwerk heen gemaakt. Hiermee wordt je netwerk extra beveiligd.',
        'DMZHOST' => 'Hierin vul je het IP adres in van je DMZ host.',
        //Telefonie
        'RegServerIP' => 'Dit is het IP adres van je router.',
        'ProxServerIP' => 'Dit is het IP adres van je Proxy server van je router.',
        'SIP' => 'Hiermee kun je er voor zorgen dat je huislijn wordt doorverbonden naar een mobiel nummer.',
        'SIPUA' => 'Hiermee kun je definieren hoe je inkomende gesprekken en uitgaande gesprekken afgehandeld worden. ',
        //Firewall
        'Firewall' => 'Firewall is een extra beschermlaag die om het netwerk heen ligt. Deze extra laag beschermt het netwerk tegen aanvallen van buiten en/of virussen. (STANDAARD: Aan)',
        'Intrusion' => 'Met "Intrusion Detection" kan heel makkelijk gezien worden of er een ongeauthoriseerde gebruiker geprobeert heeft om uw netwerk binnen te komen/aan te vallen. (STANDAARD: Aan)',
        'Fraggle' => 'Fraggle is een vom van een DdoS aanval.',
        'TCP' => 'Via deze manier van aanvallen wordt er een groot aantal verbindingsaanvragen met een fout bron IP-adres naar uw server gestuurd.',
        'PING' => 'Dit is een vorm van een Denial of Service aanval waarbij een host op een computernetwerk gefragmenteerd wordt doordat er een pakket verstuurd wat groter is dan de maximale toegestane bytes.',
        'LAND' => 'LAND staat voor Local Area Network Denial. Het is een Denial of Service waarbij er een nep pakket naar uw computer wordt gestuurd. Omdat het pakket nep is zal uw computer zich zelf versleutelen.',
        'TEAR' => 'BIj een "Teardrop" aanval wordt er gebruik gemaakt van fouten op de TCP en IP laag. Er worden fragmenten van IP pakketten gestuurd die onvolledig fijn. Hierbij ontstaan overlappen en zal de machine crashen.',
        //Eco modus
        'ECO' => 'Via de ECO modus kunt u instellen dat uw Wi-Fi of USB apparaat zich op bepaalde tijden op een dag en/of week zichzelf uitschakelt. Dit kan gedaan worden door begin tijden en eindtijden op te geven per dag.',
        //Web session timeout
        'Timeout' => 'In dit veld kunt u opgeven na hoeveel minuten de gebruiker van de webinterface een timeout krijg en opnieuw in moet loggen.(STANDAARD: 5)',
        //User management
        'um' => 'Hier kunt u het wachtwoord veranderen van de webinterface. Let op! Dit is niet het wachtwoord van uw Wi-Fi netwerk.',
        //DLNA DNS
        'dlna' => 'Hier kunt u de DMS aanzetten en een naam geven. Daarnaast kunt u ook media locaties toevoegen voor multimediagebruik.',
        //SNTP
        'SNTP' => 'Hier kunt u de tijdzone bekijken die gespecificieerd is voor uw router.',
        'NPT' => 'Hier kunt u de tijdservers bekijken die gebruikt worden door uw router.',
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