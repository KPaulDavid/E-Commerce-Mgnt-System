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
      $qry="select * from purcshirts";
      $rs=$conn->query($qry);
      echo "<table border='1' align='center' width='1400' height='150'>";
      echo "<center><font size='9' color='dark blue'> Data of  Shirts - Purchased</font></center>";
      echo "<tr><th>Purchase ID<th>Shirt ID<th>Shirt Name<th> Shirt Size<th> Shirt Price<th>Customer name <th> Customer Contact Number <th> Customer Address<th> Date of Booking <th>Purchsed Shirts <th> Total Price ";
     if($rs->num_rows>0)
     {
         while($row=$rs->fetch_assoc())
         {
                echo "<tr>";
                echo "<td><center>" . $row['purchaseid'] . " </center><td><center> " . $row['shirtid'] . "</center> <td><center>" .  $row['shirtcname'] . "</center> <td> <center>" .  $row['shirtsize']. " </center> <td> <center>" .  $row['shirtprice']. " </center><td> <center>" .  $row['customername']. "</center> <td> <center>" .  $row['customerno']. "</center> <td> <center>" .  $row['customeradd']. " </center> <td> <center>" . date(" d-m-Y",strtotime($row['dobk'])). " </center> <td>  <center>" .  $row['nofproducts']. " </center><td> <center>" .  $row['totprice'];
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