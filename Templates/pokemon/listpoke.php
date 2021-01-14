<style type="text/css">
	.wrapper {
		/*background-color: #1b252f;*/
		background: url(../../Public/img/list_top_bg.jpg) center top ;
		background-size: 100% 100%;
    	margin-top: -20px;
    	color: white;
    	font-family: "utm-cafeta";
    	letter-spacing: 1px;
	}
	h1 {
		padding-top: 10px;
		text-align: center;
		color: black;
		background: url(../../Public/img/pokedex_bg.png);
		background-size: 100% 100%;
		padding: 44px;
	    font-size: 24px;
	    font-family: "utm-cafeta";
	   letter-spacing: 1px;
	   z-index: 1;
	}
	h1:hover {
		filter: brightness(110%);
	}
	
	.box-pokemon {
		position: relative;
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
	@keyframes zoom {
0% {
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
}

50% {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
}
100% {
    -webkit-transform: scale(0.95);
    transform: scale(0.95);
    }
}
	.img-poke {
		background: url(../../Public/img/random_center_bg.png);
		background-size: 100% 100%;
		width: 22%;
		position: absolute;
	}
	.img-poke:hover {
		filter: brightness(110%);
	}
	.rotate {
		width: 980px;
		margin-top: -100px;
		animation: rotate-anime 3s linear infinite;
		z-index: -5;
	}
	.box-image {
		position: relative;
		top: -381px;
		left: -133px;
	}
	.img-mini {
		position: absolute;
		width: 120px;
		background: url(../../Public/img/random_center_bg.png);
		background-size: 100% 100%;
		/*animation: zoom 3s linear infinite;*/
	}
	.img-mini:hover {
		filter: brightness(120%);
	}
	.pokedex {
		float: left;
		margin-right: 20px;
		background: url(../../Public/img/list_pokemon_bg.png);
		background-size: 100% 100%;
		width: 255px;
	    height: 320px;
	    margin-bottom: 67px;
	}
	.pokedex-image {
		width: 150px;
	    height: 150px;
	    padding-left: 52px;
	    padding-top: 13px;
	}
	h2 {
		color: #b4ebff;
		padding-left: 20px;
	}
	h3 {
		padding-left: 20px;
	    line-height: 0px;
	    font-size: 28px;
	    color: white;
	    letter-spacing: 2px;
	}
	.line {
		margin-left: 150px;
	    padding-left: 10px;
	    background-color: #0094e5;
	    width: 68px;
	    border-radius: 10px;
	    font-size: 18px;
	    text-shadow: 2px 0px 1px #091d42;
	 	color: white;

	}
	.box-pokedex-total {
		z-index: 2;
		margin-top: 50px;
		margin-left: 50px;
	}
	.more  {
		width: 98%;
	}
</style>
<div class="wrapper clearfix">
	<div class="container">
		<div class="box-pokemon">
			<h1>Từ điển Pokemon</h1>
			<center>
				<img class="rotate" src="../../Public/img/pokemon_list_bg.png">
				<div class="box-image">
					<img class="img-poke" src="../../Public/img/1.png">
				</div>
			</center>
			<img class="img-mini" src="../../Public/img/5.png" style="top: 131px; left: 43px;">
			<img class="img-mini" src="../../Public/img/3.png" style="top: 266px; left: 148px;">
			<img class="img-mini" src="../../Public/img/4.png" style="top: 129px; left: 248px;">
			<img class="img-mini" src="../../Public/img/8.png" style="top: 338px; left: 303px;">
			<img class="img-mini" src="../../Public/img/9.png" style="top: 338px;">

			<img class="img-mini" src="../../Public/img/2.png" style="top: 327px; right: 1px;">
			<img class="img-mini" src="../../Public/img/6.png" style="top: 333px; right: 284px">
			<img class="img-mini" src="../../Public/img/7.png" style="top: 131px; right: 45px">
			<img class="img-mini" src="../../Public/img/10.png" style="top: 243px; right: 145px">
			<img class="img-mini" src="../../Public/img/11.png" style="top: 131px; right: 251px">
				 <img class="more" src="../../Public/img/xem.png">
				 <div class="box-pokedex-total" style="margin-bottom: 100px;">
						<?php foreach ($pokes as $poke) : ?>
						  <a href="?controller=pokemon&action=listid&pokeId=<?=$poke['id']?>">
							<div class="pokedex" >
								 <img class="pokedex-image" src="<?php echo $poke['img'] ?>">
									<h2>00<?php echo $poke['id'] ?></h2>
				                  <h3><?php echo $poke['name'] ?></h3> 
				                   
				                    <div class="line">Hệ <?php echo $poke['line']?></div>
				                    
							</div>
							</a>
						<?php endforeach; ?>

				</div>
			</div>
		</div>
</div>

