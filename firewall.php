<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

        <h3>Firewall</h3>
          <form>

            <input type="radio" id="redtest" name="radiotest" value="red" checked>
            <label for="redtest">Aan</label>

            <br>
            <input type="radio" id="bluetest" name="radiotest" value="blue">
            <label for="bluetest">Uit</label>

          </form>

          <select name="FirewallLevel" required readonly>
            <option selected value="Hoog">Hoog</option>
            <option value="Gematigd">Gematigd</option>
            <option value="Laag">Laag</option>
          </select>

        <h3>Intrusion Detection</h3>
          <form>

            <input type="radio" id="redtest" name="radiotest" value="red" checked>
            <label for="redtest">Aan</label>

            <br>
            <input type="radio" id="bluetest" name="radiotest" value="blue">
            <label for="bluetest">Uit</label>

          </form>

          <div class="table-responsive">
            <table id="Intrusion" class="table table-hover table-bordered col-md-3">
              <tr>
                <th><h5>Intrusion Name</h5></td>
                <th><h5>Count</h5></td>
              </tr><tr>
                <td>Fraggle_broadcast_attack</td>
                <td>0</td>
              </tr><tr>
                <td>Tcp_syn_flood</td>
                <td>0</td>
              </tr><tr>
                <td>Ping_of_death</td>
                <td>0</td>
              </tr><tr>
                <td>Land_attack</td>
                <td>0</td>
              </tr><tr>
                <td>Tear_drop_attack</td>
                <td>0</td>
              </tr>
            </table>
          </div>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>