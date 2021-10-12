<?php
    $resultat=require_once("bakend.php");
    $id = $_GET['id'];
    $req=$pdo->prepare("SELECT * FROM personnage WHERE id=$id");
    $req->execute();
    $test=$req->fetch(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="histoire.css">
</head>
<body>
        <h1><?= $test['nom'] ;?></h1>
        <img src="<?= $test['nom_image'] ;?>" alt="" class="img-thumbnail" style="width: 200px; height: 200px;">
        <div class="conteneur ">
            <?= $test['historique'] ;?>
        </div>
             
    </div>
   
    
</body>
</html>