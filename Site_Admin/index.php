<?php require_once('db_connexion.php');?>

<?php while($row1 = $users->fetch(PDO::FETCH_ASSOC)) : ?>
    <?php
        array_push($usersname,$row1['username']);
        array_push($userspass,$row1['password']);
    ?>
<?php endwhile; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>
    <body style="background-color:#979A9A;">
        <style media="screen">
            body{
                background-image: url("https://images4.alphacoders.com/685/685072.jpg");
            }
            .in{
                width:30%;
                margin-left:35%;
                margin-top: 1%;
            }
            .row{
                text-align:center;
                margin-top: 10%;
            }
            .btn{
                width:30%;
                margin-top: 1%;
            }
            .sk{
                width:25%;
            }
        </style>
        <script type="text/javascript">window.location.href = "add_matiere.php?var1=" + this.querySelector(".nom").innerText;</script>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <img src="https://media4.giphy.com/media/fnuSiwXMTV3zmYDf6k/giphy.gif" alt="gif" class="sk rounded-circle">
                </div>
                <form action="" method="post" class="formm">
                    <input type="text" name="username" class="form-control in" placeholder="username"/>
                    <input type="password" name="password" class="form-control in" placeholder="password"/>
                    <input type="submit" name="connexion" class="btn btn-dark ajout" value="connexion"/>
                    <?php
                        if(isset($_POST['connexion'])){
                            foreach ($usersname as $value) {
                                if($value==$_POST['username']){
                                    foreach ($userspass as $value2) {
                                        $aaa = true;
                                        if(array_search($value,$usersname,true)==array_search($value2,$userspass,true)){
                                            echo '<script type="text/javascript">window.location.href = "home.php?var1='.$value.'"</script>';
                                            $aaa=false;
                                        }
                                    }
                                }
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
