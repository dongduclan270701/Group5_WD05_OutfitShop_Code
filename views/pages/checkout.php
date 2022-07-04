<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets1/css/checkout.css">
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

  <div class="container" style="">
    <h2 id="elementor-heading-title">Thanh toán</h2>
    <form action="" method="post">
    <div class="row">
      <div class="col-sm-6">
        <div class="col-sm-12">
          <h3 id="elementor-size-large">Thông tin thanh toán</h3>
          <div>Tên <span style="color:red">*</span></div>
          <input type="text" 
          <?php if (isset($_SESSION['UserID'])) {
            echo 'value="'.$_SESSION['UserName'].'"';
          }
           ?>name="UserName">
          <div>Địa chỉ email <span style="color:red">*</span></div>
          <input type="text" <?php if (isset($_SESSION['UserID'])) {
            echo 'value="'.$_SESSION['Email'].'"';
          }
           ?>name="Email">
          <div>Số điện thoại <span style="color:red">*</span></div>
          <input type="text" <?php if (isset($_SESSION['UserID'])) {
            echo 'value="'.$_SESSION['PhoneNumber'].'"';
          }
           ?>name="PhoneNumber">

          <div>Địa chỉ <span style="color:red">*</span></div>
          <input type="text" <?php if (isset($_SESSION['UserID'])) {
            echo 'value="'.$_SESSION['Address'].'"';
          }
           ?>name="Address">
                      <?php

                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                    if ($_POST['UserName'] != "" && $_POST['Email'] != "" && $_POST['PhoneNumber'] != "" && $_POST['Address'] != "" && $_SESSION['total'] != "0") {
                      echo '

                    <script>


                    swal({
                      title: "Bạn đã đặt đơn hàng thành công",
                      text: "Id đơn hàng của bạn là:'.$_SESSION['orderIdd'].'",
                      type: "success",
                      showConfirmButton: true,
                      buttons: "ểtrt",
                    }, function(){
                          window.location.href = "index.php?controller=cart&action=index";
                    });
                    
                    </script>';unset($_SESSION['orderIdd']);unset($_SESSION['cart']);
                    }
                    else {
                      echo '

                      <script>
  
  
                      swal({
                        title: "Bạn đã đặt đơn hàng thất bại",
                        text: "Yêu cầu bạn nhập đủ thông tin thanh toán và trong đơn hàng phải có sản phẩm",
                        type: "error",
                        showConfirmButton: true,
                        buttons: "ểtrt",
                      });
                      
                      </script>';
                  }
                  }
                  
                
                ?> 
          <h3 id="elementor-size-large" style="margin-top:20px">Thông tin bổ sung</h3>
          <div>Ghi chú đơn hàng (tuỳ chọn)</div>
          <input type="text" placeholder="123123">
        </div>
      </div>
      <div class="col-sm-6">
        <h3 id="elementor-size-large">Tổng giá trị đơn hàng:</h3>
        <?php
        echo'<table class="table">
        <thead class="cart-sum">
          <tr>
            <th class="cart-sum cart-sum1">Sản phẩm</th>
            <th class="cart-sum">Tạm tính</th>
          </tr>
        </thead>
        <tbody class="cart-sum">
          <tr>
            <th class="cart-sum cart-sum1">Tạm tính</th>
            <td class="cart-sum">
              <p style="color:red">'.number_format($_SESSION['total']).'₫</p>
            </td>
          </tr>
          <tr>
            <th class="cart-sum cart-sum1">Giao hàng</th>
            <td class="cart-sum">
              <p style="color:red">Đồng giá : 50,000₫</p>
            </td>
          </tr>
          <thead class="cart-sum">
            <tr>
              <th class="cart-sum cart-sum1">Tổng</th>
              <th class="cart-sum" style="color:red">'.number_format($_SESSION['total2']).'₫</th>
            </tr>
          </thead>
        </tbody>
      </table>';
        ?>
        <ul class="wc_payment_methods payment_methods methods">
          <li class="wc_payment_method payment_method_bacs">
            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"
              checked="checked" data-order_button_text="" style="display: none;">

            <label for="payment_method_bacs">
              Chuyển khoản ngân hàng </label>
            <div class="payment_box payment_method_bacs">
              <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn
                trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
            </div>
          </li>
        </ul>
        <ul class="wc_payment_methods payment_methods methods">
          <li class="wc_payment_method payment_method_bacs">
            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs"
              checked="checked" data-order_button_text="" style="display: none;">

            <label for="payment_method_bacs">
              Dữ liệu cá nhân của bạn sẽ được sử dụng để phục vụ đơn hàng của bạn, hỗ trợ trải nghiệm website và cho nhiều mục đích khác nhau được mô tả trong chính sách riêng tư của chúng tôi. </label>
              <div style="text-align:-webkit-right;">
              
                <div class="shubmit">
                          <input id="button12" value="Đặt đơn hàng" name="addNew" type="submit">
                        </div>
                      </div>
          </li>
        </ul>
      </div>
    </div>
    </form>
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
<?php include'footer.php' ?>
</html>