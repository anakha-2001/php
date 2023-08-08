<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$jsonobj = json_encode($age);
echo $jsonobj;
var_dump(json_decode($jsonobj));
?>

</body>
</html>