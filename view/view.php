<?php require 'head.php' ?>
<body>
  <nav>
    <hello>
      <a href="./index.php"><img src="./style/logoplaceholder.ico" alt="logo"></a>
      <h1>Work, <?php echo $username; ?> !</h1>
    </hello>
    <form action="./model/switchspace.php" method="post">
      <?php foreach ($workspaces as $workspace) : ?>
        <button name="space" value="<?php echo $workspace['id'];?>">
          <?php echo $workspace['name']; ?>
        </button>
      <?php endforeach; ?>
    </form>
    <form action="./model/addspace.php" method="post">
      <input type="hidden" name="userid" value="<?php echo $userid ?>">
      <input type="text" name="workspacename" value="" placeholder="Nouvel Espace de Travail :">
      <input type="submit" value="+">
    </form>
  </nav>

  <main ng-app="">
    <h1 id="title">
      <?php
      echo $_SESSION['workspacename'];
      ;?>
    </h1>
    <section>
      <?php require 'workspace.php' ?>
    </section>
    <form class="add" action="./model/add.php" method="post">
      <h1>Ajouter une tâche :</h1>
      <input type="text" name="task" value="">
      <select name="workspaceid">
        <option value="<?php echo $_SESSION['space'];?>">
          <?php
          echo $_SESSION['workspacename'];
          ;?>
        </option>
        <?php foreach ($workspaces as $workspace) :
          if( $workspace['name'] !== $_SESSION['workspacename']) {
            ?>
          <option value="<?php echo $workspace['id'];?>">
            <?php
              echo $workspace['name'];
            } ?>
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
    <form class="remove" action="./model/removespace.php" method="post">
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

  <?php require 'footer.php' ?>
</body>
</html>
