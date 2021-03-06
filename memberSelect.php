<?php
header("Content-Type:text/html; charset=big5");
?>
<!Doctype html>
<html>
<html lang="zh-Hant">
<head>
  <title>簡易的線上購物平台</title>
  <meta http-equiv="Content-Type" content="text/html; charset=big5">
  <meta charset="big5">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="jumbotron text-center">
  <h1>查詢會員</h1>
  <p>使用者能夠透過網頁介面來查詢該會員之購買商品及其資訊。</p> 
</div>
    
<?php

$conn=mysqli_connect("localhost","root","","db_course");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_POST['save']))
{
    $account = $_POST['Account'];
    $sql = "SELECT member.Account,member.Name,orderhistory.OId,orderhistory.PurchaseDate,iteminfo.ItemName,supplier.SName FROM `member`,`supplier`,`orderhistory`,`odetail`,`iteminfo` WHERE member.Account = orderhistory.Account AND orderhistory.OId = odetail.OId AND odetail.ItemID = iteminfo.ItemID AND iteminfo.SId = supplier.SId AND member.Account = '$account'";
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

<form action="memberSelect.php" method="post"> 
    <div style="text-align:center"> 
        <label id="first"> Member query:</label><br/>
        <input type="text" name="Account" placeholder="輸入欲查詢之帳號"><br/>
        
        <br/>
        <button type="button" class="btn btn-defualt" onclick=location.href="index.php">back homepage</button>
        <button type="submit" name="save" class="btn btn-primary">submit</button>
    </div>
</form>

</body>
</html>