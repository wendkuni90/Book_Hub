<?php require "../admin/includes/session.php" ?>
<?php require "../../../config/config.php" ?>
<?php 
    define("log", "http://localhost/Book_Hub/scripts/manager/admin/");
    if(!isset($_SESSION['name'])){
        header("location: ".log."");
    }

    if(isset($_POST['submit'])){
        if(empty($_POST['name']) OR empty($_POST['oldpassword']) OR empty($_POST['newpassword']) OR empty($_POST['conpassword'])){
            echo "<script>alert('Attention: Un des champs est vide.')</script><br>";
        } else {

            $oldname = $_SESSION['name'];
            $oldpassword = $_POST['oldpassword'];
            //Validation du nom entré
            $login = $conn->query("SELECT * FROM admin WHERE admin_name='$oldname'");
            $login->execute();

            $fetch = $login->fetch(PDO::FETCH_ASSOC);

            //Validation du mot de passe
            if($login->rowCount() > 0){
                if(password_verify($oldpassword, $fetch['admin_pass'])){
                    
                    //Vérifions maintenant si les deux champs de mdp correspondent
                    $newpass = $_POST['newpassword'];
                    $conpass = password_hash($_POST['conpassword'], PASSWORD_DEFAULT);

                    if(password_verify($newpass, $conpass)){
                        $newname = $_POST['name'];
                        $id = $fetch['admin_id'];

                        $sql = "UPDATE TABLE admin SET admin_name=?, admin_pass=? WHERE admin_id=?";
                        $insert = $conn->prepare($sql);
                        $insert->execute([$newname,$conpass,$id]);
                        header("location: ".log."");

                    }else{
                        echo "<script>alert('Mise à jour pfffff')</script><br>";
                    }

                } else {
                    echo "<script>alert('Mise à jour refusée: Données Incorrects')</script><br>";
                }
            } else {
                echo "<script>alert('Mise à jour refusée: Données Incorrects')</script><br>";
            }

        }
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
            <form action="edit_profile.php" method="POST" id="profile-form">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" value="<?= $_SESSION['name'] ?>" required>
                
                <label for="oldpassword">Ancien Mot de passe</label>
                <input type="password" id="oldpassword" name="oldpassword" placeholder="Ancien mot de passe" required>

                <label for="newpassword">Nouveau Mot de passe</label>
                <input type="password" id="newpassword" name="newpassword" placeholder="Nouveau mot de passe" required>

                <label for="conpassword">Confirmez Mot de passe</label>
                <input type="password" id="conpassword" name="conpassword" placeholder="Confirmez mot de passe" required>
                
                <button type="submit" name="submit">Mettre à jour</button>
                
            </form>
        </div>
    </div>

    <script src="edit.js"></script>
</body>
</html>
