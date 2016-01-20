<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo $url; ?>dashboard/">
                <img class="navbar-brand" src="<?php echo $url; ?>lib/img/KPN_logo.svg.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?php is_current('dashboard')?> ><a href="<?php echo $url; ?>dashboard\">Dashboard <i class="fa fa-tachometer"></i>
                        <span class="sr-only">(current)</span></a></li>

                <li class="dropdown <?php is_current(array('wifi', 'portforward', 'filesharing', 'DHCP', 'wan', 'acces', 'dmz'))?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Netwerk <i class="fa fa-sitemap"></i><span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><h5>Basis</h5></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('wifi')?>><a href="<?php echo $url; ?>wifi/">Wi-Fi</a></li>
                        <li role="separator" class="divider"></li>
                        <li><h5>Geavanceerd</h5></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('portforward')?>><a href="<?php echo $url; ?>portforward/">Port Forwarden</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('filesharing')?>><a href="<?php echo $url; ?>filesharing/">File Sharing</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('dhcp')?>><a href="<?php echo $url; ?>dhcp/">DHCP</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('wan')?>><a href="<?php echo $url; ?>wan/">WAN</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('acces')?>><a href="<?php echo $url; ?>acces/">Toegangs controle lijst</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('dmz')?>><a href="<?php echo $url; ?>dmz/">DMZ</a></li>
                    </ul>
                </li>

                <li <?php is_current('telefonie')?>><a href="<?php echo $url; ?>telefonie/">Telefonie <i class="fa fa-phone"></i></a></li>
                <li <?php is_current('firewall')?>><a href="<?php echo $url; ?>firewall/">Firewall <i class="fa fa-shield"></i></a></li>

                <li class="dropdown <?php is_current(array('eco', 'timeout', 'um', 'dlna', 'sntp', 'reboot', 'backup', 'factory'))?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Router instellingen <i class="fa fa-cog"></i><span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li <?php is_current('eco')?>><a href="<?php echo $url; ?>eco/">Eco modus</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('timeout')?>><a href="<?php echo $url; ?>timeout/">Web session timeout</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('um')?>><a href="<?php echo $url; ?>um/">User management</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('dlna')?>><a href="<?php echo $url; ?>dlna/">DLNA DNS</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('sntp')?>><a href="<?php echo $url; ?>sntp/">SNTP</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('reboot')?>><a href="<?php echo $url; ?>reboot/">Opnieuw opstarten</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('backup')?>><a href="<?php echo $url; ?>backup/">Back-up</a></li>
                        <li role="separator" class="divider"></li>
                        <li <?php is_current('factory')?>><a href="<?php echo $url; ?>factory/">Fabrieksinstellingen</a></li>
                    </ul>
                </li>

                <li <?php is_current('help')?>><a href="<?php echo $url; ?>help/">Help <i class="fa fa-info-circle"></i></a></li>
            </ul>
            <p class="navbar-text navbar-right"><a href="<?php echo $url; ?>" class="navbar-link">Uitloggen</a></p>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>