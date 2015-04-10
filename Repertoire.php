<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <table border="1">
        <?php
        
        $user='root'; 
        $pass='Anthony18';
            
        $connexion = new PDO('mysql:host=localhost;dbname=repertoire', $user, $pass);
        
        $nom=$_POST['nom'];
        $num_tel=$_POST['num_tel'];
        
        $req = "INSERT INTO Personne (nom,num_tel) VALUES ('$nom','$num_tel')";
                echo $req;
        $connexion->query($req) or die("Erreur:$req");
        
        ?>

    </body>
</html>
