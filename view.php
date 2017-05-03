<!doctype html>
<html>
<head>
  <meta charset="utf-8" lang="fr">
  <title>Work Biche!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
  <nav>
    <hello>
      <a href="index.php"><img src="maquette/logoplaceholder.ico" alt="logo"></a>
      <h1>Work, <?php echo $username ?> !</h1>
    </hello>
    <form action="" method="post">
      <?php foreach ($workspaces as $workspace) : ?>
        <button name="space" value="<?php echo $workspace['id'];?>">
          <?php echo $workspace['name']; ?>
        </button>
      <?php endforeach ?>
    </form>
    <form action="addspace.php" method="post">
      <input type="text" name="workspacename" value="" placeholder="Nouvel Espace de Travail :">
      <input type="submit" value="+">
    </form>
  </nav>

  <main ng-app="">
    <section>
      <?php require 'workspace.php' ?>
    </section>
    <form class="add" action="add.php" method="post">
      <h1>Ajouter une tâche :</h1>
      <input type="text" name="task" value="">
      <select name="workspaceid">
        <?php foreach ($workspaces as $workspace) : ?>
          <option value="<?php echo $workspace['id'];?>">
            <?php echo $workspace['name']; ?>
          </option>
        <?php endforeach ?>
      </select>
      <input type="text" name="family" value="" placeholder="Catégorie">
      <label>Priorité</label>
      <select name="priority">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <input type="number" name="time" min="0" max="24" placeholder="Durée">
      <input type="submit" value="+">
    </form>
    <form class="remove" action="removespace.php" method="post">
      <?php
      if(isset($_POST['space'])) {
        $workspace = $_POST['space'];
        setcookie('space', $workspace, time()+10000);
      }
      else if(isset($_COOKIE['space'])) {
        $workspace = $_COOKIE['space'];
      }
      else {
        $workspace = $workspaces[0]['id'];
      }
      ?>
      <button name="workspaceid" value="<?php echo $workspace ?>">
        Supprimer cet Espace de Travail
      </button>
    </form>
  </main>

  <footer>
    <section>
      <h1>À Propos</h1>
      <p>Simple et intuitif, cet outil vous permet d'organiser vos tâches à venir par catégorie, priorité et temps estimé au sein de divers espaces de travail.</p>
    </section>
    <logo>
      <h1>Work</h1><img src="maquette/logoplaceholder.ico"><h1>Biche !</h1>
    </logo>
    <section>
      <h1>Font</h1>
      <p><a href="https://mistifonts.com/youth-and-beauty/">Youth and Beauty</a></p>
      <h1>Contact</h1>
      <p><a href="mailto:paulbh.roche@gmail.com">Mail</a> <a href="https://github.com/paulbhr">Github</a></p>
    </section>
  </footer>
</body>
</html>
