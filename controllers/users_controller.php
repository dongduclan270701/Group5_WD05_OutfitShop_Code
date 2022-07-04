<?php
require_once('controllers/base_controller.php');
require_once('models/user.php');


class UsersController extends BaseController {
  function __construct() {
    $this->folder = 'users';
  }
  public function login() {
    if(isset($_POST['Email'])){
      $Email = $_POST['Email'];
    }
    else{
      $Email = '';
    }
    if(isset($_POST['password'])){
      $password = $_POST['password'];
    }
    else{
      $password = '';
    }
    $result = manageprofile::logincustomer($Email, $password);
    $data = array('result'=>$result);
    $this->render('login_customer', $data);
  }
  public function forgot() {
    if(isset($_POST['Email'])){
      $Email = $_POST['Email'];
    }
    else{
      $Email = '';
    }
    if(isset($_POST['password'])){
      $password = $_POST['password'];
    }
    else{
      $password = '';
    }
    
    $result = manageprofile::forgotpassword($Email);
    if($result != 'not found'){
      $result2 = manageprofile::forgotpassword2($result->UserID,$password);
    }
    $data1 = array('result'=>$result);
    $data2 = array('result2'=>$result2);
    $data = array_merge($data1, $data2);
    $this->render('forgotpassword', $data);
  }
  public function register() {
    if(isset($_POST['Email'])){
      $Email = $_POST['Email'];
    }
    else{
      $Email = '';
    }
    if(isset($_POST['password'])){
      $password = $_POST['password'];
    }
    else{
      $password = '';
    }
    if(isset($_POST['UserName'])){
      $UserName = $_POST['UserName'];
    }
    else{
      $UserName = '';
    }
    $insert = manageprofile::registercustomer($UserName,$Email, $password);
    $data = array('insert'=>$insert);
    $this->render('login_customer', $data);
  }
  public function loginUser(){
    if(isset($_POST['Username'])){
      $Username = $_POST['Username'];
    }
    else{
      $Username = '';
    }
    if(isset($_POST['Password'])){
      $Password = $_POST['Password'];
    }
    else{
      $Password = '';
    }
    $result = User::login($Username, $Password);
    $data = array('result'=>$result);
    $this->render('login', $data);
  }
  public function updateWebsite() {
    if(isset($_POST['Hotline'])){
      $Hotline = $_POST['Hotline'];
    }
    else{
      $Hotline = '';
    }
    if(isset($_POST['CustomerCare'])){
      $CustomerCare = $_POST['CustomerCare'];
    }
    else{
      $CustomerCare = '';
    }
    if (isset($_POST['EmailShop'])) {
      $EmailShop = $_POST['EmailShop'];
    }
    else {
      $EmailShop = '';
    }
    if(isset($_POST['LinkFacebook'])){
      $LinkFacebook = $_POST['LinkFacebook'];
    }
    else{
      $LinkFacebook = '';
    }
    if (isset($_POST['LinkInstagram'])) {
      $LinkInstagram = $_POST['LinkInstagram'];
    }
    else {
      $LinkInstagram = '';
    }
    if(isset($_POST['LinkShopee'])){
      $LinkShopee = $_POST['LinkShopee'];
    }
    else{
      $LinkShopee = '';
    }
    if (isset($_POST['LinkLazada'])) {
      $LinkLazada = $_POST['LinkLazada'];
    }
    else {
      $LinkLazada = '';
    }
    if(isset($_POST['ShopAddress'])){
      $ShopAddress = $_POST['ShopAddress'];
    }
    else{
      $ShopAddress = '';
    }
    if(isset($_POST['Image'])){
      $Image = $_POST['Image'];
    }
    else{
      $Image = '';
    }
    
    $update = change_website::update_website($Hotline, $CustomerCare, $EmailShop, $LinkFacebook, $LinkInstagram, $LinkShopee, $LinkLazada, $ShopAddress);
    $data1 = array('update' => $update);
    $infor_website = website::getInfor_website();
    $data2 = array('infor_website' => $infor_website);
    $data = array_merge($data1, $data2);
    $this->render('InformationWebsite', $data);
  }
  public function updateSale(){
    if (isset($_POST['DiscountCode'])) {
      $DiscountCode = $_POST['DiscountCode'];
    }
    else {
      $DiscountCode = '';
    }
    if(isset($_POST['DiscountName'])){
      $DiscountName = $_POST['DiscountName'];
    }
    else{
      $DiscountName = '';
    }
    if (isset($_POST['Since'])) {
      $Since = $_POST['Since'];
    }
    else {
      $Since = '';
    }
    if(isset($_POST['ToDate'])){
      $ToDate = $_POST['ToDate'];
    }
    else{
      $ToDate = '';
    }
    if (isset($_POST['Value'])) {
      $Value = $_POST['Value'];
    }
    else {
      $Value = '';
    }
    if (isset($_POST['Status'])) {
      $Status = $_POST['Status'];
    }
    else {
      $Status = '';
    }
    $update = managesale::update_sale($DiscountCode, $DiscountName, $Since, $ToDate, $Value, $Status);
    $data1 = array('update' => $update);
    $infor_sale = managesale::Findsale($_GET['DiscountCode']);
    $data2 = array('infor_sale' => $infor_sale);
    $data = array_merge($data1, $data2);
    $this->render('InformationSale', $data);
  }
  public function showinforSale(){
    $infor_sale = managesale::Findsale($_GET['DiscountCode']);
    $data = array('infor_sale' => $infor_sale);
    $this->render('showSale', $data);
  }

