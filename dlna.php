<?php require_once('components/head.php'); ?>
<?php require_once('components/navigatie.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" id="content">

            <h1>DLNA DNS</h1>
            <label for="">Aanzetten</label>
            <br />
            <input type="checkbox">
            <br />

            <form>
                <label for="">DMS Naam <?php info("dlna");?></label>
                <input type="text" class="form-control">

                <label for="">Media locatie 1</label>
                <input type="text" class="form-control"><button>Bladeren</button>

                <label for="">Media locatie 2</label>
                <input type="text" class="form-control"><button>Bladeren</button>

                <label for="">Media locatie 3</label>
                <input type="text" class="form-control"><button>Bladeren</button>

                <label for="">Media locatie 4</label>
                <input type="text" class="form-control"><button>Bladeren</button>
            </form>

        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>