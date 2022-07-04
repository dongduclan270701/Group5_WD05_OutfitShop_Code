<?php
$controllers = array(
  'cart'=>['store','index','delete','update','checkout','sale'],
  'pages' => ['home', 'error','inforWebsite','inforSale','inforNews','inforCategory','inforProduct','inforProfile','inforOrder','inforMonth','inforDay','inforReport','homepage','chinhsach','news','tshirt','shirt','spants','lpants','jacket','accessories','PFull','PnotS','PnotSC','showInforCus','listrordercus','listrproordercus','cancellistrproordercus'],
  'users' => ['loginUser', 'updateWebsite', 'updateSale', 'updateNews', 'updateCategory', 'updateProduct','updateProfile','updateOrder','logoutCus','logoutAd','insertSale','insertNews','insertProduct','login','register','updateInforCus','updatePassword','showinforSale','showinforNews','showinforCategory','showinforProduct','showOrder','forgot','cancellistrproordercus'] 
  //chưa có action logout ở router
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.
// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.

if (!array_key_exists($controller, $controllers) || 
    !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}
// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
//var_dump($controller);
require_once('controllers/' . $controller . '_controller.php');
// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
$ctrclass = str_replace('_', '', ucwords($controller, '_')). 'Controller';
$controller = new $ctrclass;
$controller->$action(); 
?>