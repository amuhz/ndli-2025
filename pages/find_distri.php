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

        <h2>Questionnaire</h2>

        <div class="questions">

            <!-- ÉTAPE 1 -->
            <div class="step" id="q1">
                <label>1️⃣ Quel est votre prénom ?</label>
                <input type="text" placeholder="Entrez votre prénom">
                <div class="btn-container">
                    <label for="step2" class="btn">Suite</label>
                </div>
            </div>

            <!-- ÉTAPE 2 -->
            <div class="step" id="q2">
                <label>2️⃣ Votre système préféré :</label><br><br>
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
                <label>3️⃣ Vos activités préférées :</label><br><br>
                <input type="checkbox"> Coder<br>
                <input type="checkbox"> Jouer<br>
                <input type="checkbox"> Musique<br><br>

                <div class="btn-container">
                    <label for="step2" class="btn">Précédent</label>
                    <label for="step4" class="btn">Suite</label>
                </div>
            </div>

            <!-- ÉTAPE 4 -->
            <div class="step" id="q4">
                <label>4️⃣ Une distro Linux recommandée :</label>
                <select>
                    <option>Ubuntu</option>
                    <option>Debian</option>
                    <option>Arch Linux</option>
                    <option>Fedora</option>
                    <option>Linux Mint</option>
                </select>

                <div class="btn-container">
                    <label for="step3" class="btn">Précédent</label>
                    <label for="step5" class="btn">Suite</label>
                </div>
            </div>
            <!-- ÉTAPE 5 (FIN) -->
            <div class="step" id="q5">
                <h2 style="color:white;">🎉 Merci d'avoir participé !</h2>
                <p style="text-align:center;">Questionnaire terminé.</p>

                <div class="btn-container">
                    <label for="step4" class="btn">Précédent</label>
                </div>
            </div>

        </div>
        </div>
    </div>
</body>
</html>