<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">
          <h1>Eco Modus <?php info("ECO");?></h1>

          <div class="groupd-accordion">
            <section class="selected">
              <a href=#usb id="usb">
                <i class="fa fa-angle-double-down"></i> Wi-Fi
              </a>

              <div class="groupd-accordion-section">

                <h2>Wi-Fi</h2>

                <input type="checkbox"><span class="label-eco">Hele week </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Maandag </span><span class="label-eco2">Begin Tijd</span>  <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Dinsdag </span><span class="label-eco2">Begin Tijd</span>  <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Woensdag </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Donderdag </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Vrijdag </span><span class="label-eco2">Begin Tijd</span>  <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Zaterdag </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Zondag </span><span class="label-eco2">Begin Tijd</span>   <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>

              </div>

            </section>
            <section>
              <a href=#server id="server">
               <i class="fa fa-angle-double-down"></i> USB
              </a>

              <div class="groupd-accordion-section">

                <h2>USB</h2>

                <input type="checkbox"><span class="label-eco">Hele week </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Maandag </span><span class="label-eco2">Begin Tijd</span>  <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Dinsdag </span><span class="label-eco2">Begin Tijd</span>  <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Woensdag </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Donderdag </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Vrijdag </span><span class="label-eco2">Begin Tijd</span>  <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Zaterdag </span><span class="label-eco2">Begin Tijd</span> <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>
                <input type="checkbox"><span class="label-eco">Zondag </span><span class="label-eco2">Begin Tijd</span>   <input  type="time"><span class="label-eco2">Eind Tijd</span><input type="time" ></br>

              </div>

            </section>
          </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>