<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potion de Conexion</title>
    <link rel="icon" type="image/png" href="img/foret.jpg">



<?php
                    if($_POST['pseudo'] and $_POST['mdp']){


                        $pseudo=htmlspecialchars($_POST['pseudo']);
                        $mdp=htmlspecialchars($_POST['mdp']);

                    }else{
                        echo("<br>");
                        echo("<br>");
                        echo("Erreur de remplissage");
                        echo("<br>");
                        echo("<a class='btn btn-primary'href=./connexion.php>Retour au formulaire</a>");
                        exit();
                    }  

                    $mysqli = new mysqli('localhost','e22104230sql','p8rmN6A5','e22104230_db2');
                    if ($mysqli->connect_errno)
                    {
                    // Affichage d'un message d'erreur
                    echo "Error: Problème de connexion à la BDD \n";
                    echo "Errno: " . $mysqli->connect_errno . "\n";
                    echo "Error: " . $mysqli->connect_error . "\n";
                    // Arrêt du chargement de la page
                    exit();
                    }

                    // Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
                    if (!$mysqli->set_charset("utf8")) {
                    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
                    exit();
                    }


                    
                    $sql= "SELECT *  FROM t_utilisateur_uti WHERE uti_pseudo = '".$pseudo."' AND uti_mdp = sha512('".$mdp."');";
                    $result = $mysqli->query($sql);


                        if ($result == false) //Erreur lors de l’exécution de la requête
                        {
                            // La requête a echoué
                            echo "Error: La requête a échoué \n";
                            echo "Query: " . $sql . "\n";
                            echo "Errno: " . $mysqli->errno . "\n";
                            echo "Error: " . $mysqli->error . "\n";
                            exit;
                        }

                    $session['mdp'] = $pseudo;
                        





                        //Ferme la connexion avec la base MariaDB
                        $mysqli->close();


?>