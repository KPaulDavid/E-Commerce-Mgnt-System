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
      $qry="select * from trousers";
      $rs=$conn->query($qry);
      echo "<table border='1' align='center' width='400' height='280'>";
      echo "<tr><th colspan='4' bgcolor='#bed'><font size='6' color='dark grey'> Trouser's Data</font>";
      echo "<tr><th>Trouser ID<th>Trouser Company Name <th> Trouser Size<th> Trouser Price ";
     if($rs->num_rows>0)
     {
         while($row=$rs->fetch_assoc())
         {
                echo "<tr>";
                echo "<td>" . $row['pantsid'] . "<td> " . $row['pantscmpname'] . " <td>" .  $row['pantssize'] . " <td>" .  $row['pantsprice'];
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