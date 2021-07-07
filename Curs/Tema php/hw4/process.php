<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
      $word = $_POST["word"];
      $reverse = strrev($word);
      if($word == $reverse)
      {
        echo "The word is a palindrome";
      }
      else {
        echo "The word is not a palindrome";
      }
     ?>
  </body>
</html>
