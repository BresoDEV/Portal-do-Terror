<?php

$header = @get_headers('https://www.google.com');
if(substr($header[0], 9, 3) == 200)
	echo "Existe";
else
	echo "Nao existe";


?>