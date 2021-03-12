<?php
/***
 * Eine Web Telefonliste mit Such- und Filterfunktionen.
 * @copyright Stadt Kamen 2021
 */
?>
<!DOCTYPE html>
<html lang="de">
<meta charset="UTF-8">
<title>Stadt Kamen Telefonliste</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- Stylesheets -->
<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap-utilities.min.css">
<link rel="stylesheet" href="./assets/css/style.css">

<!-- JavaScript-->
<script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<body>

    <!-- wrapper container -->
    <div class="wrapper">
        <div class="container-fluid">

            <!-- Header -->
            <div class="jumbotron jumbotron-fluid header--container">
                <div class="container">
                    <h1 class="display-4">Telefonliste</h1>
                    <p class="lead">Stadt Kamen</p>
                </div>
            </div>

            <!-- actions -->
            <div class="row mt-4">

                <!-- Search -->
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" placeholder="Suche..." class="form-control" id="search">
                    </div>
                </div>

                <!-- Accordion -->
                <div class="col-md-3">
                    YEE
                </div>

                <!-- Dropdown -->
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                </div>

                <!-- Count Searchresults -->
                <div class="col-md-3">

                </div>
            </div>

            <!-- Grid -->
            <?php for($i = 0; $i <= 10; $i++) { ?>
            <div class="row mb-4 mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>

    </div>

</body>
</html>