  public function updateNews(){
    if (isset($_POST['id'])) {
      $id = $_POST['id'];
    }
    else {
      $id = '';
    }
    if (isset($_POST['Title'])) {
      $Title = $_POST['Title'];
    }
    else {
      $Title = '';
    }
    if(isset($_POST['Category'])){
      $Category = $_POST['Category'];
    }
    else{
      $Category = '';
    }
    if (isset($_POST['PostedBy'])) {
      $PostedBy = $_POST['PostedBy'];
    }
    else {
      $PostedBy = '';
    }
    if(isset($_POST['Image'])){
      $Image = $_POST['Image'];
    }
    else{
      $Image = '';
    }
    if (isset($_POST['Content'])) {
      $Content = $_POST['Content'];
    }
    else {
      $Content = '';
    }
    
    $update = managenews::update_news($id,$Title, $PostedBy, $Category, $Content, $Image);
    $data1 = array('update' => $update);
    $infor_news = managenews::Findnews($_GET['id']);
    $data2 = array('infor_news' => $infor_news);
    $data = array_merge($data1, $data2);
    $this->render('InformationNews', $data);
  }
  public function showinforNews(){
    $infor_news = managenews::Findnews($_GET['id']);
    $data = array('infor_news' => $infor_news);
    $this->render('showNews', $data);
  }
  public function updateCategory(){
    if (isset($_POST['id'])) {
      $id = $_POST['id'];
    }
    else {
      $id = '';
    }
    if (isset($_POST['NameCategory'])) {
      $NameCategory = $_POST['NameCategory'];
    }
    else {
      $NameCategory = '';
    }
    if (isset($_POST['Category'])) {
      $Category = $_POST['Category'];
    }
    else {
      $Category = '';
    }
    
    $update = managecategory::update_category($id,$NameCategory,$Category);
    $data1 = array('update' => $update);
    $infor_category = managecategory::Findcategory($_GET['id']);
    $data2 = array('infor_category' => $infor_category);
    $data = array_merge($data1, $data2);
    $this->render('InformationCategory', $data);
  }
  public function showinforCategory(){
    $infor_category = managecategory::Findcategory($_GET['id']);
    $data = array('infor_category' => $infor_category);
    $this->render('showCategory', $data);
  }
  public function updateProduct(){
    if (isset($_POST['ProductCode'])) {
      $ProductCode = $_POST['ProductCode'];
    }
    else {
      $ProductCode = '';
    }
    if (isset($_POST['ProductName'])) {
      $ProductName = $_POST['ProductName'];
    }
    else {
      $ProductName = '';
    }
    if (isset($_POST['ProductPrice'])) {
      $ProductPrice = $_POST['ProductPrice'];
    }
    else {
      $ProductPrice = '';
    }
    if (isset($_POST['Image1'])) {
      $Image1 = $_POST['Image1'];
    }
    else {
      $Image1 = '';
    }
    if (isset($_POST['Image2'])) {
      $Image2 = $_POST['Image2'];
    }
    else {
      $Image2 = '';
    }
    if (isset($_POST['Quanlity'])) {
      $Quanlity = $_POST['Quanlity'];
    }
    else {
      $Quanlity = '';
    }
    if (isset($_POST['Discount'])) {
      $Discount = $_POST['Discount'];
    }
    else {
      $Discount = '';
    }
    if (isset($_POST['Describe'])) {
      $Describe = $_POST['Describe'];
    }
    else {
      $Describe = '';
    }
    if (isset($_POST['Category'])) {
      $Category = $_POST['Category'];
    }
    else {
      $Category = '';
    }
    if (isset($_POST['Size'])) {
      $Size = $_POST['Size'];
    }
    else {
      $Size = '';
    }
    if (isset($_POST['Color'])) {
      $Color = $_POST['Color'];
    }
    else {
      $Color = '';
    }
    if (isset($_POST['public'])) {
      $public = $_POST['public'];
    }
    else {
      $public = '';
    }
    
    
    $update = manageproduct::update_product($ProductCode, $ProductName, $ProductPrice, $Image1, $Image2, $Quanlity, $Discount, $Describe, $Category, $Size, $Color,$public);
    $data1 = array('update' => $update);
    $infor_product = manageproduct::Findproduct($_GET['ProductCode']);
    $data2 = array('infor_product' => $infor_product);
    $data = array_merge($data1, $data2);
    $this->render('InformationProduct', $data);
  }
  public function showOrder(){
    $list_product_order = listproductorder::getorder($_GET['orderId']);
    $data1 = array('list_product_order' => $list_product_order);

    $infor_order = manageorder::Findorder($_GET['orderId']);
    $data2 = array('infor_order' => $infor_order);
    $data = array_merge($data1, $data2);
    $this->render('showOrder', $data);
  }
  public function showinforProduct(){

    $infor_product = manageproduct::Findproduct($_GET['ProductCode']);
    $data = array('infor_product' => $infor_product);
    $this->render('showProduct', $data);
  }
  public function updateProfile(){
    if (isset($_POST['UserID'])) {
      $UserID = $_POST['UserID'];
    }
    else {
      $UserID = '';
    }
    if (isset($_POST['Note'])) {
      $Note = $_POST['Note'];
    }
    else {
      $Note = '';
    }
    $update = manageprofile::blockprofile($UserID,$Note);
    $infor_profile = manageprofile::Findprofile($_GET['id']);
    $data1 = array('infor_profile' => $infor_profile);
    $data2 = array('update' => $update);
    $data = array_merge($data1, $data2);
    $this->render('InformationMember', $data);
  }

