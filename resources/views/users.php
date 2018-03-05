<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?= e($title) ?></h1>
    <ul>
      <?php foreach ($users as $user): ?>
        <li><?= e($user) ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
