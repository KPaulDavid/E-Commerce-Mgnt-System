<html>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ecommerce";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
echo "Echo : " . $conn->connect_error;
else
{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $qry = "select username , password from user";
            $cnt=0;
            $rs = $conn->query($qry);
            if($rs->num_rows>0)
            {
                        while($row = $rs->fetch_assoc())
                        {
		if($row['username'] == $username && $row['password'] == $password)
                                   {
                                               $cnt++;
                                    }
                          }
                          if($cnt>0)
                          {
                                 if($username=="ADMIN")
                                {                                                        
	                echo "<script language='javascript'>alert('welcome Mr/Miss " . strtoupper($_POST['username']) . "');</script>";
                                 echo "<script language='javascript'>document.location='http://localhost/paul/mainform.html';</script>";
                                 }
                                       else
                                         {
                                             echo "<script language='javascript'>alert('welcome Mr/Miss " . strtoupper($_POST['username']) . "');</script>";
                                echo "<script language='javascript'>document.location='http://localhost/paul/usermain.html';</script>";
                                  }
                           }
                          else
                          echo "<script language='javascript'>alert('Invalid Credentials....');document.location='http://localhost/paul/plogon.html';</script>";
               }
}
?>
</body>
</html>