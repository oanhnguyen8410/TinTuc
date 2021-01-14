
<footer class="clearfix" style="margin-top: 0px;">
	<div class="container">
		<div class="return-top">
			<a onclick="returnTop()"><p>TOP</p></a>
		</div>
		<div class="button-footer">
			<a href="">
				<div class="ft fanpage">
					<p>FANPAGE</p>
				</div>
			</a>
			<a href="">
				<div class="ft group">
					<p>GROUP</p>
				</div>
			</a>
			<a href="">
				<div class="ft youtube">
					<p>YOUTUBE</p>
				</div>
			</a>
		</div>
		<div class="txt-footer">
			<a href="" class="txt-1"><p style="line-height: 30px;">Điều khoản sử dụng</p></a>
		
			<a href=""><p style="line-height: 30px;">Cài đặt và gỡ bỏ</p></a><br>
			<span class="text" style="margin-bottom: 10px;">Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe</span>
		</div>
	</div>
</footer></body>
<script src="./assets/js/jquery-3.5.1.min.js"> </script>
<script src="./assets/js/fancybox.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- frame2-slide -->
<script type="text/javascript">
$('.f2-box-slide').slick({
						dots: true,
					  slidesToShow: 1,
					  slidesToScroll: 1,
					  autoplay: true,
					  autoplaySpeed: 2000,
					});
</script>

<!-- box-tintuc -->
<script type="text/javascript">
$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>

<!-- box-pokedex -->
<script type="text/javascript">
$('.box-pokedex').slick({
      arrows: true,
      
      mobileFirst: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 280,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
        },
      },
      
   
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      ],
    });


</script>

<!-- box-banner-f4 -->
<script type="text/javascript">
$('.box-banner-f4').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
          });
</script>

<!-- returntop -->
<script type="text/javascript">
    function returnTop() {
    $("html, body").animate({ scrollTop: "0" }, 1000);
  }
  </script>

<!-- popup -->
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>	
</html>