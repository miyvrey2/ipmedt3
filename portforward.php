<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h5>Port Forwarden</h5>
            Input Mode <select><option>IP Address</option>
            <option>Access Device</option><select><br/><br/>

            <h7>Nieuwe applicatie toevoegen</h7><br />
            LAN Host IP Adres invoeren <?php info("LANHOSTIP"); ?> <input type="email" id="inputEmail" placeholder="xxx.xxx.x.x" class="form-control, col-md-1.5"><br />
            
            Naam van de applicatie <select>
              <option value="Age of Empires">Age&nbsp;of&nbsp;Empires</option>
              <option value="Age of Mythology">Age&nbsp;of&nbsp;Mythology</option>
              <option value="AIM Talk">AIM&nbsp;Talk</option>
              <option value="Aliens vs Predator">Aliens&nbsp;vs&nbsp;Predator</option>
              <option value="America\'s Army">America's&nbsp;Army</option>
              <option value="Bay VPN">Bay&nbsp;VPN</option>
              <option value="BearShare">BearShare</option>
              <option value="BitTorrent">BitTorrent</option>
              <option value="Black and White">Black&nbsp;and&nbsp;White</option>
              <option value="Call of Duty(-United Offensive)">Call&nbsp;of&nbsp;Duty(-United&nbsp;Offensive)</option>
              <option value="Castle Wolfenstein">Castle&nbsp;Wolfenstein</option>
              <option value="Championship Manager 03/04">Championship&nbsp;Manager&nbsp;03/04</option>
              <option value="Carbon Copy32">Carbon&nbsp;Copy32</option>
              <option value="Command and Conquer Generals/Command and Conquer Zero Hour">Command&nbsp;and&nbsp;Conquer&nbsp;Generals/Command&nbsp;and&nbsp;Conquer&nbsp;Zero&nbsp;Hour</option>
              <option value="Counter Strike">Counter&nbsp;Strike</option>
              <option value="Cu-SeeMe">Cu-SeeMe</option>
              <option value="Dark Reign 2">Dark&nbsp;Reign&nbsp;2</option>
              <option value="Delta Force">Delta&nbsp;Force</option>
              <option value="Destroyer Command">Destroyer&nbsp;Command</option>
              <option value="Diablo II">Diablo&nbsp;II</option>
              <option value="DirectX">DirectX</option>
              <option value="Direct Connect">Direct&nbsp;Connect</option>
              <option value="Doom3">Doom3</option>
              <option value="Dune 2000">Dune&nbsp;2000</option>
              <option value="Dungeon Siege">Dungeon&nbsp;Siege</option>
              <option value="Elite Force">Elite&nbsp;Force</option>
              <option value="eMule/eDonkey">eMule/eDonkey</option>
              <option value="Enemy Territory">Enemy&nbsp;Territory</option>
              <option value="Everquest">Everquest</option>
              <option value="Evil Islands">Evil&nbsp;Islands</option>
              <option value="F-22 Lightning 3">F-22&nbsp;Lightning&nbsp;3</option>
              <option value="Falcon 4">Falcon&nbsp;4</option>
              <option value="FastTrack">FastTrack</option>
              <option value="Fighter Ace II (DX)">Fighter&nbsp;Ace&nbsp;II&nbsp;(DX)</option>
              <option value="FTP Server">FTP&nbsp;Server</option>
              <option value="FW1 VPN">FW1&nbsp;VPN</option>
              <option value="Far Cry">Far&nbsp;Cry</option>
              <option value="Gamespy Arcade">Gamespy&nbsp;Arcade</option>
              <option value="Ghost Recon">Ghost&nbsp;Recon</option>
              <option value="Gnutella">Gnutella</option>
              <option value="Half-Life">Half-Life</option>
              <option value="Halo">Halo</option>
              <option value="Heretic II">Heretic&nbsp;II</option>
              <option value="Hexen II">Hexen&nbsp;II</option>
              <option value="HTTP Server">HTTP&nbsp;Server</option>
              <option value="HTTPS Server">HTTPS&nbsp;Server</option>
              <option value="ILS Server">ILS&nbsp;Server</option>
              <option value="IL 2">IL&nbsp;2</option>
              <option value="iMesh/KaZaA">iMesh/KaZaA</option>
              <option value="IPSEC-IKE">IPSEC-IKE</option>
              <option value="KALI">KALI</option>
              <option value="Laplink">Laplink</option>
              <option value="Links">Links</option>
              <option value="Lock On">Lock&nbsp;On</option>
              <option value="Lotus Notes">Lotus&nbsp;Notes</option>
              <option value="Microsoft Terminal Server">Microsoft&nbsp;Terminal&nbsp;Server</option>
              <option value="Moove">Moove</option>
              <option value="MSN Game Zone">MSN&nbsp;Game&nbsp;Zone</option>
              <option value="MSN Game Zone (DX)">MSN&nbsp;Game&nbsp;Zone&nbsp;(DX)</option>
              <option value="MSN Messenger">MSN&nbsp;Messenger</option>
              <option value="Myth">Myth</option>
              <option value="Napster">Napster</option>
              <option value="Need for Speed">Need&nbsp;for&nbsp;Speed</option>
              <option value="Need for Speed 3">Need&nbsp;for&nbsp;Speed&nbsp;3</option>
              <option value="Need for Speed - Underground">Need&nbsp;for&nbsp;Speed&nbsp;-&nbsp;Underground</option>
              <option value="Neverwinter Nights Gamespy">Neverwinter&nbsp;Nights&nbsp;Gamespy</option>
              <option value="NetMeeting">NetMeeting</option>
              <option value="NNTP Server">NNTP&nbsp;Server</option>
              <option value="NTP Server">NTP&nbsp;Server</option>
              <option value="OpenFT">OpenFT</option>
              <option value="Outlaws">Outlaws</option>
              <option value="PCAnywhere">PCAnywhere</option>
              <option value="PalTalk">PalTalk</option>
              <option value="POP3 Server">POP3&nbsp;Server</option>
              <option value="PPTP Server">PPTP&nbsp;Server</option>
              <option value="Quake 3">Quake&nbsp;3</option>
              <option value="Rainbow Six/Rogue Spear">Rainbow&nbsp;Six/Rogue&nbsp;Spear</option>
              <option value="Realm Games (Blizzard)">Realm&nbsp;Games&nbsp;(Blizzard)</option>
              <option value="Remote Anything">Remote&nbsp;Anything</option>
              <option value="Remotely Anywhere">Remotely&nbsp;Anywhere</option>
              <option value="Microsoft Remote Desktop">Microsoft&nbsp;Remote&nbsp;Desktop</option>
              <option value="RealAudio Server">RealAudio&nbsp;Server</option>
              <option value="Rome Total War">Rome&nbsp;Total&nbsp;War</option>
              <option value="RTSP Server">RTSP&nbsp;Server</option>
              <option value="Shareaza">Shareaza</option>
              <option value="Shiva VPN">Shiva&nbsp;VPN</option>
              <option value="Silent Hunter II">Silent&nbsp;Hunter&nbsp;II</option>
              <option value="SSMTP Server">SSMTP&nbsp;Server</option>
              <option value="Soldier of Fortune">Soldier&nbsp;of&nbsp;Fortune</option>
              <option value="Soldiers: Heroes of World War II">Soldiers:&nbsp;Heroes&nbsp;of&nbsp;World&nbsp;War&nbsp;II</option>
              <option value="SSH Server">SSH&nbsp;Server</option>
              <option value="Soulseek">Soulseek</option>
              <option value="Starsiege Tribes">Starsiege&nbsp;Tribes</option>
              <option value="StarCraft/Warcraft III">StarCraft/Warcraft&nbsp;III</option>
              <option value="Steam Games">Steam&nbsp;Games</option>
              <option value="Telnet Server">Telnet&nbsp;Server</option>
              <option value="Tiberian Sun">Tiberian&nbsp;Sun</option>
              <option value="Ultima">Ultima</option>
              <option value="Unreal Tournament">Unreal&nbsp;Tournament</option>
              <option value="VNC">VNC</option>
              <option value="Westwood Online">Westwood&nbsp;Online</option>
              <option value="Win MX">Win&nbsp;MX</option>
              <option value="World of Warcraft">World&nbsp;of&nbsp;Warcraft</option>
              <option value="XBConnect">XBConnect</option>
              <option value="Xbox Live">Xbox&nbsp;Live</option>
            </select><br />
            
            <button>Toevoegen</button><button>Zoeken</button>
               <div class="table-responsive">
                <table id="Intrusion" class="table table-hover table-bordered col-md-3">
                  <tr>
                    <th><h5>LAN Host IP Adres</h5></td>
                    <th><h5>Naam van Applicatie</h5></td>
                    <th><h5>Delete</h5
                  </tr><tr>
                    <td>192.168.2.1</td>
                    <td>CodMW2</td>
                    <td><i class="fa fa-trash fa-2x"></i></td>
                  </tr><tr>
                    <td>192.168.2.1</td>
                    <td>App2</td>
                    <td><i class="fa fa-trash fa-2x"></i></td>
                  </tr><tr>
                    <td>192.168.2.1</td>
                    <td>bf1/td>
                    <td><i class="fa fa-trash fa-2x"></i></td>
                  </tr><tr>
                    <td>192.168.2.1</td>
                    <td>BitTorrent</td>
                    <td><i class="fa fa-trash fa-2x"></i></td>
                  </tr><tr>
                    <td>192.168.2.1</td>
                    <td>atx</td>
                    <td><i class="fa fa-trash fa-2x"></i></td>
                  </tr>
                </table>
              </div>
            <div>
              <h5>Geavanceerde Port-Forward instellingen</h5>
              Applicatie Naam <?php info("ApplicatieNaam"); ?> <input type="email" id="inputEmail" placeholder="" class="form-control, col-md-1.5">(1 ~ 65535)<br />           
              Protocol <?php info("Protocol"); ?> <select><option value="7">TCP</option></select><br />
              Start Port <?php info("StartPort"); ?> <input type="email" id="inputEmail" placeholder="" class="form-control, col-md-1.5">(1 ~ 65535)<br />
              End Port <?php info("EndPort"); ?> <input type="email" id="inputEmail" placeholder="" class="form-control, col-md-1.5">(1 ~ 65535)<br />
              Start Mapping Port <?php info("StartMappingPort"); ?> <input type="email" id="inputEmail" placeholder="" class="form-control, col-md-1.5">(1 ~ 65535)<br />
              End Mapping Port <?php info("EndMappingPort"); ?> <input type="email" id="inputEmail" placeholder="" class="form-control, col-md-1.5">(1 ~ 65535)<br />
              <button>Toevoegen</button>
              <div class="table-responsive">
                <table id="Intrusion" class="table table-hover table-bordered col-md-3">
                  <tr>
                    <th><h5>Protocol</h5></td>
                    <th><h5>Start Port</h5></td>
                    <th><h5>End Port</h5></td>
                    <th><h5>Map Start Port</h5></td>
                    <th><h5>Map End Port</h5></td>
                    <th><h5>Modify</h5></td>
                    <th><h5>Delete</h5
                  </tr><tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><i class="fa fa-trash fa-2x"></i></td>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>