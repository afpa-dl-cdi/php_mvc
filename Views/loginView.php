<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <h1>Vue login</h1>
        <form action="index.php?controller=verifuser" method="POST">
            <input type="text" name="login" value="" placeholder="Votre login">
            <input type="password" name="mdp" value="" placeholder="Votre mdp">
            <button type="submit">Connexion</button>
        </form>
    </body>
</html>