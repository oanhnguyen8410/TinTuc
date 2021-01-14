
	<style type="text/css">
		img.new-url {
			width: 160px;
			float: left;
		}
		.listnews {
			width: 70%;
			margin: 0 auto;
			position: relative;
			margin-top: 3%;
			margin-bottom: 100px;
		}
		h2 {
			margin-left: 23%;
			font-family: "tahomabold";
			color: #434242;
			font-size: 20px;
		}
		.time-tag {
			margin-top: -2%;
			font-family: "tahomabold";
			color: #434242;
			font-size: 14px;
			margin-left: 90%;
			margin-top: -5%;
		}
		.more {
			font-family: "tahomabold";
			position: absolute;
    		right: 0px;
			color: #ffffff;
		    padding: 6px 30px;
		    background: #091d42;
		    margin-top: 37px;
		}
		.news {
			height: 130px;
			border-bottom: 1px solid #b4b4b4;
			margin-top: 5%;
		}
		ul {
			list-style: none;
		}
		a {
			font-family: "utm-cafeta";
			color: #434242;
			font-size: 25px;

		}
		li.tab-link  {
			float: left;
			padding-left: 40px;
			padding-right: 35px;

		}
		/*.tab-link a:hover {
			color: #1f5eac;
			border-bottom: 4px solid #1f5eac;
	    	line-height: 25px;
		}*/
		/*h1:hover {
			color: #ffa500;
			border-bottom: 6px solid #ffa500;
		}*/
		.tab-link-news{
			height: 80px;
		}
		/*.tab-link a {
		  color: #757575;
		}*/
		.tab-link a:hover {
		  color: #ffa500;
		  border-bottom: 4px solid #ffa500;
		  line-height: 25px;
		}
		
		.current a {
		  color:  #ffa500;
		  border-bottom: 4px solid  #ffa500;
		  line-height: 25px;
		}
	</style>
<div class="container">
	<div class="listnews">
		  <div class="tab-link-news ">
    <ul class="tabs clearfix">
      <li class="tab-link  current">
        <a class="title-h2" href="?controller=post&action=list" >
          TẤT CẢ
        </a>
      </li>

      <li class="tab-link ">
        <a class="title-h2" href="?controller=post&action=news" >
          TIN TỨC
        </a>
      </li>

      <li class="tab-link ">
        <a class="title-h2" href="?controller=post&action=events" >
         SỰ KIỆN
        </a>
      </li>
      <li class="tab-link ">
        <a class="title-h2" href="?controller=post&action=guide" >
         HƯỚNG DẪN
        </a>
      </li>
      <li class="tab-link item-5">
        <a href="?controller=post&action=feature" >
          TÍNH NĂNG
        </a>
      </li>
    </ul>
  </div>
 
		<?php foreach ($posts as $post) : ?>
		
			<div class="news">
				<img class="new-url" src="<?php echo $post['url_thumbnail'] ?>">
				<h2><?php echo $post['title'] ?></h2>
				<div class="time-tag">
				<p><?php echo $post['time']?></p>
				
				</div>
				<div>
				<a class="more" href="?controller=post&action=listid&postId=<?=$post['id']?>">Xem</a>
				</div>
			</div>

		<?php endforeach; ?>
	</div>
</div>