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
  <h1>刪除會員</h1>
  <p>使用者能夠透過網頁介面來刪除會員。</p> 
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
    $sql = "DELETE FROM member WHERE Account='$account'";

    $result = mysqli_query($conn,$sql);
    
    if ($result) {
        echo "Delete an account successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

    <form action="memberDelete.php" method="post"> 
    <div style="text-align:center"> 
        <label id="first"> Account:</label><br/>
        <input type="text" name="Account" placeholder="輸入帳號"><br/>

        <br/>
        <button type="button" class="btn btn-defualt" onclick=location.href="index.php">back homepage</button>
        <button type="submit" name="save" class="btn btn-primary">submit</button>
    </div>
</form>

</body>
</html>