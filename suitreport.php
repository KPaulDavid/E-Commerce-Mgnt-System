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
      $qry="select * from suit";
      $rs=$conn->query($qry);
      echo "<table border='1' align='center' width='400' height='280'>";
      echo "<tr><th colspan='4' bgcolor='#bed'><font size='6' color='blue'> Suit Data</font>";
      echo "<tr><th>Suit ID<th>Suit Company Name <th> Suit Size<th> Suit Price ";
     if($rs->num_rows>0)
     {
         while($row=$rs->fetch_assoc())
         {
                echo "<tr>";
                echo "<td>" . $row['suitid'] . "<td> " . $row['suitcmpname'] . " <td>" .  $row['suitsize'] . " <td>" .  $row['suitprice'];
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