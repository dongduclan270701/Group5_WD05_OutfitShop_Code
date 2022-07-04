<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Document</title>
  <link rel="stylesheet" href="assets1/css/shoppingcart.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
  <?php include'header1.php' ?>
  <div class="container" style="max-width:1120px">
    <div class="Tittle">
      <h2 class="elementor-heading-title elementor-size-large">Các sản phẩm đã chọn</h2>
    </div>
      <form action="index.php?controller=cart&action=update" method="post">
        <table class="table">
          <thead>
            <tr>
              <th style="padding: 13px 10px 13px 10px;">Mã sản phẩm</th>
              <th style="padding: 13px 10px 13px 10px;">Tên sản phẩm</th>
              <th style="padding: 13px 10px 13px 10px;"> Giá sản phẩm</th>
              <th style="padding: 13px 10px 13px 10px;">Số lượng</th>
              <th style="padding: 13px 10px 13px 10px;">Tổng giá</th>
              <th style="padding: 13px 10px 13px 10px;">Loại bỏ</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            foreach($product as $productt){
              echo'<tr class="cart-pro">
              <th ><img src="'.$productt['4'].'" alt="" style="width:90px"></th>
              <td class="cart-pro-td cart-pro-td2">'.$productt['1'].'</td>
              <td class="cart-pro-td cart-pro-td2" style="color:red">'.number_format($productt['2']).'₫</td>
              <td style="text-align: -webkit-center;" class="cart-pro-td"><input type="text" name="Munber['.$productt['0'].']" value="'.$productt['11'].'"></td>
              <td class="cart-pro-td cart-pro-td2" style="color:red">'.number_format($productt['2']*$productt['11']).'₫</td>
              <td class="cart-pro-td cart-pro-td2"><a href="index.php?controller=cart&action=delete&ProductCode='.$productt['0'].'">Xóa</a></td>
            </tr>';
          }
        
        ?>
            <tr>
              <td colspan="6" class="sale-trans" style="    padding: 15px 15px 15px 15px;">
                <div class="row">
                  
                  <div class="col" style="text-align:-webkit-right;">
                    <div class="shubmit">
                      <button id="button1" type="submit">Cập nhật</button>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>

        </table>

      </form>
      <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <div class="Tittle">
                  <h2 class="elementor-heading-title elementor-size-large">Cộng giỏ hàng</h2>
                </div>
                <form action="" method="post">
                <div class="col" style="text-align:start">
                    <input type="text" name="DiscountCode" placeholder="Mã giảm giá" style="width: 100%;
    float: left;
    border-radius: 3px;
    height: 34px;
    text-align: center;
    margin-bottom:5px;border:1px solid black">
                    <button id="button1" type="submit" style="width:100%; margin-bottom:30px">Áp dụng</button>
                    <?php
                  
                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $datenow =  date("Y-m-d");
                    if (isset($sale->Since)){
                      $sinceq = $sale->Since;
                    }
                    else{
                      $sinceq = null;
                    }
                    if (isset($sale->ToDate)){
                      $sinceqq = $sale->ToDate;
                    }
                    else{
                      $sinceqq = null;
                    }
                    if (isset($sale)  && $sinceq < $datenow && $datenow < $sinceqq && $sale->Status == "Đang kích hoạt"){
                      echo '
                      <script>
                      swal({
                        
                        title: "Thành công",
                          text: "Bạn dùng mã giảm giá thành công",
                          icon: "success",
                        button: "Aww yiss!",
                      });
                      </script>';
                    }
                    
                    else{
                        echo '<script>
                        swal({
                          title: "Thất bại",
                        text: "Mã giảm giá không tồn tại",
                        icon: "error",
                          button: "Aww yiss!",
                        });
                        </script>';
                      }
                  }
                
                ?> 
                  </div>
                  </form>
                  <table class="table">
                    <thead class="cart-sum">
                      <tr>
                        <th class="cart-sum cart-sum1">Tạm tính</th>
                        <?php
                                
                        echo'<th class="cart-sum " style="color:red;">'.number_format($total).'₫</th>
                      </tr>
                    </thead>
                    <tbody class="cart-sum">
                      <tr>
                        <th class="cart-sum cart-sum1">Giao hàng</th>
                        <td class="cart-sum">
                          <p style="color:red">Đồng giá : 50,000₫</p>
                          <p>Tùy chọn giao hàng sẽ được cập nhật trong quá trình thanh toán.</p>
                          <p style="color:red">Tính phí giao hàng</p>
                        </td>
                      </tr>
                      <thead class="cart-sum">
                        <tr>
                          <th class="cart-sum cart-sum1">Tổng</th>
                          <th class="cart-sum" style="color:red;">'.number_format($total2).'₫</th>';?>
                        </tr>
                      </thead>
                    </tbody>
                  </table>
                              <div style="text-align:-webkit-right;">
            <div class="shubmit">
                      <a href="index.php?controller=cart&action=checkout"><button id="button12">Tiến hành đặt đơn hàng</button></a>
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