<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="assets/css/InformationOrder.css">
  <link rel="stylesheet" href="assets/css/InformationNews.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/menu.css">
  <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>     






    
<?php
    if (isset($_SESSION['Username'])){
      include 'Header.php';
      echo'<form action="" method="post">
      <div>
        <div class="row ">
        <div class="col-sm-2 ">
                  <div class="nav-head-content" style="    height: auto;">
                      <ul id="accordion" class="accordion">
                        <li>
                          <a href="index.php?controller=pages&action=home" style="text-decoration: none;"><div class="link"><i class="fa fa-home"></i>Trang Ch???</i></div></a>
                        </li>
                        <li>
                          <div class="link"><i class="fa fa-globe"></i>Qu???n l?? trang web<i class="fa fa-chevron-down"></i></div>
                          <ul class="submenu">
                            <li><a href="index.php?controller=pages&action=inforWebsite">Trang web</a></li>
                            <li class="color-text"><a href="index.php?controller=pages&action=inforSale">Khuy???n m??i</a></li>
                            <li><a href="index.php?controller=pages&action=inforNews">Tin t???c</a></li>
                          </ul>
                        </li>
                        <li>
                          <div class="link"><i class="fa fa-tshirt"></i>Qu???n l?? s???n ph???m<i class="fa fa-chevron-down"></i></div>
                          <ul class="submenu">
                            <li><a href="index.php?controller=pages&action=inforCategory">Danh m???c</a></li>
                            <li><a href="index.php?controller=pages&action=inforProduct">S???n ph???m</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="index.php?controller=pages&action=inforProfile"><div class="link"><i class="fa fa-user-circle"></i>Qu???n l?? h??? s??</div></a>
              
                        </li>
                        <li>
                          <a href="index.php?controller=pages&action=inforOrder" style="text-decoration: none;"><div class="link"><i class="fa fa-receipt"></i>Qu???n l?? ????n h??ng</div></a>
                        </li>
                        
                      </ul>
                    </div>
              </div>
          <div class="col-sm-10">
            <div class="title1">
              <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand">Qu???n l?? ????n h??ng</a>
                </div>
              </nav>
            </div>
  
            <div class="content">';
            echo'<nav class="navbar navbar-light bg-light">
            <div class="container-fluid title">
              <a class="navbar-brand">M?? ????n h??ng: '.$infor_order->orderId.'</a>
            </div>

          </nav>
          <div class="container-fluid">
            <div class="row navbar">
              <div class="col-sm-12">
                <div class="row padd-infor">
                  <div class="col-sm-4 infor">
                    <div class="infor">H??? v?? t??n:</div>
                    <div class="news news2 input-news">'.$infor_order->UserName.'</div>
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">Email:</div>
                    <div class="news news2 input-news">'.$infor_order->Email.'</div>
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">S??? ??i???n tho???i:</div>
                    <div class="news news2 input-news">'.$infor_order->PhoneNumber.'</div>
                  </div>
                </div>
                <div class="row padd-infor">
                  <div class="col-sm-4 infor">
                    <div class="infor">?????a ch???:</div>
                    <div class="news news2 input-news">'.$infor_order->Address.'</div>
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">M?? gi???m gi?? ???? d??ng:</div>
                    <div class="news news2 input-news">'.$infor_order->DiscountCode.'</div>
                  </div>
                  <div class="col-sm-4 infor">
                    <div class="infor">T??nh tr???ng ????n h??ng:</div>
                    <div class="news news2 input-news">'.$infor_order->Status.'</div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>';
echo'            <div class="col-sm-12">
<nav class="navbar-light bg-light">
  <div class="container-fluid title">
    <a class="navbar-brand"style="font-size: 20px;">Danh s??ch s???n ph???m</a>
  </div>
</nav>
<div class="title2">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr style="text-align: center;font-size: 13px;">
        <th>M?? s???n ph???m</th>
        <th>T??n s???n ph???m</th>
        <th class="display">H??nh ???nh</th>
        <th>S??? l?????ng</th>
        <th>Gi??</th>
      </tr>
    </thead>

<tbody>';
foreach ($list_product_order as $list_product_orderr){
  echo '
  <tr style="text-align: center;
  font-size: 13px;">
  <th><p style=" font-weight: normal !important ;margin: auto; padding: inherit;">'.$list_product_orderr->ProductCode.'</p></th>
  <th><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.$list_product_orderr->ProductName.'</p></th>
  <th class="display"><p style=" font-weight: normal !important;margin: auto"><img src="'.$list_product_orderr->Image1.'" alt="" style="width:50px"></p></th>
  <th><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.$list_product_orderr->Quanlity.'</p></th>
  <th><p style=" font-weight: normal !important;margin: auto; padding: inherit;">'.number_format($list_product_orderr->ProductPrice).'</p></th>
  
  
</tr>
  ';}
  echo'                  </tbody></table>
                


  </div>';
  echo'<nav class="navbar navbar-light">
              <div class="row row4 title2">
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col">Th??nh ti???n:</div>
                <div class="col">'.number_format($infor_order->SumPrice - $infor_order->Ship + $infor_order->Value).' VN??</div>
              </div>
            </nav>
            <nav class="navbar navbar-light">
              <div class="row row4 title2">
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col">Ph?? v???n chuy???n:</div>
                <div class="col">'.number_format($infor_order->Ship).' VN??</div>
              </div>
            </nav>
            <nav class="navbar navbar-light">
              <div class="row row4 title2">
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col">M?? gi???m gi??:</div>
                <div class="col">'.number_format($infor_order->Value).' VN??</div>
              </div>
            </nav>
            <nav class="navbar navbar-light">
              <div class="row row4 title2">
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col col2"></div>
                <div class="col">T???ng:</div>
                <div class="col">'.number_format($infor_order->SumPrice).' VN??</div>
              </div>
            </nav>';
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              if ($update == 'Update OK'){
                echo '<script>
              swal({
                title: "C???p nh???t ho??n t???t",
                text: "B???n ???? c???p nh???t m???t kh???u th??nh c??ng",
                type: "success",
                showConfirmButton: true,
                buttons: "???trt",
              }, function(){
                window.location.href = "index.php?controller=users&action=updateOrder&orderId='.$infor_order->orderId.'";
          });
              </script>';
              }
              else{
                  echo '<script>
                  swal({
                    title: "Th???t b???i",
                    text: "B???n c???p nh???t th??ng tin website kh??ng th??nh c??ng",
                    icon: "error",
                    button: "Aww yiss!",
                  });
                  </script>';
                }
            }
            echo'              <div class="col-sm " style="margin-top: 15px;text-align:center">
        <a href="index.php?controller=pages&action=inforOrder"><input class="btn btn btn-sm btn-outline-secondary  " style="width:50px" value="H???y"></a>
    </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</form>';


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