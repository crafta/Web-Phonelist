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
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap-utilities.min.css">
<link rel="stylesheet" href="/assets/css/style.css">

<!-- JavaScript-->
<script src="/assets/vendor/jQuery/js/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap-4.5.3.js" crossorigin="anonymous"></script>

<body>

    <!-- wrapper container -->
    <div class="wrapper">
        <div class="container-fluid">

            <!-- Header -->
            <div class="jumbotron jumbotron-fluid header--container">
                <div class="container">
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

                <!-- Abteilungen -->
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle filterButton" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filtern nach
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">10.3 Musik</a>
                            <a class="dropdown-item" href="#">10.2 Feuerwehr</a>
                            <a class="dropdown-item" href="#">10.1 Standesamt</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown -->
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle sortButton" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sortieren nach
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Name</a>
                            <a class="dropdown-item" href="#">Telefonnummer</a>
                            <a class="dropdown-item" href="#">Abteilung</a>
                        </div>
                    </div>
                </div>

                <!-- Count Searchresults -->
                <div class="col-md-3">
                    <div class="searchResults">
                        <div>69 Suchergebnisse</div>
                    </div>
                </div>
            </div>

            <!-- Grid -->
            <div id="gridList" class="mt-4">


                <?php for($i = 0; $i <= 5; $i++) { ?>
                    <div class="row mb-3">

                        <?php for($j = 0; $j <= 2; $j++) { ?>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Uvuvwevwevwe Osas</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">+49 (0) 1337 69 69</h6>
                                        <p class="card-text">Irgendwelche weiteren Informationen hier.</p>
                                        <a href="#" class="card-link">Anrufen</a>
                                        <a href="#" class="card-link">E-Mail senden</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                <?php } ?>

            </div>

        </div>

    </div>

</body>
</html>
