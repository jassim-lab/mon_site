<?php
  // Exemple : variables PHP (optionnel)
  $nom = "Jassim";
  $annee = date("Y");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Portfolio - <?php echo $nom; ?></title>
  <link rel="icon" type="image/jpg" href="images/logo.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Police -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Barre de navigation -->
  <nav class="navbar">
    <ul class="nav-links">
      <li><a href="#accueil">Accueil</a></li>
      <li><a href="#presentation">Présentation</a></li>
      <li><a href="#parcours">Parcours</a></li>
      <li><a href="#projets">Projets</a></li>
      <li><a href="#competences">Compétences</a></li>
      <li><a href="#certifications">Certifications</a></li>
      <li><a href="#contacts">Contacts</a></li>
    </ul>
  </nav>

  <!--<section class="lang-switch">
    <img src="images/fr.png" alt="Français" id="lang-fr" class="flag" width="50" lenght="50">
    <img src="images/en.png" alt="English" id="lang-en" class="flag" width="50" lenght="50">
  </section> -->

  <!-- ACCUEIL -->
  <section id="accueil">
    <h1 data-i18n="welcome_title">Bonjour et bienvenue à vous</h1>
    <img src="images/photo.jpg" alt="photo" width="250" lenght="250">
  </section>

  <!-- Presentation -->
  <section id="presentation">
    <h2 data-i18n="presentation_title">Présentation</h2>
    <p>Passionné par l’informatique et la cybersécurité, je développe progressivement mes compétences à travers mes formations, 
      mes projets personnels et des certifications.</p>
      <br>
    <p>Mon objectif est d’acquérir une compréhension globale et approfondie des systèmes d’information afin de contribuer à une
      sécurisation renforcée des plateformes informatiques, notamment à travers les enjeux de gouvernance, de gestion des risques
      et de conformité.</p>
      <br>
      <p>Je m’intéresse particulièrement aux normes de sécurité, à la gestion des vulnérabilités et aux bonnes pratiques
      de cybersécurité dans un contexte professionnel.</p>
      <br>
    <strong>Métiers visées:</strong>
      <li>Consultant cybersécurité</li>
      <li>Assistant RSSI</li>
      <li>Analyste risques IT</li>
      <li>Chargé de conformité IT / cybersécurité</li>
  </section>

  <!-- PARCOURS -->
  <section id="parcours">
    <h2 data-i18n="parcours_title">Mon parcours</h2>

    <div class="container">

      <div class="card">
        <img src="images/lycee.jpe" alt="BAC">
        <div class="card-content">
          <h3>Baccalauréat Générale et Technologiques</h3>
          <p>Spécialité Numérique et Sciences Informatique (NSI) et Mathématiques</p>
        </div>
      </div>

      <div class="card">
        <img src="images/licence.png" alt="BAC +3">
        <div class="card-content">
          <h3>Licence Informatique</h3>
          <p>Développement Web PHP, HTML, CSS</p>
          <p>Langage de programmation: Python, Java, C</p>
          <p>Architecture: Réseaux, Ordinateurs</p>
          <p>Mathématiques: Probabilités, Algèbres</p>
        </div>
      </div>

      <div class="card">
        <img src="images/master.png" alt="BAC +5">
        <div class="card-content">
          <h3>Master</h3>
          <p>A venir</p>
        </div>
      </div>

    </div>
  </section>

  <!-- PROJETS -->
  <section id="projets">
    <h2 data-i18n="projects_title">Mes projets</h2>

    <div class="container">

      <div class="card">
        <img src="images/iso_27001.png" alt="Projet Gouvernance">
        <div class="card-content">
          <h3>Mise en oeuvre de la norme ISO 27001</h3>
          <p class="description">
            Ce projet consiste à concevoir un Système de Management de la Sécurité de l’Information (SMSI) conforme à la norme ISO 27001,
            appliqué au secteur financier. Il s’appuie sur une entreprise fictive, RedRock, spécialisée dans la gestion de fonds et 
            opérant en France et à New York, impliquant une conformité réglementaire internationale.
          </p>
        </div>
      </div>

      <div class="card">
        <img src="images/secu-web.jpg" alt="Projet DeveSecOps">
        <div class="card-content">
          <h3>Sécurisations de solutions web & analyse</h3>
          <p class="description">
            Ce projet vise à analyser et renforcer la sécurité des applications et services web, en s’appuyant sur des approches
            défensives proches des environnements SOC. Il couvre l’identification des vulnérabilités, la gestion des incidents de 
            sécurité sur des systèmes sécurisés, ainsi que l’analyse des événements liés aux attaques.
          </p>
        </div>
      </div>

      <div class="card">
        <img src="images/social.png" alt="Projet Logiciel">
        <div class="card-content">
          <h3>Simulation d'un réseau social</h3>
          <p class="description">
            Le projet consiste à créer un environnement social proche de la réalité avec des interactions au sein d'un groupe
            d'environ 150 habitants dans une ville. Chaque habitant possède des relations basées sur trois types
            spécifiques(familiales, amicale, professionnel).
          </p>
        </div>
      </div>

      <div class="card">
        <img src="images/train.png" alt="Projet Site Web">
        <div class="card-content">
          <h3>Consultations des horaires de transports</h3>
          <p class="description">
            Ce projet consiste à créer un site web qui permet de consulter les horaires des différents moyen de 
            transports(bus, train, métro…) en temps réels, permet de voir les éventuelles perturbations sur les 
            différentes lignes et permet également de voir les statistiques des gares les plus consultées. 
          </p>
        </div>
      </div>

      <div class="card">
        <img src="images/music.png" alt="Projet Application Musique">
        <div class="card-content">
          <h3>Application de Gestion de Musique</h3>
          <p class="description">
            Ce projet consiste à concevoir une application de gestion de musique basée sur les principes de la programmation
            orientée objet. L’application prend en charge les fichiers audio aux formats MP3 et FLAC et permet de manipuler leurs
            métadonnées afin d’organiser efficacement une bibliothèque musicale.
          </p>
        </div>
      </div>

      <div class="card">
        <img src="images/bd.png" alt="Projet Base de données - Réseaux">
        <div class="card-content">
          <h3>Système de badge sécurisé au sein d'une université</h3>
          <p class="description">
            Ce projet consiste à concevoir un système de gestion des présences et des activités au sein d’une université, 
            basé sur l’utilisation de badges électroniques. Le système permet de contrôler l’accès aux bâtiments et aux salles, 
            tout en assurant un suivi précis des présences en fonction des autorisations attribuées à chaque utilisateur.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Compétences -->
  <section id="competences">
  <h2>Mes compétences</h2>

  <div class="skills-container">

    <div class="skill-card">
      <h3>🔐 Gouvernance & GRC</h3>
      <div class="skill-tags">
        <span>ISO 27001</span>
        <span>EBIOS RM</span>
        <span>RGPD</span>
        <span>Analyse de risques</span>
        <span>SMSI</span>
      </div>
    </div>

    <div class="skill-card">
      <h3>🛡️ Sécurité & Réseaux</h3>
      <div class="skill-tags">
        <span>TCP/IP</span>
        <span>DNS / DHCP</span>
        <span>Firewall</span>
        <span>Linux</span>
        <span>Diagnostic réseau</span>
      </div>
    </div>

    <div class="skill-card">
      <h3>💻 Développement</h3>
      <div class="skill-tags">
        <span>Python</span>
        <span>PHP</span>
        <span>SQL</span>
        <span>Java</span>
        <span>HTML / CSS</span>
      </div>
    </div>

  </div>
