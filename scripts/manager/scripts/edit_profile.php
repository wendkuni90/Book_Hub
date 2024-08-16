<?php require "../admin/includes/session.php" ?>
<?php require "../../../config/config.php" ?>
<?php 
    define("log", "http://localhost/Book_Hub/scripts/manager/admin/");
    if(!isset($_SESSION['name'])){
        header("location: ".log."");
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <!-- Je vais mettre une barre de navigation ou pas!!! -->
    <!-- Je vais mettre aussi un formulaire d'édition de profile -->
    <div class="profile-container">
        
        <div class="info">
            <h2>Edition du profil</h2>
            <form id="profile-form" method="POST" action="#">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" value="<?= $_SESSION['name'] ?>" required>
                
                <label for="oldpassword">Ancien Mot de passe</label>
                <input type="password" id="oldpassword" name="oldpassword" placeholder="Ancien mot de passe" required>

                <label for="newpassword">Nouveau Mot de passe</label>
                <input type="password" id="newpassword" name="newpassword" placeholder="Nouveau mot de passe" required>

                <label for="conpassword">Confirmez Mot de passe</label>
                <input type="password" id="conpassword" name="conpassword" placeholder="Confirmez mot de passe" required>
                
                <button type="submit">Mettre à jour</button>
                
            </form>
        </div>
    </div>

    <script src="edit.js"></script>
</body>
</html>
