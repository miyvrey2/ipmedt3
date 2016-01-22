<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

          <h1>Firewall</h1>

          <div class="groupd-accordion">
            <section class="selected">
              <a href=#server id="server">
                <i class="fa fa-angle-double-down"></i> Firewall
              </a>

              <div class="groupd-accordion-section">

                <h2>firewall <?php info("Firewall"); ?></h2>
                <form>

                  <label for="redtest">Aan</label>
                  <input type="radio" id="redtest" name="radiotest" value="red" checked>

                  <label for="bluetest">Uit</label>
                  <input type="radio" id="bluetest" name="radiotest" value="blue">

                </form>

                <label>Beschermingsniveau</label>
                <select name="FirewallLevel" required readonly>
                  <option selected value="Hoog">Hoog</option>
                  <option value="Gematigd">Gematigd</option>
                  <option value="Laag">Laag</option>
                </select>

              </div>

            </section>

            <section>
              <a href=#intrusion id="intrusion">
                <i class="fa fa-angle-double-down"></i> Intrusion Detection
              </a>

              <div class="groupd-accordion-section">

                <h2>Intrusion Detection <?php info("Intrusion"); ?></h2>

                <form>

                  <label for="redtest">Aan</label>
                  <input type="radio" id="redtest" name="radiotest" value="red" checked>

                  <label for="bluetest">Uit</label>
                  <input type="radio" id="bluetest" name="radiotest" value="blue">

                </form>

                <div class="table-responsive">
                  <table id="Intrusion" class="table table-hover table-bordered col-md-3">
                    <tr>
                      <th><h5>Intrusion Name</h5></td>
                      <th><h5>Count</h5></td>
                    </tr><tr>
                      <td>Fraggle_broadcast_attack <?php info("Fraggle"); ?></td>
                      <td>0</td>
                    </tr><tr>
                      <td>Tcp_syn_flood <?php info("TCP"); ?></td>
                      <td>0</td>
                    </tr><tr>
                      <td>Ping_of_death <?php info("PING"); ?></td>
                      <td>0</td>
                    </tr><tr>
                      <td>Land_attack <?php info("LAND"); ?></td>
                      <td>0</td>
                    </tr><tr>
                      <td>Tear_drop_attack <?php info("TEAR"); ?></td>
                      <td>0</td>
                    </tr>
                  </table>
                </div>

              </div>

            </section>
          <!-- <div style="display:none"><iframe width="420" height="315" src="https://www.youtube.com/embed/uziJVhhb3do?autoplay=1" frameborder="0" allowfullscreen></iframe></div> -->
          </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>