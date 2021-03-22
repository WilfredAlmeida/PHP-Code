<?php
//read nirali textbook
class Student
{
    var $name,$roll_no;
    function __construct($sname,$srollno)
    {
        $this->name = $sname;
        $this->roll_no = $srollno;
    }

    function putStudent()
    {
        echo "Name: ".$this->name;
        echo "<BR>Roll No: ".$this->roll_no;
    }
}

$stud = new Student("Wilfred",1924);
$stud->putStudent();

$serialized = serialize($stud);
echo "<BR>Serialized Object: ".$serialized;

$file = fopen("f1.txt",'w'); //writing into file
fwrite($file,$serialized); //writing into file

$unserialized = unserialize($serialized);
echo "<BR>Unserialized Object: ";
print_r($unserialized);

?>