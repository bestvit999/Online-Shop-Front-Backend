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
  <h1>�s�W�ӫ~</h1>
  <p>�ϥΪ̯���z�L���������ӷs�W�ӫ~�C</p> 
</div>
    
<?php

$conn=mysqli_connect("localhost","root","","db_course");

if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_POST['save']))
{
    $sql = "INSERT INTO iteminfo (ItemID, ItemName, SId)
    VALUES ('".$_POST["ItemID"]."','".$_POST["ItemName"]."','".$_POST["SId"]."')";

    $result = mysqli_query($conn,$sql);
    
    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

    <form action="ItemInsert.php" method="post"> 
    <div style="text-align:center"> 
        <label id="first"> ItemID:</label><br/>
        <input size=25 type="text" name="ItemID" placeholder="��J�ӫ~�N�X e.g.&quot;0000000000&quot; "><br/>

        <label id="first">ItemName:</label><br/>
        <input type="text" name="ItemName" placeholder="��J�ӫ~�W��"><br/>

        <label id="first">SId:</label><br/>
        <input type="text" name="SId" placeholder="��J�t�ӥN�X e.g.&quot;0&quot;"><br/>

        <br/>
        <button type="button" class="btn btn-defualt" onclick=location.href="index.php">back homepage</button>
        <button type="submit" name="save" class="btn btn-primary">submit</button>
    </div>
</form>

</body>
</html>