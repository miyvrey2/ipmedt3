<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

          <h1>Welkom op de Help pagina.</h1>
          Hier vind u een uitgebreid overzicht van wat waar te vinden is. Elk kopje komt overeen met een kopje in het menu van deze webbinterface.

          <h2>Dashboard</h2>
          Hier is een overzicht van verschillende functionaliteiten en gegevens van de KPN-Experiabox
          <a href="<?php echo $url; ?>dashboard/">Ga naar deze pagina</a>
          <h2>Netwerk</h2>
          Onder het kopje "Netwerk" kunt u alle instellingen en gegevens met betrekking tot het netwerk wijzigen en inzien.
          	<h3>Basis</h3>
          		<h4>Wi-Fi</h4>
          			Hier kunt u alle instellingen veranderen met betrekking tot het Wi-Fi netwerk. Onder de basis instellingen kunnen simpele dingen veranderd worden zoals de netwerknaam en het Wi-Fi wachtwoord. Ook is hier de mogelijkheid om de Wi-Fi uit of aan te zetten.
                <a href="<?php echo $url; ?>wifi/">Ga naar deze pagina</a>          	
            <h3>Geavanceerd</h3>
          		<h4>Port Forwarden</h4>
                Als u niet kan verbinden met een bepaalde applicatie of (game)server kunt u ervoor kiezen om een aantal ports te forwarden. Hierdoor wordt het mogelijk om de server wel te bereiken omdat deze er doorheen gelaten worden. Voor het vinden van ports voor uw applicatie bestaan er handige websites zoals <a href="http://portforward.com"/>deze</a>.
          		  <a href="<?php echo $url; ?>portforward/">Ga naar deze pagina</a>
              <h4>File Sharing</h4>
                Hier kunt u uw eigen file sharing server instellen. Via deze servers kunnen heel makkelijk bestanden uitgewisseld worden met andere apparaten op uw netwerk.
                <a href="<?php echo $url; ?>filesharing/">Ga naar deze pagina</a>          		
              <h4>DHCP</h4>
                Hier kunt u opgeven welke reeks van IP adressen uitgedeeld mogen worden aan nieuw verbonden apparaten. Daarnaast kunt u hier uw Domain Name Server instellen. Ook staat hier een overzicht van verbonden gebruikers met bijbehorende IP/MAC adressen
                 <a href="<?php echo $url; ?>dhcp/">Ga naar deze pagina</a>          		
              <h4>WAN</h4>
                Hier staat informatie over het netwerk waar de router mee verbonden is.
          		   <a href="<?php echo $url; ?>wan/">Ga naar deze pagina</a>
              <h4>Toegangs controle lijst</h4>
                Hier kunt u MAC adressen toevoegen aan een black of whitelist(hier aangeduid als zwarte en witte lijst). Een zwarte lijst zorgt ervoor dat MAC adressen die in deze lijst staan niet kunnen verbinden met uw netwerk. Een witte lijst zorgt ervoor dat de MAC adressen die in deze lijst staan wel toegang hebben tot uw netwerk.
          		   <a href="<?php echo $url; ?>acces/">Ga naar deze pagina</a>
              <h4>DMZ</h4>
                Als u er voor kiest om een DMZ host toe te voegen aan uw netwerk, komt er nog een extra beveiligingslaag om uw netwerk heen.  
                 <a href="<?php echo $url; ?>dmz/">Ga naar deze pagina</a>
          <h2>Telefonie</h2>
            Hierin kunt u uw VoIP instellen. U kan hier instellen of er vanaf uw huislijn doorverwezen wordt naar een extern mobiel nummer en ook kan u bepalen wat er met uw Ingoing en Outgoing calls gebeurd.
             <a href="<?php echo $url; ?>telefonie/">Ga naar deze pagina</a>
          <h2>Firewall</h2>
            Hier kunt u uw Firewall af en instellen. Firewall zorgt ervoor dat er een extra laag beveiliging over het netwerk heenkomt. Intrusion Detection laat zien of er aanvallen vanaf buitenaf richting uw netwerk zijn geweest.
               <a href="<?php echo $url; ?>firewall/">Ga naar deze pagina</a>
          <h2>Router instellingen</h2>
          Onder het kopje "Router Instellingen" kunt u alle instellingen en gegevens met betrekking tot het netwerk wijzigen en inzien.
              <h4>ECO modus</h4>
                Hier kunt u de ECO modus instellen. De ECO modus bestaat uit twee delen, een USB gedeelte en een Wi-Fi gedeelte. Voor beiden geldt hetzelfde. U kunt instellen waneer uw verbonden USB apparaat uit gaat en wanneer uw Wi-Fi uitgaat. Dit kan ingesteld worden per dag van de week of per week zelf.
          		    <a href="<?php echo $url; ?>eco/">Ga naar deze pagina</a>
              <h4>Web session timeout</h4>
                Hier kunt u de tijdsperiode instellen waarnaar de gebruiker op de webinterface opnieuw moet inloggen.
          		    <a href="<?php echo $url; ?>timeout/">Ga naar deze pagina</a>
              <h4>User management</h4>
                Hier kunt u het wachtwoord van de webinterface veranderen. Met dit account logt u in op het IP adres van deze router. Standaard zal deze "KPN" heten met als wachtwoord "admin"
          		    <a href="<?php echo $url; ?>dashboard/">Ga naar deze pagina</a>
              <h4>DLNA DNS</h4>
                Hier kunt u een naam opgeven voor uw Domain Name Server. Ook kunt u er media locaties aan linken.
          		    <a href="<?php echo $url; ?>dlna/">Ga naar deze pagina</a>
              <h4>SNTP</h4>
                Hier kunt u bekijken welke tijdzone gebruikt wordt door de router. Ook staan de specifikie tijdservers van de router hier vermeldt.
          		    <a href="<?php echo $url; ?>sntp/">Ga naar deze pagina</a>
              <h4>Opnieuw opstarten</h4>
                Via deze manier kunt u uw router opnieuw opstarten.
          		    <a href="<?php echo $url; ?>reboot/">Ga naar deze pagina</a>
              <h4>Back-Up</h4>
                Via deze optie kunt u een back-up maken van al uw instellingen. Ook kunt u hier een eerder gemaakte backup weer inladen.
          		    <a href="<?php echo $url; ?>backup/">Ga naar deze pagina</a>
              <h4>Fabrieksinstellingen</h4>
                Via deze optie kunt u de router terugzetten naar de fabrieksinstellingen. Let op! De router zal opnieuw opstarten en uw netwerk zal een paar minuten offline gaan.
                  <a href="<?php echo $url; ?>factory/">Ga naar deze pagina</a>  
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>