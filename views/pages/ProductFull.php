<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="assets1/css/Product.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
  <?php include'header1.php' ?>
  <div id="container" class="container" style="width:100%;max-width:1140px; margin-top:40px;">
    <div class="row">
      <div class="col-sm-9" style="    text-align: -webkit-center;    background-color: #f3f3f3;">
        <div class="image-pro">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

<?php
echo'              <img src="'.$productbestw->Image1.'" alt=""
data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"
aria-label="Slide 1" style="width:60px;height: 60px;">



<img src="'.$productbestw->Image2.'" alt=""
data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"
style="width:60px;height: 60px;">




</div>
<div class="carousel-inner">
<div class="carousel-item s active">
<div class="swiper-slide-bg">
  <div class="swiper-slide-contents1"><img
      src="'.$productbestw->Image1.'" alt=""
      style="width:100%;heigh: 303px;"></div>

</div>
</div>
<div class="carousel-item s">
<div class="swiper-slide-bg">
  <div class="swiper-slide-contents1"><img
      src="'.$productbestw->Image2.'" alt=""
      style="width:100%;heigh: 303px;"></div>

</div>
</div>';
?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
      <?php
        echo '<div class="Title-pro">'.$productbestw->ProductName.'</div>
        <hr>
        <div class="Title-pro">'. number_format("$productbestw->ProductPrice",0,",",","). ' ???';
          ?>
        <hr>
        <div class="Title-pro">K??ch th?????c</div>
        <div>
          <select name="Size" class="choose-box">
            <option>Ch???n k??ch th?????c</option>
            <option value="X">X</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
        </div>
        <hr>
        <div class="Title-pro">M??u s???c</div>
        <div>
          <select name="Size" class="choose-box">
            <option>Ch???n m??u</option>
            <option value="X">Tr???ng</option>
            <option value="XL">??en</option>
            <option value="XXL">?????</option>
          </select>
        </div>
        <hr>
        <div class="row">
          <div class="col-4">
            <select name="Quanlity" class="choose-box">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="col-8">
          <a href="index.php?controller=cart&action=store&ProductCode=<?php echo ''.$productbestw->ProductCode.'' ?>" style="text-decoration: none;"><button class="button" type="submit" class="add-box">Mua s???n ph???m</button></a>
          </div>
        </div>
        <div></div>
        <div></div>
      </div>
    </div>

    <div class="Tittle">
      <h2 class="elementor-heading-title elementor-size-large">Chi ti???t s???n ph???m</h2>
    </div>
    <div class="row describe-pro">
      <div class="col-6">

        <button class="tablinks" onclick="openCity(event, 'M??t???')">M?? t???</button>
      </div>
      <div class="col-6">
        <button class="tablinks" onclick="openCity(event, 'Th??ngs???')">Th??ng s???</button>
      </div>
    </div>
    <div id="M??t???" class="tabcontent" style="display:block;">
      ????y l?? m???u ??o ???????c thi???t k??? m???t tr?????c t???i gi???n v???i tag SC m??u ??en tr???ng, m???t sau l?? slogan c??ng nh?? ti??u ch?? th???i
      trang m?? ch??ng m??nh lu??n h?????ng ?????n ???????????????????????????, ???????????????????? & ???????????????????
      ??o ph?? h???p cho nh???ng b???n y??u th??ch s??? tr??? trung, n??ng ?????ng v?? v???i 3 tone m??u tr???m r??u, ghi, ??en, ????y g???n nh?? l??
      m???u ??o c?? th??? ph???i v???i m???i lo???i qu???n
    </div>
    <div id="Th??ngs???" class="tabcontent">
      ????y l2222?? m???u ??o ???????c thi???t k??? m???t tr?????c t???i gi???n v???i tag SC m??u ??en tr???ng, m???t sau l?? slogan c??ng nh?? ti??u ch??
      th???i trang m?? ch??ng m??nh lu??n h?????ng ?????n ???????????????????????????, ???????????????????? & ???????????????????
      ??o ph?? h???p cho nh???ng b???n y??u th??ch s??? tr??? trung, n??ng ?????ng v?? v???i 3 tone m??u tr???m r??u, ghi, ??en, ????y g???n nh?? l??
      m???u ??o c?? th??? ph???i v???i m???i lo???i qu???n
    </div>



    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
    <div class="Tittle">
      <h2 class="elementor-heading-title elementor-size-large">Chia s??? c??ch b???n ph???i ?????</h2>
    </div>
    <div class="row">
      <div class="col-sm"><img src="assets1/images/social-020820-6-1000x1000.jpg" alt=""
          style="width:100%;height: 354px;"></div>
      <div class="col-sm"><img src="assets1/images/titleback.jpg" alt=""
          style="width:100%;height: 354px;"></div>
          <div class="col-sm"><img src="assets1/images/social-020820-6-1000x1000.jpg" alt=""
          style="width:100%;height: 354px;"></div>
      <div class="col-sm"><img src="assets1/images/titleback.jpg" alt=""
          style="width:100%;height: 354px;"></div>
    </div>

    <div class="Tittle">
      <h2 class="elementor-heading-title elementor-size-large">S???n ph???m t????ng t???</h2>
    </div>
    <div class="row">
    <div class="col-sm"><img src="assets1/images/??o kho??c5.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS T??I GI??</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">???</span></bdi></span></div></div>
      <div class="col-sm"><img src="assets1/images/??o kho??c6.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS T??I GI??</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">???</span></bdi></span></div></div>
      <div class="col-sm"><img src="assets1/images/??o kho??c5.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS T??I GI??</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">???</span></bdi></span></div></div>
      <div class="col-sm"><img src="assets1/images/??o kho??c6.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS T??I GI??</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">???</span></bdi></span></div></div>
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