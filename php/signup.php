

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
        <div class="container">
        <form action="signupsuccess.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="name" class="form-control" id="name" name="name" aria-describedby="email-help" placeholder="Jean-Michel">
                <div id="email-help" class="form-text">Nom visible par tout le monde.</div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
                <div id="email-help" class="form-text">L'email utilisé pour la création de compte.</div>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="age" class="form-control" id="age" name="age">
                <div id="email-help" class="form-text">Votre age.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                <div id="email-help" class="form-text">Ne jamais le divulguez</div>
            </div>
            <button type="submit" class="btn btn-primary">Sign up!</button>
        </form>
    </div>
    </div>
    <?php include_once('footer.php'); ?>
</body>
</html>