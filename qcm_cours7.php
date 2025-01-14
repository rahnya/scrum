<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM Interactif</title>
    <link rel="stylesheet" href="qcm.css">
</head>
<?php include 'header.php'; ?>
<body>
    <div class='container'>
    <div class="progress-indicator">
        <!-- Ajout d'indicateurs pour 10 questions -->
        <span id="indicator-1" class="indicator"></span>
        <span id="indicator-2" class="indicator"></span>
        <span id="indicator-3" class="indicator"></span>
        <span id="indicator-4" class="indicator"></span>
        <span id="indicator-5" class="indicator"></span>
    </div>

    <div id="feedback" class="hidden">Votre réponse est...</div>

    <!-- Questions 1 à 10 -->
    <!-- Copiez-collez le modèle ci-dessous pour les questions -->
    <section id="question-1" class="question">
        <h2>Question 1</h2>
        <p>Que favorise la communication ouverte dans une équipe SCRUM ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">La réduction des réunions</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">L’évitement des conflits internes</label><br>
            <label><input type="radio" name="q1" value="0" onclick="enableNext(1)">La suppression des rapports écrits</label><br>
            <label><input type="radio" name="q1" value="1" onclick="enableNext(1)">La transparence et la fluidité des échanges</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Quelle est une caractéristique clé de l’auto-organisation de l’équipe ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0"" onclick="enableNext(2)">Les tâches sont assignées par le Scrum Master</label><br>
            <label><input type="radio" name="q2" value="1" onclick="enableNext(2)">L’équipe détermine elle-même comment accomplir son travail</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">L’équipe n’a pas besoin de priorités définies</label><br>
            <label><input type="radio" name="q2" value="0" onclick="enableNext(2)">Les décisions sont prises par vote majoritaire</label>
        </form>
        <button class="prev-button" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>L’amélioration continue dans SCRUM repose principalement sur :</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">La mise en place de processus rigides</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">L’évaluation annuelle des performances</label><br>
            <label><input type="radio" name="q3" value="1" onclick="enableNext(3)">Les retours obtenus lors des rétrospectives</label><br>
            <label><input type="radio" name="q3" value="0" onclick="enableNext(3)">Les nouvelles technologies adoptées</label>
        </form>
        <button class="prev-button" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Pourquoi est-il essentiel d’impliquer tous les membres de l’équipe dans la communication ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Pour accélérer la prise de décision</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Pour garantir que chacun travaille sur une tâche distincte</label><br>
            <label><input type="radio" name="q4" value="1" onclick="enableNext(4)">Pour encourager la collaboration et l’engagement</label><br>
            <label><input type="radio" name="q4" value="0" onclick="enableNext(4)">Pour éviter les doublons dans le Product Backlog</label>
        </form>
        <button class="prev-button" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Quelle pratique assure un bon fonctionnement de SCRUM sur le long terme ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="1" onclick="enableNext(5)">La capacité de l’équipe à s’améliorer à chaque Sprint</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">La supervision étroite par le Scrum Master"</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">L’absence de réunions inutiles</label><br>
            <label><input type="radio" name="q5" value="0" onclick="enableNext(5)">Le remplacement fréquent des membres de l’équipe</label>
        </form>
        <button class="prev-button" onclick="goBack(9)">Précédent</button>
        <button id="result-button" class="next-button" disabled onclick="showResult()">Résultat</button>
    </section>
    <!-------------------------------------------------------------------->

    <section id="result-section" class="hidden">
        <h2>Résultat Final</h2>
        <p id="result-text"></p>
        <a href="index.php"><button><h3>Retour à l'accueil</h3></button></a>
    </section>
    </div>

    <script src="qcm_cours.js"></script>
</body>
</html>
<?php include_once 'footer.html'; ?>
