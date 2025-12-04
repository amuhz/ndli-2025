<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nez Crome Ancien</title>
    <link rel="icon" type="image/png" href="img/foret.jpg"><!--a changer-->
    <style>
        body {
            background-image: url("img/foret.jpg");
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
    </style>
</head>
<body>
    <a href="page/connexion.php" class="btn" style="margin: 10px;">Connexion/inscription</a>
    <a href="page/find_distri.php" class="btn">Trouve Ta Distribution !</a>
    <a href="page/linux_distri.php" class="btn" style="margin: 10px;">Liste distribution</a>
</body>
</html>