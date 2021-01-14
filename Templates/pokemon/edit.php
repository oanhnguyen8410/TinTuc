

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa Pokemon</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Từ điển Pokemon</a></li>
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
                        <label>Tên Pokemon</label>
                        <input type="text" required="required" name="name" class="form-control" placeholder="Tên tin tức" value="<?= $item['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Ảnh cũ</label><br>
                        <img width="200px" src="<?php echo $item['img']; ?>">
                        
                      <input type="hidden" value="" name="image_old">
                    </div>
                     <div class="form-group">
                        <label>Ảnh thay thế</label><br>
                      
                        <input type="type" required="required" name="img" class="form-control" placeholder="Hình ảnh Pokemon" >
                    </div>
                    <div class="form-group">
                        <label>Thuộc hệ</label>
                        <input type="text" required="required" name="line" class="form-control" placeholder="Tên chuyên mục" value="<?= $item['line']?>">
                    </div>
                    <div class="form-group">
                        <label>Thông tin</label>
                        <textarea required="required" name="infor" class="textarea" placeholder="Nhập thông tin tại đây"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ><?php echo $item['infor']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phiên bản</label>
                        <textarea required="required" name="version" class="textarea" placeholder="Nhập thông tin tại đây"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ><?php echo $item['version']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Năng lực</label>
                        <textarea required="required" name="power" class="textarea" placeholder="Nhập thông tin tại đây"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ><?php echo $item['power']; ?></textarea>
                    </div>
                    <button type="submit" name="editPoke" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </section>
</div>

