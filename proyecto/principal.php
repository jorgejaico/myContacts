<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>MyContact - Inicio</title>
		<link rel="stylesheet" href="css/full_estils_principal.css">
 		<meta charset="utf-8">
   	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	 
  	  	<!-- Bootstrap -->
  	 	 <link href="css/bootstrap.min.css" rel="stylesheet">
  	 	 <style type="text/css">
			.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
    	</style>
	</head>
	<body>
	<h1>	Bienvenido <?php echo $_SESSION['nombre']; ?></h1>
	<h2><!--<?php echo utf8_encode($_SESSION['nombre']); ?>--><br/><a href="index.php">Logout</a></h2>

		
	</body>
</html>