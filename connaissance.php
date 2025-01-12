<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="connaissance.css">
  <title>Liste des cours</title>
</head>
<body>
  <!-- Bouton pour ouvrir le pop-up -->

  <!-- Pop-up -->
  <div id="popup" class="popup">
    <div class="popup-content">
      <span class="close-button" onclick="closePopup()">&times;</span>
      <h2>Liste des cours</h2>
      <ul class="course-list">
        <li>
          <span class="course-title">Cours 1 : Les bases</span>
          <a href="#" class="test-link">Lancer le test</a>
          <a href="#" class="course-link">Voir le cours associé</a>
        </li>
        <li>
          <span class="course-title">Méthode Agile</span>
          <a href="#" class="test-link">Lancer le test</a>
          <a href="#" class="course-link">Voir le cours associé</a>
        </li>
        <li>
          <span class="course-title">zdnjerb,v,n qzbd,fea</span>
          <a href="#" class="test-link">Lancer le test</a>
          <a href="#" class="course-link">Voir le cours associé</a>
        </li>
        <li>
          <span class="course-title">zdnjerb,v,n qzbd,fea</span>
          <a href="#" class="test-link">Lancer le test</a>
          <a href="#" class="course-link">Voir le cours associé</a>
        </li>
        <li>
          <span class="course-title">zdnjerb,v,n qzbd,fea</span>
          <a href="#" class="test-link">Lancer le test</a>
          <a href="#" class="course-link">Voir le cours associé</a>
        </li>
      </ul>
    </div>
  </div>

  <script>
    function showPopup() {
      document.getElementById("popup").style.display = "block";
      document.body.classList.add('popup-open');
    }

    function closePopup() {
      document.getElementById("popup").style.display = "none";
      document.body.classList.remove('popup-open');
    }

    // Fermer le pop-up en cliquant en dehors du contenu
    document.addEventListener('DOMContentLoaded', function () {
      const popup = document.getElementById("popup");
      popup.addEventListener('click', function (event) {
        if (event.target === popup) {
          closePopup();
        }
      });
    });
  </script>
</body>
</html>