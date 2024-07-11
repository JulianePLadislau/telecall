<?php
    define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', ''); 
	define('DB_NAME', 'projeto');

    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($connection === false){
		die("ERROR: Não foi possível conectar. " . mysqli_connect_error());
	} 

	else {
		/* set autocommit para falso */
		mysqli_autocommit($connection, FALSE);
 	}
?>