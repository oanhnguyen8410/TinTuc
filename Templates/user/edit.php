

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa thành viên</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Thành viên</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input type="text" required="required" name="full_name" class="form-control" value="<?= $item['full_name']?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" required="required" name="username" class="form-control" value="<?= $item['username']?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" required="required" name="email" class="form-control" value="<?= $item['email']?>">
                    </div>
                     <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" required="required" name="tel" class="form-control" value="<?= $item['tel']?>">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="text" required="required" name="password" class="form-control" value="<?= $item['password']?>">
                    </div>
                   
                    <div class="form-group">
                        <label>Mật khẩu xác nhận</label>
                        <input type="text" required="required" name="confirm" class="form-control" value="<?= $item['confirm']?>">
                    </div>
                    <div class="form-group">
                        <label>Số dư</label>
                        <input type="text" required="required" name="slug" class="form-control" value="<?= $item['slug']?>">
                    </div>
                    <button type="submit" name="editUser" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </section>
</div>

