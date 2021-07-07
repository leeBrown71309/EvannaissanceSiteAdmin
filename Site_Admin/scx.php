<?php
require_once('db_connexion.php');
$tableau_epreuve = array();
$az = $db->query("select * from Bac");
$data = array();
?>
<?php while($row1 = $az->fetch(PDO::FETCH_ASSOC)) : ?>
    <?php
        $nom = $row1['nom'];
        $r1 = $db->query("select Matiere.nom,Matiere.id_bac,Matiere.description,Matiere.id_matiere from Matiere,Bac where Bac.nom='$nom' and Bac.id_bac=Matiere.id_bac");
        $p = array();
        while($row2 = $r1->fetch(PDO::FETCH_ASSOC)) :
            $nom2 = $row2;
            $p[] = $nom2;
        endwhile;
        $data[$nom] = $p;
        array_push($tableau_epreuve,$row1);
    ?>
<?php endwhile; ?>

<?php
echo json_encode($data);
?>