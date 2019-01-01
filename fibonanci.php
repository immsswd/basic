<!DOCTYPE html>
<html>
<head>
	<title>Fibonanci</title>
</head>
<body>
	<code>
		<pre>
		$cnt 	= 0;

		$numb1	= 0;
		$numb2	= 1;

		echo "$numb1, ";
		echo "$numb2, ";
			while ($cnt < 20) {
    		$numb3 = $numb1 + $numb2;
    		echo "$numb3, ";

   		$numb1 = $numb2;
    	$numb2 = $numb3;
    	$cnt = $cnt+1;
			}
	</pre>	
	</code>
	<p>
		<?php

		$cnt 	= 0;

		$numb1	= 0;
		$numb2	= 1;

		echo "$numb1, ";
		echo "$numb2, ";
			while ($cnt < 20) {
    		$numb3 = $numb1 + $numb2;
    		echo "$numb3, ";

   		$numb1 = $numb2;
    	$numb2 = $numb3;
    	$cnt = $cnt+1;
			}
		?>
	</p>
</body>
</html>