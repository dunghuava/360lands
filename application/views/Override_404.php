<section><br>
	<div class="container">
		<div class="text-center">
			
			<div class="jumbotron">
				<div class="container">
					<h1>404</h1>
					<p>Không tìm thấy trang mà bạn đang yêu cầu</p>
					<p>
						<a id="text-back" href="<?=base_url()?>"></a>
					</p>
				</div>
			</div>
			
		</div>
	</div>
</section>
<script>
	auto_back(10);
	function auto_back(times){
		var inter_val = setInterval(() => {
			$('#text-back').html('<span class="fa fa-arrow-right"></span>Tự động chuyển hướng trong '+times+' giây');
			if (times==0){
				location.href='<?=base_url()?>';
			}
			times--;
		}, 1000);
	}
</script>