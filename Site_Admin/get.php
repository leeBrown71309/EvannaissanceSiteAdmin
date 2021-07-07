<?php
require_once('db_connexion.php');
$dd = "SELECT liste_matiere FROM Epreuve WHERE id_epreuve='126'";
$df = $db->query($dd);
$dff = $df->fetch(PDO::FETCH_ASSOC);
$tt = unserialize(base64_decode($dff['liste_matiere']));
$la_matiere = $_GET['var1'];
$var1 = $_GET['var2'];
$abc = $db->query("SELECT * FROM Matiere WHERE Matiere.nom='$la_matiere'");
$abc20 = $abc->fetch(PDO::FETCH_ASSOC);
$lid = $abc20['id_bac'];
$sds = $db->query("select Bac.id_bac from Bac where Bac.nom='$var1'");
$iddd = $sds->fetch(PDO::FETCH_ASSOC)['id_bac'];
$hgh = "SELECT * FROM Serie WHERE Serie.id_bac='$iddd'";
$de_ce_bac = $db->query($hgh);
$tfg = array();

?>

<?php while($row3 = $de_ce_bac->fetch(PDO::FETCH_ASSOC)) : ?>
    <?php array_push($tfg,$row3['nom']);?>
<?php endwhile; ?>

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
            <h1><a class="navbar-brand text-dark ml-auto" href="liste_epreuve.php?var1=<?php echo $_GET['var1']?>">Listes des epreuves de <?php echo $_GET["var1"]?></a></h1>
          </div>
        </nav>
        <style media="screen">
            .ff{
                /* border: 1px  gray; */
                margin-bottom:5px;
            }
            .tt{
                text-align:center;
                margin-bottom: 10px;
            }
            .ml-auto{
                padding:5px;
                margin-right:20px;
                background-color:#A6ACAF;
                border-radius:5px;
            }
        </style>
        <!-- pop-up -->
        <div class="text-center">
            <h1>Ajout d'epreuves de <?php echo $_GET["var1"]?></h1>
            <hr>
        </div>
        <div class="r" style="margin:20px;">
            <form action="" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="tt row text-center">
                            <div class="ff col-lg-3 col-md-3 col-sm-12 text-center">
                                <h3 class = "text-dark"><label>Url de l'énoncé:</label></h3>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="Url" name="url_enonce" class="form-control" placeholder="Saisir url de l'énoncé"/>
                            </div>
                        </div>
                        <!--  -->

                        <div class="tt row text-center">
                            <div class="ff col-lg-3 col-md-3 col-sm-12 text-center">
                                <h3 class = "text-dark"><label>Date de l'epreuve:</label></h3>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="number" name="date" class="form-control" placeholder="Saisir la date de l'epreuve"/>
                            </div>
                        </div>
                        <!--  -->
                        <div class="tt row text-center">
                            <div class="ff col-lg-3 col-md-3 col-sm-12 text-center">
                                <h3 class = "text-dark" ><label>Nom de l'epreuve:</label></h3>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" name="nom" class="form-control" placeholder="Saisir nom de l'épreuve"/>
                            </div>
                        </div>
                        <!--  -->
                        <div class="tt row text-center">
                            <div class="ff col-lg-3 col-md-3 col-sm-12 text-center">
                                <h3 class = "text-dark"><label>Url du corrigé:</label></h3>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="Url" name="url_corrige" class="form-control" placeholder="Saisir l'url du corrigé"/>
                            </div>
                        </div>
                        <div class="tt row text-center">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <h3 class = "text-dark">Séries de l'epreuve:</h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <select name="size">
                                    <option value=""></option>
                                    <?php foreach ($tfg as $value) {echo "<option value='$value'>$value</option>";}?>
                               </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <select name="size1">
                                    <option value=""></option>
                                    <?php foreach ($tfg as $value) {echo "<option value='$value'>$value</option>";}?>
                               </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <select name="size2">
                                    <option value=""></option>
                                    <?php foreach ($tfg as $value) {echo "<option value='$value'>$value</option>";}?>
                               </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <select name="size4">
                                    <option value=""></option>
                                    <?php foreach ($tfg as $value) {echo "<option value='$value'>$value</option>";}?>
                               </select>
                            </div>
                        </div>
                        <div class="tt row text-center">
                          <div class="col-lg-3 col-md-3 col-sm-12">
                              <h3 class = "text-dark">quel groupe?:</h3>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12">
                              <select name="size3">
                                  <option value=""></option>
                                  <option value=1>groupe 1</option>
                                  <option value=2>groupe 2</option>
                             </select>
                          </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="btn_ajout" class="btn col-lg-12 col-md-12 col-sm-12 btn-dark ajout" value="Enregister"/>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                    document.querySelector('.ajout').addEventListener('click',ajout);
                    function ajout(){
                        window.location.href = "get.php?var1=" + var1;
                    }
                </script>
                <?php
                if(isset($_POST['btn_ajout'])){
                    if(isset($_GET["var1"])){
                        $tableau = array();
                        $je_ne_fais_rien_comme_variable = 0;
                        if(isset($_POST['size'])){empty($_POST['size']) ? $je_ne_fais_rien_comme_variable = 0 : array_push($tableau,$_POST['size']);}
                        if(isset($_POST['size1'])){empty($_POST['size1']) ? $je_ne_fais_rien_comme_variable = 0 : array_push($tableau,$_POST['size1']);}
                        if(isset($_POST['size2'])){empty($_POST['size2']) ? $je_ne_fais_rien_comme_variable = 0 : array_push($tableau,$_POST['size2']);}
                        if(isset($_POST['size4'])){empty($_POST['size4']) ? $je_ne_fais_rien_comme_variable = 0 : array_push($tableau,$_POST['size4']);}
                        $groupe = $_POST['size3'];
                        $arr =base64_encode(serialize($tableau));
                        $trouver= $_GET["var1"];
                        $ls = $db->query("SELECT Matiere.id_matiere FROM Matiere WHERE Matiere.nom='$trouver'");
                        $ab = $ls->fetch(PDO::FETCH_ASSOC);
                        $id = $ab['id_matiere'];
                        $nom = $_POST['nom'];
                        $url_enconce = $_POST['url_enonce'];
                        $date = $_POST['date'];
                        $url_corrige = $_POST['url_corrige'];
                        $sql = "INSERT INTO Epreuve(id_matiere,nom,url_enonce,date,url_corrige,liste_matiere,groupe) VALUES('$id','$nom','$url_enconce','$date','$url_corrige','$arr','$groupe')";
                        $query = $db->prepare($sql);
        			    $query->execute();
                    }
                }
                ?>
            </form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
