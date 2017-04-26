<!doctype html>
<html>
<head>
  <meta charset="utf-8" lang="fr">
  <title>Work Biche!</title>
  <link rel="stylesheet" type="text/css" href="maquette/maquette.css">
</head>
<body>
  <nav>
    <img src="maquette/logoplaceholder.ico" alt="logo">
    <h1>Work, $user !</h1>
      <select name="utilisateurs">
        <option value="Paul Roche">Paul Roche</option>
        <option value="Simplon">Simplon</option>
      </select>
      <img src="maquette/ramoloss.jpg" width="35px" height="35px" style="border-radius: 50%; border: 2px ridge white;">
  </nav>

  <main>

    <article>
      <?php foreach ($todos as $todo): ?>
        <h1><?php echo $todo['family'] ?></h1>

        <p><?php echo $todo['task'].", durée(heures):".$todo['time'] ?></p>

        <form id="delete" method="post" action="delete.php">
        <input type="hidden" name="task" value="<?php echo $todo['id']; ?>"/>
        <input type="submit" name="delete" value="Delete!"/>
        </form>

      <?php endforeach ?>
    </article>

    <form action="add.php" method="post">
      <label>Ajouter une tâche :</label>
      <input type="text" name="task" value="">
      <label>Espace de Travail</label>
      <select name="workspaceid">
        <option value="1">1</option>
        <option value="2">2</option>
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
      <input type="submit">
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
