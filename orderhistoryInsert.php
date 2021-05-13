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
  <h1>新增購買歷史紀錄</h1>
  <p>使用者能夠透過網頁介面來新增購買歷史紀錄。</p> 
</div>
    
<?php

$conn=mysqli_connect("localhost","root","","db_course");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_POST['save']))
{
    $account = $_POST["Account"];
    $purchasedate = $_POST["PurchaseDate"];
    
    $sql = "INSERT INTO orderhistory (Account, PurchaseDate) VALUES ('$account','$purchasedate')";
    $result = mysqli_query($conn,$sql);
    
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<form action="orderhistoryInsert.php" method="post"> 
    <div style="text-align:center"> 
        
        <label id="first">Account:</label><br/>
        <input type="text" name="Account" placeholder="輸入帳號"><br/>

        <label id="first">PurchaseDate:</label><br/>
        <input type="date" name="PurchaseDate" placeholder="選擇購買日期"><br/>
        
        <br/>
        <button type="button" class="btn btn-defualt" onclick=location.href="index.php">back homepage</button>
        <button type="submit" name="save" class="btn btn-primary">submit</button>
    </div>
</form>

</body>
</html>