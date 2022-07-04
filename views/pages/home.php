<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/InformationOrder.css"/>
  
  <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/menu.css">
  
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                      <a href="index.php?controller=pages&action=home" style="text-decoration: none;"><div class="link color-text"><i class="fa fa-home"></i>Trang chủ</i></div></a>
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
                      <div class="link"><i class="fa fa-tshirt"></i>Quản lý sản phẩm<i class="fa fa-chevron-down"></i></div>
                      <ul class="submenu">
                        <li><a href="index.php?controller=pages&action=inforCategory">Danh mục</a></li>
                        <li><a href="index.php?controller=pages&action=inforProduct">Sản phẩm</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="index.php?controller=pages&action=inforProfile" style="text-decoration:none"><div class="link"><i class="fa fa-user-circle"></i>Quản lý hồ sơ</div></a>
          
                    </li>
                    <li>
                      <a href="index.php?controller=pages&action=inforOrder" style="text-decoration: none;"><div class="link"><i class="fa fa-receipt"></i>Quản lý đơn hàng</div></a>
                    </li>
                    
                  </ul>
                </div>
          </div>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-3 col">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Tổng số sản phẩm</h6>
              <div class="row">
                <div class="col-8"><i class="fa fa-coins"></i></div>
                <div class="col-4" style="text-align:end">'.$numberproduct["COUNT(Quanlity)"].'</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Tổng số người dùng</h6>
              <div class="row">
                <div class="col-8"><i class="fa fa-coins"></i></div>
                <div class="col-4" style="text-align:end">'.$numberprofile["COUNT(*)"].'</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Tổng số đơn đã giao</h6>
              <div class="row">
                <div class="col-8"><i class="fa fa-coins"></i></div>
                <div class="col-4" style="text-align:end">'.$numberorder["COUNT(*)"].'</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Tổng doanh thu tháng</h6>
              <div class="row">
                <div class="col-4"><i class="fa fa-dollar-sign"></i></div>
                <div class="col-8" style="text-align:end">'.number_format($numberordersum).'<span> VNĐ</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content" style="padding-top: 15px;">
        <div class="Tittle-user">
          Top User
        </div>
        <div class="navbar content-user" style="width:100%">
          <div class="row" style="    width: 100%;
          padding-right: 30px;">
            
            
          
       
        <div class="row"style="    width: 100%;padding-left: 30px;">
              
            
            <div class="navbar card col-sm-5 align2">Người dùng mua nhiều nhất
              <div class="row ">
                <div class="col-sm-4">
                  <img src="'.$findcus->Image .'" alt="..."
                    style="    width: inherit;
                    ">
                </div>
                <div class="col-sm-8">
                  <div class="card-body">
                    <h5 class="card-title">'.$findcus->Surname .' '. $findcus->Name.'</h5>
                    <p class="card-text">Đơn hàng đã mua: <span>'.$sumnumberordersum["COUNT(*)"].'</span></p>

                  </div>
                </div>
              </div>
            </div>

            <div class="navbar card col-sm-5 align2">Người dùng giá trị đơn hàng cao nhất
              <div class="row ">
                <div class="col-sm-4">
                  <img src="'.$findcus2->Image.'" alt="..."
                    style="    width: inherit;
                    ">
                </div>
                <div class="col-sm-8">
                  <div class="card-body">
                    <h5 class="card-title">'.$findcus2->Surname .' '. $findcus2->Name.'</h5>
                    <p class="card-text">Tổng giá trị đã mua: <span>'.number_format($maxnumberordersum['SumPrice']).'</span>VNĐ</p>

                  </div>
                </div>
              </div>
            </div>
</div> </div>
      </div>
      <div class="content" style="padding-top: 15px;">
        <div class="Tittle-user">
          Top sản phẩm ưa thích
        </div>
        <div class="navbar content-user">
          <div class="row" style="width:100%; margin-left:0px">';
          foreach($product_best as $product_bestt){
            echo'
            <div class="navbar card col-sm-3 align">

              <div>
                <img src="'.$product_bestt->Image1.'" alt="..."
                  style="    width: 100%;
                  ">
              </div>
              <div>
                <div class="card-body">
                  <h5 class="card-title" style="text-align:center;">'.$product_bestt->ProductName.'</h5>
                  <p class="card-text" style="text-align:center;">'.number_format($product_bestt->ProductPrice).' <span>VNĐ</span></p>
                  <p class="card-text" style="text-align:center;">Đã bán: '.$product_bestt->Quanlity.'</p>
                </div>
              </div>

            </div>';
          }
echo'</div>
</div>
</div>
<div class="content" style="padding-top: 15px;">
<div class="Tittle-user">
  Lượt theo dõi từ Fanpage
</div>
<div class="navbar content-user">
  <div class="row">
    <div class="navbar card col-2 align" style="border: none;">

      <div>
        <img src="https://www.americandream.edu.vn/statics/uploads/2018/11/fb-logo.png" alt="..." style="    width: 100%;
          ">
      </div>
      <div>
        <div class="card-body">
          
        </div>
      </div>
    </div>
    <div class="navbar card col-2 align" style="border: none;">
      <div>
        <img
          src="https://brasol.vn/public/ckeditor/uploads/tin-tuc/brasol.vn-logo-instargram-logo-instagram-vector.png"
          alt="..." style="    width: 100%;
            ">
      </div>
      <div>
        <div class="card-body">
          
        </div>
      </div>

    </div>
    <div class="navbar card col-2 align" style="border: none;">
      <div>
        <img src="https://dinhduongthiennhien.com/wp-content/uploads/2019/08/logo-shopee-1.jpg" alt="..."
          style="    width: 100%;
          ">
      </div>
      <div>
        <div class="card-body">
          
        </div>
      </div>
    </div>
    <div class="navbar card col-2 align" style="border: none;">

      <div>
        <img src="https://chanhtuoi.vn1.vdrive.vn/uploads/2020/06/logo-lazada-2.png" alt="..." style="    width: 100%;
        ">
      </div>
      <div>
        <div class="card-body">
          
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
';
}
else{
  header('Location:index.php?controller=users&action=loginUser');
}

?>
<div class="navbar content-user">

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
</body>

</html>