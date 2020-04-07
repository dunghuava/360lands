<section id="account" class="sec-home-page">
	<div class="container"><br>
		<div class="row">
			<div class="col-md-4 col-xs-1"></div>
			<div class="col-md-4 form rds5 col-xs-10">
				<h2 class="page-title"><?=$page_name?></h2>
				<div id="register_status"></div>
				<form onsubmit="return do_sign_up()" class="form-group row form-validate" id="form-login-acc" action="" method="post">
					<div class="form-group col-md-6">
						<label for="email-acc">Họ</label>
						<input required id="member_firstname" name="member_firstname" type="text" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label for="email-acc">Tên</label>
						<input required id="member_lastname" name="member_lastname" type="text" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label for="pass-acc">Tên đăng nhập</label>
						<input minlength="5" required id="member_username" name="member_username" type="text" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label for="pass-acc">Email</label>
						<input id="member_email" name="member_email" type="email" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label for="pass-acc">Mật khẩu</label>
						<input minlength="5" required id="member_password" name="member_password" type="password" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember">
								&nbsp;<span style="font-size:12px">Tôi đồng ý với mọi điều khoản</span>
							</label>
						</div>
					</div>
					<div class="form-group col-md-12">
						<button type="submit" name="member_signup" class="btn btn-block btn-warning">Đăng ký</button>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-xs-1"></div>
		</div>
	</div>
</section>

<script>
	function do_sign_up(){
		var member_firstname 	= $('#member_firstname').val();
		var member_lastname 	= $('#member_lastname').val();
		var member_username 	= $('#member_username').val();
		var member_email 		= $('#member_email').val();
		var member_password 	= $('#member_password').val();
		var data={
			'member_firstname':member_firstname,
			'member_lastname':member_lastname,
			'member_username':member_username,
			'member_email':member_email,
			'member_password':member_password
		};
		$.ajax({
			type: "post",
			url: "<?=base_url('account/do_sign_up')?>",
			data: {'member_signup':true,'data':data},
			success: function (res) {
				res=JSON.parse(res);
				$('#register_status').html(res.body);
			}
		});
		return false;
	}
</script>