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
  <h1>��s������</h1>
  <p>�ϥΪ̯���z�L�����������ܧ�����Ӥ��q�ܡC</p> 
</div>
    
<?php

$conn=mysqli_connect("localhost","root","","db_course");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_POST['save']))
{
    $sname = $_POST["SName"];
    $stel=$_POST["STel"];
    $sql = "UPDATE supplier SET STel = '$stel' WHERE SName='$sname'";

    $result = mysqli_query($conn,$sql);
    
    if ($result) {
        echo "Updated supplier's Tel successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

    <form action="supplierUpdate.php" method="post"> 
    <div style="text-align:center"> 
        <label id="first"> SName:</label><br/>
        <input type="text" name="SName" placeholder="��J�����ӦW��"><br/>
        <label id="first"> STel:</label><br/>
        <input type="text" name="STel" placeholder="��J�s�q��"><br/>

        <br/>
        <button type="button" class="btn btn-defualt" onclick=location.href="index.php">back homepage</button>
        <button type="submit" name="save" class="btn btn-primary">submit</button>
    </div>
</form>

</body>
</html>