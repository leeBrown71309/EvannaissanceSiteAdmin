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
				<div class="col-lg-12 btn btn-dark" style="margin:20px;">
					<h1>Bac </h1><h1 class="boutton"><?php echo htmlspecialchars($row['nom']); ?></h1>
				</div>
	        </div>
	    <?php endwhile; ?>
	</div>
	<!---->
	<script type="text/javascript">
		var btn = document.getElementsByClassName('boutton');
		for (var i = 0; i < btn.length; i++) {
  			btn[i].addEventListener('click', updateBtn);
		}
		function updateBtn() {
		    // + "&var2=" + caa2
		    var caa = this.innerText;
			window.location.href = "lmatieres.php?var1=" + caa;
		}
// 		var enr = document.querySelector(".save").addEventListener('click',ajout);
	</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
