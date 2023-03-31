<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auth Member</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/')?>auth/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>auth/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>auth/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>auth/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>auth/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>auth/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/')?>auth/css/main.css?v=2.0.0">
<!--===============================================================================================-->
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/app.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>auth/css/custom.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="<?= base_url()?>">
						<img src="<?= base_url('assets/')?>auth/images/img-01.png" alt="Persiapan CPNS">
					</a>
				</div>

				<form class="login100-form validate-form" 
						action="<?= base_url('member/register')?>"
						method="POST" class="js-form_registration">
						<input type="hidden" name="<?= $csrfName ?>" value="<?= $csrfToken ?>">
						<input type="hidden" name="session_type" value="<?= $session?>">
					<span class="login100-form-title">
						Member Register
						<?= $this->session->flashdata('message') ?>
						<p style="color: red !important;"><?php echo validation_errors(); ?></p>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nama Lengkap Tidak Boleh Kosong">
						<input class="input100" type="text" name="member_full_name" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Contoh Format Email: ex@abc.xyz">
						<input class="input100" type="text" name="member_email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "No. Hp Tidak Boleh Kosong">
						<input class="input100" type="number" name="member_phone_number" placeholder="No. Hp"
						data-url="<?= base_url('member/MemberAjax/verifyMemberPhoneNumber')?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input select-wrapper" data-validate = "Paket Kelas Tidak Boleh Kosong">
						<select class="input100" name="member_package">
							<option value="1">Paket Standar</option>
							<option value="2">Paket Premium</option>
							<option value="3">Paket Titipan</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="thm-btn pricing-one__btn js-submit-button">
							Daftar
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center p-t-15">
						<span class="txt1">
							Sudah Punya Akun ?
						</span>
						<a class="txt2" href="#">
							Masuk Disini
						</a>
					</div>

					<div class="text-center p-t-100">
						<p>© copyright <?= date("Y")?> PT. Orang Dalam Indonesia</p>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="<?= base_url('assets/')?>auth/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/')?>auth/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('assets/')?>auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/')?>auth/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/')?>auth/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/')?>auth/js/main.js"></script>
	<script src="<?= base_url('assets/')?>admin/js/application_auth.js"></script>

</body>
</html>