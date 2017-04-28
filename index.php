<!doctype html>
<html>
<head>
<meta charset="utf-8" lang="fr">
<title>Work Biche!</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body id="index" ng-app="">
  <h1>Coucou, {{ quiestce }}</h1>
  <form ng-hide="signup" action="home.php" method="post">
    <label>C'est moi :</label>
    <input type="text" name="username" ng-model="quiestce">
    <br>
    <label>La preuve :</label>
    <input type="password" name="password">
    <br>
    <input type="submit" value="😘">
  </form>
  <p ng-click="signup=!signup">Pas encore inscrit ?</p>
  <form ng-show="signup" action="adduser.php" method="post">
    <label>Coucou :</label>
    <input type="text" name="newusername" ng-model="quiestce">
    <br>
    <label>La preuve :</label>
    <input type="password" name="newuserpass">
    <br>
    <input type="submit" value="😘">
  </form>
</body>
</html>
