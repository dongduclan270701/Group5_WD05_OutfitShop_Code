<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/css/header.css" rel="stylesheet" type="text/css" />
  <script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="topnav" id="myTopnav">
      <div class="container-fluid">
        <a href="http://" class="Logo"><img src="assets/images/Capture.PNG" alt="logo header"
                ></a>
                
                    <h2 class="h2-icon"><nav id="mainav2" class="" style="">
                        <a class="i1" href="http://"><i class="fas fa-bell"></i></a>
                        <a class="i1" href="http://"><i class="fas fa-envelope"></i></a>
                        <a class="f1">
                        
    <ul class="clear">
    <li><i class="fas fa-user"></i>Admin
        <ul class="dr">
            <li class="dro"><a href="index.php?controller=users&action=logoutAd" style="padding: 10px 0px 10px 16px;
    margin-top: 10px;">Logout</a></li>
       </ul>
    </li>
</ul>
    </nav>
  </a>
                        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                    </h2>

      </div>
  </div>
  
  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
</body>

</html>
