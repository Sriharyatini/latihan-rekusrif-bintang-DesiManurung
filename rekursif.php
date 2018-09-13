<?php

	$baris= 5;
		printPiramida(0);
			function printPiramida($a){
					global $baris;
					printSpace(0,$a);
					printStar($baris,$a);
					echo "<br>";
					if (++$a <$baris);
		printPiramida($a);
		}
			function printSpace($b,$a){
					global $baris;
						if ($b > $baris - $a - 1){
						echo "&nbsp;";
						printSpace($b + 1, $a);
				}
			}
			function printStar($z,$a){
					global $baris;
					if ($z > $baris - $a -1){
					echo " *&nbsp; " ;
			printStar($z - 1, $a);
		}
	}

 ?>

//==============================================================================//

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		Masukkan Bilangannya : <input type="text" name="angka">
		<input type="Submit" name="Submit" value="Submit">
	</form>

<?php
	if (isset($_POST['Submit'])) {
		$bil = $_POST['angka'];
			for ($x=$bil; $x >= 1; $x--){
				for ($y=$x; $y >= 1; $y--) { 
					echo $y;
				}
				echo "<br>";
			}
		}
	?>
</body>
</html>


//==========================================================================//

<?php
echo " Latihan <br/><br/>" ;
for ($i=1; $i <=5 ; $i++) {
  $j=1;
  while ($j <= $i) {
    $j++;
    echo $i;
  }
  echo "<br/>";
}
 ?>
 </body>
 </title>
 </html>
