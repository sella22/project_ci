<?php

class hitung
{

	function luasbalok($p, $l, $t)
	{
		// $luasb = (2 * $p * $l) + (2 * $p * $t) + (2 * $l * $t);
		$luasb = 2 * (($p * $l) + ($p * $t) + ($l * $t));
		echo "Panjang : " . $p . " <br>Tinggi " . $t . "<br>Lebar " . $l . "<br>Luas Permukaan Balok adalah :" . $luasb;
		echo '<hr>';
		$volume = $p * $l * $t;
		echo "Panjang : " . $p . " <br>Tinggi " . $t . "<br>Lebar " . $l . "<br> Volume Balok adalah :" . $volume;
	}
}
