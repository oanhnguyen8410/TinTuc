<style type="text/css">

   
</style>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách bài viết</li>
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
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Ảnh</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tiêu đề</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">View</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Tag</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Chuyên mục</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Ngày đăng</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Sửa</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php foreach ($posts as $key => $post) : ?> 
                                    <tbody>
                                        <tr>
                                            <td class="box-number" style="text-align: center"><?php echo $key+1 ?></td>
                                            <td>
                                                <img src="<?php echo $post['url_thumbnail'] ?>" style="width: 100px; height: 100px">
                                            </td>
                                            <td>
                                                <?php echo $post['title'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php echo $post['id']?>
                                            </td>
                                            <td>
                                                <?php echo $post['tag']?>
                                            </td>
                                            <td style="text-align: center;">
                                               <?=$post['category_id']?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php echo $post['time']?>
                                            </td>
                                            <td style="text-align: center;">
                                                <span class="badge bg-primary">
                                                    <a href="?controller=post&action=edit&postId=<?=$post['id']?>">
                                                        <ion-icon name="create-outline"></ion-icon>
                                                    </a>
                                                </span>
                                                
                                            </td>
                                            <td style="text-align: center;">
                                                <span class="badge bg-danger">
                                                    <a href="?controller=post&action=delete&postId=<?=$post['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa');">
                                                        <ion-icon name="trash-outline"></ion-icon>
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