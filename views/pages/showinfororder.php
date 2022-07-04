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
<?php include'header1.php' ?>
<body>

  <div class="container" style="max-width:1120px">
    <div class="container" style="
    margin-top: 50px;
    margin-bottom: 50px;">
      <div class="row profile">
        <div class="col-sm-3">
        <?php
echo'           <div class="profile-sidebar">
            <div class="profile-userpic"> <img src="'.$profilees->Image.'" class="img-responsive"
                alt="Thông tin cá nhân" style="width:131px; height:131px">
            </div>
            <div class="profile-usertitle">
             <div class="profile-usertitle-name"> UserID: '.$profilees->UserID.'</div>
<div class="profile-usertitle-job"> UserName: '.$profilees->UserName.'</div>

            </div>
            <div class="profile-userbuttons">
              <a href="http://"><button type="button" class="btn btn-secondary btn-sm">Thoát ra</button></a>
            </div>
            <div class="profile-usermenu">
              <ul class="nav">
                <li>
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
                <li class="active">
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
                Thông tin đơn hàng
              </h1>

              <hr>
  <div class="row" style="padding: 0px 20px 10px 20px; font-size: 16px; font-weight: 600;">
<?php
echo'    <div class="col-sm-7">ID đơn hàng:'.$list1->orderId.'</div>
<div class="col-sm-5 statis">Đơn hàng: '.$list1->Status.'</div>
</div>

<div class="row" style="padding: 0px 20px 10px 20px;">
<div class="adope">Địa chỉ nhận hàng:</div>
</div>
<div class="row" style="padding: 0px 20px 10px 20px;">
<div class="adope">'.$list1->UserName.'</div>
</div>
<div class="row" style="padding: 0px 20px 10px 20px;">
<div class="adope">'.$list1->PhoneNumber.'</div>
</div>
<div class="row" style="padding: 0px 20px 10px 20px;">
<div class="adope">'.$list1->Address.'</div>
</div>';
?>
<?php
foreach ($list_order as $list_orderr) {
  echo'  <div class="row" style="padding: 0px 20px 10px 20px;">
    <div class="col-8" style="margin: auto;">
      <div class="pro-img"><img src="'.$list_orderr->Image1.'" alt=""
          style="width:80px;border-radius: 3px;"></div>
      <div class="pro-name" style="padding: inherit;margin-top: 15px;">
        <div>'.$list_orderr->ProductName.' </div>
        <div>x'.$list_orderr->Quanlity.'</div>
      </div>
    </div>
    <div class="col-4" style="text-align: right;margin: auto; color:red">'.number_format($list_orderr->ProductPrice).' ₫</div>
  </div>
';
}
?><?php
$totooal = $list1->SumPrice - $list1->Ship + $list1->Value;
echo'

  <div style="text-align: right;margin: auto; color:red;padding: 0px 20px 10px 20px;">Tổng sản phẩm: '. number_format($totooal).' ₫</div>
  <div style="text-align: right;margin: auto; color:red;padding: 0px 20px 10px 20px;">Mã giảm giá: '. number_format($list1->Value).' ₫</div>
  <div style="text-align: right;margin: auto; color:red;padding: 0px 20px 10px 20px;">Phí vận chuyển : '. number_format($list1->Ship).' ₫</div>
  <div style="text-align: right;margin: auto; color:red;padding: 0px 20px 10px 20px; font-size:16px">Tổng: '. number_format($list1->SumPrice).' ₫</div>
  <div class="row" style="padding: 0px 20px 10px 20px;">
    <div class="profile-userbuttons">'; ?>
      <?php 
      if ($list1->Status == "Đã hủy"){
        echo '<button type="button" class="btn btn-secondary btn-sm" disabled="false">Hủy đơn hàng</button>';
      }
      if ($list1->Status == "Đang giao hàng"){
        echo '<button type="button" class="btn btn-secondary btn-sm" disabled="false">Hủy đơn hàng</button>';
      }
      if ($list1->Status == "Đang xác thực"){
        echo '<button onclick="showForm()" class="btn btn-secondary btn-sm">Hủy đơn hàng</button>
        <form action="index.php?controller=pages&action=cancellistrproordercus&orderId='.$list1->orderId.'&Email='.$profilees->Email.'" method="post">
        <div class="form-cancel" style="display:none;">
          <div class="news" style="margin-top: 10px">Lý do hủy đơn hàng</div>
            <input class="news news2 input-news" type="text" name="Price">
            <button type="submit" class="btn btn-secondary btn-sm">Xác nhận hủy đơn hàng</button>
        </div>
      </form>';
      }
      ?>
      <?php
                  
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if ($cancelorder == 'Update OK'){
                      echo '<script>
                    swal({
                      title: "Cập nhật hoàn tất",
                      text: "Bạn đã cập nhật thành công",
                      type: "success",
                      showConfirmButton: true,
                      buttons: "ểtrt",
                    }, function(){
                      window.location.href = "index.php?controller=pages&action=cancellistrproordercus&orderId='.$list1->orderId.'&Email='.$profilees->Email.'";
                });
                    </script>';
                    }
                    else{
                        echo '<script>
                        swal({
                          title: "Thất bại",
                          text: "Bạn cập nhật không thành công",
                          icon: "error",
                          button: "Aww yiss!",
                        });
                        </script>';
                      }
                  }
                
                ?> 
    </div>
  </div>

          </div >
        </div>
      </div>
    </div>
  </div>
  </div>

  
  
  <script>
    function showForm(){
      $(".form-cancel").slideToggle();
    }
  </script>
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
