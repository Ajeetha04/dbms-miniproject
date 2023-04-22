<center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


<label>vend_name:</label>
<input type="name" name="name"><br><br>

<label>vend_id:</label>
<input type="id" name="id"><br><br>

<label>ven_email:</label>
<input type="email" name="email"><br><br>

<label>ven_phno:</label>
<input type="text" name="phone"><br><br>

<label>ven_addr:</label>
<input type="text" name="address"><br><br>

<label>gst_no:</label>
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
     $name = $_POST['name'];
     $id = $_POST['id'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $gstno = $_POST['number'];

     $sql = "INSERT INTO vendor (vend_name,vend_id,ven_email,ven_phno,ven_addr,gst_no)
     VALUES ('$name','$id','$email','$phone','$address','$gstno')";

     if (mysqli_query($conn, $sql)) {
        echo "successfully entered!!!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>

