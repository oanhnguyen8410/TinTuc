
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tài khoản Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tài khoản Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                              
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th style="text-align: center;" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Họ và tên</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tên tài khoản</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Email</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Số điện thoại</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Mật khẩu</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Mật khẩu xác nhận</th>
                                           
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Sửa</th>
                                         
                                            
                                        </tr>
                                    </thead>
                                    <?php foreach ($admins as $key => $admin) : ?> 
                                    <tbody>
                                        <tr>
                                            <td class="box-number" style="text-align: center"><?php echo $key+1 ?></td>
                                            <td>
                                                <?php echo $admin['full_name'] ?>
                                            </td>
                                            <td>
                                               <?php echo $admin['admin_user'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php echo $admin['email'] ?>
                                            </td>
                                            <td>
                                                <?php echo $admin['tel'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                              <?php echo $admin['password'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php echo $admin['confirm'] ?>
                                            </td>
                                         
                                            <td style="text-align: center;">
                                                <span class="badge bg-primary">
                                                    <a href="?controller=admin&action=edit&adminId=<?=$admin['id']?>">
                                                        <ion-icon name="create-outline"></ion-icon>
                                                    </a>
                                                </span>
                                                
                                            </td>
                                        
                                        </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>