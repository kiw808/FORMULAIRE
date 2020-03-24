<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2>My form</h2>
                <form action="thanks.php" method="post">
                    <div class="form-group">
                        <label for="firstname">Prénom : </label>
                        <input type="text" class="form-control" name="firstname" id="firstname">
                        <small class="form-text text-muted">Renseignez votre prénom</small>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nom : </label>
                        <input type="text" class="form-control" name="lastname" id="lastname">
                        <small class="form-text text-muted">Renseignez votre nom</small>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail : </label>
                        <input type="email" class="form-control" name="email" id="email">
                        <small class="form-text text-muted">Renseignez votre adresse e-mail</small>
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Numero de téléphone : </label>
                        <input type="tel" class="form-control" name="phonenumber" id="phonenumber">
                        <small class="form-text text-muted">Renseignez votre numéro de téléphone</small>
                    </div>
                    <div class="form-group">
                        <label for="sujet">Choisir un sujet : </label>
                        <select name="sujet" id="sujet" class="form-control">
                            <option> - Selectionner un sujet - </option>
                            <option> J'ai perdu mon chat </option>
                            <option> Le dernier star wars est vraiment nul </option>
                            <option> Je n'ai pas d'amis </option>
                        </select>
                        <small class="form-text text-muted">Choisissez un sujet dans la liste</small>
                    </div>
                    <div class="form-group">
                        <label for="message">Votre message : </label>
                        <textarea name="message" class="form-control" id="message"></textarea>
                        <small class="form-text text-muted">Écrivez-nous un message</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>