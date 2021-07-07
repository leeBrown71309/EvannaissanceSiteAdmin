<?php require_once('db_connexion.php');?>

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
        </div>
      </nav>
    <div class="row text-center">
        <div class="col">
            <h1>Liste des Bacs</h1>
            <hr>
        </div>
    </div>
	<div class="container text-center">
	    <?php while($row = $lbac->fetch(PDO::FETCH_ASSOC)) : ?>
	        <div class="row">
				<div class="col-lg-12 btn btn-dark boutton" style="margin:20px;">
				    <button  type="button" class="btn btn-dark boutton">
				      <h1> <b>Bac</b> <b class="nom"><?php echo htmlspecialchars($row['nom']); ?></b> </h1>
				    </button>
                    <script type="text/javascript">
                        var btn = document.getElementsByClassName('boutton');
                		for (var i = 0; i < btn.length; i++) {
                  			btn[i].addEventListener('click', ajout);
                		}
                        function ajout(){window.location.href = "ajout_serie.php?var1=" + this.querySelector('.nom').innerText;}
                    </script>
					<!-- echo json_encode($lmatiere->fetch(PDO::FETCH_ASSOC)); -->
				</div>
	        </div>
	    <?php endwhile; ?>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>
