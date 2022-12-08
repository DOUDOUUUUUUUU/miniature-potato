<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['age']))
{
    $sqlquery = 'INSERT INTO users (full_name, email, password, age) VALUES (?, ?, ?, ?)';
    $mysqlClient->prepare($sqlquery)->execute([$_POST['name'], $_POST['email'], $_POST['password'], $_POST['age']]);
}
else
    $errormessage = "Vous n'avez pas rempli les critères requis pour vous inscrire."


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('header.php'); ?>
        <?php if(isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-success" role="alert">
                Bonjour <?php echo $_POST['name']; ?> et bienvenue sur le site !
            </div>
        <?php endif; ?>
        <form action="index.php" method="POST"><button type="submit" class="btn btn-primary">Retour au menu</button></form>
    </div>
    </div>
    <?php include_once('footer.php'); ?>
</body>
</html>