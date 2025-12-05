<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nez Crome Ancien</title>
    <link rel="icon" type="image/png" href="img/index.jpg">
    <style>
        body {
            background-image: url("img/index.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        .btn-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .btn {
            position: absolute;
            padding: 12px 25px;
            background: linear-gradient(135deg, rgba(120, 118, 134, 0.7), rgba(145, 136, 163, 0.7));
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            text-decoration: none;
        }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="btn-container">
        <!-- Exemple de positionnement -->
        <a href="pages/connexion.php" class="btn" style="top: 50%; right: 30%;">Connexion/inscription</a>
        <a href="pages/find_distri.php" class="btn" style="top: 50%; right: 5%; transform: translateX(-50%);">Trouve Ta Distribution !</a>
        <a href="pages/linux_distri.php" class="btn" style="top: 60%; left: 30%;">Liste des distributions</a>
        <a href="pages/doc_nird.php" class="btn" style="top: 70%; right: 85%;">C'est quoi NIRD ?</a>
    </div>
</body>
</html>
