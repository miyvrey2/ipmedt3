<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" id="content">
		   
          <h3 id="content">Welkom in uw Experiabox!</h3> 
          <h5>Op deze pagina kunt u algemene informatie bekijken over uw thuisnetwerk, voor hulp bij het instellen van uw router, klik dan <a href="<?php echo $url; ?>help/">hier</a>.</h5>
		
        </div>
    </div>
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
  	   <script type="text/javascript">
        google.charts.setOnLoadCallback(drawChart);
        google.charts.load('current', {'packages':['table', 'gauge']});
        function drawChart() {

          var data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Wi-Fi Usage', 10],
            ['Eco modus', 30],
            ['Uptime', 100]
          ]);

          var options = {
            width: 400, height: 120,
            greenFrom: 90, greenTo: 100,
            yellowFrom:75, yellowTo: 90,
            minorTicks: 5
          };

          var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

          chart.draw(data, options);

          setInterval(function() {
            data.setValue(0, 1, 10 + Math.round(90 * Math.random()));
            chart.draw(data, options);
          }, 13000);
          setInterval(function() {
            data.setValue(1, 1, 10 + Math.round(90 * Math.random()));
            chart.draw(data, options);
          }, 5000);

          
        }
       </script>
       <div id="chart_div" style="width: 400px; height: 120px;"></div>
      </div>
       <div class="row">
          <h5>Netwerknaam</h5> <b>Wifi, Niet In De Trein</b>
          <h5>Wachtwoord</h5> <b>F639Fhl917</b> 
          <h5>Beveiligingstype</h5> <b>WPA/WPA2</b>
          <h5>Aantal verbonden gebruikers</h5> <b>4 </b>
      </div>
    </div>
    <div class="row">
		    <div class="table-responsive col-md-10 col-md-offset-1">
                <table id="Intrusion" class="table table-hover table-bordered col-md-3">
                  <tr>
                    <th><h5>IP Adres</h5></td>
                    <th><h5>Naam Apparaat</h5></td>
                    <th><h5>Verbonden</h5
                  </tr><tr>
                    <td>192.168.178.1</td>
                    <td>AIR DUST</td>
                    <td><i class="fa fa-check fa-2x"></i></td>
                  </tr><tr>
                    <td>192.168.178.2</td>
                    <td>Cpt.Obvious-PC</td>
                    <td><i class="fa fa-check fa-2x"></i></td>
                  </tr><tr>
                    <td>192.168.178.3</td>
                    <td>BozeBuurman</td>
                    <td><i class="fa fa-check fa-2x"></i></td>
                  </tr><tr>
                    <td>192.168.178.4</td>
                    <td>Samantha-PC</td>
                    <td><i class="fa fa-check fa-2x"></i></td>
                </table>
              </div>
            </div>
		 

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>