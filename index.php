<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nez Crome Ancien</title>
    <link rel="icon" type="image/png" href="chemin/vers/logo.png"><!--a changer-->
    <style>
        body {
            background-image: url("img/foret.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;     /* Met les boutons l’un sous l’autre */
            justify-content: center;    /* Centre verticalement */
            align-items: center;        /* Centre horizontalement */
            height: 100vh;              /* Prend toute la hauteur de l’écran */
            margin: 0;                  /* Enlève les marges du body */
        }
        .btn {
            padding: 12px 25px;
            background: linear-gradient(135deg, #6a5af9, #8750f5);
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <button class="btn" style="margin: 10px;">Connexion/inscription</button>
    <button class="btn">Trouve Ta Distribution !</button>
    <button class="btn">Liste distribution</button>
    
</body>
</html>