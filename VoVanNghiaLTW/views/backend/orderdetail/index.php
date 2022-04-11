<?php

use App\Models\Orderdetail;// muốn sd cái này phải dùng namespance bên orderdetail.php


$orderdetail = new Orderdetail();// tạo đối tượng
$list = $orderdetail->orderdetail_list();

?>




<?php require_once('../views/backend/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper py-2">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->  
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-sm-6">
              <strong class="text-danger">Danh mục chi tiết đơn hàng</strong>
            </div>
            <div class="col-sm-6 text-right">

            <a href="index.php?option=orderdetail&cat=insert" class="btn btn-sm btn-success"> 
                    <i class="fas fa-plus"></i>Thêm
                    </a>
            <a href="index.php?option=orderdetail&cat=trash" class="btn btn-sm btn-danger"> 
                    <i class="fas fa-trash"></i>Thùng rác
                    </a>
     
            </div>
          </div>
          
        </div>
        <div class="card-body">
          <table class="table table-borderdetailed" id="myTable">
            <thead>
                <tr>
                  <th class="text-center" style="width:20px">#</th>
                  <th>Mã đơn hàng</th>
                  <th>Mã sản phẩm</th>
                  <th class="text-center">Giá sản phẩm</th>
                <th class="text-center">Số lượng</th>
                 <th class="text-center">Thành tiền</th>
    

                  <th class="text-center" style="width:20px">Id</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($list as $row): ?>
               <tr>
                  <td class="text-center">
                    <input name="checkid" type="checkbox">
                  </td>
                  <td ><?php echo $row['orderid']; ?></td>
                  <td ><?php echo $row['productid']; ?></td>
                  <td class="text-center"><?php echo $row['price']; ?></td>
                   <td class="text-center"><?php echo $row['quantity']; ?></td>
                   <td class="text-center"><?php echo $row['amount']; ?></td>
                  

                  <td class="text-center"><?php echo $row['id']; ?></td>
               </tr>
               <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php require_once('../views/backend/footer.php'); ?>