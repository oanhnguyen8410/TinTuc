<style type="text/css">
	
</style>
<div class="content-wrapper" style="min-height: 365px;">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Trang chủ</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Admin</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php print_r($slcates); ?></h3>

							<h4>CHUYÊN MỤC</h4>
						</div>
						<div class="icon">
							<i class="fas fa-th-large" style="font-size: 50px"></i>
						</div>
						<a href="?controller=category&action=get" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-posts" style="background-color: #708090">
						<div class="inner">
							<h3 style="color: #fff"><?php print_r($slnews); ?></h3>

							<h4 style="color: #fff">BÀI VIẾT</h4>
						</div>
						<div class="icon">
							<i class="fas fa-newspaper" style="font-size: 50px"></i>
						</div>
						<a href="?controller=post&action=get" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3 style="color: #fff"><?php print_r($slusers); ?></h3>

							<h4 style="color: #fff">THÀNH VIÊN</h4>
						</div>
						<div class="icon">
							<i class="ion ion-person-add" style="font-size: 50px"></i>
						</div>
						<a href="?controller=user&action=get" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3 style="color: #fff"><?php print_r($slcard); ?></</h3>

							<h4 style="color: #fff">THẺ NẠP</h4>
						</div>
						<div class="icon">
							<i class="fas fa-credit-card" style="font-size: 50px"></i>
						</div>
						<a href="?controller=card&action=get" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-photo" style="background-color: #43CD80;">
						<div class="inner">
							<h3 style="color: #fff"><?php print_r($slimgs); ?></h3>

							<h4 style="color: #fff">THƯ VIỆN ẢNH</h4>
						</div>
						<div class="icon">
							<i class="fas fa-images" style="font-size: 50px"></i>
						</div>
						<a href="?controller=images&action=get" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right" style="color: #fff"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-pokemon"style="background-color: #CD5C5C;">
						<div class="inner">
							<h3 style="color: #fff"><?php print_r($slpoke); ?></h3>

							<h4 style="color: #fff">THÔNG TIN POKEMON</h4>
						</div>
						<div class="icon">
							<i class="fas fa-edit" style="font-size: 50px"></i>
						</div>
						<a href="?controller=pokemon&action=get" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box" style="background-color: #8B658B;">
						<div class="inner">
							<h3 style="color: #fff"><?php print_r($sllinks); ?></h3>

							<h4 style="color: #fff">LINK - CỘNG ĐỒNG</h4>
						</div>
						<div class="icon">
							<i class="fas fa-external-link-alt" style="font-size: 50px"></i>
						</div>
						<a href="?controller=link&action=get" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
		</div>
	</section>
</div>