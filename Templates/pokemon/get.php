<style type="text/css">
.infor-poke {
     white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  width: 300px;
}
   
</style>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Từ điển Pokemon</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách Pokemon</li>
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
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Mã số Pokemon</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên Pokemon</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Hình ảnh</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Hệ</th>
                                           
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Thời gian cập nhật</th>
                                           
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Sửa</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php foreach ($pokes as $key => $poke) : ?> 
                                    <tbody>
                                        <tr>
                                            <td class="box-number" style="text-align: center"><?php echo $key+1 ?></td>
                                            <td>
                                                00<?php echo $poke['id'] ?>
                                            </td>
                                            <td>
                                                <?php echo $poke['name'] ?>
                                            </td>
                                            <td>
                                                <img src="<?php echo $poke['img'] ?>" style="width: 100px; height: 100px">
                                            </td>
                                            <td>
                                                <?php echo $poke['line']?>
                                            </td>
                                            
                                            <td style="text-align: center;">
                                               <?=$poke['time']?>
                                            </td>
                                           
                                            <td style="text-align: center;">
                                                <span class="badge bg-primary">
                                                    <a href="?controller=pokemon&action=edit&pokeId=<?=$poke['id']?>">
                                                        <ion-icon name="create-outline"></ion-icon>
                                                    </a>
                                                </span>
                                                
                                            </td>
                                            <td style="text-align: center;">
                                                <span class="badge bg-danger">
                                                    <a href="?controller=pokemon&action=delete&pokeId=<?=$poke['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa');">
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