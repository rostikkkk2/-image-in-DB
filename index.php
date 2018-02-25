<?php include_once 'photos/select.php' ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>new project</title>
  </head>
  <body>
    <form class="" enctype="multipart/form-data" action="photos/create.php" method="post">
      <label for="">add file<input type="file" name="photo" value=""></label>
      <input type="submit" name="" value="sent" >
    </form>
    <img src="<?= getUserAvatar('2') ?>" alt="">
  </body>
</html>
