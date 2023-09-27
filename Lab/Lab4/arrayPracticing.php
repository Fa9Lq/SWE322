<!DOCTYPE html>
<html>
<body>
<?php

$a = array( "p1" => "orange",
			"p2" => "banana",
            "p3" => "apple");
    
echo count ($a);
echo "<br>";

echo array_values($a)[0];
echo "<br>";


foreach($a as $code => $value ){

echo $value;
echo "<br>";

}
foreach($a as $code => $value ){
if($code == "p2"){
echo $value;
}
}
?>

</body>
</html>
