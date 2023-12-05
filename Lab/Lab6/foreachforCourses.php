<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

class Courses {

    public $Code;
    public $Name;
    public $Description;
    public $Grade;

    function set_Code($v){
        $this->Code = $v;
    }

    function set_Name($v){
        $this->Name = $v;
    }

    function set_Description($v){
        $this->Description = $v;
    }

    function set_Grade($v){
        $this->Grade = $v;
    }

    function get_Code(){
        return $this->Code;
    }

    function get_Name(){
        return $this->Name;
    }

    function get_Description(){
        return $this->Description;
    }

    function get_Grade(){
        return $this->Grade;
    }

    function isAPlus(){
        if($this->Grade == "A+"){
            return true;
        }
        else {
            return false;
        }
    }

    function CourseDetails(){
        return "Course Code: ".$this->Code ." Course Name: ". $this->Name.
         " Course Description: ".$this->Description . " Course Grade: ". $this->Grade;
    }
}

$Course1 = new Courses();
$Course2 = new Courses();
$Course3 = new Courses();

$Course1->set_Code("321");
$Course1->set_Name("SWE");
$Course1->set_Description("For User Interface");
$Course1->set_Grade("A");

$Course2->set_Code("322");
$Course2->set_Name("SWE");
$Course2->set_Description("For Web Designing");
$Course2->set_Grade("A+");

$Course3->set_Code("302");
$Course3->set_Name("SWE");
$Course3->set_Description("Architecture Design");
$Course3->set_Grade("B+");

$CourseArray = [$Course1, $Course2, $Course3];

echo "<table border='1'>";
echo "<tr>";
echo "<th>Course Code</th>";
echo "<th>Course Name</th>";
echo "<th>Course Description</th>";
echo "<th>Course Grade</th>";
echo "</tr>";

foreach($CourseArray as $course) {
    echo "<tr>";
    echo "<td>".$course->get_Code()."</td>";
    echo "<td>".$course->get_Name()."</td>";
    echo "<td>".$course->get_Description()."</td>";
    echo "<td>".$course->get_Grade()."</td>";
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
