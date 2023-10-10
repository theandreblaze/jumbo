<DOCTYPE html>

<html>
<head>
_SuperGblobals in PHP
</head>
<body>
<h1>
Server Details
</h1>

<ul>
<?php


//superglobals are objects available by default in the PHP 'prelude'

//naming convention is to precede name with an underscore
foreach($_SERVER as &$i){

	echo "<br><li>$i;</li>";

}
?>
</ul>



</body>

</html>
