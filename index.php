<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Security-Policy" content="script-src 'self' 'sha256-BiePbqQtagKGQmuI48n83dv2rszRIVhEpnYMBGrZ3+U='">
<?php
	//xss mitigation functions
	function xssafe($data,$encoding='UTF-8')
	{
	   return htmlspecialchars($data,ENT_QUOTES | ENT_HTML401,$encoding);
	}
	function xecho($data)
	{
	   echo xssafe($data);
	}


	$pagina = (isset($_GET['pagina']))?xssafe($_GET['pagina']):'';
?>
	<meta charset="UTF-8">
	<title>Testing</title>
	<!--script src="//code.jquery.com/jquery-1.11.3.min.js"></script-->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
	Pollos voladores batman!!!
	<br>
	<?php 

	xecho($pagina);

	echo '<br>'.$_GET['pagina'];

	?>
	<script type="text/javascript" nonce="sha256-BiePbqQtagKGQmuI48n83dv2rszRIVhEpnYMBGrZ3+U=">
		$(document).ready(function(){
			//alert('Lol');
		});
	</script>
</body>
</html>