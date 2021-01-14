

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Cập nhật admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">
               <?php foreach ($admins as $key => $admin) : ?> 
                <div class="card-body">
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" required="required" name="full_name" class="form-control" value="<?= $admin['full_name']?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" required="required" name="admin_user" class="form-control" value="<?= $admin['admin_user']?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" required="required" name="email" class="form-control" value="<?= $admin['email']?>">
                    </div>
                     <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" required="required" name="tel" class="form-control" value="<?= $admin['tel']?>">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="text" required="required" name="password" class="form-control" value="<?= $admin['password']?>">
                    </div>
                   
                    <div class="form-group">
                        <label>Mật khẩu xác nhận</label>
                        <input type="text" required="required" name="confirm" class="form-control" value="<?= $admin['confirm']?>">
                    </div>
                    
                    <button type="submit" name="editAdmin" class="btn btn-primary">Hoàn thành</button>
                </div>
                 <?php endforeach; ?>
            </form>
        </div>
    </section>
</div>

