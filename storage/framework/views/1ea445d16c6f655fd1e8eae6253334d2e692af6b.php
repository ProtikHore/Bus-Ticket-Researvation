<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2>Ticket Purhase successfully</h2>
    <a href="<?php echo e(route('home.index')->with('id', $id)); ?>">Home</a>

  </body>
</html>
