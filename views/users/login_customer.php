<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="assets1/css/Login.css">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>
<body>
<header>
            <div class="container">
                <div class="text-center">
								<img src="assets1/images/cropped-logo-1.jpg" alt="ảnh logo" title="logo" style="margin:auto"/>

                </div>
            </div>
        </header>

	<div class="login-wrap">
	
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng nhập</label>
			<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Đăng ký</label>
			<div class="login-form">
				<form action="index.php?controller=users&action=login" method="post">
					<div class="sign-in-htm">
						<div class="hr"></div>
						<div class="group">
							<label for="Email" class="label">Email</label>
							<input id="Email" type="text" class="input" name="Email">
						</div>
						<div class="group">
							<label for="password" class="label">Mật khẩu</label>
							<input id="password" type="password" class="input" data-type="password" name="password">
						</div>
						<span id="login-notification" class="notification">
                <?php
								
                  if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if(isset($result) && $result == "Tài khoản đã mở"){
                      header ("Location:index.php");
                    }
                    else{
											
                      echo '								<script>
											swal({
												title: "Đăng nhập không thành công",
												text: "Bạn đã nhập sai tài khoản hoặc mật khẩu, vui lòng nhập lại",
												icon: "error",
												button: "Aww yiss!",
											});
											</script>';
                    }
										if(isset($result) && $result == "Tài khoản đã khóa"){
											echo '								<script>
											swal({
												title: "Đăng nhập không thành công",
												text: "Tài khoản đã bị khóa",
												icon: "error",
												button: "Aww yiss!",
											});
											</script>';unset($_SESSION['UserID']);
											unset($_SESSION['UserName']);
											unset($_SESSION['Email']);
											unset($_SESSION['PhoneNumber']);
											unset($_SESSION['Address']);
										}
                  }
                ?></span>
						<div class="group">
							<input type="submit" class="button" value="Đăng nhập">
						</div>
						<div class="hr"><a href="index.php?controller=users&action=forgot" style="text-decoration:none">Forgot Password</a></div>
					</div>
				</form>
				<form action="index.php?controller=users&action=register" method="post">
					<div class="for-pwd-htm">
						<div class="group">
							<label for="UserName" class="label">Username</label>
							<input id="UserName" type="text" class="input" name="UserName">
						</div>
						<div class="group">
							<label for="Email" class="label">Email</label>
							<input id="Email" type="text" class="input" name="Email">
						</div>
						<div class="group">
							<label for="password" class="label">Mật khẩu</label>
							<input id="password" type="password" class="input" name="password">
						</div>
						<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){
							if(isset($insert) && $insert == "Insert OK"){
								echo'
								<script>
								swal({
									title: "'.$insert.'",
									text: "Bạn đã đăng ký thành công tài khoản tại website",
									icon: "success",
									button: "Aww yiss!",
								});
								</script>
								';
							}}

						?>
						<div class="group">
							<input type="submit" class="button" value="Đăng ký">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
    crossorigin="anonymous"></script>

</body>
</html>