<center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


<label>prod_no:</label>
<input type="text" name="no"><br><br>

<label>prod_name:</label>
<input type="name" name="name"><br><br>

<label>vend_id:</label>
<input type="text" name="id"><br><br>

<label>prod_date:</label>
<input type="date" name="date"><br><br>

<label>prod_cost:</label>
<input type="text" name="cost"><br><br>

<label>prod_qty:</label>
<input type="text" name="number"><br><br>

<label>order_no:</label>
<input type="text" name="number"><br><br>

<input type="submit" value="submit" name="submit"><br><br>
</form>
</center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="ven";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "<center> Connected successfully</center>";
echo "<br> <br>";

if(isset($_POST['submit']))
{    
     $number = $_POST['no'];
     $name = $_POST['name'];
     $id = $_POST['id'];
     $date = $_POST['date'];
     $cost = $_POST['cost'];
     $qty = $_POST['number'];
     $orderno= $_POST['number'];

     $sql = "INSERT INTO product (prod_no,prod_name,vend_id,prod_date,prod_cost,prod_qty,order_no)
     VALUES ('$number','$name','$id','$date','$cost','$qty','$orderno')";

     if (mysqli_query($conn, $sql)) {
        echo "successfully entered!!!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>