<html>
<head>
<title>var_dump function
</title>
<style>
.container{
width:40%;
color: #d8d8d8;
background-color: #49826d;
border-radius:8px;
transform:translatey(50%);
margin:auto;
padding:2em;
}
</style>
</head>
<body>
<div class="container" align="center">
	<h1>var_dump function</h1>
	<?php
		$val1=678;
		$val2="a678";
		$val3="678";
		$val4="BetterThanLike.com";
		$val5=698.99;
		$val6=+125689.66;
		echo var_dump($val1)."<br>";
		echo var_dump($val2)."<br>";
		echo var_dump($val3)."<br>";
		echo var_dump($val4)."<br>";
		echo var_dump($val5)."<br>";
		echo var_dump($val6)."<br>";
	?>
</div>
</body>
</html>
