 <?php

session_start();


if($_SESSION['usuario'])
	{
	
		

	}else
		{
			// echo '<META HTTP-EQUIV="REFRESH" CONTENT="0.1;URL=view/modules/login.php">';
			header("LOCATION:view/login.php");
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		require_once 'controller/session_controller.php';
		
		@$pag=$_GET['pag'];
		// $paginas=new sessionController($pag);
		// $paginas->paginas();
		echo $pag;






	?>
</body>
</html>