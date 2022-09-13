<html>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dname="ecommerce";
$conn = new MySQLi($servername,$username,$password,$dname);
if($conn->connect_error)
{
     echo "<script language='javascript'>alert('Unable Connect database');</script>";
}
else
{
      $qry="select * from purcmac";
      $rs=$conn->query($qry);
      echo "<table border='1' align='center' width='1400' height='150'>";
      echo "<center><font size='9' color='Olive'> Data of  Macbook Laptops Purchased</font></center>";
      echo "<tr><th>Purchase ID<th>Laptop ID<th> Laptop Name<th> Laptop Ram<th> Laptop Price<th>Customer name <th> Customer Contact Number <th> Customer Address<th> Date of Booking <th>Purchsed Laptops <th> Total Price ";
     if($rs->num_rows>0)
     {
         while($row=$rs->fetch_assoc())
         {
                echo "<tr>";
                echo "<td><center>" . $row['purchaseid'] . " </center><td><center> " . $row['laptopid'] . "</center> <td><center>" .  $row['laptopname'] . "</center> <td> <center>" .  $row['laptopram']. " </center> <td> <center>" .  $row['laptopprice']. " </center><td> <center>" .  $row['customername']. "</center> <td> <center>" .  $row['customerno']. "</center> <td> <center>" .  $row['customeradd']. " </center> <td> <center>" . date(" d-m-Y",strtotime($row['dobk'])). " </center> <td>  <center>" .  $row['noflaptop']. " </center><td> <center>" .  $row['totprice'];
          }
       }
       else
         echo "Data not exist";
        echo "</table>";
  }
  $conn->close();
?>
<br>
<center>
<button onclick="myfunction()"> Print data</button>
<script language="javascript">
function myfunction()
{
window.print();
}
</script>
</center>
</body>
</html>