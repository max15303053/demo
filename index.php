<pre><?php

	function autoload(){
		echo 1;
	}
	spl_autoload_register('autoload');
	
	$x = new A;
?>
