<?php include './partials/header.php' ?>

<?php 

include './db/dbconnexion.php';


$requete = $bdd->prepare('SELECT * FROM `messages`');
$requete -> execute();
$users = $requete -> fetchAll();




foreach ($users as $messages) {
   ?> <div class="row">
         <div class="col"><?=$messages['pseudo'];?></div>
      </div>
    
<?php } ?>

<?php include './partials/footer.php' ?>