<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un email par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('leo2a2b@gmail.com','Envoi depuis page Contact', $_POST['msg'], 'From : ' . $_POST['email']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé !</p>';
    }
    ?>
</body>

</html>