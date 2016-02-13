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

if ($_FILES && $_FILES['filename']['error']== UPLOAD_ERR_OK) {

    $name = $_FILES['filename']['name'];
    echo $name.'<br>';
    $name = lineTransform($name);
    echo $name;
}
?>

<br>
<a href="index.php">Содержание</a>


<?php 

  function lineTransform($name, $lenNameMax=200, $extensMax=50) {

    $name = strtr($name, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
    $name = strtr($name, array('А'=>'A','Б'=>'B','В'=>'V','Г'=>'G','Д'=>'D','Е'=>'E','Ё'=>'E','Ж'=>'J','З'=>'Z','И'=>'I','Й'=>'Y','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N','О'=>'O','П'=>'P','Р'=>'R','С'=>'S','Т'=>'T','У'=>'U','Ф'=>'F','Х'=>'H','Ц'=>'C','Ч'=>'CH','Ш'=>'SH','Щ'=>'SHCH','Ы'=>'Y','Э'=>'E','Ю'=>'YU','Я'=>'YA','Ъ'=>'','Ь'=>''));
    $name = strtolower($name);
    $name = str_replace(" ", "", $name);                                      // убираем пробелы
    $name = str_replace("-", "", $name);                                      // убираем тире

    
    //Этап работы с длиной имени и расширения файла
    $name_pieces = explode(".", $name); //разбили строку на части
    
    $count = count($name_pieces);

    if ( $count>1 ) {
      for ($i=1; $i<$count-2; $i++) {
        $name_pieces[0] = $name_pieces[0].$name_pieces[$i];
      }
      $name_pieces[1] = $name_pieces[$count-1];
    }
      
      
    if (mb_strlen($name_pieces[1])>$extensMax) {
        $name_pieces[1] = substr($name_pieces[1],0,$extensMax);                      //обрезали расширение, если больше 50символов
    }
  

    if ( mb_strlen($name_pieces[0])+mb_strlen($name_pieces[1]) > $lenNameMax ) {     //обрезали основную часть
        $name_pieces[0] = substr($name_pieces[0],0,$lenNameMax-mb_strlen($name_pieces[1]));
    }


    $name = $name_pieces[0].'.'.$name_pieces[1];
    
    return $name;
  }
  

?>

  </body>
</html>