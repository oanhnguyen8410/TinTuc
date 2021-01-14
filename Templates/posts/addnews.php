

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Thêm bài viết</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
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
                        <label>Tiêu đề</label>
                        <input type="text" required="required" name="title" class="form-control" placeholder="Tiêu đề bài viết">
                    </div>
                    <div class="form-group">
                        <label>Chuyên mục</label>
                        <select name="category_id" class="form-control select2">
                            <?php
                                foreach ($categories as $category) {?>
                                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                                <?php }
                            ?>
                        </select>
                    </div>
                     <div class="form-group">
                        <label>Tag</label>
                        <input type="text" required="required" name="tag" class="form-control" placeholder="#tag">
                    </div>
                    <div class="form-group">
                        <label>Thêm ảnh</label><br>
                      
                        <input type="type" required="required" name="url_thumbnail" class="form-control" placeholder="URL_thumbnail" >
                    </div>
                 
                    <div class="form-group">
                        <label>Nội dung</label>
                         <textarea required="required" name="content" class="textarea" placeholder="Nhập nội dung tại đây"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea>
                    </div>

                    <button type="submit" name="addNews" class="btn btn-primary">Thêm</button>
                      </div>
                </div>
            </form>
        </div>
    </section>
</div>
