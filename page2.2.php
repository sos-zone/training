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
    <button class="flash">Hide the button</button>

    <br>
    <a href="index.php">Содержание</a>





    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {

        //hide the button
        $('.flash').click( function(event){
          $('.flash').css('visibility', 'hidden');
        });


      });
    </script>

  </body>
</html>