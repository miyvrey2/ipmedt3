<?php
function info($id){

    // Set up an array with all the help-items
    $helpArray = array(
        //wifi
        '' => 'NOG GEEN ID INGEVOERD',
        'AuthenticatieType' => '',
        'WPAEncriptyAlgoritme' => '',
        'Modus' => '',
        'KanaalBandbreedte' => '',
        'WMMQoS' => '',
        'KPN-FON' => 'KPN fon is leuk',
        //Port Forwarden
        'LANHOSTIP' => '',
        'ApplicatieNaam'=>'',
        'Protocol'=>'',
        'StartPort'=>'',
        'EndPort'=>'',
        'StartMappingPort'=>'',
        'EndMappingPort'=>'',
        //File Sharing
        'EnFTP'=>'',
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
        'DMZHOST' => '',
        //Telefonie
        'RegServerIP' => '',
        'ProxServerIP' => '',
        'SIP' => '',
        'SIPUA' => '',
        //Firewall
        'Firewall' => '',
        'Intrusion' => '',
        'Fraggle' => '',
        'TCP' => '',
        'PING' => '',
        'LAND' => '',
        'TEAR' => '',
        //Eco modus
        'ECO' => '',
        //Web session timeout
        'Timeout' => '',
        //User management
        'um' => '',
        //DLNA DNS
        'dlna' => '',
        //SNTP
        'SNTP' => '',
        'NPT' => '',
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