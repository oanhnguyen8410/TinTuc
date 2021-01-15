<style type="text/css">

   
</style>
<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách thẻ nạp</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách thẻ nạp</li>
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
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nhà mạng</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Số Seri</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Mã thẻ</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Mệnh giá</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Trạng thái</th>
                                           
                                         
                                            
                                        </tr>
                                    </thead>
                                    <?php foreach ($cards as $key => $card) : ?> 
                                    <tbody>
                                        <tr>
                                            <td class="box-number" style="text-align: center"><?php echo $key+1 ?></td>
                                            <td>
                                                <?php echo $card['name'] ?>
                                               
                                            </td>
                                            <td >
                                                <?php echo $card['seri'] ?>
                                            </td>
                                            <td>
                                                <?php echo $card['code'] ?>
                                            </td>
                                            <td style="text-align: center;">
                                               <?php echo $card['price'] ?> 
                                            </td>
                                            <td style="text-align: center;">
                                               
                                               <?php if($card['status'] == 1) {
                                                    echo 'Đã sử dụng';
                                               } else {
                                                echo 'Chưa sử dụng';
                                               }
                                               ?>
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