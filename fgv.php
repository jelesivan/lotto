<?php
function sorsolas()
{
	$kihuzottak=0;
	while($kihuzottak<5)
	{
			$sorsoltszam=rand(1,90);
			if(!isset($tomb[$sorsoltszam]))
			{
					$tomb[$sorsoltszam]=1;
					$kihuzottak++;
			}
	}
	return $tomb;
	// var_dump($tomb);
}
?>