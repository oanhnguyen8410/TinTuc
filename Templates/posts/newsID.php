
	<style type="text/css">
		@font-face {
		  font-family: "tahomabold";
		  src: url(../../../Public/fonts/tahomabold.TTF);
		}
		@font-face {
		  font-family: "tahoma";
		  src: url(../../../Public/fonts/tahoma.ttf);
		}
		
		.container {
			width: 1205px;
    		margin: 0 auto;
		}
		.listnews {
			width: 70%;
			margin: 0 auto;
			position: relative;
			margin-top: 5%;
		}
		h2 {
			font-family: "tahomabold";
		    color: #434242;
		    text-align: center;
		}
		.back {
			float: left;
		}
		.go-back {
			font-family: "tahomabold";
			margin-top: 5px;
			color: black;
		}
		i.icon-back{
			width: 20px;
		    height: 34px;
		    left: -30px;
		    top: -2px;
		    position: absolute;
		    content: '';
		    background: url(../../Public/img/icon-back.png) no-repeat right top;
		}
		
		.tag {
			position: absolute;
			right: 0px;
		}
		.time-tag {
			margin-top: -2%;
			font-family: "tahomabold";
			color: #434242;
			font-size: 14px;
		}
		.news {
			border-bottom: 1px solid #b4b4b4;
			height: 100px;
		}
	</style>
	<div class="container">

		<div class="listnews">
			<div class="news">
					<a href="?controller=post&action=list" class="back"><i class="icon-back"></i><p class="go-back">TRỞ VỀ</p></a>
					<h2><?php echo $item['title'] ?></h2>
				<div class="time-tag">
					<p style="float: right;"><?php echo $item['time']?></p><br>
					<p class="tag"><?php echo $item['tag']?></p>
				</div>
			</div>
			<div class="content"><?php echo $item['content']?></div>

		</div>
	</div>
