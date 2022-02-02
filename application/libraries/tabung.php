<?php

class tabung
{
	function hitungtabung($r, $t)
	{
		// $luasb = (2 * $p * $l) + (2 * $p * $t) + (2 * $l * $t);
		$volume = 3.14 * $r * $r * $t;
		echo "Phi : 3.14 <br> Jari-jari " . $r . "<br>Tinggi " . $t . "<br>Volume Tabung adalah :" . $volume;
		echo '<hr>';
		$luas = 2 * 3.14 * $r * ($r + $t);
		echo " Luas Permukaan Tabung adalah :" . $luas;
		echo '<hr>';
		$luass = 2 * 3.14 * $r *  $t;
		echo " Luas Selimut Tabung adalah :" . $luass;
	}
}
