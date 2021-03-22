<!--------------------------------------Start: HTML Code--------------------------------------------------------->
<!DOCTYPE html>
<html>
    <head>
        <title>Book Sales Record Management</title>
    </head>
    <body>
        <!------------------------------Start: Form to get data from user to store into Database----------------->
        <form name="input_form" action="Project.php" method="GET">
            Book Name:<input name="book_name" type="text"><br>
            Number of Books Required:<input type="number" name="book_amount"><br>
            Customer Name:<input type="text" name="customer_name"><br>
            Sale Date:<input type="date" name="sale_date"><br><br>
            <button type="submit">Submit and Save</button><br><br>
        </form>
        <!------------------------------End: Form to get data from user to store into Database----------------->
    </body>

<!--------------------------------------Start: PHP Code--------------------------
<?php
//--------------------Satrt: Getting input from user form---------------

@$book_name = $_GET["book_name"];
@$book_amount = $_GET["book_amount"];
@$customer_name = $_GET["customer_name"];
@$sale_date_php = $_GET["sale_date"];//HTML gives date in dd-mm-yyyy format which MySQL rejects.
@$sale_date = date("Y-m-d", strtotime($sale_date_php));// Converting date from dd-mm-yyyy to yyyy-mm-dd for MySQL


//--------------------End: Getting input from user form---------------

//--------------------Start: Database Connection and Insertion-------------------

$database_bool = mysqli_connect("localhost","root","","capstone");//Connecting to database, returns boolean on connection success and failure

$query = "insert into sales values('".$book_name."',".$book_amount.",'".$customer_name."','".$sale_date."')";// Query to be executed

$insert_bool = mysqli_query($database_bool,$query);//Execute Query, returns boolean on success and failure

//--------------------End: Database Connection and Insertion------------------------

//--------------------Start: Database to HTML table----------------------------------

$select_query_bool = mysqli_query($database_bool,"select * from sales");//Getting all data from database

//--------------------------------Start: Table Headings ------------------
echo "<body><table border=1>
<tr>
    <td>Book Name</td>
    <td>Book Amount</td>
    <td>Customer Name</td>
    <td>Sale Date</td>
</tr>";
//-------------------------------End: Table Headings---------------------------------

//-------------------------------Start: Getting data from select query which is in form of assocative array------
while($resultSet = mysqli_fetch_assoc($select_query_bool))
{
    echo "         
            <tr>
            <td>".$resultSet["book_name"]."</td>
            <td>".$resultSet["book_amount"]."</td>
            <td>".$resultSet["customer_name"]."</td>
            <td>".$resultSet["sale_date"]."</td>
        </tr>";
}
echo "</table></body>"
//-------------------------------End: Getting data from select query which is in form of assocative array-----

//--------------------End: Database to HTML table------------------------------------

?>
</html>
<!--------------------End: HTML and PHP Code-------------------------------------