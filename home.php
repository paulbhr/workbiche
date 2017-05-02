<?php
  require 'model.php';
  $user = getuser()->fetchAll();
  $workspaces = getworkspaces()->fetchAll();
  $todos = getlist()->fetchAll();
  require 'view.php';
