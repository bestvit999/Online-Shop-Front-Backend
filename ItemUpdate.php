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
  <h1>��s�ӫ~</h1>
  <p>�ϥΪ̯���z�L�����������ܧ�ӫ~�W�١C</p> 
</div>
    
<?php

$conn=mysqli_connect("localhost","root","","db_course");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_POST['save']))
{
    $olditemname = $_POST["OldItemName"];
    $newitemname = $_POST["NewItemName"];
    $sql = "UPDATE iteminfo SET ItemName = '$newitemname' WHERE ItemName='$olditemname'";

    $result = mysqli_query($conn,$sql);
    
    if ($result) {
        echo "Updated account's password successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

    <form action="ItemUpdate.php" method="post"> 
    <div style="text-align:center"> 
        <label id="first">Item Name:</label><br/>
        <input type="text" name="OldItemName" placeholder="��J���ܧ󤧰ӫ~�W��"><br/>
        <label id="first">New ItemName:</label><br/>
        <input type="text" name="NewItemName" placeholder="��J�s�ӫ~�W��"><br/>

        <br/>
        <button type="button" class="btn btn-defualt" onclick=location.href="index.php">back homepage</button>
        <button type="submit" name="save" class="btn btn-primary">submit</button>
    </div>
</form>

</body>
</html>