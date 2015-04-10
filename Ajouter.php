<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title> Ajouter </title>
</head>

<body>
<center>
    <form action="Ajouter.php" method="post">
<label>Nom</label><br/><br/>
<input type="text" name="nom"/><br/><br/>
<label>Numéro de téléphone</label><br/><br/>
<input type="text" name="num_tel"/><br/><br/>
<input type="submit" value="Valider"/>
</form><br />
<a href="Acceuil.php"> Retour à l'acceuil</a><br><br />
<a href="Supprimer.php"> Supprimer un Nom </a><br><br />
<a href="Modifier.php"> Modifier un Nom et un numéro de téléphone </a><br/>
    </center>
    
   
            
        <?php
            
        if(isset($_POST['nom'])&&isset($_POST['num_tel']))    
        {
        
        $nom = $_POST["nom"];
        $num_tel = $_POST["num_tel"];
            
        $user = 'root';
        $pass = 'Anthony18';
        
        $connexion = new PDO('mysql:host=localhost;dbname=repertoire', $user, $pass);
        
        $req = "INSERT INTO Personne (nom, num_tel) VALUES ('$nom','$num_tel')";
        
        $connexion -> query($req) or die("Erreur $req");
        
        }
        
        include 'Ex1.php';
        
        ?>


</body>
</html> 