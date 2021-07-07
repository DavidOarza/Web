<html>
  <head>
    <title>Generate HTML</title>
  </head>

  <body>
    <?php
      echo "File Created";
      $myFile = "HTML_FILE.html";
      $fh = fopen($myFile, 'w');
      $string = "
      <html>
        <head>
          <title>PHP PAGINI WEB DINAMICE</title>
        </head>
		<body>
		</body>
      </html>";
      fwrite($fh, $string);
      fclose($fh);
    ?>
  </body>


</html>