  public function updateOrder(){
    if(isset($_POST['Status'])){
      $Status = $_POST['Status'];
    }
    else{
      $Status = null;
    }

    $list_product_order = listproductorder::getorder($_GET['orderId']);
    $data1 = array('list_product_order' => $list_product_order);

    $infor_order = manageorder::Findorder($_GET['orderId']);
    $update = manageorder::updateorder($_GET['orderId'],$Status);
    $data3 = array('update' => $update);
    $data2 = array('infor_order' => $infor_order);
    $data = array_merge($data1, $data2,$data3);
    $this->render('InformaitonOrder', $data);
  }
  public function cancellistrproordercus(){
    if(isset($_POST['Price'])){
      $Price = $_POST['Price'];
    }
    else{
      $Price = null;
    }
    $list_product_order = listproductorder::getorder($_GET['orderId']);
    $data1 = array('list_product_order' => $list_product_order);

    $infor_order = manageorder::Findorder($_GET['orderId']);
    
    
    $data2 = array('infor_order' => $infor_order);
    $cancelorder = manageorder::cancelorder($_GET['orderId'],$Price);
    $data4 = array('cancelorder' => $cancelorder);
    $data = array_merge($data1, $data2,$data4);
    $this->render('InformaitonOrder', $data);
  }
  public function logoutCus(){
    $this->render('logoutCus', null);
  }
  public function logoutAd(){
    $this->render('logoutAd', null);
  }
  public function insertSale() {
    if(isset($_POST['DiscountCode'])){
      $DiscountCode = $_POST['DiscountCode'];
    }
    else{
      $DiscountCode = '';
    }
    if(isset($_POST['DiscountName'])){
      $DiscountName = $_POST['DiscountName'];
    }
    else{
      $DiscountName = '';
    }
    if (isset($_POST['Since'])) {
      $Since = $_POST['Since'];
    }
    else {
      $Since = '';
    }
    if(isset($_POST['ToDate'])){
      $ToDate = $_POST['ToDate'];
    }
    else{
      $ToDate = '';
    }
    if(isset($_POST['Value'])){
      $Value = $_POST['Value'];
    }
    else{
      $Value = '';
    }
    if (isset($_POST['Status'])) {
      $Status = $_POST['Status'];
    }
    else {
      $Status = '';
    }
    $result = managesale::insert($DiscountCode, $DiscountName, $Since, $ToDate, $Value, $Status);
    $data = array('result' => $result);
    $this->render('AddSale', $data);
  }
  public function insertNews() {
    if(isset($_POST['Title'])){
      $Title = $_POST['Title'];
    }
    else{
      $Title = '';
    }
    if(isset($_POST['PostedBy'])){
      $PostedBy = $_POST['PostedBy'];
    }
    else{
      $PostedBy = '';
    }
    if (isset($_POST['DateSubmitted'])) {
      $DateSubmitted = $_POST['DateSubmitted'];
    }
    else {
      $DateSubmitted = '';
    }
    if(isset($_POST['Category'])){
      $Category = $_POST['Category'];
    }
    else{
      $Category = '';
    }
    if(isset($_POST['Content'])){
      $Content = $_POST['Content'];
    }
    else{
      $Content = '';
    }
    if (isset($_POST['Image'])) {
      $Image = $_POST['Image'];
    }
    else {
      $Image = '';
    }
    $result = managenews::insertnews( $Title, $PostedBy, $DateSubmitted, $Category, $Content, $Image);
    $data = array('result' => $result);
    $this->render('AddNews', $data);
  }

