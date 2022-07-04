<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập vào website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/login.css" rel="stylesheet" type="text/css"/>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="text-center">
                    <img src="assets/images/logo.png" alt="ảnh logo" title="logo" />

                </div>
            </div>
        </header>
<form action="index.php?controller=users&action=loginUser" method="post">
            <div class="container">
            <div class="login-form">     
                <div class="input-box">     
                        <input type="text" placeholder="USERNAME ADMIN" name="Username">
</div> 
<div class="input-box">  
                        <input type="password" placeholder="PASSWORD ADMIN" name="Password">
</div>
                    <span id="login-notification" class="notification">
                <?php
                  if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if($result == 1){
                      header ("Location:index.php?controller=pages&action=home");
                    }
                    else{
                      echo '<script>
                      swal({
                        title: "Thất bại",
                        text: "Bạn cập nhật thông tin website không thành công",
                        icon: "error",
                        button: "Aww yiss!",
                      });
                      </script>';
                    }
                  }
                ?></span>
                    <div class="input-box">
                        <input  type="submit" value="Login">
                    </div>
                
            </div>
            </div>
</form>
    </body>
</html>