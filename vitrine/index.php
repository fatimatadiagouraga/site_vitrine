<?php
    $resultat=require_once("bakend.php");
  
    //recuperation des donnes de la base de donnees
    $recup=$pdo->prepare("SELECT * FROM personnage");
    $recup->execute();
    // var_dump($resultat); ce code permet de retourner tout les lignes de la base de donnes 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div style="background-color: rgb(77, 160, 149);">
            <img src="logo.png" alt="" >
            <span><strong>LES PERSONNAGES QUI ONT MARQUES LE DOMAINE NUMERIQUE</strong></span>
        </div>
    </nav>
    
    <div class="conteneur" id="div">
        <div class="row col-md-12">
           <?php while($historique=$recup->fetch()){ ?> 
                <div class=" col-md-4 my-5  " >
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: 22rem;">
                        <a href="histoire.php?id=<?= $historique['id'] ?>" >
                        <img src="<?= $historique['nom_image'] ?>" alt=""  class="card-img-top" style="height: 300px;" >
                        </a>
                        <div class="card-body text-center" >
                            <h5 class="card-title"> <?= $historique['nom'] ?></h5>
                            <p class="card-text"><?= $historique['petit_apercu'] ?></p>
                                <a href="histoire.php?id=<?= $historique['id'] ?>" class="btn btn-success" >Voir plus</a>
                        </div>
                    </div>
                </div>
            <?php } ?> 
        </div>
    </div>
   
</body>
</html>