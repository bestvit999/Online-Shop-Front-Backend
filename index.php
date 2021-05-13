<?php
header("Content-Type:text/html; charset=big5");
?>

<!DOCTYPE html>
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
  <h1>簡易的線上購物平台</h1>
  <p>使用者能夠透過網頁介面來完成資料庫操作。</p> 
</div>
   
<div class="container">
  <div class="row">
      
    <!--會員管理-->   
    <div class="col-sm-4">
      <h3>會員管理</h3>
      <p>針對通信行的會員資料進行新增、修改、刪除、查詢等處理。</p>
      
        <div class="btn-group">
            <button type="button" class="btn btn-primary" value="M_add" onclick=location.href="memberInsert.php">新增</button>
            <button type="button" class="btn btn-primary" value="M_update" onclick=location.href="memberUpdate.php">修改</button>
            <button type="button" class="btn btn-primary" value="M_delete" onclick=location.href="memberDelete.php">刪除</button>
            <button type="button" class="btn btn-primary" value="M_query" onclick=location.href="memberSelect.php">查詢</button>
        </div>
      </div>
    <!--產品管理-->  
    <div class="col-sm-4">
      <h3>產品管理</h3>
      <p>針對通信行的產品資料進行新增、修改、刪除、查詢等處理。</p>
      <div class="btn-group">
         <button type="button" class="btn btn-primary" value="I_add" onclick=location.href="ItemInsert.php">新增</button>
         <button type="button" class="btn btn-primary" value="I_update" onclick=location.href="ItemUpdate.php">修改 </button>
         <button type="button" class="btn btn-primary" value="I_delete" onclick=location.href="ItemDelete.php">刪除</button>
         <button type="button" class="btn btn-primary" value="I_query" onclick=location.href="ItemSelect.php">查詢</button>
      </div>
    </div>
    <!--購買紀錄管理管理-->    
    <div class="col-sm-4">
      <h3>購買紀錄管理</h3>        
      <p>針對通信行的購買記錄資料進行新增、修改、刪除、查詢等處理。</p>
      <div class="btn-group">
         <button type="button" class="btn btn-primary" value="O_add" onclick=location.href="orderhistoryInsert.php">新增</button>
         <button type="button" class="btn btn-primary" value="O_update" onclick=location.href="orderhistoryUpdate.php">修改</button>
         <button type="button" class="btn btn-primary" value="O_delete" onclick=location.href="orderhistoryDelete.php">刪除</button>
         <button type="button" class="btn btn-primary" value="O_query" onclick=location.href="orderhistorySelect.php">查詢</button>
      </div>
    </div>
    <!--供應商管理-->   
    <div class="col-sm-4">
      <h3>供應商管理</h3>
      <p>針對通信行的供應商資料進行新增、修改、刪除、查詢等處理。</p>
      
      <div class="btn-group">
          <button type="button" class="btn btn-primary" value="S_add" onclick=location.href="supplierInsert.php">新增</button>
         <button type="button" class="btn btn-primary" value="S_update" onclick=location.href="supplierUpdate.php">修改</button>
         <button type="button" class="btn btn-primary" value="S_delete" onclick=location.href="supplierDelete.php">刪除</button>
         <button type="button" class="btn btn-primary" value="S_query" onclick=location.href="supplierSelect.php">查詢</button>
      </div>
    </div>
    
    </div>
</div>
</body>
</html>

