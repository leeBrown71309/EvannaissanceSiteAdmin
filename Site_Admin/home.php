<?php require_once('db_connexion.php');?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>
    <body style="background-color:#979A9A;">
        <nav class="navbar navbar-light bg-dark">
          <div class="container-fluid ">
            <h1><a class="navbar-brand text-light" href="home.php">Bac++_AdMiN</a></h1>
            <div class="row">
                <div class="col"><h1><a class="navbar-brand text-light m" href="add_serie.php">Ajouter une serie</a></h1></div>
                <div class="col"><h1><a class="navbar-brand text-light m2" href="liste_matiere.php">Liste des epreuves</a></h1></div>
            </div>
          </div>
        </nav>
        <style media="screen">
            .m{
                padding:5px;
                background-color:#A6ACAF;
                border-radius:5px;
            }
            .m2{
                padding:5px;
                background-color:#A6ACAF;
                border-radius:5px;
            }
        </style>
        <div class="container-fluid text-center">
            <h1>Interface admin</h1>
            <hr>
        </div>
        <a href="epreuve.php"><div class="container-fluid btn btn-dark col-lg-12 text-center" style="margin:10px;height:100px;">
            <h2>Ajouter des epreuves</h2>
        </div></a>

        <a href="ajout_matiere.php">
            <div class="container-fluid btn btn-dark col-lg-12 text-center" style="margin:10px;height:100px;">
                <h2>Ajouter des matières</h2>
            </div>
        </a>
        <a href="add_bac.php">
            <div class="container-fluid btn btn-dark col-lg-12 text-center" style="margin:10px;height:100px;">
                <h2>Ajouter des Bacs</h2>
            </div>
        </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
