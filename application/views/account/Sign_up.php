<section id="account" class="sec-home-page">
	<div class="container"><br>
		<div class="row">
			<div class="col-md-4 col-xs-1"></div>
			<div class="col-md-4 form rds5 col-xs-10">
				<h2 class="page-title"><?=$page_name?></h2>
				<form class="form-group row form-validate" id="form-login-acc" action="" method="post">
					<div class="form-group col-md-6">
						<label for="email-acc">Họ</label>
						<input required name="_fristname" type="text" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label for="email-acc">Tên</label>
						<input required name="_lasstname" type="text" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label for="pass-acc">Tên đăng nhập</label>
						<input minlength="5" required name="_loginname" type="text" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label for="pass-acc">Email</label>
						<input required name="_email" type="email" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<label for="pass-acc">Mật khẩu</label>
						<input minlength="5" required name="_password" type="password" class="form-control">
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
						<button type="submit" class="btn btn-block btn-warning">Đăng ký</button>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-xs-1"></div>
		</div>
	</div>
</section>