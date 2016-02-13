<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Исчезающая кнопка</title>
  </head>
  <body>
    <button id="btn1" onclick="hide()">Hide the button</button>

    <br>
    <a href="index.php">Содержание</a>




  
    <script type="text/javascript">
       function hide() {
          document.getElementById('btn1').style.visibility='hidden';

       }
       
    </script>

  </body>
</html>