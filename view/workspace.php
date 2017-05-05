
<?php foreach ($fams as $fam): ?>
  <article class="list">
  <h1><?php echo $fam[0]; ?></h1>
  <?php
  $todos = gettasklist($fam[0])->fetchAll();
  foreach ($todos as $todo) :
    ?>
    <content>
      <?php
      $string = str_replace(' ', '', $todo['task']); $str = substr($string, 0, 3);
      ?>
      <p ng-hide="<?php echo $str;?>">
        <?php
        echo $todo['task']." ";
        if($todo['time'] !== "0") {
          echo "(".$todo['time']."h)";
        }
        ?>
      </p>
      <form class="edit" ng-show="<?php echo $str;?>" action="./model/edit.php" method="post">
        <input type="text" name="task" value="<?php echo $todo['task'] ?>">
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
        <input type="text" name="family" value="<?php echo $todo['family'] ?>" placeholder="Catégorie">
        <label>Priorité</label>
        <select name="priority">
          <option value="<?php echo $todo['priority'] ?>"><?php echo $todo['priority'] ?></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        <label>Durée</label>
        <input type="number" name="time" min="0" max="24" placeholder="Durée" value="<?php echo $todo['time'] ?>">
        <button name="submit" value="<?php echo $todo['id'];?>">Edit</button>
      </form>
      <button ng-click="<?php echo $str;?>=!<?php echo $str;?>" ng-hide="<?php echo $str;?>">Edit</button>
      <form id="delete" method="post" action="./model/delete.php">
        <button name="task" value="<?php echo $todo['id']; ?>"/>-
        </button>
      </form>
    </content>
  <?php endforeach; ?>
  </article>
<?php endforeach;?>
