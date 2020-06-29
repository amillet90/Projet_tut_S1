<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mesStyles.css">
    <title>Document</title>
</head>
<body>
<h1>permier test</h1>
<form>
	<input type="text" name="entree1">
</form>
<br><br>
test php
<br><br>
<?php
if(isset($_GET['entree1']) and is_numeric($_GET['entree1']))
	$imax=$_GET['entree1'];
else
	$imax=15;
for($i=0;$i<$imax;$i++)
{
    for($j=0;$j<$i;$j++)
        echo '😃';
    echo "<br>";
}
?>
</body>
</html>




