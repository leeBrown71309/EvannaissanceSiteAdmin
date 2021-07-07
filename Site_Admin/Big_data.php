<?php
require_once('db_connexion.php');
$tableau_epreuve = array();
$az = $db->query("select * from Bac");
$data = array();
?>
<?php while($row1 = $az->fetch(PDO::FETCH_ASSOC)) : ?>
    <?php
        $nom = $row1['nom'];
        $r1 = $db->query("select Matiere.nom,Matiere.id_bac,Matiere.id_matiere from Matiere,Bac where Bac.nom='$nom' and Bac.id_bac=Matiere.id_bac");
        $q = array();
        while($row2 = $r1->fetch(PDO::FETCH_ASSOC)) :
            $nom2 = $row2['nom'];
            $cette = $db->query("SELECT * FROM Matiere WHERE Matiere.nom='$nom2'");
            $tab = $cette->fetch(PDO::FETCH_ASSOC);
            $lid = $tab['id_matiere'];
            $r2 = $db->query("select * from Epreuve where Epreuve.id_matiere='$lid'");
            $aze = array();
            $eza = array();
            while($ow3 = $r2->fetch(PDO::FETCH_ASSOC)) :
                $decodage = unserialize(base64_decode($ow3['liste_matiere']));
                $ow3['liste_matiere']=$decodage;
                $aze[]=$ow3;
            endwhile;
            array_multisort( array_column( $aze, 'date' ), $aze );
            $eza = array_reverse($aze);
            $q[$nom2] = $eza;
        endwhile;
        $data[$nom] = $q;
        array_push($tableau_epreuve,$row1);
    ?>
<?php endwhile; ?>
<?php echo json_encode($data);?>