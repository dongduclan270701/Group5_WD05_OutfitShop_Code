DROP DATABASE shop_outfit;
CREATE DATABASE shop_outfit;
CREATE TABLE `shop_outfit`.`infor_website` ( `Hotline mua hàng` INT(10) NOT NULL , `Chăm sóc khách hàng` INT(10) NOT NULL , `Email shop` VARCHAR(100) NOT NULL , `Link Facebook` VARCHAR(1000) NOT NULL , `Link Instagram` VARCHAR(1000) NOT NULL , `Link Shopee` VARCHAR(1000) NOT NULL , `Link Lazada` VARCHAR(1000) NOT NULL , `Địa chỉ shop` VARCHAR(1000) NOT NULL , `Image` VARCHAR(1000) NOT NULL ) ENGINE = InnoDB;
INSERT INTO `shop_outfit`.`infor_website` (`Hotline mua hàng`, `Chăm sóc khách hàng`, `Email shop`, `Link Facebook`, `Link Instagram`, `Link Shopee`, `Link Lazada`, `Địa chỉ shop`, `Image`) VALUES ('0954034923', '0954034923', 'cskh@gmail.com', 'http://www.facebook.com/sc.sperky.outfit', 'https://www.instagram.com/sc.perky.outfit/', 'https://shopee.vn/sc.perky.outfit', 'https://www.lazada.vn/perky-outfit-sc', 'https://www.lazada.vn/perky-outfit-sc', 'assets/images/logo.png');

CREATE TABLE `shop_outfit`.`infor_sale` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `Mã khuyến mãi` VARCHAR(100) NOT NULL , `Tên khuyến mãi` VARCHAR(100) NOT NULL , `Từ ngày` DATE NOT NULL , `Đến ngày` DATE NOT NULL , `Giá trị` VARCHAR(100) NOT NULL , `Trạng thái` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `shop_outfit`.`infor_sale` (`id`, `Mã khuyến mãi`, `Tên khuyến mãi`, `Từ ngày`, `Đến ngày`, `Giá trị`, `Trạng thái`) VALUES (NULL, 'KM00006', 'Voucher giảm giá', '2021-03-16', '2021-04-16', '20.000', 'Đang kích hoạt');
INSERT INTO `shop_outfit`.`infor_sale` (`id`, `Mã khuyến mãi`, `Tên khuyến mãi`, `Từ ngày`, `Đến ngày`, `Giá trị`, `Trạng thái`) VALUES (NULL, 'KM00006', 'Voucher giảm giá', '2021-03-16', '2021-04-16', '20.000', 'Không kích hoạt');
CREATE TABLE `shop_outfit`.`infor_news` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `Tiêu đề` VARCHAR(100) NOT NULL , `Người đăng` VARCHAR(100) NOT NULL , `Ngày đăng` DATE NOT NULL , `Thể loại` VARCHAR(100) NOT NULL , `Nội dung` VARCHAR(1000) NOT NULL , `Image` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `shop_outfit`.`infor_news` (`id`, `Tiêu đề`, `Người đăng`, `Ngày đăng`, `Thể loại`, `Nội dung`, `Image`) VALUES (NULL, 'Year-end special gift', 'Admin', '2021-04-21', 'Tin tức', 'Cửa hàng Routine thứ 29 tại trung tâm phường Thảo Điền, quận 2 đã chính thức ra mắt như một lời cảm ơn trọn vẹn cho năm 2019 mà chúng tôi dành đến bạn. Hãy đến và tận hưởng không gian mua sắm mới cùng gia đình và bạn bè với những ưu đãi hấp dẫn nhất:?? Tặng túi tote với hoá đơn bất kỳ\r\n\r\n?? Giảm 10% khi mua 01 sản phẩm\r\n\r\n?? Giảm 20% khi mua từ 02 sản phẩm Ưu đãi chỉ áp dụng khi mua trực tiếp tại cửa hàng\r\n\r\nVậy, hẹn gặp bạn vào Thứ bảy, cùng shopping cuối tuần và rục rịch chào đón năm mới, tủ đồ mới nhé ❤️\r\n\r\nTogether warmly welcoming the Routine 29th, in the heart of Thao Dien at 14-16 Quoc Huong str. District 2. We would like to invite you visiting this store and shopping, prearing for The New Year soon:\r\n\r\n?? 10% off for the 1st item\r\n\r\n?? 20% off from the 2nd item\r\n\r\n?? Free 01 tote bag for each purchase\r\n\r\nOnly apply to In-Store shopping\r\n\r\nEverything is going to be ready to welcome you this weekend ❤️\r\n\r\nHope to see you guys!', 'assets/images/logo.png');
CREATE TABLE `shop_outfit`.`infor_category` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `Danh mục` VARCHAR(100) NOT NULL , `Thể loại` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `shop_outfit`.`infor_product` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `Mã sản phẩm` INT(100) NOT NULL , `Tên sản phẩm` VARCHAR(1000) NOT NULL , `Giá sản phẩm` INT(100) NOT NULL , `Image1` VARCHAR(1000) NOT NULL , `Image2` VARCHAR(1000) NOT NULL , `Số lượng` INT(100) NOT NULL , `Giảm giá` INT(100) NOT NULL , `Mô tả` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `shop_outfit`.`infor_profile` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `ID người dùng` INT(100) NOT NULL , `Tên người dùng` VARCHAR(1000) NOT NULL , `Email` VARCHAR(1000) NOT NULL , `Họ` VARCHAR(1000) NOT NULL , `Tên` VARCHAR(1000) NOT NULL , `Số điện thoại` INT(10) NOT NULL , `Địa chỉ` VARCHAR(1000) NOT NULL , `Ghi chú` VARCHAR(1000) NOT NULL , `Image` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


