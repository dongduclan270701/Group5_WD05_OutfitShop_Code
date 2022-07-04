<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets1/css/TinTuc.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<title></title>
</head>

<body>
  <?php include'header1.php' ?>
  <section class="section-top">
    <div class="box-section">
      <div class="box-section-container">
        <div class="section-content">
          <span class="section-span">
            <a href="http://">SC Perky Outfit</a>
          </span>
          »
          <span>Danh mục tin tức</span>
        </div>
      </div>
    </div>
  </section>
  <section style="margin-bottom:30px; margin-top:30px">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="TinTuc-Left">
            <div class="Border">
              <div style="text-align : center; margin-top:10px">
                <b style="font-size: 18px;
              font-weight: 600;">Bài viết mới nhất</b>
                <hr style="max-width: 94%;    margin-left: auto;
              margin-right: auto; border-top: 2px solid black;">
              </div>
              

              <?php
              foreach ($newshome as $newshomen) {
                echo'<div class="row" style="margin-left: 12px;
                margin-right: 12px;">
                  <div class="Image-Title-Left"> <a href="http://"><img
                        src="'.$newshomen->Image.'" style="width:130px;"
                        alt=""></a></div>
                  <div class="Text-Title-Left">
                    <div class="Text-Title-Top">
                      <h3>'.$newshomen->Title.'</h3>
                    </div>
                    <div class="Text-Title-Bottom"><span>'.$newshomen->DateSubmitted.'<span></div>
                  </div>
                </div>';
              }
              ?>


            </div>
          </div>
        </div>


        <div class="col-sm-8">
          <article><div style=" margin-left: 10px ;margin-top:10px"><b style="font-size: 18px;
          font-weight: 600;">Danh mục tin tức</b>
            <hr style="max-width: 100%;    margin-left: auto;
          margin-right: auto; border-top: 2px solid black;">
          <?php
          foreach ($newshome as $newshomen) {
            echo'
            
          </div>
          <div class="row row1" style="margin-left: 12px;
            margin-right: 12px;">
            <div class="Image-Title-Right"> <a href="http://"><img
                  src="'.$newshomen->Image.'" alt=""></a>
            </div>
            <div class="Text-Title-Right">
              <div class="Text-Title-Top">
                <h3>'.$newshomen->Title.'</h3>
              </div>
              <div class="Text-Title-Bottom"><span>'.$newshomen->DateSubmitted.'<span></div>
              <div class="Text-Title-Bottom-Down">
                <p>'.$newshomen->Content.'</p>
              </div>
            </div>
          ';
          }
          ?></div>
          </article>
        </div>
      </div>
    </div>
  </section>
  
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