<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Document</title>
  <link rel="stylesheet" href="assets1/css/InformationUser.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  </head>
<style>

</style>

<body>
<?php include'header1.php' ?>
  <div class="container" style="max-width:1120px">
    <div class="container"style="
    margin-top: 50px;
    margin-bottom: 50px;">
      <div class="row profile">
        <div class="col-sm-3">
          <div class="profile-sidebar">
          <?php
echo'            <div class="profile-userpic"> <img
                src="'.$profilees->Image.'"
                class="img-responsive" alt="Thông tin cá nhân" style="width:131px; height:131px">
            </div>
            <div class="profile-usertitle">
              <div class="profile-usertitle-name"> UserID: '.$profilees->UserID.'</div>
<div class="profile-usertitle-job"> UserName: '.$profilees->UserName.'</div>';
?>
            </div>
            <div class="profile-userbuttons">
              <a href="http://"><button type="button" class="btn btn-secondary btn-sm">Thoát ra</button></a>
            </div>
            <div class="profile-usermenu">
              <ul class="nav">
              <?php
                echo'<li>
                <a href="index.php?controller=pages&action=showInforCus&UserID='.$profilees->UserID.'">
                  <img src="assets1/images/user.png" alt="" style=" width: 25px;margin-right: 8px;">
                  Thông tin cá nhân
                </a>
              </li>
              <li class="active">
                <a href="index.php?controller=users&action=updateInforCus&UserID='.$profilees->UserID.'">
                  <img src="assets1/images/infor.png" alt="" style=" width: 25px;margin-right: 8px;">
                  Cập nhật thông tin cá nhân
                </a>
              </li>
              <li>
                <a href="index.php?controller=users&action=updatePassword&UserID='.$profilees->UserID.'">
                  <img src="assets1/images/password.png" alt="" style="width: 25px;margin-right: 8px;">
                  Đổi mật khẩu
                </a>
              </li>
              <li>
                <a href="index.php?controller=pages&action=listrordercus&Email='.$profilees->Email.'">
                  <img src="assets1/images/shopping-cart.png" alt="" style="width: 25px;margin-right: 8px;">
                  Quản lý đơn hàng
                </a>
              </li>';
                ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="profile-content">
            <div class="user-page clearfix">
              <h1 class="postname">
                Thay đổi thông tin cá nhân
              </h1>
              <div class="row">
                <div class="col-12">
                  <div class="col-sm-12">
                    <form action="" method="post">
                      <?php
                      echo'<div class="row padd-infor">
                      <div class="col-sm-12 web">
                        <div class="web">Username:</div>
                        <input class="news news2 input-news" type="text" placeholder="Nhập mới" value="'.$profilees->UserName.'" name="UserName">
                      </div>
                      <div class="col-sm-12 web">
                        <div class="web">Email:</div>
                        <input class="news news2 input-news" type="text" placeholder="Nhập mới" value="'.$profilees->Email.'" name="Email"
                          disabled="true">
                      </div>
                      <div class="col-sm-12 web">
                        <div class="web">Họ:</div>
                        <input class="news news2 input-news" type="text" placeholder="Nhập mới" value="'.$profilees->Surname.'" name="Surname">
                      </div>
                      <div class="col-sm-12 web">
                        <div class="web">Tên:</div>
                        <input class="news news2 input-news" type="text" placeholder="Nhập mới" value="'.$profilees->Name.'" name="Name">
                      </div>
                      <div class="col-sm-12 web">
                        <div class="web">Số điện thoại:</div>
                        <input class="news news2 input-news" type="text" placeholder="Nhập mới" value="'.$profilees->PhoneNumber.'" name="PhoneNumber">
                      </div>
                      <div class="col-sm-12 web">
                        <div class="web">Địa chỉ:</div>
                        <input class="news news2 input-news" type="text" placeholder="Nhập mới" value="'.$profilees->Address.'" name="Address">
                      </div>
                      
                    </div>';
                      ?>
                      <?php
                  
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if ($result == 'Update OK'){
                      echo '<script>
                    swal({
                      title: "Cập nhật hoàn tất",
                      text: "Bạn đã cập nhật mật khẩu thành công",
                      type: "success",
                      showConfirmButton: true,
                      buttons: "ểtrt",
                    }, function(){
                      window.location.href = "index.php?controller=pages&action=showInforCus&UserID='.$profilees->UserID.'";
                });
                    </script>';
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
                
                ?> 
                      <div class="col-12" style="text-align: center;"><input type="submit" value="Chỉnh sửa" class="btn btn-sm btn-save"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php include'footer.php' ?>
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
<!--  -->