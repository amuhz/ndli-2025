<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect</title>
    <link rel="icon" type="image/png" href="img/foret.jpg">
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
    </style>
</head>
<body>
    <a href="../index.php" class="btn" style="margin: 10px;">Accueil</a>
        <div id="formulaire" class="col d-none">
            <p style="">Nom de Mage</p>
            <input type="text" id="pseudo" style="">
            
            <button type="button" onclick="connect()" class="btn btn-primary">Concocter (connecter)</button>
        </div>

        <!--formulaire des ingrédients du mot de passe-->
    <div id="ingredients" class="container">
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
        <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
        <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
        <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
        <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
        <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
        <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
    
  <!-- ... -->
</div>
</body>
</html>