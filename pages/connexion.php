<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potion de Conexion</title>
    <link rel="icon" type="image/x-icon" href="../img/leNezChromeAncien.png" />
    <style>
        .container{
        display: flex;
        flex-wrap: wrap;        
        gap: 10px;              
        }
        .item{
        flex: 0 0 150px;       
        height: 80px;
        display:flex;align-items:center;justify-content:center;
        border:1px solid #ccc;
        box-sizing: border-box;
        }

        body {
            background-image: url("../img/foret.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .btn {
            padding: 12px 25px;
            background: linear-gradient(135deg, #787686ff, #9188a3ff);
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            display: inline-block;
            text-decoration: none;
            }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.3);
        }

        .btn-dark {
            padding: 10px 18px;
            background: #1a0a1f;
            border: 2px solid #4c0070;
            border-radius: 6px;
            color: #d9b3ff;
            font-family: "Georgia", serif;
            cursor: pointer;
            transition: 0.2s ease;
            box-shadow: 0 0 8px #4c0070;
        }

        .btn-dark:hover {
            background: #2a0038;
            box-shadow: 0 0 12px #8a00c8;
            color: #ffffff;
        }

        .btn-dark:active {
            background: #4c0070;
            box-shadow: 0 0 15px #b700ff inset;
        }
    </style>
</head>
<?php
session_start();

//connexion à la bdd
$mysqli = new mysqli('localhost','team4sql','LqrB1khR','team4_db1');
if ($mysqli->connect_errno) {
// Affichage d'un message d'erreur
echo "Error: Problème de connexion à la BDD \n";
// Arrêt du chargement de la page
exit;
}
else
{
    echo "Connexion BDD réussie\n";
}



// Initialisation du texte
if (!isset($_SESSION['phrase'])) {
    $_SESSION['phrase'] = "";
}

// Si un mot a été cliqué
if (isset($_POST['mot'])) {
    $mot = $_POST['mot'];

    // Ajouter avec un espace si nécessaire
    if ($_SESSION['phrase'] !== "") {
        $_SESSION['phrase'] .= " ";
    }
    $_SESSION['phrase'] .= $mot;
}

// Bouton pour effacer la phrase
if (isset($_POST['reset'])) {
    $_SESSION['phrase'] = "";
}

// La liste des mots
$listeMots = ["Racines de dev indé", "Feuilles de réutilisation", "Poudre d\'open source", "Champignon tests unitaires", "Mousse de sobriété numérique (bio évidemment)", "Infusion d\’UX accessible",
            "Pétales d\’inclusivité logicielle","Sève de simplicité"];
?>
<body>
    <a href="../index.php" class="btn" style="margin: 10px;">Accueil</a>
        <div id="formulaire" class="col d-none">
            <p style="">Nom de Mage</p>
            <form action="action.php" method="post">
            <input type="text" id="pseudo" style="">
            <input rows="4" disabled="disabled" cols="50" value="<?php echo htmlspecialchars($_SESSION['phrase']); ?>">
</form>
            
            <button type="submit" class="btn-dark">Concocter (connecter)</button>
        </div>

        <br><br>

        <!--formulaire des ingrédients du mot de passe-->
    <div id="ingredients" class="container">

    <form method="post">
        <?php foreach ($listeMots as $mot): ?>
            <button type="submit" class="btn-dark" name="mot" value="<?php echo $mot; ?>">
                <?php echo $mot; ?>
            </button>
        <?php endforeach; ?>

        <br><br>

        <button type="submit" class="btn" name="reset" value="1">Effacer</button>
    </form>
    </div>
</body>
</html>