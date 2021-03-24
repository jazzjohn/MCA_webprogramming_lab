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
	<h1 align="center">substr function</h1>
<b> If the start is non-negative, the returned string will start at the start'th position in string, start from 0</b><br><br>
<?php 
	echo "->Substring with positive start :".substr("abcdef",2)."<br><br>";
?>
<b> If the start is negative, the returned string will start at the start'th charecter in string, from the end of the string</b><br><br>
<?php 
	echo "->Substring with negative start :".substr("abcdef",-2)."<br><br>";
?>
<b> If the start is less than or equal to start charecter long, false will return</b><br><br>
<?php 
	echo "->Start is <= string :".substr("abcdef",-2)."<br><br>";
	echo "<center>FINISHED</center>";
?>
</div>

</body>
</html>
