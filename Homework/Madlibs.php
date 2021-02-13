<!doctype html>
<html>
<head>
<title>Madlibs</title>
</head>
<body>

<h1>Madlibs</h1>

<div id="madlibs" name="madlibs">
 <form method="post" name="madlibs">
color: <input type="text" name="color" id="color"/> <br>
noun: <input type="text" name="noun" id="noun"/><br>
athlete Name: <input  type="text" name="athlete_name" id="athlete_name"/><br>
<input type="submit" name="submit-btn" value="Libit!"/>
</form>
</div>

<?php

$Color =$_POST["color"];
$Noun =$_POST["noun"];
$Athletename =$_POST["athlete_name"];

echo "gatorade are $Color";
echo "yellow are $noun";
echo "name of the athlete $atheletename" 

?>

</body>
</html>