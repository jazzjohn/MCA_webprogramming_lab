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
	<h1 align="center">strcasecmp function</h1>
<?php
$str1="Anil";
$str2="anil";
echo strcasecmp($str1,$str2)."<br>";
$str3="anil";
$str4="anil";
echo strcasecmp($str3,$str4)."<br>";
?>
</div>

</body>
</html>
