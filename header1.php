<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fluffster</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="assets1/css/Header.css" rel="stylesheet" type="text/css">
  <!-- <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->
  <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->

</head>

<body id="top">

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <?php 
      $db = DBConnection::getInstance();
      $req = $db->query('SELECT * FROM `infor_website` where `id` = 1');
      $item = $req->fetch();
      echo'
      <ul class="nospace">
        <li>
          <p class="head-cs">Hotline Mua Hàng: 0'.$item['Hotline'].'</p>
        </li>
        <li>
          <p class="head-cs">Hotline CSKH: 0'.$item['CustomerCare'].'</p>
        </li>
        <li>
          <p class="head-cs">Email CSKH: '.$item['EmailShop'].'</p>
        </li>';?>
      </ul>
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <section>
        <div></div>
        <div>
          <h1 id="logo"><a href="?"><img src="assets1/images/cropped-logo-1.jpg" alt=""></a></h1>
        </div>
        <div class="searchh">
          <form class="clear" method="post" action="">
            <fieldset>
              <legend>Search:</legend>
              <input type="search" value="" placeholder="Tìm kiếm&hellip;">
              <button type="submit" title="Search"><img src="assets1/images/search.png" alt=""style="width:17px"></button>
            </fieldset>
          </form>
          <a class="clear" href="index.php?controller=cart&action=index" title="Login"><i><img src="assets1/images/shopping-cart.png" alt=""style="width:22px"></i><span class="badge bg-primary rounded-pill"><?php    
                if(isset($_SESSION['Munber'])){
                  echo $_SESSION['Munber'];
                  }
                  else{echo'0';} ?></span></a>
          <?php if(isset($_SESSION['UserName'])){
    echo'
    <nav id="mainav2" class="" style="">
    <ul class="clear">
    <li><img src="assets1/images/user.png" alt=""style="width:22px">     '.$_SESSION['UserName'].'
        <ul class="dr">
            <li class="dro"><a href="index.php?controller=pages&action=showInforCus&UserID='.$_SESSION['UserID'].'">Trang cá nhân</a></li>
            <li class="dro"><a href="index.php?controller=users&action=logoutCus">Logout</a></li>
       </ul>
    </li>
</ul>
    </nav>';
  }else{
    echo'<a class="notlog" href="index.php?controller=users&action=login"><img class="notlog1" src="assets1/images/user.png" alt=""style="width:22px"></a>';
  }
  
  ?>
          
          
        </div>
      </section>
    </header>
  </div>
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php?controller=pages&action=tshirt">T-Shirt</a></li>
        <li><a href="index.php?controller=pages&action=shirt">Áo sơ mi</a></li>
        <li><a class="drop" href="index.php?controller=pages&action=spants">Quần</a>
          <ul class="dr">
            <li class="dro"><a href="index.php?controller=pages&action=lpants">Quần dài</a></li>
            <li class="dro"><a href="index.php?controller=pages&action=spants">Quần short</a></li>
          </ul>
        </li>
        <li><a href="index.php?controller=pages&action=jacket">Áo khoác</a></li>
        <li><a href="index.php?controller=pages&action=accessories">Phụ kiện</a></li>
        <li><a href="index.php?controller=pages&action=chinhsach">Về chúng tôi</a></li>
        <li><a href="index.php?controller=pages&action=news">Tin tức</a></li>
      </ul>
      <!-- ################################################################################################ -->



    </nav>
    <ul id="accordion" class="accordion">
      <li>
        <div class="link"><i><img src="assets1/images/justification.png" alt=""style="width:22px"></i></div>
        <ul class="submenu">
          <li><a href="index.php?controller=pages&action=tshirt">T-Shirt</a></li>
          <li><a href="index.php?controller=pages&action=shirt">Áo sơ mi</a></li>
          <li><a href="index.php?controller=pages&action=lpants">Quần</a></li>
          <li><a href="index.php?controller=pages&action=jacket">Áo khoác</a></li>
          <li><a href="index.php?controller=pages&action=accessories">Phụ kiện</a></li>
          <li><a href="index.php?controller=pages&action=chinhsach">Về chúng tôi</a></li>
          <li><a href="index.php?controller=pages&action=news">Tin tức</a></li>
        </ul>
      </li>
    </ul>

  </div>
  <!-- JAVASCRIPTS -->
  <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>

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