<?php require "includes/session.php" ?>
<?php require "../../../config/config.php" ?>

<?php

    if(isset($_POST['submit'])){
        if(empty($_POST['name']) OR empty($_POST['password'])){
            echo "<script>alert('Attention: Un des champs est vide.')</script><br>";
        } else {

            $name = $_POST['name'];
            $mypassword = $_POST['password'];

            //Validation du nom entré
            $login = $conn->query("SELECT * FROM admin WHERE admin_name='$name'");
            $login->execute();

            $fetch = $login->fetch(PDO::FETCH_ASSOC);

            //Validation du mot de passe
            if($login->rowCount() > 0){
                if(password_verify($mypassword, $fetch['admin_pass'])){
                    //echo "<script>alert('Connecté')</script><br>";
                    $_SESSION['name'] = $fetch['admin_name'];
                    header("location: dashboard.php");

                } else {
                    echo "<script>alert('Accès refusé: Données Incorrects')</script><br>";
                }
            } else {
                echo "<script>alert('Accès refusé: Données Incorrects')</script><br>";
            }

        }

    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Cette page devra permettre à l'administrateur prinipal de se logguer -->
    <!-- <h1>Administrateur</h1>
    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="Nom" required>
        <input type="password" name="password" placeholder="Mot de Passe" required>
        <input type="submit" name="submit" value="Se Connecter">
    </form> -->
    <div class="mondiv">
        <div class="login-container">
            <h1>Book<strong>Hub</strong></h1>
            <h2>Connexion</h2>
            <form action="index.php" method="POST">
                <div class="input-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                    <button type="button" id="togglePassword">Afficher</button>
                </div>
                <button type="submit" name="submit" class="login-button">Se connecter</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script src="login-script.js"></script>
</body>
</html>