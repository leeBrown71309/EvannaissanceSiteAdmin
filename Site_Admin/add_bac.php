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
          </div>
        </nav>
        <div class="container-fluid" style="margin:10px;height:100px;">
            <h2>Ajout de Bac</h2>
            <hr>
        </div>
        <div class="text-center" style="padding:5%;color:white;">
            <form class="dfg" action="" method="post">
                <div class="row">
                    <div class="ff col-lg-3 col-md-3 col-sm-12 text-center">
                        <h4><label>Nom du bac:</label></h4>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <input type="text" name="bac" class="form-control" placeholder="Saisir le nom du bac"/>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <input type="submit" name="btn_ajout" class="btn col-lg-9 col-md-9 col-sm-12 btn-primary ajout" value="Enregister"/>
                    </div>
                </div>
            </form>
        </div>
        <?php
            if(isset($_POST['btn_ajout'])){
                $bac = $_POST['bac'];
                echo $bac;
                $sql = "INSERT INTO Bac (id_bac, nom) VALUES (NULL, '$bac')";
                $query = $db->prepare($sql);
                $query->execute();
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
