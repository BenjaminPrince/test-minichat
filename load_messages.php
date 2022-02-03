<?php include './partials/header.php' ?>

<?php
    require_once './db/dbconnexion.php';
    $recupeMessages = $bdd-> query ('SELECT * FROM messages  ORDER BY id DESC LIMIT 0, 10' );
    //$reversed = array_reverse($recupeMessages -> fetch());
    $messages = $recupeMessages->fetchAll();
    $reversed = array_reverse($messages);
    foreach ($reversed as $message) {
        ?>
        <div class="message">
            <h5><?= $message['pseudo']." :";  ?> [<?php echo $message['dateHour'] ;?>]</h5>
            <h6><?= $message['message']; ?></h6>
        </div>
        <?php
    }
?>



<?php include './partials/footer.php' ?>