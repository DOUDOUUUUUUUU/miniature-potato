<?php
try
{
	$mysqlClient = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$sqlQuery = 'SELECT title, author FROM recipes';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

foreach ($recipes as $recipe) {
?>
    <p><?php echo $recipe['title']; ?> par <?php echo $recipe['author']; ?></p><br>
<?php
}
?>