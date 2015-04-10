<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Supprimer</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    </head>
    <body>

    <center>
        <form action="Supprimer.php" method="post">
            <label>Nom</label><br/><br/>
            <input type="text" name="nom"/><br/><br/>
            <input type="submit" value="Valider"/>
        </form><br />
        <a href="Acceuil.php"> Retour à l'acceuil</a><br><br />
        <a href="Ajouter.php"> Ajouter un Nom et un numéro de téléphone </a> <br><br />
        <a href="Modifier.php"> Modifier un Nom et un numéro de téléphone </a>
    </center>
    

  
            
        <?php
            
        if(isset($_POST['nom']))    
        {
            
        $nom = $_POST["nom"];
            
        $user = 'root';
        $pass = 'Anthony18';
        
        $connexion = new PDO('mysql:host=localhost;dbname=repertoire', $user, $pass);
        
        $requete = "DELETE FROM Personne WHERE nom = '$nom'";
        
        $connexion -> query($requete) or die("Erreur $requete");
        
        }
        
        include 'Ex1.php';
        
        ?>


 </body>
</html>