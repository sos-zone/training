<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Чтение содержимого файла</title>
  </head>
  <body>
    <?php

      $content = file($_SERVER['SCRIPT_FILENAME']);
      
      foreach ($content as $string) {
          echo htmlentities($string)."<br>";
      }

    ?>
    
    <br>
    <a href="index.php">Содержание</a>
  </body>
</html>