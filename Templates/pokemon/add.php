

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm Pokemon</h1>
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
            <form method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên Pokemon</label>
                        <input type="text" required="required" name="name" class="form-control" placeholder="Tên Pokemon">
                    </div>
           
                    <div class="form-group">
                        <label>Hình ảnh</label><br>
                      
                        <input type="type" required="required" name="img" class="form-control" placeholder="URL_thumbnail" >
                    </div>
                    <div class="form-group">
                        <label>Thuộc hệ</label>
                        <input type="text" required="required" name="line" class="form-control" placeholder="Hệ Pokemon">
                    </div>
                     <div class="form-group">
                        <label>Thông tin Pokemon</label>
                         <textarea required="required" name="infor" class="textarea" placeholder="Nhập thông tin"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phiên bản Pokemon</label>
                         <textarea required="required" name="version" class="textarea" placeholder="Nhập thông tin"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Năng lực</label>
                         <textarea required="required" name="power" class="textarea" placeholder="Nhập thông tin"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
                    </div>
                    <button type="submit" name="addPoke" class="btn btn-primary">Thêm</button>
                      </div>
                </div>
            </form>
        </div>
    </section>
</div>
