<?php
require_once('controllers/base_controller.php');
require_once('models/page.php');

class CartController extends BaseController {
  function __construct() {
    $this->folder = 'pages';
  }
  public function index(){
    if (isset($_POST['DiscountCode'])) {
      $DiscountCode = $_POST['DiscountCode'];
    }
    else {
      $DiscountCode = null;
    }
    $sale = managesale::Findsales($DiscountCode);
    $data4 = array('sale' => $sale);
    $total =0;
    $Munber =0;
    $valueship = 50000;
    if(isset($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $value){
        $total += $value["11"]*$value["2"];
        $Munber += $value["11"];
        }
    }
    if(isset($sale->Value)){
      $_SESSION['sale'] = $sale->Value;
      $_SESSION['disconoutcode'] = $sale->DiscountCode;
    }else{
      $_SESSION['sale'] = null;
      $_SESSION['disconoutcode'] = null;
    }
    $_SESSION['Munber'] = $Munber;

    if(isset($sale->Value) && $sale->Since < date("Y-m-d") && date("Y-m-d")< $sale->ToDate  && $sale->Status == "Đang kích hoạt"){
      $_SESSION['total2'] = $total2 = $total + $valueship - $sale->Value; 
    } else {
      $_SESSION['total2'] = $total2 = $total + $valueship; 
    }
    $_SESSION['total'] = $total;
    $product = $_SESSION['cart'] ?? [];
    $data1 = array('product' => $product);
    // $data4 = array('Munber' => $Munber);
    $data3 = array('total' => $total);
    $data2 = array('total2' => $total2);
    $data = array_merge($data1,$data2,$data3,$data4);
    $this->render('ShoppingCart',$data);
    // $this->render('header1',$data);
  }
  public function checkout(){
    if (isset($_POST['UserName'])) {
      $UserName = $_POST['UserName'];
    }
    else {
      $UserName = '';
    }
    if (isset($_POST['Address'])) {
      $Address = $_POST['Address'];
    }
    else {
      $Address = '';
    }
    if (isset($_POST['PhoneNumber'])) {
      $PhoneNumber = $_POST['PhoneNumber'];
    }
    else {
      $PhoneNumber = '';
    }
    if (isset($_POST['Email'])) {
      $Email = $_POST['Email'];
    }
    else {
      $Email = '';
    }
    if (isset($_POST['addNew'])) {
      $addNew = $_POST['addNew'];
    }
    else {
      $addNew = null;
    }
    $product = $_SESSION['cart'] ?? [];
    $inforcus = manageorder::insertorder($UserName,$Email,$PhoneNumber,$Address);
    $result = listproductorder::insertproorder($product,$addNew);
    $data1 = array('result' => $result);
    $data2 = array('inforcus' => $inforcus);
    $data = array_merge($data1,$data2);
    $this->render('checkout',$data);
  }
  public function store(){
    $ProductCode = $_GET['ProductCode'];
    $product = manageproduct::getPnotSC($_GET['ProductCode']);
    // $data = array('product' => $product);

    // session_destroy();
    if(empty($_SESSION['cart']) || !array_key_exists($ProductCode, $_SESSION['cart']) ){
      $_SESSION['cart'][$ProductCode]= array(
        $product->ProductCode,
        $product->ProductName,
        $product->ProductPrice,
        $product->Image1,
        $product->Image2,
        $product->Quanlity,
        $product->Discount,
        $product->Describe,
        $product->Category,
        $product->Size,
        $product->Color,
        $product->Munber = 1,
      );
      
    }else{
      $product->Munber +=$_SESSION['cart'][$ProductCode]['11']+1;
      $_SESSION['cart'][$ProductCode]= array(
        $product->ProductCode,
        $product->ProductName,
        $product->ProductPrice,
        $product->Image1,
        $product->Image2,
        $product->Quanlity,
        $product->Discount,
        $product->Describe,
        $product->Category,
        $product->Size,
        $product->Color,
        $product->Munber,
      );
    }
    header('Location:index.php?controller=cart&action=index');
    // echo '<pre>';
    //     print_r($product);
  }
  public function delete(){
    $ProductCode = $_GET['ProductCode'];
    unset($_SESSION['cart'][$ProductCode]);
    header('Location:index.php?controller=cart&action=index');
  }
  public function update(){
    foreach($_POST['Munber'] as $ProductCode => $Munber){
      if($Munber <= 0 || is_long($Munber)){
        continue;
      }
      else{
        $_SESSION['cart'][$ProductCode]['11'] = $Munber;
      }

    }
    header('Location:index.php?controller=cart&action=index');
  }
}
?>