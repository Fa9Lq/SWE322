<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4</title>
</head>
<body>
    
<table>


</table>



<?php


$namesOfClassMate = array("Abdulaziz","Faisal", "Khalid1", "Khalid2");
echo "<h1>Faisal Alshuwaier 202011249</h1>";
echo "<h3> Classmates are:<h3>";

$length = count($namesOfClassMate);

for ($counter = 0; $counter < $length ; $counter++ ){

    echo "<li>$namesOfClassMate[$counter]</li>";
    echo "<br>";

}
echo "<hr>";

$courseArray = array("CIS 103" => "programming fundemental I",
 "CIS 104" => "programming fundemental II",
 "CIS 202" => "Data Structure"
);

$course_length = count($courseArray);

echo "<table border ='3'>";
echo "<th> Course Code</th>";
echo "<th> Course Name</th>";
foreach($courseArray as $code => $value ){
    echo "<tr>";
    echo "<td>$code</td>";
    echo "<td>$value</td>";
    echo "</tr>";

}
echo "</table>";
?>


<style>


li {
    color: orange;
}



</style>
</body>

</html>

