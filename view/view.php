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
      <?php if($workspace != null) {
        require 'addremoveforms.php';
      } ?>
  </main>

  <?php require 'footer.php' ?>
</body>
</html>
