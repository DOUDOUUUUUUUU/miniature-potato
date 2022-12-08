<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Centre d'aide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <?php include_once('header.php'); ?><br>
        <h1>Centre d'aide</h1>
        <div class="card">
            <div class="card-body">
                <form action="submit_help.php" method="POST" enctype="multipart/form-data">
                    <h2>Report de bug</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                        <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
                    </div>
                    <div class="mb-3">
                        <label for="screenshot" class="form-label">Votre capture d'écran</label>
                        <input type="file" class="form-control" id="screenshot" name="screenshot" />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>