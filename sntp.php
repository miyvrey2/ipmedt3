<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>SNTP <?php info("SNTP");?></h1>

            <label for="">Huidige datum en tijd:</label>
            <p id="tijd"></p>
            <label for="">Tijd zone</label>
            <select>
                <option selected required readonly>(GMT+01:00)Amsterdam, Berlin, Rome, Stockholm</option>
            </select>

            <label for="">NPT Server Address 1 <?php info("NPT");?> </label>
            <input type="text" value="time.kpn.net" required readonly class="form-control">

            <label for="">NPT Server Address 2</label>
                <input type="text" value="1.nl.pool.ntp.org" required readonly class="form-control">

            <label for="">NPT Server Address 3</label>
                <input type="text" value="ntp1.nl.net" required readonly class="form-control">

            <label for="">NPT Server Address 4</label>
                <input type="text" value="0.nl.pool.ntp.org" required readonly class="form-control">

            <label for="">NPT Server Address 5</label>
                <input type="text" value="ntp0.nl.net" required readonly class="form-control">

            <script>
                document.getElementById("tijd").innerHTML = Date();
            </script>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>