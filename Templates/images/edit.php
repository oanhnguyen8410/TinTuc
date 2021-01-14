<style type="text/css">
    .edit-img {
        margin-bottom: 20px;
        border-radius: 10px;
        width: 400px;
    }
</style>
<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa hình ảnh</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Thư viện ảnh</a></li>
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
                        <label>Hình ảnh</label><br>
                        <img class="edit-img" src="<?=$item['url_thumbnail']?>">
                        <input type="text" name="url_thumbnail" class="form-control" class="form-control" value="<?=$item['url_thumbnail']?>">
                    </div>
                    <button type="submit" name="editImg" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </section>
</div>