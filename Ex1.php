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
        
        $resultat = $connexion -> query('Select * From Personne');
        
        foreach($resultat as $ligne)
            
         {
              print_r ('<tr><td>'.$ligne['id_pers'].'</td>'.'<td>'.$ligne['nom'].'</td>'.'<td>'.$ligne['num_tel'].'</td></tr>');
        }	
        
?>
    
        </body>
        </html>