<?php
        include '../db/dbconnexion.php';
       // var_dump($_POST['valider']);
        //die ;
        if (isset($_POST['valider'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $message = nl2br(htmlspecialchars($_POST['message']));

                $insertMessage = $bdd->prepare('INSERT INTO messages(`pseudo`, `message`) VALUES(?,?)');
                $insertMessage->execute(array($pseudo, $message));
                
                   header("Location: ../index.php"); /* Redirection du navigateur */
            } 
             
        } else {
            echo "error";
        }

        exit();
        ?>