<!DOCTYPE html>
<html>
<head>
	<title>Curso de MVC</title>
</head>
<body>

<h1> Curso de MVC - mjailton - CLIENTE </h1>
<p>Estamos estudando PHP.</p>
<!--<ul>
    <li>Nome: <?=$nome?></li>
    <li>Email: <?=$email?></li>
    
</ul>-->

<?php

foreach ($clientes as $cliente ) {
       echo $cliente["nome"] . " - " . $cliente["email"] . "<br>";
      }

?>

</body>
</html>
