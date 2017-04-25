<!doctype htmt>
<html>
<head>
  <meta charset="utf-8" lang="fr">
  <title>Work Biche!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php

    $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');

    $todos = $bdd->query('select distinct * from t_odo order by todo_id asc');
    $family = $bdd->query('select distinct todo_family from t_odo');
    foreach ($todos as $todo):
    ?>

    <article>

        <h1><?php echo $todo['todo_family'] ?></h1>

        <p><?php echo $todo['todo_name'] ?></p>

    </article>
  <?php endforeach ?>
</body>

</html>
