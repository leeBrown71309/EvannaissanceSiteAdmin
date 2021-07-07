<?php require_once('db_connexion.php');?>

<?php while($row1 = $lbac->fetch(PDO::FETCH_ASSOC)) : ?>
    <?php array_push($les_bacs,$row1['nom']);?>
<?php endwhile; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
    <body style="background-color:#979A9A;">
        <nav class="navbar navbar-light bg-dark">
          <div class="container-fluid ">
            <h1><a class="navbar-brand text-light" href="home.php">Bac++_AdMiN</a></h1>
          </div>
        </nav>
        <div class="row text-center">
            <div class="col">
                <h1>Ajout de matieres</h1>
                <hr>
            </div>
        </div>

        <form action="" method="post">
            <div class="tt row text-center">
                <div class="ff col-lg-3 col-md-3 col-sm-12 text-center">
                    <h2 class="text-light"><label>Nom de la matiere:</label></h2>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <input type="text" name="nom" class="form-control" placeholder="Saisir nom de la matiere"/>
                </div>
                <div class="ff col-lg-3 col-md-3 col-sm-12 text-center">
                    <h2 class="text-light"><label>Description:</label></h2>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <input type="text" name="description" class="form-control" placeholder="Saisir la description de la matiere"/>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <input type="submit" name="btn_ajout" class="btn col-lg-12 col-md-12 col-sm-12 btn-dark ajout" value="Enregister"/>
                </div>
            </div>
           <?php
                if(isset($_POST['btn_ajout'])){
                    $nom = $_POST['nom'];
                    $des = $_POST['description'];
                    $nom_bac = $_GET["var1"];
                    $sql = $db->query("SELECT id_bac FROM Bac WHERE nom='$nom_bac'");
                    $ab = $sql->fetch(PDO::FETCH_ASSOC);
                    $id_bac = $ab['id_bac'];
                    $query = $db->prepare("INSERT INTO Matiere(id_matiere,id_bac,nom,description) VALUES(NULL,'$id_bac','$nom','$des')");
                    $query->execute();
                }
           ?>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>
