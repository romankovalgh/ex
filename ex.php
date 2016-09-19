<?php
	$a=[1,"kjk",43,42.05,5555];
	$i=0;
	while($i<5){
		echo $a[$i++].'<br>';
	}
	echo '<br>';$i=0;
	do{
		echo $a[$i++].'<br>';
	}while($i<5);
	
?>