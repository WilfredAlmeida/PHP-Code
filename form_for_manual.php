
<!DOCTYPE html>
<html>
    <body>
        <form action="form_for_manual.php" method="GET">
            Enter Name: <input type="text" name="name"><br>
            Available Electives are:<br>
            <list>
                <option>WBP</option>
                <option>NIS</option>
                <option>DWM</option>
            </list><br>
            Select Elective:
            <select name="elective">
                <option name="WBP">WBP</option>
                <option name="NIS">NIS</option>
                <option value="DWM">DWM</option>
            </select><br>
            <input type="hidden" name="department" value="CO"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php
    $student_name = $_GET["name"];
    $student_elective = $_GET["elective"];
    $student_department = $_GET["department"];

    echo "Student Name: ".$student_name;
    echo "<br>Student Elective: ".$student_elective;
    echo "<br>Student Department: ".$student_department;
?>