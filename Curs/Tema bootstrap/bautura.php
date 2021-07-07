<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title> FORMULAR COMANDA BAUTURA</title>
	</head>

	<body>
		<h1 style="width: 500px; margin: auto">Formular comanda bautura</h1>

		<form action ="bautura.php" style="width: 500px; margin: auto" method='post' name='f1'>

		<label for="tip_bautura">Bautura</label>
		<select class="form-control" id="tip" name='tip'>
			<option value='Pepsi'> Pepsi </option>
			<option value='Cola'> Cola </option>
			<option value='Fanta'> Fanta </option>
			<option value='Sprite'> Sprite </option>
			<option value='Fresh'> Fresh </option>
			<option value='Apa plata'> Apa plata </option>
			<option value='Apa minerala'> Apa minerala </option>
		</select>

		</br>

		<label for="volum">Volum</label>
		<select class="form-control" id="vol" name='vol'>
			<option value='0.5'> 0.5L </option>
			<option value='1'> 1L </option>
			<option value='1.5'> 1.5L </option>
			<option value='2'> 2L </option>
			<option value='2.5'> 2.5L </option>
		</select>

		</br>

		<label for="cantitate">Cantitate</label>
		<select class="form-control" id="cant" name='cant'>
			<option value='1'> 1 BUC </option>
			<option value='2'> 2 BUC </option>
			<option value='3'> 3 BUC </option>
			<option value='4'> 4 BUC </option>
			<option value='5'> 5 BUC </option>
		</select>

		<!-- <input type='number' name='papa' step='any' required="required" /> -->
		</br> </br>
		<input class="form-control" type="submit" name='Calculate' value="Calculate" />

		<hr> </br>
		</form>

		<?php
		$cant=$_POST['cant'];
		$vol=$_POST['vol'];
		$tip=$_POST['tip'];
		$prices = array();
		$drinks = array();

		$fh = fopen('price_per_liter.txt','r');
		while ($line = fgets($fh)) {
		  // <... Do your work with the line ...>
			array_push($prices, $line);
			}
		fclose($fh);

		include "SimpleXLSX.php";

	  if ( $xlsx = SimpleXLSX::parse('sucuri.xlsx') ) {

			$i = 0;

	    foreach ($xlsx->rows() as $elt) {
		      if ($i == 0) {
		        array_push($drinks, $elt[0]);
		      } else {
		        array_push($drinks, $elt[0]);
		      }
				$i++;
	    }

	  } else {
	    echo SimpleXLSX::parseError();
	  }

		function drawTable($drinks, $prices, $cant, $vol, $tip){
		echo "<table class='table table-bordered table-hover' style='width: 500px; margin: auto'>";

		for($tr=0;$tr<=6;$tr++){
		    echo "<tr>";
		          echo "<td align='center'>". $drinks[$tr] ."</td>";
							echo "<td align='center'>". $prices[$tr] . "RON / Litru"."</td>";
		    echo "</tr>";
		}

		echo "</table>";
		}

		function calculate($drinks, $prices, $cant, $vol, $tip)
		{
			if($drinks[0] == $tip)
			{
					$pret = floatval($prices[0]) * $cant * $vol;
					echo "<p align=center> Bautura $drinks[0] la  $vol L x  $cant , costa: $pret RON</p>";
			}
			if($drinks[1] == $tip)
			{
					$pret = floatval($prices[1]) * $cant * $vol;
					echo "<p align=center> Bautura $drinks[1] la  $vol L x  $cant , costa: $pret RON</p>";
			}
			if($drinks[2] == $tip)
			{
					$pret = floatval($prices[2]) * $cant * $vol;
					echo "<p align=center> Bautura $drinks[2] la  $vol L x  $cant , costa: $pret RON</p>";
			}
			if($drinks[3] == $tip)
			{
					$pret = floatval($prices[3]) * $cant * $vol;
					echo "<p align=center> Bautura $drinks[3] la  $vol L x  $cant , costa: $pret RON</p>";
			}
			if($drinks[4] == $tip)
			{
					$pret = floatval($prices[4]) * $cant * $vol;
					echo "<p align=center> Bautura $drinks[4] la  $vol L x  $cant , costa: $pret RON</p>";
			}
			if($drinks[5] == $tip)
			{
					$pret = floatval($prices[5]) * $cant * $vol;
					echo "<p align=center> Bautura $drinks[5] la  $vol L x  $cant , costa: $pret RON</p>";
			}
			if($drinks[6] == $tip)
			{
					$pret = floatval($prices[6]) * $cant * $vol;
					echo "<p align=center> Bautura $drinks[6] la  $vol L x  $cant , costa: $pret RON</p>";
			}
		}

		calculate($drinks, $prices, $cant, $vol, $tip);
		drawTable($drinks, $prices, $cant, $vol, $tip);

		?>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>
