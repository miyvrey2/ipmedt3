<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

          <h3>SNTP</h3>
          Huidige datum en tijd: <p id="tijd"></p>
          Tijd zone <select><option selected required readonly>(GMT+01:00)Amsterdam, Berlin, Rome, Stockholm</option></select></br></br>

          <p>NPT Server Address 1 <input type="text" value="time.kpn.net" required readonly></input></br>
          NPT Server Address 2 <input type="text" value="1.nl.pool.ntp.org" required readonly></input></br>
          NPT Server Address 3 <input type="text" value="ntp1.nl.net" required readonly></input></br>
          NPT Server Address 4 <input type="text" value="0.nl.pool.ntp.org" required readonly></input></br>
          NPT Server Address 5 <input type="text" value="ntp0.nl.net" required readonly></input></p>

          <script>
          document.getElementById("tijd").innerHTML = Date();
          </script>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>