<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Thanks !</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 bg-light">
                <?php
                echo "Merci <strong>" . $_POST['firstname'] . ' ' . $_POST['lastname'] . "</strong> de nous avoir contacté à propos de <strong>" . '"' . $_POST['sujet'] . '"</strong>.<br>';
                echo "Un de nos conseiller vous contactera soit à l’adresse <strong>" . $_POST['email'] . '</strong> ou par téléphone au <strong>' . $_POST['phonenumber'] . '</strong> dans les plus brefs délais pour traiter votre demande :<br>';
                echo $_POST['message'];
                ?>
            </div>
        </div>
    </div>


</body>
</html>