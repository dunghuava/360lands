<section id="account" class="sec-home-page">
	<div class="container"><br>
		<div class="row">
			<div class="col-md-4 col-xs-1"></div>
			<div class="col-md-4 form rds5 col-xs-10">
				<h2 class="page-title"><?=$page_name?></h2>
				<form class="form-group form-validate" id="sign_in_form" action="" method="post">
					<?php if (isset($error_log)){ ?>
						<div class="form-group">
							<div class="alert alert-danger">
								<strong class="fa fa-bell"></strong> <?=$error_log?>
							</div>
						</div>
					<?php } ?>
					<div class="form-group">
						<label for="email-acc">Tên đăng nhập / Email</label>
						<input required name="member_username" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="pass-acc">Mật khẩu</label>
						<input required name="member_password" type="password" class="form-control">
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