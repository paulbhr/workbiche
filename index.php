<!doctype html>
<html>
<head>
<meta charset="utf-8" lang="fr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Work Biche!</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
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

  <form ng-show="signup" action="adduser.php" method="post">
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

</body>
</html>
