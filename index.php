<?php session_start(); ?>
<?php session_unset(); ?>
<?php require 'view/head.php' ?>
<body>
<index ng-app="">
  <h1>Coucou {{ quiestce }} !</h1>

  <form ng-hide="signup" action="home.php" method="post">
    <fieldset>
      <label>C'est moi</label>
      <input type="text" name="username" ng-model="quiestce">
    </fieldset>
    <fieldset>
      <label>La preuve</label>
      <input type="password" name="password">
      <input type="submit" value="😘">
    </fieldset>
  </form>

  <p ng-click="signup=!signup" ng-hide="signup">Pas encore inscrit ?</p>

  <form ng-show="signup" action="model/adduser.php" method="post">
    <fieldset>
      <label>Bienvenue</label>
      <input type="text" name="newusername" ng-model="quiestce">
    </fieldset>
    <fieldset>
      <label>Mot de passe</label>
      <input type="password" name="newuserpass">
      <input type="submit" value="😘">
    </fieldset>
  </form>

  <p ng-click="signup=!signup" ng-show="signup">Déjà inscrit ?</p>
</index>
<?php require 'view/footer.php' ?>
</body>
</html>
