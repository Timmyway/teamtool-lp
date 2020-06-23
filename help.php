  <div class="main mt-3">
    <?php require('header.php'); ?>
    <div class="container mt-3">
      <h4>Instruction d'installation</h4>
      <div class="mb-5">
        <video src="public/src/instruction - Teamtool.mp4" width="320" height="240" controls></video>
      </div>
    </div>
    <div class="tips container">
      <h4>Shortcuts (Raccourcis)</h4>
      <ul>
        <li><span class="text--important">F4</span> - Equivalent à <strong>INPUT CODE</strong></li>
        <li><span class="text--important">F5</span> - Leadshort le code</li>
        <li><span class="text--important">F8</span> - Ouvre dans le navigateur le code présent dans l'éditeur de texte dans l'onglet CODE</li>
        <li><span class="text--important">F9</span> - Ouvre dans le navigateur le code présent dans l'éditeur destiné aux Creas "Optimisées"</li>
        <li><span class="text--important">F12</span> - Afficher/masquer certaines fenêtres (Result code, sélection utilisateur)</li>
        <li><span class="text--important">ALT + B</span> - Lorsque vous êtes dans l'éditeur de code, ce combo de touche permet de <strong>leadshorter</strong> le lien sélectionné,
          puis remplace toutes les occurences (répétition du même mot en autre) de celui-ci dans le code HTML présent dans l'éditeur de code
        </li>
        <li><span class="text--important">CTRL + S</span> - Permet de sauvegarder ce qui se trouve dans l'éditeur de texte. Notez la couleur du bouton "Save" ainsi que celle de l'heure à droite.
          Cette heure représente le moment de votre dernière édition à la seconde près (format: heure minute seconde). Lorsque ces deux signaux passent au vert, le document est sauvegardé.</li>			</ul>		</div>		<div class="tips container">			<h4>Optimization speed</h4>			<p>				5 vitesses sont disponibles:<br>				<ol>					<li>Like a snail (Un par un comme à la bonne vieille époque)</li>					<li>Low (Vitesse par défaut, si vous ne savez pas quoi choisir laissez cette vitesse)</li>					<li>Nail with turbo (A utiliser si vous manquez de vitesse, mais s'il y a des gens en congé dans l'équipe)
        </li>
        <li>Fast (J'ai testé et ça marche plutôt bien)</li>
        <li>
          Can make you drunk (Equivalent à terminer le tableau de vitesse d'une voiture, si vous êtes seul à travailler pour je ne sais quelle raison, allez-y !)
        </li>
      </ol>
    </p>
  </div>
  <div class="tips container">
    <h4>Bulk open</h4>
    <p>Toujours dans les méthodes barbares, permet d'ouvrir dans de nouveaux onglet tous les liens d'une Crea</p>
    <h5>Utilité</h5>
    <p>Vérifier s'il y a un ou des liens morts, on ne sait jamais</p>
    <h5>Comment faire ?</h5>
    <p>Appuyer sur INPUT, dans la barre de menu en haut, dans "May be useful" -> Bulk open</p>
    <h4>Favorite folder</h4>
    <p>Dans la "Barre d'application" (celle où il y a les icones Firefox/Chrome/Opera), il y a une icone représentant un dossier.
      C'est un raccourci pour aller vers votre dossier favori (configurable dans les options "config.json")</p>
    </div>
    <div class="tips container">
      <h4>Sanitize</h4>
      <p>L'icone noire en forme de main dans la barre d'application (la même que tout à l'heure) représente l'option baptisé Sanitize. Si vous avez du temps à tuer,
        expérimentez sinon passons</p>
        <h4>Remove pixel</h4>
        <p>Bouton permettant modestement de détecter et supprimer les pixels.</p>
      </div>
      <div class="tips container">
        <h4>Change prefill</h4>
        <p>
          Cherche et remplace les variables de préremplissage de Kontiki [email] [fname] [lname] [zcode] [gender] dans le code (éditeur)
        </p>
      </div>
      <div class="container text-center mt-5">
        <p class="quote">Cette doc est temporaire, si elle peut s'avérer utile, je pourrais peut-être l'améliorer ou la détailler d'avantage. En attendant,
          l'essentiel des options pouvant parraître obsucres sont là.
        </p>
      </div>
    </div>
<?php require('footer.php'); ?>
