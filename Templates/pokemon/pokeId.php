<style type="text/css">
	.wrapper {
		/*background-color: #1b252f;*/
		background: url(../../Public/img/main_bg_v15.jpg) center top ;
		background-size: 100% auto;
    	margin-top: -20px;
    	color: white;
    	font-family: "utm-cafeta";
    	letter-spacing: 1px;
	}
	h1 {
		padding-top: 10px;
		text-align: center;
		color: black;
		/*background: url(../../Public/img/pokedex_bg.png);
		background-size: 100% 100%;*/
		padding: 44px;
	    font-size: 24px;
	    font-family: "utm-cafeta";
	   letter-spacing: 1px;
	   z-index: 1;
	}
	h1:hover {
		filter: brightness(110%);
	}
	@keyframes rotate-anime {
		0% {
		    -webkit-transform: rotate(0);
		    transform: rotate(0);
		}

		100% {
		    -webkit-transform: rotate(1turn);
		    transform: rotate(1turn);
		}
	}
	.rotate {
		width: 463px;
		margin-top: 10px;
		animation: rotate-anime 3s linear infinite;
		z-index: -5;
	}
	.box-image {
		position: relative;
		top: -381px;
		left: -133px;
	}
	.image-poke {
		width: 300px;
    height: 300px;
    position: absolute;
    top: -3px;
    left: 580px;
	}
	h3 {
		color: #b4ebff;
		text-align: center;
		margin-top: -63px;
    font-size: 31px;
    letter-spacing: 2px;
	}
	h2 {
		text-align: center;
	    font-size: 28px;
	    color: white;
	    letter-spacing: 2px;
	    letter-spacing: 3px;
    text-shadow: 3px 0px 1px black;
    margin-top: -20px;
	}
	.listpoke {
		position: relative;
		height: 930px;
	}
	.line {
		position: absolute;
	    padding-left: 135px;
    padding-top: 6px;

	    font-size: 20px;
	    text-shadow: 2px 0px 1px #091d42;
	 	color: white;
	 	background: url(../../Public/img/arrow_pc_left.png);
	 	background-size: 100% 100%;
	 	width: 200px;
	    height: 48px;
	    left: -48px;
		top: 200px;
	}
	.version {
		    position: absolute;
    right: 321px;
    top: 172px;
	}
	.info {
		width: 28%;
		position: relative;
	}
	.info span {
		position: absolute;
		margin-top: -20px;
	}
	.back {
			position: relative;
		}
		.go-back {
			font-size: 20px;
			width: 20%;
		    position: relative;
		    top: 4px;
		    left: 20px;
			color: white;
		}
		i.icon-back{
			width: 40px;
		    height: 40px;
		    left: -30px;
		    top: -2px;
		    color: white;
		    position: absolute;
		    content: '';
		    background: url(../../Public/img/back.png) no-repeat right top;
		    background-size: 100% 100%;
		}
		.power {
			position: relative;
			margin-right: 20px;
			   width: 200px;
		    left: 1000px;
		    top: -170px;
		}
		.power p {
			position: absolute;
			font-size: 27px;
			color: #b4ebff
		}
		.power span {
			top: 58px;
			position: absolute;
			font-size: 30px;
    		line-height: 45px;
		}

</style>
<div class= "wrapper clearfix">
	<div></div>
	<div class="container">
			<h1>Từ điển Pokemon</h1>
		<div class="listpoke">
					<a href="?controller=pokemon&action=list" class="back"><i class="icon-back"></i><p class="go-back">TRỞ VỀ</p></a>
				<center>
					<h3>00<?php echo $item['id'] ?></h3>
					<h2><?php echo $item['name'] ?></h2>
				</center>
					<center>
						<img class="rotate" src="../../Public/img/pokemon_bg.png">
						<div class="box-image">
							 <img class="image-poke" src="<?php echo $item['img'] ?>" >
						</div>
					</center>
	              
	                 <div class="line">
	                 
	                 	Hệ <?php echo $item['line']?>
	                 	
	                 </div>
	                <div class="info"><p style="color: #b4ebff; font-size: 27px;">Phiên bản: </p><br><span><?php echo $item['version']?></span></div>
					<div class="version"><?php echo $item['infor']?></div>
					<div class="power"><p>Năng lực </p><br>
						<span><?php echo $item['power']?></span>
				</div>
		</div>
	</div>
</div>