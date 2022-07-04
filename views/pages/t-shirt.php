<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets1/css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="assets1/css/Homepage.css">
	<link rel="stylesheet" href="assets1/css/Footer.css">
	<script src="https://kit.fontawesome.com/017c8d7ce8.js" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="assets1/js/modernizr.js"></script>



	<!-- <link rel="stylesheet" href="assets/assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/assets/owlcarousel/assets/owl.theme.default.min.css">

	<script src="assets/assets/vendors/jquery.min.js"></script>
	<script src="assets/assets/owlcarousel/owl.carousel.js"></script> -->


	<title>e</title>
</head>
<style>
	.jet-woo-product-price,
	.jet-woo-product-title {
		text-align: center;    margin-top: 10px;
    margin-bottom: 10px;
	}
</style>

<body>
	<?php include'header1.php' ?>
	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					
					<li class="filter"><a class="selected" data-type="all">Trang chủ / T-Shirts</a></li>

				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul>
			<?php
				foreach ($tshirt as $tshirtt){
					echo'<li class="mix '.$tshirtt->ProductName.' Màu-'.$tshirtt->Color.' T-Shirt"><img
					src="'.$tshirtt->Image1.'" alt="">
				<h5 class="jet-woo-product-title">
					<a href="index.php?controller=pages&action=PFull&ProductCode='.$tshirtt->ProductCode.'" rel="bookmark">
						'.$tshirtt->ProductName.'
					</a>
				</h5>
				<div class="jet-woo-product-price">
					<span class="woocommerce-Price-amount amount">
						<bdi> 
							'. number_format("$tshirtt->ProductPrice",0,",",","). ' 
								<span class="woocommerce-Price-currencySymbol">
									₫
								</span>
						</bdi>
					</span>
				</div>
			</li>';
				}
				?>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>

			</ul>
			<div class="cd-fail-message">No results found</div>
			<div class="Tittle">
				<h2 class="elementor-heading-title elementor-size-large">Sản phẩm bán chạy</h2>
			</div>
			<div class="row">
      <div class="col-sm"><img src="https://scperkyoutfit.vn/wp-content/uploads/2020/08/kie_8256-1000x937.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS TÚI GIÓ</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span></div></div>
      <div class="col-sm"><img src="https://scperkyoutfit.vn/wp-content/uploads/2020/08/kie_8256-1000x937.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS TÚI GIÓ</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span></div></div>
      <div class="col-sm"><img src="https://scperkyoutfit.vn/wp-content/uploads/2020/08/kie_8256-1000x937.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS TÚI GIÓ</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span></div></div>
      <div class="col-sm"><img src="https://scperkyoutfit.vn/wp-content/uploads/2020/08/kie_8256-1000x937.jpg" alt="" style="width:100%;height: 204px;">            <h5 class="jet-woo-product-title"><a href="https://scperkyoutfit.vn/product/cargo-shorts-tui-gio/"
                rel="bookmark">CARGO SHORTS TÚI GIÓ</a></h5>
            <div class="jet-woo-product-price"><span class="woocommerce-Price-amount amount"><bdi>249.000<span
                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span></div></div>
    </div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Tên sản phẩm</h4>

					<div class="cd-filter-content">
						<input type="search" placeholder="Tên">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Sản phẩm</h4>
					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".T-Shirt" type="checkbox" id="T-Shirt" checked>
							<label class="checkbox-label" for="checkbox1">T-Shirt</label>
						</li>
						<li>
							<input class="filter" data-filter=".Áo-sơ-mi" type="checkbox" id="Áo-sơ-mi">
							<label class="checkbox-label" for="Áo-sơ-mi">Áo-sơ-mi</label>
						</li>
						<li>
							<input class="filter" data-filter=".Quần-dài" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="Quần-dài">Quần-dài</label>
						</li>
						<li>
							<input class="filter" data-filter=".Quần-Shorts" type="checkbox" id="Quần-Shorts">
							<label class="checkbox-label" for="Quần-Shorts">Quần-Shorts</label>
						</li>
						<li>
							<input class="filter" data-filter=".Áo-Khoác" type="checkbox" id="Áo-Khoác">
							<label class="checkbox-label" for="Áo-Khoác">Áo-Khoác</label>
						</li>
						<li>
							<input class="filter" data-filter=".Phụ-kiện" type="checkbox" id="Phụ-kiện">
							<label class="checkbox-label" for="Phụ-kiện">Phụ-kiện</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->


				<div class="cd-filter-block">
					<h4>Màu sắc</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".Màu-1" type="radio" name="radioButton" id="Màu-1">
							<label class="radio-label" for="Màu-1">Màu-1</label>
						</li>

						<li>
							<input class="filter" data-filter=".Màu-2" type="radio" name="radioButton" id="Màu-2">
							<label class="radio-label" for="Màu-2">Màu-2</label>
						</li>

						<li>
							<input class="filter" data-filter=".Màu-3" type="radio" name="radioButton" id="Màu-3">
							<label class="radio-label" for="Màu-3">Màu-3</label>
						</li>

					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>

	</main> <!-- cd-main-content -->
	<?php include'footer.php'?>
	<script src="assets1/js/jquery-2.1.1.js"></script>
	<script src="assets1/js/jquery.mixitup.min.js"></script>
	<script src="assets1/js/main.js"></script>


</body>

</html>