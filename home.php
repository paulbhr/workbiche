<?php
  require 'model.php';
  $user = getuser()->fetch();
  $workspaces = getworkspaces()->fetchAll();
  $todos = getlist()->fetchAll();
  require 'view.php';
