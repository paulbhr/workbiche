<!doctype html>
<html>
<head>
  <meta charset="utf-8" lang="fr">
  <title>Work Biche!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav>
    <img src="maquette/logoplaceholder.ico" alt="logo">
    <h1>Work, <?php echo $user[0] ?> !</h1>
    <form action="home.php" method="post">
      <select method="post" name="space">
      <?php foreach ($workspaces as $workspace) : ?>
        <option value="<?php echo $workspace['id'];?>">
          <?php echo $workspace['name']; ?>
        </option>
      <?php endforeach ?>
      </select>
      <input type="submit" value="go">
    </form>
  </nav>

  <main>
    <?php require 'workspace.php' ?>


    <form class="list" action="add.php" method="post">
      <label>Ajouter une tâche :</label>
      <input type="text" name="task" value="">
      <select name="workspaceid">
        <?php foreach ($workspaces as $workspace) : ?>
          <option value="<?php echo $workspace['id'];?>">
            <?php echo $workspace['name']; ?>
          </option>
        <?php endforeach ?>
      </select>
      <label>Famille</label>
      <input type="text" name="family" value="">
      <label>Priorité</label>
      <select name="priority">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <label>Durée</label>
      <input type="number" name="time" min="0" max="24">
      <input type="submit" value="+">
    </form>

  </main>

  <footer>
    <div id="about">
      <h1>À Propos</h1>
      <p>Lorem Ipsum etc</p>
    </div>
    <header>
      <h1>Work</h1><img src="maquette/logoplaceholder.ico"><h1>Biche !</h1>
    </header>
    <div id="links">
      <h1>Liens</h1>
      <p>Contact, Partage etc</p>
    </div>
  </footer>
</body>
</html>
