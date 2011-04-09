<?php
	$str="";
	$x=1;
	while ( $x <= 10 ) 
	{
		$str.="&ibproName".$x."=Name$x&ibproScore".$x."=$x";
		$x++;
	}

	$str.="&EOS=1&blah";
	echo $str;
?>
