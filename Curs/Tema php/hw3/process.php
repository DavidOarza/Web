<html>
  <head>
    <title></title>
  </head>
  <body>
    <?php
      $n = $_POST["elements"];
      $arr1 = trim($_POST["arr1"]);
      $arr2 = trim($_POST["arr2"]);
      $number = 0;
      $array1 = array();
      $array2 = array();
      for ($x = 0; $x < strlen($arr1); $x++) {
        if($x == strlen($arr1)-1)
          {$number = $arr1[$x];
          array_push($array1, $number);
          $number = 0;}
        if(ctype_space($arr1[$x]) == true)
          {
            array_push($array1, $number);
            $number = 0;
          }
        else
          {if($number == 0)
              $number = $arr1[$x];
           else
              $number = ($number*10) + $arr1[$x];
          }
      }

      $number = 0;
      for ($x = 0; $x < strlen($arr2); $x++) {
        if($x == strlen($arr2)-1)
          {$number = $arr2[$x];
          array_push($array2, $number);
          $number = 0;}
        if(ctype_space($arr2[$x]) == true)
          {
            array_push($array2, $number);
            $number = 0;
          }
        else
          if($number == 0)
            $number = $arr2[$x];
          else
            $number = ($number*10) + $arr2[$x];
      }

      if(sizeof($array1) < $n)
        echo "Not enough elements in the first array";
      else {
        if(sizeof($array1) > $n)
          echo "Too many elements in the first array";
        else
          if(sizeof($array2) < $n)
            echo "Not enough elements in the second array";
          else {
            if(sizeof($array2) > $n)
              echo "Too many elements in the second array";
            else
            {
              for($x=0; $x < $n; $x++)
              {
                echo $array1[$x] + $array2[$x] . " ";
              }
            }
          }
      }
     ?>
  </body>
</html>
