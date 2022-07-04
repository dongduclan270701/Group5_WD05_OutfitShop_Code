<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sc Perky Outfit</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ManageSale.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/InformationNews.css">
  <link rel="stylesheet" href="assets/css/menu.css">
  <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>

<body>

<?php
if (isset($_SESSION['Username'])){
  include 'Header.php';
  echo'<div>
  <div class="row ">
  <div class="col-sm-2 ">
          <div class="nav-head-content" style="    height: auto;">
              <ul id="accordion" class="accordion">
                <li>
                  <a href="index.php?controller=pages&action=home" style="text-decoration: none;"><div class="link"><i class="fa fa-home"></i>Trang Chủ</i></div></a>
                </li>
                <li>
                  <div class="link"><i class="fa fa-globe"></i>Quản lý trang web<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    <li><a href="index.php?controller=pages&action=inforWebsite">Trang web</a></li>
                    <li class="color-text"><a href="index.php?controller=pages&action=inforSale">Khuyến mãi</a></li>
                    <li><a href="index.php?controller=pages&action=inforNews">Tin tức</a></li>
                  </ul>
                </li>
                <li>
                  <div class="link color-text"><i class="fa fa-tshirt"></i>Quản lý sản phẩm<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                    <li><a href="index.php?controller=pages&action=inforCategory">Danh mục</a></li>
                    <li><a href="index.php?controller=pages&action=inforProduct">Sản phẩm</a></li>
                  </ul>
                </li>
                <li>
                  <a href="index.php?controller=pages&action=inforProfile"><div class="link"><i class="fa fa-user-circle"></i>Quản lý hồ sơ</div></a>
      
                </li>
                <li>
                  <a href="index.php?controller=pages&action=inforOrder" style="text-decoration: none;"><div class="link"><i class="fa fa-receipt"></i>Quản lý đơn hàng</div></a>
                </li>
                
              </ul>
            </div>
      </div>
      <div class="col-sm-10 ">
          <div class="title1 ">
              <nav class="navbar navbar-light bg-light list-voucher">
                  <div class="container-fluid ">
                      <a class="navbar-brand ">Quản lý sản phẩm</a>
                  </div>
              </nav>
          </div>

          <div style="background-color: white ;padding: 1px 30px 30px 30px;border-radius: 15px;">
          <div class="navbar navbar-light list-voucher ">
                  <div class="row row3 ">
                      <div class="col ">
                        <a href="index.php?controller=users&action=insertProduct">
                          <input type="submit" class="btn btn btn-sm btn-outline-secondary btnn  " value="Thêm sản phẩm"></a>
                      </div>
                  </div>
              </div>
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr style="text-align: center;
font-size: 13px;">
                          <th>Mã sản phẩm</th>
                          <th>Tên sản phẩm</th>
                          <th class="display">Giá sản phẩm</th>
                          <th class="display">Hình ảnh</th>
                          <th class="display">Số lượng</th>
                          <th class="display">Giá giảm</th>
                          <th class="display">Hiển thị</th>
                          <th>Danh mục</th>
                          <th>Tác vụ</th>
                          
                        </tr>
                      </thead>
                  
                  <tbody>';
                  foreach ($infor_product as $infor_productt){
                    echo '
                    <tr style="text-align: center;
                    font-size: 13px;">
                    <th style="vertical-align: inherit;"><p style=" font-weight: normal !important ;margin: auto; padding: inherit;">'.$infor_productt->ProductCode.'</p></th>
                    <th style="vertical-align: inherit;"><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.$infor_productt->ProductName.'</p></th>
                    <th class="display" style="vertical-align: inherit;"><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.$infor_productt->ProductPrice.'</p></th>
                    <th class="display" style="vertical-align: inherit;"><p style=" font-weight: normal !important ;margin: auto; padding: inherit;"><img src="'.$infor_productt->Image1.'" alt="" style="width:50px"></p></th>
                    <th class="display" style="vertical-align: inherit;"><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.$infor_productt->Quanlity.'</p></th>
                    <th class="display" style="vertical-align: inherit;"><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.$infor_productt->Discount.'</p></th>
                    <th class="display" style="vertical-align: inherit;"><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.$infor_productt->public.'</p></th>
                    <th style="vertical-align: inherit;"><p style=" font-weight: normal !important;margin: auto; padding: inherit;">';
                    if ($infor_productt->Category == "1") {
                      echo"T-shirt";
                    }
                    if ($infor_productt->Category == "2") {
                      echo"Áo sơ mi";
                    }
                    if ($infor_productt->Category == "3") {
                      echo"Quần";
                    }
                    if ($infor_productt->Category == "4") {
                      echo"Áo khoác";
                    }
                    if ($infor_productt->Category == "5") {
                      echo"Phụ kiện";
                    };echo'</p></th>
                    <th style="vertical-align: inherit;"><a href="index.php?controller=users&action=updateProduct&ProductCode=' . $infor_productt->ProductCode . '"><button type="button " class="btn btn-sm btn-secondary btn-sua ">Sửa</button></a>
                    <a href="index.php?controller=users&action=showinforProduct&ProductCode=' . $infor_productt->ProductCode . '"><button type="button " class="btn btn-sm btn-secondary btn-sua ">Xem</button></a></th>
                  </tr>
                    ';
                  }
                  echo'</tbody></table>
                    

                    

                    
                  </div>
              </div>
          </div>
      </div>';
}
else{
  header('Location:index.php?controller=users&action=loginUser');
}

?>
                            
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
    $(function () {
      var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown)
      }

      Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
          $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
          $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
      }

      var accordion = new Accordion($('#accordion'), false);
    });
  </script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>

</html>