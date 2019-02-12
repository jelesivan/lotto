<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
        <?php
			// lottóhúzás
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
			var_dump($tomb);
                        echo "Ez voltak a szám tömb";
            echo "Itt már a php script fut";
        // put your code here
        ?>
    </body>
</html>
