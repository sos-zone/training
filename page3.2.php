<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Обработка имени файла</title>
  </head>
  <body>
    <h2>Загрузка файла</h2>

<form method="post" enctype='multipart/form-data' action="page3.2.php">
    Выберите файл:
    <input type='file' name='filename' size='10' /><br /><br />
    <input type='submit' value='Загрузить' />
</form>

<?php
include('class/File.php');

if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK) {

    $File = new File(200,50);
    $File->name = htmlspecialchars($_FILES['filename']['name']);
    
    echo $File->name.'<br>';
    
    $File->setName( $File->fileNameTransform() );
    
    echo $File->name;
}
  

?>
<br>
<a href="index.php">Содержание</a>

  </body>
</html>