  public function insertProduct() {
    if(isset($_POST['ProductCode'])){
      $ProductCode = $_POST['ProductCode'];
    }
    else{
      $ProductCode = '';
    }
    if(isset($_POST['ProductName'])){
      $ProductName = $_POST['ProductName'];
    }
    else{
      $ProductName = '';
    }
    if (isset($_POST['ProductPrice'])) {
      $ProductPrice = $_POST['ProductPrice'];
    }
    else {
      $ProductPrice = '';
    }
    if(isset($_POST['Image1'])){
      $Image1 = $_POST['Image1'];
    }
    else{
      $Image1 = '';
    }
    if(isset($_POST['Image2'])){
      $Image2 = $_POST['Image2'];
    }
    else{
      $Image2 = '';
    }
    if (isset($_POST['Quanlity'])) {
      $Quanlity = $_POST['Quanlity'];
    }
    else {
      $Quanlity = '';
    }
    if(isset($_POST['Discount'])){
      $Discount = $_POST['Discount'];
    }
    else{
      $Discount = '';
    }
    if (isset($_POST['Describe'])) {
      $Describe = $_POST['Describe'];
    }
    else {
      $Describe = '';
    }
    if(isset($_POST['Category'])){
      $Category = $_POST['Category'];
    }
    else{
      $Category = '';
    }
    if(isset($_POST['Size'])){
      $Size = $_POST['Size'];
    }
    else{
      $Size = '';
    }
    if (isset($_POST['Color'])) {
      $Color = $_POST['Color'];
    }
    else {
      $Color = '';
    }
    
    $result = manageproduct::insertproduct($ProductCode, $ProductName, $ProductPrice, $Image1, $Image2, $Quanlity, $Discount, $Describe, $Category, $Size, $Color);
    $data = array('result' => $result);
    $this->render('AddProduct', $data);
  }
  public function updateInforCus(){
    if (isset($_POST['UserID'])) {
      $UserID = $_POST['UserID'];
    }
    else {
      $UserID = '';
    }
    if (isset($_POST['UserName'])) {
      $UserName = $_POST['UserName'];
    }
    else {
      $UserName = '';
    }
    if (isset($_POST['Surname'])) {
      $Surname = $_POST['Surname'];
    }
    else {
      $Surname = '';
    }
    if (isset($_POST['Name'])) {
      $Name = $_POST['Name'];
    }
    else {
      $Name = '';
    }
    if (isset($_POST['PhoneNumber'])) {
      $PhoneNumber = $_POST['PhoneNumber'];
    }
    else {
      $PhoneNumber = '';
    }
    if (isset($_POST['Address'])) {
      $Address = $_POST['Address'];
    }
    else {
      $Address = '';
    }
    
    $result = manageprofile::updateProductCus($_GET['UserID'],$UserName, $Surname, $Name, $PhoneNumber, $Address);
    $profilees = manageprofile::getAllprofileCus($_GET['UserID']);
    $data1 = array('profilees' => $profilees);
    $data2 = array('result' => $result);
    $data = array_merge($data1, $data2);
    $this->render('updateInforCus', $data);
  }
  public function updatePassword(){
    if (isset($_POST['UserID'])) {
      $UserID = $_POST['UserID'];
    }
    else {
      $UserID = '';
    }
    if (isset($_POST['password'])) {
      $password = $_POST['password'];
    }
    else {
      $password = null;
    }
    $result = manageprofile::update_pass($_GET['UserID'],$password);
    $profilees = manageprofile::getAllprofileCus($_GET['UserID']);
    $data1 = array('profilees' => $profilees);
    $data2 = array('result' => $result);
    $data = array_merge($data1, $data2);
    
    $this->render('updatePassCus', $data);
  }

}

?>
