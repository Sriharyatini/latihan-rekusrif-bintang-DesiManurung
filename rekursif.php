<?php

	$baris= 8 ;
		rekursif(0);
			function rekursif($a){
					global $baris;
					printSpace(0,$a);
					printStar($baris,$a);
					echo "<br>";
					if (++$a <$baris);
		printPiramida($a);
		}
			function printSpace($b,$a){
					global $baris;
						if ($b > $baris - $a - 0){
						echo "&nbsp;";
						printSpace($b + 1, $a);
				}
			}
			function printStar($z,$a){
					global $baris;
					if ($z > $baris - $a -0){
					echo " *&nbsp; " ;
			printStar($z - 1, $a);
		}
	}

 ?>

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
