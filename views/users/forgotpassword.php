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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
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
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="margin-left:100px">Quên mật khẩu</label>
			<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
			
			<div class="login-form">
				<form action="index.php?controller=users&action=forgot" method="post">
					<div class="sign-in-htm">
						<div class="hr"></div>
						<div class="group">
							<label for="Email" class="label">Email</label>
							<input id="Email" type="text" class="input" name="Email">
						</div>
						<div class="group">
							<label for="password" class="label">Mật khẩu mới:</label>
							<input id="password" type="password" class="input" data-type="password" name="password">
						</div>
						
            <?php
                  
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              if ($result2 == 'Update OK' ){
                echo '<script>
              swal({
                title: "Cập nhật hoàn tất",
                text: "Bạn đã cập nhật mật khẩu mới thành công",
                type: "success",
                showConfirmButton: true,
                buttons: "ểtrt",
              }, function(){
                window.location.href = "index.php?controller=users&action=login";
          });
              </script>';
              }
              else{
                  echo '<script>
                  swal({
                    title: "Thất bại",
                    text: "Email không tồn tại, yêu cầu nhập lại",
                    type: "error",
                    button: "Aww yiss!",
                  });
                  </script>';
                }
                

            }
          
          ?> 
						<div class="group">
							<input type="submit" class="button" value="Đổi mật khẩu">
						</div>
						<div class="hr"></div>
						
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