<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Page Title</title>

</head>
<body>
<div class="container">

<br>
<br>
<?php
  include('classConDB.php');
  $con= new ConDB();
  $con->connect();
  $conDB = $con->conn;
  ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  เพิ่มหนังสือ
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มหนังสือ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="control.php" method="POST">
  <div class="form-group" style="width:300px">
    <label >ชื่อหนังสือ</label>
    <input name="namebook" type="text" class="form-control" >  
  </div>
  
  <div class="form-group" style="width:300px">
    <label >ประเภทหนังสือ</label>
    <select name="categorybook" class="form-control">
      <option value="1">สารคดี</option>
      <option value="2">บันเทิง</option>
      <option value="3">สิ่งพิมพ์</option>
      <option value="4">วารสาร</option>
      <option value="5">นิตยาสาร</option>
    </select>
  </div>

  <div class="form-group" style="width:300px">
    <label >จำนวน</label>
    <input name="amountbook" type="text" class="form-control" >  
  </div>

  <div class="form-group" style="width:300px">
    <label >ราคา</label>
    <input name="pricebook" type="text" class="form-control" >  
  </div>


      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" >Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>

      </div>
       
</form>
    </div>
  </div>
</div>

<!------------------------------------------------------------------------------------->
<center><h1>รายการหนังสือ</h1></center>

<table class="table table-striped table-bordered table-hover">
    
    <thead>
    <tr>
        <th>รหัสหนังสือ</th>
        <th>ประเภทหนังสือ</th>
        <th>ชื่อหนังสือ</th>
        <th>จำนวน</th>
        <th>ราคา</th>
    </tr>
    </thead>
    <tbody>
    <?php

$sql ="SELECT book_id,category_name,book_name,amount,price";
$sql .=" from book , category";
$sql .=" where book.category_id = category.category_id";

$query = $conDB->query($sql);


if($query->num_rows>0){
while($result =  $query->fetch_assoc())
{

?>

<tr>
<td scope="row"><?php echo $result["book_id"];?></td>
<td><div align="center"><?php echo $result["category_name"];?></div></td>
<td><center><?php echo $result["book_name"];?></center></td>
<td><center><?php echo $result["amount"];?></center></td>
<td><center><?php echo $result["price"];?></center></td>


    </tr>
    
<?php

}
}

?>
    </tbody>
</table>
</div>


<!------------------------------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
