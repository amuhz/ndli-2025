<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="../img/foret.jpg">
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("../img/cimetiere.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0;
    }

    .form-container {
        width: 450px;
        padding: 30px;
        border-radius: 15px;
        background: rgba(255,255,255,0.20);
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h2 {
        text-align: center;
        color: white;
    }

    .step {
        display: none;
        animation: fade .4s ease;
    }

    @keyframes fade {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Affiche l'étape liée au radio coché */
    #step1:checked ~ .questions #q1,
    #step2:checked ~ .questions #q2,
    #step3:checked ~ .questions #q3,
    #step4:checked ~ .questions #q4,
    #step5:checked ~ .questions #q5 {
        display: block;
    }

    label, p {
        color: white;
        font-size: 16px;
    }

    input[type="text"], select {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: none;
        margin-top: 8px;
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        padding: 10px 18px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        background: white;
        color: #333;
        font-size: 16px;
        transition: 0.2s;
        margin: 5px;
        text-decoration: none;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    /* Cacher les radios */
    input[type="radio"] {
        display: none;
    }

    .btn-container {
        text-align: center;
        margin-top: 10px;
    }
    .b {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
</head>
<body>
    <div class="b">
        <a href="../index.php" class="btn" style="margin: 10px;">Accueil</a>
        <p style="color: white; background: rgba(70, 70, 70, 0.3); box-shadow: 0 10px 15px rgba(70, 70, 70, 0.5);">Bienvenue dans trouve ta distribution linux ! 
        Trouve le mage de distribution Linux qu'il te faut en complétant ce questionnaire:</p>
        <div class="form-container">

        <!-- Radios invisibles pour gérer les étapes -->
        <input type="radio" name="step" id="step1" checked>
        <input type="radio" name="step" id="step2">
        <input type="radio" name="step" id="step3">
        <input type="radio" name="step" id="step4">
        <input type="radio" name="step" id="step5">
        <input type="radio" name="step" id="step6">

        <h2>Questionnaire</h2>
        <form action="find_distri_action.php" method="post">
        <div class="questions">

            <!-- ÉTAPE 1 -->
            <div class="step" id="q1">
                <label>1️⃣ Quel est votre prénom ?</label>
                <input type="text" name="name" placeholder="Entrez votre prénom">
                <div class="btn-container">
                    <label for="step2" class="btn">Suite</label>
                </div>
            </div>

            <!-- ÉTAPE 2 -->
            <div class="step" id="q2">
                <label>2️⃣ Votre ordinateur est actuellement sur :</label><br><br>
                <input type="radio" name="os"> Linux<br>
                <input type="radio" name="os"> Windows<br>
                <input type="radio" name="os"> MacOS<br><br>

                <div class="btn-container">
                    <label for="step1" class="btn">Précédent</label>
                    <label for="step3" class="btn">Suite</label>
                </div>
            </div>

            <!-- ÉTAPE 3 -->
            <div class="step" id="q3">
                <label>3️⃣ Vous utilisé principalement votre ordinateur pour :</label><br><br>
                <input type="checkbox" name="acti" value="coder"> Coder / Developper<br>
                <input type="checkbox" name="acti" value="jouer"> Jouer à des jeux video<br>
                <input type="checkbox" name="acti" value="uro"> Bureautiqque<br><br>
                <input type="checkbox" name="acti" value="art"> Faire du travail artistique<br><br>

                <div class="btn-container">
                    <label for="step2" class="btn">Précédent</label>
                    <label for="step4" class="btn">Suite</label>
                </div>
            </div>

            <!-- ÉTAPE 4 -->
            <div class="step" id="q4">
                <label>4️⃣ Quel type d'ordinateur avez vous ?</label>
                <select name="pc_type" required>
                    <option value="5">La NASA a utilisé mon ordi pour le dernier lancement d'Ariane 5.</option>
                    <option value="4">Je fais tourner cyberpunk tranquille.</option>
                    <option value="3">Minecraft, c'est déjà pas mal</option>
                    <option value="2">C'est lent, mais j'ai un ordi.</option>
                    <option value="1">Je démarre mon ventilateur à la main.</option>
                </select>

                <div class="btn-container">
                    <label for="step3" class="btn">Précédent</label>
                    <label for="step5" class="btn">Suite</label>
                </div>
            </div>

            <!-- ÉTAPE 5 -->
            <div class="step" id="q5">
                <label>5️⃣ A quel point vous maitrisé votre ordinateur ?</label>
                <select name="skill" required>
                    <option value="5">J'ai coder mon OS</option>
                    <option value="4">Quand je m'ennuis je test une nouvelle OS</option>
                    <option value="3">Je me suis deja fait rickroll</option>
                    <option value="2">Je vais sur internet</option>
                    <option value="1">Comment on apuis sur les boutons ?</option>
                </select>

                <div class="btn-container">
                    <label for="step4" class="btn">Précédent</label>
                    <label for="step6" class="btn">Suite</label>
                </div>
            </div>
        </div>
        </form>
        </div>
    </div>
</body>
</html>