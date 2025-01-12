<<<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM Interactif</title>
    <link rel="stylesheet" href="qcm.css">
</head>
<?php include 'header.html'; ?>
<body>
<div class='container'>
    <div class="progress-indicator">
        <!-- Ajout d'indicateurs pour 10 questions -->
        <span id="indicator-1" class="indicator"></span>
        <span id="indicator-2" class="indicator"></span>
        <span id="indicator-3" class="indicator"></span>
        <span id="indicator-4" class="indicator"></span>
        <span id="indicator-5" class="indicator"></span>
        <span id="indicator-6" class="indicator"></span>
        <span id="indicator-7" class="indicator"></span>
        <span id="indicator-8" class="indicator"></span>
        <span id="indicator-9" class="indicator"></span>
        <span id="indicator-10" class="indicator"></span>
        <span id="indicator-11" class="indicator"></span>
        <span id="indicator-12" class="indicator"></span>
        <span id="indicator-13" class="indicator"></span>
        <span id="indicator-14" class="indicator"></span>
        <span id="indicator-15" class="indicator"></span>
        <span id="indicator-16" class="indicator"></span>
        <span id="indicator-17" class="indicator"></span>
        <span id="indicator-18" class="indicator"></span>
        <span id="indicator-19" class="indicator"></span>
        <span id="indicator-20" class="indicator"></span>
    </div>

    <div id="feedback" class="hidden">Votre réponse est...</div>

    <!-- Questions 1 à 20 -->
    <!-- Copiez-collez le modèle ci-dessous pour les questions -->
    <section id="question-1" class="question">
        <h2>Question 1</h2>
        <p>Que signifie le terme "Scrum" ?</p>
        <form id="form-1"> 
            <label><input type="radio" name="q1" value="0" 
                onclick="enableNext(1)"> Une méthode traditionnelle de gestion de projet</label><br>
            <label><input type="radio" name="q1" value="1" 
                onclick="enableNext(1)"> Une méthode agile basée sur des cycles courts et collaboratifs</label><br>
            <label><input type="radio" name="q1" value="0" 
                onclick="enableNext(1)"> Un outil logiciel de gestion de projet</label><br>
            <label><input type="radio" name="q1" value="0" 
                onclick="enableNext(1)"> Une technique de brainstorming</label>
        </form>
        <button class="prev-button hidden hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-1" class="next-button" disabled onclick="validateAnswer(1, 1)">Suivant</button>
    </section>

    <!-- Dupliquer et ajuster pour les questions suivantes -->
    <section id="question-2" class="question hidden">
        <h2>Question 2</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-2">
            <label><input type="radio" name="q2" value="0" 
                onclick="enableNext(2)"> Une itération</label><br>
            <label><input type="radio" name="q2" value="1" 
                onclick="enableNext(2)"> Un sprint</label><br>
            <label><input type="radio" name="q2" value="0" 
                onclick="enableNext(2)"> Une boucle</label><br>
            <label><input type="radio" name="q2" value="0" 
                onclick="enableNext(2)"> Une session</label>
        </form>
        <button class="prev-button hidden hidden" onclick="goBack(1)">Précédent</button>
        <button id="next-2" class="next-button" disabled onclick="validateAnswer(2, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-3" class="question hidden">
        <h2>Question 3</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-3">
            <label><input type="radio" name="q3" value="0" 
                onclick="enableNext(3)"> Une itération</label><br>
            <label><input type="radio" name="q3" value="1" 
                onclick="enableNext(3)"> Un sprint</label><br>
            <label><input type="radio" name="q3" value="0" 
                onclick="enableNext(3)"> Une boucle</label><br>
            <label><input type="radio" name="q3" value="0" 
                onclick="enableNext(3)"> Une session</label>
        </form>
        <button class="prev-button hidden hidden" onclick="goBack(2)">Précédent</button>
        <button id="next-3" class="next-button" disabled onclick="validateAnswer(3, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-4" class="question hidden">
        <h2>Question 4</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-4">
            <label><input type="radio" name="q4" value="0" 
                onclick="enableNext(4)"> Une itération</label><br>
            <label><input type="radio" name="q4" value="1" 
                onclick="enableNext(4)"> Un sprint</label><br>
            <label><input type="radio" name="q4" value="0" 
                onclick="enableNext(4)"> Une boucle</label><br>
            <label><input type="radio" name="q4" value="0" 
                onclick="enableNext(4)"> Une session</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(3)">Précédent</button>
        <button id="next-4" class="next-button" disabled onclick="validateAnswer(4, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-5" class="question hidden">
        <h2>Question 5</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-5">
            <label><input type="radio" name="q5" value="0" 
                onclick="enableNext(5)"> Une itération</label><br>
            <label><input type="radio" name="q5" value="1" 
                onclick="enableNext(5)"> Un sprint</label><br>
            <label><input type="radio" name="q5" value="0" 
                onclick="enableNext(5)"> Une boucle</label><br>
            <label><input type="radio" name="q5" value="0" 
                onclick="enableNext(5)"> Une session</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(4)">Précédent</button>
        <button id="next-5" class="next-button" disabled onclick="validateAnswer(5, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-6" class="question hidden">
        <h2>Question 6</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-6">
            <label><input type="radio" name="q6" value="0" 
                onclick="enableNext(6)"> Une itération</label><br>
            <label><input type="radio" name="q6" value="1" 
                onclick="enableNext(6)"> Un sprint</label><br>
            <label><input type="radio" name="q6" value="0" 
                onclick="enableNext(6)"> Une boucle</label><br>
            <label><input type="radio" name="q6" value="0" 
                onclick="enableNext(6)"> Une session</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(5)">Précédent</button>
        <button id="next-6" class="next-button" disabled onclick="validateAnswer(6, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-7" class="question hidden">
        <h2>Question 7</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-7">
            <label><input type="radio" name="q7" value="0" 
                onclick="enableNext(7)"> Une itération</label><br>
            <label><input type="radio" name="q7" value="1" 
                onclick="enableNext(7)"> Un sprint</label><br>
            <label><input type="radio" name="q7" value="0" 
                onclick="enableNext(7)"> Une boucle</label><br>
            <label><input type="radio" name="q7" value="0" 
                onclick="enableNext(7)"> Une session</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(6)">Précédent</button>
        <button id="next-7" class="next-button" disabled onclick="validateAnswer(7, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-8" class="question hidden">
        <h2>Question 8</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-8">
            <label><input type="radio" name="q8" value="0" 
                onclick="enableNext(8)"> Une itération</label><br>
            <label><input type="radio" name="q8" value="1" 
                onclick="enableNext(8)"> Un sprint</label><br>
            <label><input type="radio" name="q8" value="0" 
                onclick="enableNext(8)"> Une boucle</label><br>
            <label><input type="radio" name="q8" value="0" 
                onclick="enableNext(8)"> Une session</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(7)">Précédent</button>
        <button id="next-8" class="next-button" disabled onclick="validateAnswer(8, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-9" class="question hidden">
        <h2>Question 9</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-9">
            <label><input type="radio" name="q9" value="0" 
                onclick="enableNext(9)"> Une itération</label><br>
            <label><input type="radio" name="q9" value="1" 
                onclick="enableNext(9)"> Un sprint</label><br>
            <label><input type="radio" name="q9" value="0" 
                onclick="enableNext(9)"> Une boucle</label><br>
            <label><input type="radio" name="q9" value="0" 
                onclick="enableNext(9)"> Une session</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(8)">Précédent</button>
        <button id="next-9" class="next-button" disabled onclick="validateAnswer(9, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-10" class="question hidden">
        <h2>Question 10</h2>
        <p>Question finale : Exemple de question 10 ?</p>
        <form id="form-10">
            <label><input type="radio" name="q10" value="1" onclick="enableNext(10)"> Bonne réponse</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)"> Mauvaise réponse 1</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)"> Mauvaise réponse 2</label><br>
            <label><input type="radio" name="q10" value="0" onclick="enableNext(10)"> Mauvaise réponse 3</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(9)">Précédent</button>
        <button id="next-10" class="next-button" disabled onclick="validateAnswer(10, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-11" class="question hidden">
        <h2>Question 11</h2>
        <p>Comment s'appelle le cycle de travail dans Scrum ?</p>
        <form id="form-11">
            <label><input type="radio" name="q11" value="0" onclick="enableNext(11)"> Une itération</label><br>
            <label><input type="radio" name="q11" value="1" onclick="enableNext(11)"> Un sprint</label><br>
            <label><input type="radio" name="q11" value="0" onclick="enableNext(11)"> Une boucle</label><br>
            <label><input type="radio" name="q11" value="0" onclick="enableNext(11)"> Une session</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(10)">Précédent</button>
        <button id="next-11" class="next-button" disabled onclick="validateAnswer(11, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-12" class="question hidden">
        <h2>Question 12</h2>
        <p>Quelle est la principale méthode de suivi des tâches dans Kanban ?</p>
        <form id="form-12">
            <label><input type="radio" name="q12" value="1" onclick="enableNext(12)"> Tableau Kanban</label><br>
            <label><input type="radio" name="q12" value="0" onclick="enableNext(12)"> Journal</label><br>
            <label><input type="radio" name="q12" value="0" onclick="enableNext(12)"> Planning</label><br>
            <label><input type="radio" name="q12" value="0" onclick="enableNext(12)"> Liste</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(11)">Précédent</button>
        <button id="next-12" class="next-button" disabled onclick="validateAnswer(12, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-13" class="question hidden">
        <h2>Question 13</h2>
        <p>Quel langage est principalement utilisé pour les styles sur le web ?</p>
        <form id="form-13">
            <label><input type="radio" name="q13" value="0" onclick="enableNext(13)"> HTML</label><br>
            <label><input type="radio" name="q13" value="1" onclick="enableNext(13)"> CSS</label><br>
            <label><input type="radio" name="q13" value="0" onclick="enableNext(13)"> JavaScript</label><br>
            <label><input type="radio" name="q13" value="0" onclick="enableNext(13)"> PHP</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(12)">Précédent</button>
        <button id="next-13" class="next-button" disabled onclick="validateAnswer(13, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-14" class="question hidden">
        <h2>Question 14</h2>
        <p>Quelle est l'utilité principale de JavaScript dans une page web ?</p>
        <form id="form-14">
            <label><input type="radio" name="q14" value="0" onclick="enableNext(14)"> Structurer le contenu</label><br>
            <label><input type="radio" name="q14" value="1" onclick="enableNext(14)"> Ajouter de l'interactivité</label><br>
            <label><input type="radio" name="q14" value="0" onclick="enableNext(14)"> Définir les styles</label><br>
            <label><input type="radio" name="q14" value="0" onclick="enableNext(14)"> Créer des bases de données</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(13)">Précédent</button>
        <button id="next-14" class="next-button" disabled onclick="validateAnswer(14, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-15" class="question hidden">
        <h2>Question 15</h2>
        <p>Quel est le rôle principal de PHP dans le développement web ?</p>
        <form id="form-15">
            <label><input type="radio" name="q15" value="0" onclick="enableNext(15)"> Créer des styles dynamiques</label><br>
            <label><input type="radio" name="q15" value="1" onclick="enableNext(15)"> Gérer les serveurs</label><br>
            <label><input type="radio" name="q15" value="0" onclick="enableNext(15)"> Faire du design</label><br>
            <label><input type="radio" name="q15" value="0" onclick="enableNext(15)"> Structurer du contenu</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(14)">Précédent</button>
        <button id="next-15" class="next-button" disabled onclick="validateAnswer(15, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-16" class="question hidden">
        <h2>Question 16</h2>
        <p>Quelle est la signification de l'acronyme HTTP ?</p>
        <form id="form-16">
            <label><input type="radio" name="q16" value="1" onclick="enableNext(16)"> HyperText Transfer Protocol</label><br>
            <label><input type="radio" name="q16" value="0" onclick="enableNext(16)"> High Transfer Protocol</label><br>
            <label><input type="radio" name="q16" value="0" onclick="enableNext(16)"> HyperText Transfer Page</label><br>
            <label><input type="radio" name="q16" value="0" onclick="enableNext(16)"> HighText Protocol</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(15)">Précédent</button>
        <button id="next-16" class="next-button" disabled onclick="validateAnswer(16, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-17" class="question hidden">
        <h2>Question 17</h2>
        <p>Que signifie CSS ?</p>
        <form id="form-17">
            <label><input type="radio" name="q17" value="0" onclick="enableNext(17)"> Content Style Sheet</label><br>
            <label><input type="radio" name="q17" value="1" onclick="enableNext(17)"> Cascading Style Sheets</label><br>
            <label><input type="radio" name="q17" value="0" onclick="enableNext(17)"> Computer Style Sheets</label><br>
            <label><input type="radio" name="q17" value="0" onclick="enableNext(17)"> Creative Style Sheets</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(16)">Précédent</button>
        <button id="next-17" class="next-button" disabled onclick="validateAnswer(17, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-18" class="question hidden">
        <h2>Question 18</h2>
        <p>Quel outil est utilisé pour contrôler les versions de code ?</p>
        <form id="form-18">
            <label><input type="radio" name="q18" value="0" onclick="enableNext(18)"> Figma</label><br>
            <label><input type="radio" name="q18" value="1" onclick="enableNext(18)"> Git</label><br>
            <label><input type="radio" name="q18" value="0" onclick="enableNext(18)"> Trello</label><br>
            <label><input type="radio" name="q18" value="0" onclick="enableNext(18)"> Photoshop</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(17)">Précédent</button>
        <button id="next-18" class="next-button" disabled onclick="validateAnswer(18, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-19" class="question hidden">
        <h2>Question 19</h2>
        <p>Quel est le rôle principal de MySQL ?</p>
        <form id="form-19">
            <label><input type="radio" name="q19" value="0" onclick="enableNext(19)"> Gérer des styles</label><br>
            <label><input type="radio" name="q19" value="1" onclick="enableNext(19)"> Gérer des bases de données</label><br>
            <label><input type="radio" name="q19" value="0" onclick="enableNext(19)"> Gérer des fichiers</label><br>
            <label><input type="radio" name="q19" value="0" onclick="enableNext(19)"> Gérer des tâches</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(18)">Précédent</button>
        <button id="next-19" class="next-button" disabled onclick="validateAnswer(19, 1)">Suivant</button>
    </section>
    <!-------------------------------------------------------------------->
    <section id="question-20" class="question hidden">
        <h2>Question 20</h2>
        <p>Quel est l'outil principal pour la gestion de projets collaboratifs ?</p>
        <form id="form-20">
            <label><input type="radio" name="q20" value="1" onclick="enableNext(20)"> Trello</label><br>
            <label><input type="radio" name="q20" value="0" onclick="enableNext(20)"> Git</label><br>
            <label><input type="radio" name="q20" value="0" onclick="enableNext(20)"> Photoshop</label><br>
            <label><input type="radio" name="q20" value="0" onclick="enableNext(20)"> Visual Studio</label>
        </form>
        <button class="prev-button hidden" onclick="goBack(19)">Précédent</button>
        <button id="result-button" class="next-button" disabled onclick="showResult()">Résultat</button>
    </section>
    <!-------------------------------------------------------------------->

    <section id="result-section" class="hidden">
        <h2>Résultat Final</h2>
        <p id="result-text"></p>
        <button><h3>Retour à l'accueil</h3></button>
    </section>
</div>

    <script src="qcm_eval.js"></script>
</body>
</html>
