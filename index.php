<?php
header("Content-Type:text/html; charset=big5");
?>

<!DOCTYPE html>
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
  <h1>²�����u�W�ʪ����x</h1>
  <p>�ϥΪ̯���z�L���������ӧ�����Ʈw�ާ@�C</p> 
</div>
   
<div class="container">
  <div class="row">
      
    <!--�|���޲z-->   
    <div class="col-sm-4">
      <h3>�|���޲z</h3>
      <p>�w��q�H�檺�|����ƶi��s�W�B�ק�B�R���B�d�ߵ��B�z�C</p>
      
        <div class="btn-group">
            <button type="button" class="btn btn-primary" value="M_add" onclick=location.href="memberInsert.php">�s�W</button>
            <button type="button" class="btn btn-primary" value="M_update" onclick=location.href="memberUpdate.php">�ק�</button>
            <button type="button" class="btn btn-primary" value="M_delete" onclick=location.href="memberDelete.php">�R��</button>
            <button type="button" class="btn btn-primary" value="M_query" onclick=location.href="memberSelect.php">�d��</button>
        </div>
      </div>
    <!--���~�޲z-->  
    <div class="col-sm-4">
      <h3>���~�޲z</h3>
      <p>�w��q�H�檺���~��ƶi��s�W�B�ק�B�R���B�d�ߵ��B�z�C</p>
      <div class="btn-group">
         <button type="button" class="btn btn-primary" value="I_add" onclick=location.href="ItemInsert.php">�s�W</button>
         <button type="button" class="btn btn-primary" value="I_update" onclick=location.href="ItemUpdate.php">�ק� </button>
         <button type="button" class="btn btn-primary" value="I_delete" onclick=location.href="ItemDelete.php">�R��</button>
         <button type="button" class="btn btn-primary" value="I_query" onclick=location.href="ItemSelect.php">�d��</button>
      </div>
    </div>
    <!--�ʶR�����޲z�޲z-->    
    <div class="col-sm-4">
      <h3>�ʶR�����޲z</h3>        
      <p>�w��q�H�檺�ʶR�O����ƶi��s�W�B�ק�B�R���B�d�ߵ��B�z�C</p>
      <div class="btn-group">
         <button type="button" class="btn btn-primary" value="O_add" onclick=location.href="orderhistoryInsert.php">�s�W</button>
         <button type="button" class="btn btn-primary" value="O_update" onclick=location.href="orderhistoryUpdate.php">�ק�</button>
         <button type="button" class="btn btn-primary" value="O_delete" onclick=location.href="orderhistoryDelete.php">�R��</button>
         <button type="button" class="btn btn-primary" value="O_query" onclick=location.href="orderhistorySelect.php">�d��</button>
      </div>
    </div>
    <!--�����Ӻ޲z-->   
    <div class="col-sm-4">
      <h3>�����Ӻ޲z</h3>
      <p>�w��q�H�檺�����Ӹ�ƶi��s�W�B�ק�B�R���B�d�ߵ��B�z�C</p>
      
      <div class="btn-group">
          <button type="button" class="btn btn-primary" value="S_add" onclick=location.href="supplierInsert.php">�s�W</button>
         <button type="button" class="btn btn-primary" value="S_update" onclick=location.href="supplierUpdate.php">�ק�</button>
         <button type="button" class="btn btn-primary" value="S_delete" onclick=location.href="supplierDelete.php">�R��</button>
         <button type="button" class="btn btn-primary" value="S_query" onclick=location.href="supplierSelect.php">�d��</button>
      </div>
    </div>
    
    </div>
</div>
</body>
</html>

