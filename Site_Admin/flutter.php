<?php
require_once('db_connexion.php');
$dd = "SELECT * FROM Matiere WHERE Matiere.id_bac='13'";
$df = $db->query($dd);
$tableau_de_matiere = array();
?>

<?php while($row1 = $df->fetch(PDO::FETCH_ASSOC)) : ?>
    <?php
        array_push($tableau_de_matiere,$row1);
    ?>
<?php endwhile; ?>

<?php
echo json_encode($tableau_de_matiere);
?>