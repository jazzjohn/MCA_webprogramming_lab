<html>
<head>
<title>substr function</title>
<style>
.container{
width:40%;
color: #d8d8d8;
background-color: #49826d;
border-radius:8px;
transform:translatey(40%);
margin:auto;
padding:2em;
}
</style>
</head>
<body>
<div class="container">
	<h1 align="center">strpos function</h1>
<?php
$string="i am anil";
$pos=strpos($string,"nil");
if($pos===false)
	echo "String 'nil' in ".$string." NOT FOUND<br>";
else
	echo "String 'nil' in ".$string." FOUND..!<br>";
?>
</div>

</body>
</html>
