<?php
function getfamily($workspace) {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $fams = $bdd->query("SELECT DISTINCT family FROM todo WHERE workspaceid=$workspace");
  return $fams;
};

function gettasklist($family) {
  $bdd = new PDO('mysql:host=localhost;dbname=workbiche;charset=utf8', 'workbiche', 'Coucou1$');
  $todos = $bdd->query("SELECT * FROM todo WHERE family='$family' ORDER BY priority ASC");
  return $todos;
};
$workspace = $_POST['space'];
$fams = getfamily($workspace)->fetchAll();

foreach ($fams as $fam): ?>
  <article class="list">
  <h1><?php echo $fam[0]; ?></h1>
  <?php
  $todos = gettasklist($fam[0])->fetchAll();
  foreach ($todos as $todo) :
    ?>
    <content>
      <p>
        <?php
        echo $todo['task'].", durée(heures):".$todo['time'];
        ?>
      </p>
      <form id="delete" method="post" action="delete.php">
        <input type="hidden" name="task" value="<?php echo $todo['id']; ?>"/>
        <input type="submit" name="delete" value="-"/>
      </form>
    </content>
  <?php endforeach; ?>
  </article>
<?php endforeach;?>
