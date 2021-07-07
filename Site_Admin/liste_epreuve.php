<?php 
require_once('db_connexion.php');
$nom = $_GET['var1'];
$cette = $db->query("SELECT * FROM Matiere WHERE Matiere.nom='$nom'");
$tab = $cette->fetch(PDO::FETCH_ASSOC);
$lid = $tab['id_matiere'];
$lid2 =$tab['id_bac'];
$epreuves = $db->query("SELECT * FROM Epreuve WHERE Epreuve.id_matiere = '$lid'");
$akaza = $db->query("select * from Bac where Bac.id_bac='$lid2'");
$nom2 = $akaza->fetch(PDO::FETCH_ASSOC)['nom'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body style="background-color:#979A9A;">
      <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid ">
          <h1><a class="navbar-brand text-light" href="home.php">Bac++_AdMiN</a></h1>
          <h1><a class="navbar-brand text-light ml-auto" href="get.php?var1=<?php echo $nom; ?>&var2=<?php echo $nom2; ?>">Ajouter des epreuves en <?php echo $nom; ?> </a></h1>
        </div>
      </nav>
      <style>
          .ml-auto{
                padding:5px;
                margin-right:20px;
                background-color:#A6ACAF;
                border-radius:5px;
            }
      </style>
    <div class="row text-center">
        <div class="col">
            <h1>Liste des epreuves de <?php echo $_GET['var1']?></h1>
            <hr>
        </div>
    </div>
	<div class="container-fluid text-center">
	    <?php while($row = $epreuves->fetch(PDO::FETCH_ASSOC)) : ?>
	        <div class="row">
				<div class="col-lg-12 btn btn-dark" style="height:50px;margin:2px;">
				    <div class="row">
				        <?php $se = unserialize(base64_decode($row['liste_matiere']));?>
				        <div class="col-lg-10">
				            <button  type="button" class="col-lg-10 btn btn-dark boutton">
				                <b class="nom <?php echo $row['url_enonce']; ?>"><div class="row"><div class="col-lg-4"><?php echo " Nom : ".$row['nom']?></div><div class="col-lg-2"><?php echo " Date : ".$row['date']?></div><div class="col-lg-2"><?php echo " Groupe : ".$row['groupe']?></div><div class="col-lg-3"><?php echo " Séries : ";foreach($se as $value){echo $value.",";}?></div></div></b>
				            </button>
				        </div>
				        <!--<div class="row"></div>-->
				        
    				    <div class="col-lg-1">
    				       <button id="<?php echo $row['id_epreuve']; ?>"  type="button" class="btn btn-danger">
				                <b class="<?php echo $row['id_epreuve']; ?>">Supprimer</b>
				            </button>
    				    </div>
				   </div>
                    <script type="text/javascript">
                        var btn = document.getElementsByClassName('boutton');
                		for (var i = 0; i < btn.length; i++) {
                  			btn[i].addEventListener('click', ajout);
                		}
                		var sp = document.getElementById('<?php echo $row['id_epreuve']; ?>');//supprimer
                		sp.addEventListener('click', suppr);
                		function suppr(){
                		    var txt=false;
                		    if (confirm("Voulez-vous vraiment supprimer l'epreuve de <?php echo $row['nom']; ?>")) {
                                txt = true;
                                <?php
                                    $id_epreuve = $row['id_epreuve'];
                                    $ca = "DELETE FROM Epreuve WHERE Epreuve.id_epreuve ='$id_epreuve'";
                                    // echo "alban";
                                ?>
                                window.location.href = "liste_epreuve.php?var1=<?php echo $nom; ?>";
                            }
                            if(txt){
                                alert("Désolé c'est une fonctionnalité qui me fait chier depuis un bon moment retester uterieurement");
                            }
                		}
                        function ajout(){window.location.href = this.querySelector('b').classList[1];}
                    </script>
					<!-- echo json_encode($lmatiere->fetch(PDO::FETCH_ASSOC)); -->
				</div>
	        </div>
	    <?php endwhile; ?>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>
