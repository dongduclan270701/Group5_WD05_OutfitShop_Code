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
                echo'<li class="active">
                <a href="index.php?controller=pages&action=showInforCus&UserID='.$profilees->UserID.'">
                  <img src="assets1/images/user.png" alt="" style=" width: 25px;margin-right: 8px;">
                  Thông tin cá nhân
                </a>
              </li>
              <li>
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
                Thông tin chung
              </h1>
              <div class="row">
                <div class="col-12">
                  <div class="account-info clearfix">
                    <div class="row">
                      <div class="col-6">
                        <h2 class="posttitle">
                          Thông tin tài khoản
                        </h2>
                      </div>
                      <div class="col-6">
                        <a class="link" href="">Chỉnh sửa</a>
                      </div>
                    </div>
                    <?php
                    echo'<div class="row padd-infor">
                    <div class="col-sm-12">
                      <div class="title123">Email:</div>
                      <div class="news news2 input-news">'.$profilees->Email.'</div>
                    </div>
                    <div class="col-sm-12">
                      <div class="title123">Họ:</div>
                      <div class="news news2 input-news">'.$profilees->Surname.'</div>
                    </div>
                    <div class="col-sm-12">
                      <div class="title123">Tên:</div>
                      <div class="news news2 input-news">'.$profilees->Name.'</div>
                    </div>
                    <div class="col-sm-12">
                      <div class="title123">Số điện thoại:</div>
                      <div class="news news2 input-news">'.$profilees->PhoneNumber.'</div>
                    </div>
                    <div class="col-sm-12">
                      <div class="title123">Địa chỉ:</div>
                      <div class="news news2 input-news">'.$profilees->Address.'</div>
                    </div>
                  </div>';
                    ?>

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