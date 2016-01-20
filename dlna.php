<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

          <h3>DLNA DNS</h3>
          Aanzetten <input type="checkbox"></input>
          <form>
            DMS Naam <?php info("DMS");?><input type="text"></input></br>
            Media locatie 1 <input type="text" ></input><button>Bladeren</button></br>
            Media locatie 2 <input type="text" ></input><button>Bladeren</button></br>
            Media locatie 3 <input type="text" ></input><button>Bladeren</button></br>
            Media locatie 4 <input type="text" ></input><button>Bladeren</button>
          </form>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>