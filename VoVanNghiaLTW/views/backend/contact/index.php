<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

use App\Models\Contact;// muốn sd cái này phải dùng namespance bên contact.php


$contact = new Contact();// tạo đối tượng
$list = $contact->contact_list(['status'=>'index']);

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
              <strong class="text-danger">Danh mục tên khách hàng</strong>
            </div>
            <div class="col-sm-6 text-right">

            <a href="index.php?option=contact&cat=insert" class="btn btn-sm btn-success"> 
                    <i class="fas fa-plus"></i>Thêm
                    </a>
            <a href="index.php?option=contact&cat=trash" class="btn btn-sm btn-danger"> 
                    <i class="fas fa-trash"></i>Thùng rác
                    </a>
     
            </div>
          </div>
          
        </div>
        <div class="card-body">
          <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                  <th class="text-center" style="width:20px">#</th>
                  <th>fullname</th>
                  <th>email</th>
                 <th class="text-center">Phone</th>
                  <th class="text-center">Ngày tạo</th>
                  <th class="text-center">Chức năng</th>
                  <th class="text-center" style="width:20px">Id</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($list as $row): ?>
               <tr>
                  <td class="text-center">
                    <input name="checkid" type="checkbox">
                  </td>
                  <td ><?php echo $row['fullname']; ?></td>
                  <td class="text-center"><?php echo $row['email']; ?></td>
                   <td class="text-center"><?php echo $row['phone']; ?></td>
                  <td class="text-center"><?php echo $row['created_at']; ?></td>
                  <td class="text-center">
                    <?php if($row['status']==1): ?>
                        <!-- cac chuc nag -->
                    <a href="index.php?option=contact&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success"> 
                    <i class="fas fa-toggle-on"></i>
                    </a>
                      <?php else: ?>
                    <a href="index.php?option=contact&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger"> 
                    <i class="fas fa-toggle-off"></i>
                        <?php endif; ?>
                    <a href="index.php?option=contact&cat=update&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"> 
                    <i class="fas fa-edit"></i>
                    </a>
                    <a href="index.php?option=contact&cat=deltrash&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger"> 
                    <i class="fas fa-trash"></i>
                    </a>
                  </td>
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