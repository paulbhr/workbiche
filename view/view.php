<?php require 'head.php' ?>
<body>
  <nav>
    <hello>
      <a href="./index.php"><img src="./style/logo.png" alt="logo"></a>
      <h1>Work, <?php echo $username; ?> !</h1>
    </hello>
    <form action="./model/switchspace.php" method="post">
      <button class="actual" name="space" value="<?php echo $_SESSION['space'];?>">
        <?php echo $_SESSION['workspacename']; ?>
      </button>
      <?php foreach ($workspaces as $workspace) :
        if ($workspace['name'] !== $_SESSION['workspacename'])
        {?>
        <button name="space" value="<?php echo $workspace['id'];?>">
          <?php echo $workspace['name']; ?>
        </button>
      <?php } endforeach; ?>
    </form>
    <form action="./model/addspace.php" method="post">
      <input type="hidden" name="userid" value="<?php echo $userid ?>">
      <input type="text" name="workspacename" value="" placeholder="Nouvel Espace de Travail :">
      <input type="submit" value="+">
    </form>
  </nav>

  <main ng-app="">
    <section>
      <?php require 'workspace.php' ?>
    </section>
      <?php if($workspace != null) {
        require 'addremoveforms.php';
      } ?>
  </main>

  <?php require 'footer.php' ?>
</body>
</html>
