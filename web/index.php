<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Component-based Symfony2 approach</title>
  </head>
  <body>
    <?php $name = isset($_GET['name']) ? $_GET['name'] : "Guy"; ?>
    <h3><?php printf('Wesh %s', $name) ?></h3>
  </body>
</html>
