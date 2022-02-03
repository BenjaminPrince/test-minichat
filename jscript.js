fetch('dbconnexion.php')
    .then(reponse => reponse.json())
    .then(reponse2=> console.log(reponse2))