ALTER TABLE `infor_product`
  DROP PRIMARY KEY,
   ADD PRIMARY KEY(
     `id`,
     `Mã sản phẩm`);
ALTER TABLE `infor_profile`
  DROP PRIMARY KEY,
   ADD PRIMARY KEY(
     `id`,
     `ID người dùng`);
ALTER TABLE `infor_sale`
  DROP PRIMARY KEY,
   ADD PRIMARY KEY(
     `id`,
     `Mã khuyến mãi`);
CREATE TABLE `admin` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `Username` VARCHAR(100) NOT NULL , `Password` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES (NULL, 'Admin', 'alo123');
ALTER TABLE `infor_category`
  DROP PRIMARY KEY,
   ADD PRIMARY KEY(
     `id`,
     `Danh mục`);

INSERT INTO `infor_product` (`id`, `Mã sản phẩm`, `Tên sản phẩm`, `Giá sản phẩm`, `Image1`, `Image2`, `Số lượng`, `Giảm giá`, `Mô tả`, `Thể loại`) VALUES (NULL, '100001', 'Lee Teemo', '130000', 'https://i.pinimg.com/originals/47/e0/01/47e001f1be26293d7f8826c5b262d9df.jpg', 'https://i.pinimg.com/originals/47/e0/01/47e001f1be26293d7f8826c5b262d9df.jpg', '10', '0', 'Chất liệu mát mẻ, thoải mái khi đi chơi và ở nhà', '1');
ALTER TABLE `infor_news` CHANGE `Tiêu đề` `Title` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Người đăng` `PostedBy` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Ngày đăng` `DateSubmitted` DATE NOT NULL, CHANGE `Thể loại` `Category` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Nội dung` `Content` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `infor_category` CHANGE `Danh mục` `NameCategory` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Thể loại` `Category` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `infor_product` CHANGE `Mã sản phẩm` `ProductCode` INT(100) NOT NULL, CHANGE `Tên sản phẩm` `ProductName` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Giá sản phẩm` `ProductPrice` INT(100) NOT NULL, CHANGE `Số lượng` `Quanlity` INT(100) NOT NULL, CHANGE `Giảm giá` `Discount` INT(100) NOT NULL, CHANGE `Mô tả` `Describe` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Thể loại` `Category` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `infor_profile` CHANGE `ID người dùng` `UserID` INT(100) NOT NULL, CHANGE `Tên người dùng` `UserName` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Họ` `Surname` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Tên` `Name` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Số điện thoại` `PhoneNumber` INT(10) NOT NULL, CHANGE `Địa chỉ` `Address` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Ghi chú` `Note` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `infor_sale` CHANGE `Mã khuyến mãi` `DiscountCode` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Tên khuyến mãi` `DiscountName` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Từ ngày` `Since` DATE NOT NULL, CHANGE `Đến ngày` `ToDate` DATE NOT NULL, CHANGE `Giá trị` `Value` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Trạng thái` `Status` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `infor_website` CHANGE `Hotline mua hàng` `Hotline` INT(10) NOT NULL, CHANGE `Chăm sóc khách hàng` `CustomerCare` INT(10) NOT NULL, CHANGE `Email shop` `EmailShop` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Link Facebook` `LinkFacebook` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Link Instagram` `LinkInstagram` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Link Shopee` `LinkShopee` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Link Lazada` `LinkLazada` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, CHANGE `Địa chỉ shop` `ShopAddress` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `infor_product` ADD `Size` VARCHAR(10) NOT NULL ;
ALTER TABLE `infor_product` ADD `Color` VARCHAR(10) NOT NULL ;



UPDATE `infor_product` SET `Size` = '1', `Color` = '1' WHERE `infor_product`.`id` = 1 AND `infor_product`.`ProductCode` = 100001;
UPDATE `infor_product` SET `Size` = '2', `Color` = '2' WHERE `infor_product`.`id` = 2 AND `infor_product`.`ProductCode` = 100001;
UPDATE `infor_product` SET `Size` = '3', `Color` = '3' WHERE `infor_product`.`id` = 3 AND `infor_product`.`ProductCode` = 100001;
UPDATE `infor_product` SET `Size` = '2', `Color` = '2' WHERE `infor_product`.`id` = 4 AND `infor_product`.`ProductCode` = 100001;
UPDATE `infor_product` SET `Size` = '3', `Color` = '1' WHERE `infor_product`.`id` = 5 AND `infor_product`.`ProductCode` = 100001;
UPDATE `infor_product` SET `Size` = '2', `Color` = '3' WHERE `infor_product`.`id` = 6 AND `infor_product`.`ProductCode` = 100001;
INSERT INTO `infor_category` (`id`, `NameCategory`, `Category`) VALUES (NULL, 'T-Shirt', 'Sản phẩm'), (NULL, 'Áo sơ mi', 'Sản phẩm'), (NULL, 'Quần', 'Sản phẩm'), (NULL, 'Áo khoác', 'Sản phẩm'), (NULL, 'Phụ kiện', 'Sản phẩm'), (NULL, 'Về chúng tôi', 'Bài viết'), (NULL, 'Tin tức', 'Bài viết');

UPDATE `infor_category` SET `NameCategory` = 'T-Shirt' WHERE `infor_category`.`id` = 1;
UPDATE `infor_category` SET `NameCategory` = 'Áo sơ mi' WHERE `infor_category`.`id` = 2;
UPDATE `infor_category` SET `NameCategory` = 'Quần' WHERE `infor_category`.`id` = 3;
UPDATE `infor_category` SET `NameCategory` = 'Áo khoác' WHERE `infor_category`.`id` = 4;
UPDATE `infor_category` SET `NameCategory` = 'Phụ kiện' WHERE `infor_category`.`id` = 5;
UPDATE `infor_category` SET `NameCategory` = 'Về chúng tôi' WHERE `infor_category`.`id` = 6;
UPDATE `infor_category` SET `NameCategory` = 'Tin tức' WHERE `infor_category`.`id` = 7;




ALTER TABLE `infor_product` CHANGE `Category` `Category` INT(100) NOT NULL;
ALTER TABLE `infor_product` ADD CONSTRAINT `st_fk09` FOREIGN KEY (`Category`) REFERENCES `infor_category`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE `size_product` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `size` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `size_product` (`id`, `size`) VALUES (NULL, 'S'), (NULL, 'X'), (NULL, 'XL');
ALTER TABLE `infor_product` CHANGE `Size` `Size` INT(100) NOT NULL;
ALTER TABLE `infor_product` ADD CONSTRAINT `st_fk10` FOREIGN KEY (`Size`) REFERENCES `size_product`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `infor_product` CHANGE `Color` `Color` INT(100) NOT NULL;
CREATE TABLE `color_product` ( `id` INT NOT NULL AUTO_INCREMENT , `Color` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `color_product` (`id`, `Color`) VALUES (NULL, 'Red'), (NULL, 'White'), (NULL, 'Blue');
ALTER TABLE `infor_product` ADD CONSTRAINT `st_fk11` FOREIGN KEY (`Color`) REFERENCES `color_product`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
INSERT INTO `infor_product` (`id`, `ProductCode`, `ProductName`, `ProductPrice`, `Image1`, `Image2`, `Quanlity`, `Discount`, `Describe`, `Category`, `Size`, `Color`) VALUES (NULL, '100001', 'Lee Teemo', '130000', 'https://i.pinimg.com/originals/47/e0/01/47e001f1be26293d7f8826c5b262d9df.jpg', 'https://i.pinimg.com/originals/47/e0/01/47e001f1be26293d7f8826c5b262d9df.jpg', '10', '0', 'Chất liệu mát mẻ, thoải mái khi đi chơi và ở nhà', '3', '3', '1');
ALTER TABLE `infor_website` ADD `id` INT(10) NOT NULL AUTO_INCREMENT AFTER `Image`, ADD PRIMARY KEY (`id`);



CREATE TABLE `infor_order` ( `orderId` INT(100) NOT NULL AUTO_INCREMENT , `UserName` VARCHAR(1000) NOT NULL , `Date` DATE NOT NULL , `SumPrice` INT(100) NOT NULL , `Status` VARCHAR(1000) NOT NULL , PRIMARY KEY (`orderId`)) ENGINE = InnoDB;
INSERT INTO `infor_order` (`orderId`, `UserName`, `Date`, `SumPrice`, `Status`) VALUES (NULL, 'qưe', '2021-05-19', '21000000', 'Đang vận chuyển'), (NULL, 'qưe', '2021-05-17', '21000000', 'Đã vận chuyển');
CREATE TABLE `list_product_order` ( `orderId` INT NOT NULL , `ProductCode` INT NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `list_product_order` ADD `id` INT(100) NOT NULL AUTO_INCREMENT , ADD PRIMARY KEY (`id`);
INSERT INTO `list_product_order` (`orderId`, `ProductCode`, `id`) VALUES ('1', '100001', NULL), ('2', '100001', NULL);


ALTER TABLE `infor_order` ADD `Email` VARCHAR(1000) NOT NULL ;
ALTER TABLE `infor_order` ADD `PhoneNumber` INT(10) NOT NULL AFTER `Email`, ADD `Address` VARCHAR(1000) NOT NULL AFTER `PhoneNumber`, ADD `DiscountCode` VARCHAR(100) NOT NULL AFTER `Address`;
ALTER TABLE `infor_order` ADD `Price` INT NOT NULL AFTER `DiscountCode`, ADD `Ship` INT NOT NULL AFTER `Price`, ADD `Value` INT NOT NULL AFTER `Ship`;
ALTER TABLE `infor_order` CHANGE `Price` `Price` INT(100) NOT NULL, CHANGE `Ship` `Ship` INT(100) NOT NULL, CHANGE `Value` `Value` INT(100) NOT NULL;
ALTER TABLE `list_product_order` ADD `ProductName` VARCHAR(1000) NOT NULL AFTER `id`, ADD `Image1` VARCHAR(1000) NOT NULL AFTER `ProductName`, ADD `Quanlity` INT(100) NOT NULL AFTER `Image1`, ADD `ProductPrice` INT(100) NOT NULL AFTER `Quanlity`;

CREATE TABLE `infor_month` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `Month` VARCHAR(1000) NOT NULL , `NumberOfProductsSold` INT(100) NOT NULL , `RevenueMonth` INT(100) NOT NULL , `MaxRevenueProduct` VARCHAR(1000) NOT NULL , `MaxProduct` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
CREATE TABLE `infor_day` ( `Day` VARCHAR(1000) NOT NULL , `NumberOfProductsSold` INT(100) NOT NULL , `RevenueDay` INT(100) NOT NULL , `MaxRevenueProduct` VARCHAR(1000) NOT NULL , `MaxProduct` VARCHAR(1000) NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `infor_day` ADD `Month` VARCHAR(1000) NOT NULL ;
CREATE TABLE `list_product_day` ( `Day` VARCHAR(1000) NOT NULL , `ProductCode` INT(10) NOT NULL , `ProductName` VARCHAR(1000) NOT NULL , `Image1` VARCHAR(1000) NOT NULL , `Quanlity` INT(100) NOT NULL , `ProductPrice` INT(100) NOT NULL , `id` INT(10) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `infor_month` (`id`, `Month`, `NumberOfProductsSold`, `RevenueMonth`, `MaxRevenueProduct`, `MaxProduct`) VALUES (NULL, '5-2021', '21', '21000000', '133000', 'Lee Teemo');
INSERT INTO `infor_day` (`Day`, `NumberOfProductsSold`, `RevenueDay`, `MaxRevenueProduct`, `MaxProduct`, `Month`) VALUES ('1', '21', '21000000', '1300000', 'Lee Tommy', '5-2021');
ALTER TABLE `infor_day` ADD `id` INT NOT NULL AUTO_INCREMENT , ADD PRIMARY KEY (`id`);
ALTER TABLE `infor_day` CHANGE `Day` `Day` INT(100) NOT NULL;
INSERT INTO `list_product_day` (`Day`, `ProductCode`, `ProductName`, `Image1`, `Quanlity`, `ProductPrice`, `id`) VALUES ('1', '100001', 'Lee Teemo123', 'assets/images/34.jpg', '1', '130000123', NULL), ('2', '100001', 'Lee Teemo123', 'assets/images/34.jpg', '2', '130000123', NULL);
ALTER TABLE `list_product_day` ADD `Month` VARCHAR(1000) NOT NULL ;



UPDATE `list_product_day` SET `Month` = '1' WHERE `list_product_day`.`id` = 1
UPDATE `list_product_day` SET `Month` = '2' WHERE `list_product_day`.`id` = 2
ALTER TABLE `infor_profile` ADD `password` VARCHAR(1000) NOT NULL AFTER `Image`;
UPDATE `infor_product` SET `ProductName` = 'Áo thun 1', `ProductPrice` = '1300000', `Image1` = 'assets1/images/tshirt.jpg', `Image2` = 'assets1/images/tshirt2.jpg', `Discount` = '0' WHERE `infor_product`.`id` = 1 AND `infor_product`.`ProductCode` = 100001
UPDATE `infor_product` SET `ProductName` = 'Áo thun 2', `ProductPrice` = '130000', `Image1` = 'assets1/images/tshirt2.jpg', `Image2` = 'assets1/images/tshirt1.jpg', `Size` = '2', `Color` = '2' WHERE `infor_product`.`id` = 2 AND `infor_product`.`ProductCode` = 100002
UPDATE `infor_product` SET `ProductName` = 'Áo sơ mi 1', `ProductPrice` = '130000', `Image1` = 'assets1/images/shirt.jpg', `Image2` = 'assets1/images/shirt2.jpg', `Category` = '2' WHERE `infor_product`.`id` = 3 AND `infor_product`.`ProductCode` = 100003
UPDATE `infor_product` SET `ProductName` = 'Áo sơ mi 2', `ProductPrice` = '130000', `Image1` = 'assets1/images/shirt2.jpg', `Image2` = 'assets1/images/shirt.jpg', `Category` = '2', `Size` = '3', `Color` = '3' WHERE `infor_product`.`id` = 4 AND `infor_product`.`ProductCode` = 100004
UPDATE `infor_product` SET `ProductName` = 'Quần 1', `ProductPrice` = '130000', `Image1` = 'assets1/images/pants1.jpg', `Image2` = 'assets1/images/pants2.jpg', `Category` = '3' WHERE `infor_product`.`id` = 5 AND `infor_product`.`ProductCode` = 100005
UPDATE `infor_product` SET `ProductName` = 'Quần 2', `Image1` = 'assets1/images/pants2.jpg', `Image2` = 'assets1/images/pants1.jpg', `Category` = '3', `Size` = '2', `Color` = '1' WHERE `infor_product`.`id` = 6 AND `infor_product`.`ProductCode` = 100006
UPDATE `infor_product` SET `ProductName` = 'Quần 3', `ProductPrice` = '130000', `Image1` = 'assets1/images/pants3.jpg', `Image2` = 'assets1/images/pants4.jpg', `Category` = '3', `Size` = '2' WHERE `infor_product`.`id` = 7 AND `infor_product`.`ProductCode` = 100007
UPDATE `infor_product` SET `ProductCode` = '100008', `ProductName` = 'Quần 4', `ProductPrice` = '130000', `Image1` = 'assets1/images/pants4.jpg', `Image2` = 'assets1/images/pants3.jpg', `Discount` = '0', `Category` = '3', `Size` = '4' WHERE `infor_product`.`id` = 8 AND `infor_product`.`ProductCode` = 1000011
UPDATE `infor_product` SET `ProductCode` = '100009', `ProductName` = 'Áo khoác 1', `ProductPrice` = '130000', `Image1` = 'assets1/images/aokhoac.jpg', `Image2` = 'assets1/images/aokhoac1.jpg', `Discount` = '0', `Category` = '4' WHERE `infor_product`.`id` = 9 AND `infor_product`.`ProductCode` = 100001123
UPDATE `infor_product` SET `ProductCode` = '1000010', `ProductName` = 'áo khoác 2', `Image1` = 'assets1/images/aokhoac1.jpg', `Image2` = 'assets1/images/aokhoac.jpg', `Discount` = '0', `Category` = '4', `Color` = '3' WHERE `infor_product`.`id` = 10 AND `infor_product`.`ProductCode` = 1000011
UPDATE `infor_product` SET `ProductName` = 'Phụ kiện 1', `ProductPrice` = '130000', `Image1` = 'assets1/images/phukien.jpg', `Image2` = 'assets1/images/phukien1.jpg', `Category` = '5' WHERE `infor_product`.`id` = 11 AND `infor_product`.`ProductCode` = 1000011
UPDATE `infor_product` SET `ProductCode` = '1000012', `ProductName` = 'Phụ kiện 2', `ProductPrice` = '130000', `Image1` = 'assets1/images/phukien1.jpg', `Image2` = 'assets1/images/phukien.jpg', `Discount` = '0', `Category` = '5' WHERE `infor_product`.`id` = 12 AND `infor_product`.`ProductCode` = 1000011
UPDATE `infor_product` SET `ProductCode` = '1000013', `ProductName` = 'Phụ kiện 3', `ProductPrice` = '130000', `Image1` = 'assets1/images/phukien2.jpg', `Image2` = 'assets1/images/phukien2.jpg', `Discount` = '0', `Category` = '5' WHERE `infor_product`.`id` = 13 AND `infor_product`.`ProductCode` = 123123123
UPDATE `infor_product` SET `ProductCode` = '1000014', `ProductName` = 'Phụ kiện 3', `ProductPrice` = '130000', `Image1` = 'assets1/images/phukien2.jpg', `Image2` = 'assets1/images/phukien2.jpg', `Discount` = '0' WHERE `infor_product`.`id` = 14 AND `infor_product`.`ProductCode` = 123123
ALTER TABLE `infor_profile` CHANGE `PhoneNumber` `PhoneNumber` INT(10) NULL;
ALTER TABLE `infor_order` CHANGE `orderId` `id` INT(255) NOT NULL;
ALTER TABLE `infor_order` ADD `orderId` INT(255) NOT NULL ;
ALTER TABLE `infor_order` CHANGE `id` `id` INT(255) NOT NULL AUTO_INCREMENT;
ALTER TABLE `infor_product` ADD `public` VARCHAR(1000) NOT NULL ;
ALTER TABLE `infor_order` ADD UNIQUE(`orderId`);
ALTER TABLE `infor_product` ADD UNIQUE(`ProductCode`);
ALTER TABLE `infor_profile` ADD UNIQUE(`UserID`);
ALTER TABLE `infor_sale` ADD UNIQUE(`DiscountCode`);
ALTER TABLE `infor_order` CHANGE `Price` `Price` VARCHAR(1000) NOT NULL;