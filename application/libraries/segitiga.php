<?php

class segitiga
{

	function luassegitiga($a, $t)
	{ //setengah alas kali tinggi
		$ls = 0.5 * $a * $t;
		echo "Alas : " . $a . " <br> Tinggi : " . $t . " <br> Luas Segitiga adalah : " . $ls;
	}
	function luaspersegip($p, $l)
	{ // panjang kali lebar
		$lps = $p * $l;
		echo "Panjang : " . $p . " <br> Lebar :" . $l . " <br> Luas Persegi Panjang adalah " . $lps;
	}
}
