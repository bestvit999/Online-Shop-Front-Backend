<?php
header("Content-Type:text/html; charset=big5");
?>
<!Doctype html>
<html>
<html lang="zh-Hant">
<head>
  <title>²�����u�W�ʪ����x</title>
  <meta http-equiv="Content-Type" content="text/html; charset=big5">
  <meta charset="big5">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="jumbotron text-center">
  <h1>�d���ʶR����</h1>
  <p>�ϥΪ̯���z�L���������Ӭd�߸��ʶR�s�����ʶR�ӫ~�Ψ��T�C</p> 
</div>
    
<?php

$conn=mysqli_connect("localhost","root","","db_course");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_POST['save']))
{
    $oid = $_POST['OId'];
    $sql = "SELECT member.Account, member.Name,orderhistory.OId,orderhistory.PurchaseDate,iteminfo.ItemName,supplier.SName FROM `member`,`supplier`,`orderhistory`,`odetail`,`iteminfo` WHERE member.Account = orderhistory.Account AND orderhistory.OId = odetail.OId AND odetail.ItemID = iteminfo.ItemID AND iteminfo.SId = supplier.SId AND orderhistory.OId = '$oid'";
    $result = mysqli_query($conn,$sql);
    
        if ($result) {
            echo "<div style='width:100%'><table border='1'><tr><th>Account</th><th>Name</th><th>OId</th><th>PurchaseDate</th><th>ItemName</th><th>SName</th></tr>";
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row["Account"]."</td>";
                echo "<td>".$row["Name"]."</td>";
                echo "<td>".$row["OId"]."</td>";
                echo "<td>".$row["PurchaseDate"]."</td>";
                echo "<td>".$row["ItemName"]."</td>";
                echo "<td>".$row["SName"]."</td>";
                echo "</tr>";
            }
            echo "</table></div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
}

?>

<form action="orderhistorySelect.php" method="post"> 
    <div style="text-align:center"> 
        <label id="first"> orderhistory query:</label><br/>
        <input type="text" name="OId" placeholder="��J�����ʶR�����s��"><br/>
        
        <br/>
        <button type="button" class="btn btn-defualt" onclick=location.href="index.php">back homepage</button>
        <button type="submit" name="save" class="btn btn-primary">submit</button>
    </div>
</form>

</body>
</html>