</section>

  <!-- CERTIFICATIONS -->
  <section id="certifications">
    <h2 data-i18n="certifications_title">Mes certifications</h2>

    <div class="container">

      <div class="card">
        <img src="images/ctm.png" alt="certification">
        <div class="card-content">
          <h3>CISCO CTM (Cyber Threat Management)</h3>
          <p>Identification, analyse et gestion des menaces cyber grâce à des méthodes internationales</p>
        </div>
      </div>

      <div class="card">
        <img src="images/cc.png" alt="certification">
        <div class="card-content">
          <h3>ISC² CC (Certified in Cybersecurity)</h3>
          <p>Validation des connaissances fondamentales en cybersécurité, gestion des risques, sécurité des réseaux et contrôle des accès</p>
        </div>
      </div>

      <div class="card">
        <img src="images/anssi.png" alt="MOOC">
        <div class="card-content">
          <h3>MOOC de l'ANSSI</h3>
          <p>Compréhension des bonnes pratiques de cybersécurité et de la protection des systèmes d'information</p>
        </div>
      </div>

      <div class="card">
        <img src="images/ebios.png" alt="MOOC">
        <div class="card-content">
          <h3>MOOC EBIOS Risk Manager</h3>
          <p>Analyser les risques cyber et construire une stratégie de sécurité adaptée</p>
        </div>
      </div>

      <div class="card">
        <img src="images/rgpd.png" alt="MOOC">
        <div class="card-content">
          <h3>MOOC du RGPD</h3>
          <p>Principes clés de la protection des données et obligations légales du RGPD</p>
        </div>
      </div>


    </div>
  </section>

  <!-- FOOTER -->
  <footer id="contacts">
    <p> N'hésitez pas à me contactez:
      <br>Mail: <strong>jassgk95@gmail.com</strong>
      <br><strong><a href="https://www.linkedin.com/in/jassim-mohamed-halim">Linkedin</a></strong>
      <br> © <?php echo $annee; ?> - <?php echo $nom; ?></p>
  </footer>

  <!-- JavaScript -->
  <script src="script.js"></script>

</body>
</html>
