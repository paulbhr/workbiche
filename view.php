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
  <?php foreach ($todos as $todo): ?>
    <article>

        <h1><?php echo $todo[1] ?></h1>

        <p><?php echo $todo['task'].", durée(heures):".$todo['time'] ?></p>

    </article>
  <?php endforeach ?>
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
