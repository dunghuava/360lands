<section id="account" class="sec-home-page">
	<div class="container"><br>
		<div class="row">
			<div class="col-md-4 col-xs-1"></div>
			<div class="col-md-4 form rds5 col-xs-10">
				<h2 class="page-title"><?=$page_name?></h2>
				<form onsubmit="return do_sign_in()" class="form-group form-validate" id="sign_in_form" action="" method="post">
					<div id="message_log">
					</div>
					<div class="form-group">
						<label for="email-acc">Tên đăng nhập / Email</label>
						<input required name="member_username" id="member_username" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="pass-acc">Mật khẩu</label>
						<input required name="member_password" id="member_password" type="password" class="form-control">
					</div>
					<div class="form-group form-inline">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember">
								&nbsp;<span style="font-size:12px">Ghi nhớ tài khoản</span>
							</label>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" name="member_signin" class="btn btn-block btn-warning">Đăng nhập</button>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-xs-1"></div>
		</div>
	</div>
</section>

<script type="text/javascript">
	function do_sign_in(){
		var member_username = $('#member_username').val();
		var member_password = $('#member_password').val();
		var data={
			'member_username':member_username,
			'member_password':member_password
		};
		$.ajax({
			type: "post",
			url: "<?=base_url('account/do_sign_in')?>",
			data: {'member_signin':true,'data': data},
			success: function (res) {
				res=JSON.parse(res);
				if (res.login_status=='failed'){
					$('#message_log').html(res.body);
				}else if (res.login_status=='success'){
					location.href='<?=base_url()?>/discovery';
				}
			}
		});
		return false;
	}
</script>