

<div class="content-wrapper" style="min-height: 353px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sửa bài viết</h1>
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
            <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" required="required" name="title" class="form-control" placeholder="Tên tin tức" value="<?= $item['title']?>">
                    </div>
                    <div class="form-group">
                        <label>Chuyên mục</label>
                        <select name="category_id" class="form-control select2">
                            <?php  
                                foreach ($categories as $category) {?>
                                    <option <?php if ($category['id'] == $item['category_id']) {echo "selected";} ?> value="<?=$category['id']?>">
                                        <?=$category['name']?>
                                    </option>
                                <?php }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tag</label>
                        <input type="text" required="required" name="tag" class="form-control" placeholder="Tên chuyên mục" value="<?= $item['tag']?>">
                    </div>
                    <div class="form-group">
                        <label>Ảnh cũ</label><br>
                        <img width="200px" src="<?php echo $item['url_thumbnail']; ?>">
                        
                      <input type="hidden" value="" name="image_old">
                    </div>
                     <div class="form-group">
                        <label>Ảnh thay thế</label><br>
                      
                        <input type="type" required="required" name="url_thumbnail" class="form-control" placeholder="URL_thumbnail" >
                    </div>
                   <!--  <div class="form-group">
                        <label for="exampleInputFile">Chọn ảnh</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                        </div>
                    </div> -->
                   
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea required="required" name="content" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ><?php echo $item['content']; ?></textarea>
                    </div>
                    <button type="submit" name="editNews" class="btn btn-primary">Hoàn thành</button>
                </div>
            </form>
        </div>
    </section>
</div>

