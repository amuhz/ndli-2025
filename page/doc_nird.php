<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/png" href="img/foret.jpg">
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
            font-family: Arial, sans-serif;
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
        .box {
            background: white;
            padding: 25px 35px;
            border-radius: 15px;
            max-width: 1000px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            text-align: center;
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <a href="../index.php" class="btn" style="margin: 10px;">Accueil</a>
    <div class="box">
        <p>
            C'est quoi ce site ?
            -Ce site est realisé dans le cadre de la nuit de l'informatique est a pour objectif de realisé un site Web qui met en avant un sujet choisie pour la nuit de l'informatique. Cette année le choix du sujet est portée sur la demarche NIRD.
            <br><br>
            Mais qu'est ce que ce truc de NIRD ?
            NIRD c'est une démarche innovante qui allie inclusion, responsabilité et durabilité pour repenser le numérique éducatif, en plaçant les élèves et la communauté éducative au cœur d’une transition numérique éthique et écologique.
            Objectifs principaux
            Le projet NIRD vise à transformer l’usage du numérique dans l’éducation en s’appuyant sur trois piliers :
                <br><br>
            Inclusion : Réduire la fracture numérique en rendant le numérique accessible à tous, notamment via le reconditionnement de matériel et la distribution d’ordinateurs équipés de logiciels libres.
            Responsabilité : Promouvoir l’autonomie et la citoyenneté numérique en utilisant des logiciels libres et ouverts (GNU/Linux, Raspberry Pi, etc.), pour sortir de la dépendance aux géants du numérique (GAFAM) et former des utilisateurs conscients et émancipés.
            Durabilité : Adopter une approche sobre et écologique, en prolongeant la durée de vie des machines, en réduisant les déchets électroniques et en limitant les coûts de licences.
            Actions concrètes
                <br><br>
            Matériel : Intégration de machines sous Linux, reconditionnement de vieux PC, utilisation de Raspberry Pi pour des solutions légères et économiques.
            Pédagogie : Formation des élèves et des enseignants aux enjeux du numérique libre, partage de ressources éducatives libres (REL) et de protocoles de reconditionnement.
            Citoyenneté : Impliquer les élèves dans le reconditionnement et la distribution de matériel, créant une dynamique collective et responsabilisante.
            Partage : Diffusion des ressources et retours d’expérience sous licence ouverte (CC BY-SA) pour inspirer d’autres établissements.
            Originalité du projet
                <br><br>
            Approche globale : Le projet ne se limite pas à l’équipement technique, mais vise une transformation des pratiques et des valeurs autour du numérique.
            Logique de sobriété : Réduction de la consommation énergétique, allongement de la durée de vie des machines, et baisse des coûts pour les collectivités.
            Modèle reproductible : NIRD se veut un exemple inspirant pour d’autres établissements, avec une ambition de diffusion nationale.
                <br><br>
            Enjeux et bénéfices
                <br><br>
            Équité : Offrir à tous les élèves un accès équitable au numérique, quel que soit leur contexte socio-économique.
            Autonomie : Former des citoyens capables de maîtriser et de choisir leurs outils numériques, plutôt que de les subir.
            Écologie : Réduire l’empreinte environnementale du numérique éducatif.
            Économie : Diminuer les coûts pour les collectivités grâce à l’utilisation de logiciels libres et de matériel reconditionné.
        </p>
    </div>
</body>
</html>