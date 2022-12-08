<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    $errorMessage = 'Erreur : '.$e->getMessage();
}

if (isset($_POST['email']) &&  isset($_POST['password'])) {
    $sqlquery = 'SELECT email FROM users';
    $email = $mysqlClient->prepare($sqlquery)->execute();
    $sqlquery = 'SELECT password FROM users';
    $password = $mysqlClient->prepare($sqlquery)->execute();
    foreach ($password as $passwords) {
        if (
            $passwords === $_POST['email'] &&
            $email === $_POST['password']
        ) {
            $_SESSION['LOGGED_USER'] = $user['email'];
        }
    }
}
?>

<?php if(!isset($_SESSION['LOGGED_USER'])): ?>

<form action="index.php" method="post">
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<form action="signup.php" method="POST"><button type="submit" class="btn btn-primary">Sign up</button></form><br>
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour et bienvenue sur le site <?php echo $_SESSION['LOGGED_USER']; ?>
    </div>
<?php endif; ?>