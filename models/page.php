<?php
class product_homepage {
  public $ProductCode;
  public $ProductName;
  public $ProductPrice;
  public $Image1;
  public $Image2;
  public $Quanlity;
  public $Discount;
  public $Describe;
  public $Category;
  public $Size;
  public $Color;
  function __construct($ProductCode, $ProductName, $ProductPrice, $Image1, $Image2, $Quanlity, $Discount, $Describe, $Category, $Size, $Color) {
    $this->ProductCode = $ProductCode;
    $this->ProductName = $ProductName;
    $this->ProductPrice = $ProductPrice;
    $this->Image1 = $Image1;
    $this->Image2 = $Image2;
    $this->Quanlity = $Quanlity;
    $this->Discount = $Discount;
    $this->Describe = $Describe;
    $this->Category = $Category;
    $this->Size = $Size;
    $this->Color = $Color;
    
  }
  static function getNumberproduct(){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT COUNT(Quanlity) FROM infor_product");
    $item = $req->fetch();
    return $item;
  }
  static function getProduct_homepage() {
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM infor_product WHERE `Quanlity` >100');
    
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new product_homepage($item['ProductCode'], $item['ProductName'], $item['ProductPrice'], $item['Image1'], $item['Image2'], $item['Quanlity'], $item['Discount'], $item['Describe'], $item['Category'], $item['Size'], $item['Color']);
    }}
    return $list;
  }
  static function getAccessori() {
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM infor_product WHERE `Category` = "5" AND `public` = "Hiển Thị"');
    
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new product_homepage($item['ProductCode'], $item['ProductName'], $item['ProductPrice'], $item['Image1'], $item['Image2'], $item['Quanlity'], $item['Discount'], $item['Describe'], $item['Category'], $item['Size'], $item['Color']);
    }}
    return $list;
  }
  static function getJacket() {
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM infor_product WHERE `Category` = "4" AND `public` = "Hiển Thị"');
    
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new product_homepage($item['ProductCode'], $item['ProductName'], $item['ProductPrice'], $item['Image1'], $item['Image2'], $item['Quanlity'], $item['Discount'], $item['Describe'], $item['Category'], $item['Size'], $item['Color']);
    }}
    return $list;
  }
  static function getPants() {
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM infor_product WHERE `Category` = "3" AND `public` = "Hiển Thị"');
    
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new product_homepage($item['ProductCode'], $item['ProductName'], $item['ProductPrice'], $item['Image1'], $item['Image2'], $item['Quanlity'], $item['Discount'], $item['Describe'], $item['Category'], $item['Size'], $item['Color']);
    }}
    return $list;
  }
  static function getShirt() {
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM infor_product WHERE `Category` = "2" AND `public` = "Hiển Thị"');
    
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new product_homepage($item['ProductCode'], $item['ProductName'], $item['ProductPrice'], $item['Image1'], $item['Image2'], $item['Quanlity'], $item['Discount'], $item['Describe'], $item['Category'], $item['Size'], $item['Color']);
    }}
    return $list;
  }
  static function getTShirt() {
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM infor_product WHERE `Category` = "1" AND `public` = "Hiển Thị"');
    
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new product_homepage($item['ProductCode'], $item['ProductName'], $item['ProductPrice'], $item['Image1'], $item['Image2'], $item['Quanlity'], $item['Discount'], $item['Describe'], $item['Category'], $item['Size'], $item['Color']);
    }}
    return $list;
  }
}
class website {
  public $Hotline;
  public $CustomerCare;
  public $EmailShop;
  public $LinkFacebook;
  public $LinkInstagram;
  public $LinkShopee;
  public $LinkLazada;
  public $ShopAddress;
  public $Image;
  function __construct($Hotline, $CustomerCare, $EmailShop, $LinkFacebook, $LinkInstagram, $LinkShopee, $LinkLazada, $ShopAddress, $Image) {
    $this->Hotline = $Hotline;
    $this->CustomerCare = $CustomerCare;
    $this->EmailShop = $EmailShop;
    $this->LinkFacebook = $LinkFacebook;
    $this->LinkInstagram = $LinkInstagram;
    $this->LinkShopee = $LinkShopee;
    $this->LinkLazada = $LinkLazada;
    $this->ShopAddress = $ShopAddress;
    $this->Image = $Image;
    
  }
  static function getInfor_website(){
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_website` where `id` = 1');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new website($item['Hotline'], $item['CustomerCare'], $item['EmailShop'], $item['LinkFacebook'], $item['LinkInstagram'], $item['LinkShopee'], $item['LinkLazada'], $item['ShopAddress'], $item['Image']);
    }}
    return $list;
    
  }
  
}
class managesale{
  public $DiscountCode;
  public $DiscountName;
  public $Since;
  public $ToDate;
  public $Value;
  public $Status;

  function __construct($DiscountCode, $DiscountName, $Since, $ToDate, $Value, $Status) {
  $this->DiscountCode = $DiscountCode;
  $this->DiscountName = $DiscountName;
  $this->Since = $Since;
  $this->ToDate = $ToDate;
  $this->Value = $Value;
  $this->Status = $Status;
  }
  static function getAllsale() {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_sale`');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new managesale($item['DiscountCode'], $item['DiscountName'], $item['Since'], $item['ToDate'], $item['Value'], $item['Status']);
    }}
    return $list;
  }
  static function Findsales($DiscountCode) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_sale` WHERE `DiscountCode` = '$DiscountCode'");
    $req->execute(array('DiscountCode' => $DiscountCode));
    $item = $req->fetch();
    if (isset($item['DiscountCode'])) {
      return new managesale($item['DiscountCode'], $item['DiscountName'], $item['Since'], $item['ToDate'], $item['Value'], $item['Status']);
      
    }
    if (isset($item['DiscountCode'])) {
      return "Found";
    }
    return "Not found";
  }
}
class managenews{
  public $id;
  public $Title;
  public $PostedBy;
  public $DateSubmitted;
  public $Category;
  public $Content;
  public $Image;

  function __construct($id, $Title, $PostedBy, $DateSubmitted, $Category, $Content, $Image) {
  $this->id = $id;
  $this->Title = $Title;
  $this->PostedBy = $PostedBy;
  $this->DateSubmitted = $DateSubmitted;
  $this->Category = $Category;
  $this->Content = $Content;
  $this->Image = $Image;
  }
  static function getAllnews() {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_news`');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new managenews($item['id'], $item['Title'], $item['PostedBy'], $item['DateSubmitted'], $item['Category'], $item['Content'], $item['Image']);
    }}
    return $list;
  }
}

class managecategory{
  public $id;
  public $Category;
  public $NameCategory;

  function __construct($id, $Category, $NameCategory) {
  $this->id = $id;
  $this->Category = $Category;
  $this->NameCategory = $NameCategory;
  }
  static function getAllcategory() {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_category`');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new managecategory($item['id'], $item['Category'], $item['NameCategory']);
    }}
    return $list;
  }
}
class manageproduct{
  public $ProductCode;
  public $ProductName;
  public $ProductPrice;
  public $Image1;
  public $Image2;
  public $Quanlity;
  public $Discount;
  public $Describe;
  public $Category;
  public $Size;
  public $Color;
  public $public;


  function __construct($ProductCode, $ProductName, $ProductPrice, $Image1, $Image2, $Quanlity, $Discount, $Describe, $Category, $Size, $Color,$public) {
  $this->ProductCode = $ProductCode;
  $this->ProductName = $ProductName;
  $this->ProductPrice = $ProductPrice;
  $this->Image1 = $Image1;
  $this->Image2 = $Image2;
  $this->Quanlity = $Quanlity;
  $this->Discount = $Discount;
  $this->Describe = $Describe;
  $this->Category = $Category;
  $this->Size = $Size;
  $this->Color = $Color;
  $this->public = $public;
  }
  static function getAllproduct() {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_product`');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new manageproduct($item['ProductCode'], $item['ProductName'], $item['ProductPrice'], $item['Image1'], $item['Image2'], $item['Quanlity'], $item['Discount'], $item['Describe'], $item['Category'], $item['Size'], $item['Color'], $item['public']);
    }}
    return $list;
  }
  static function getPnotSC($ProductCode) {
    
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_product` WHERE `ProductCode` = '$ProductCode'");
    $req->execute(array('ProductCode' => $ProductCode));
    $item = $req->fetch();
    if (isset($item['ProductCode'])) {
      return new manageproduct($item['ProductCode'],$item['ProductName'], $item['ProductPrice'], $item['Image1'],$item['Image2'],$item['Quanlity'],$item['Discount'],$item['Describe'],$item['Category'],$item['Size'],$item['Color'], $item['public']);
    }
    return null;
  }
  static function getPnotS($ProductCode) {
    
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_product` WHERE `ProductCode` = '$ProductCode'");
    $req->execute(array('ProductCode' => $ProductCode));
    $item = $req->fetch();
    if (isset($item['ProductCode'])) {
      return new manageproduct($item['ProductCode'],$item['ProductName'], $item['ProductPrice'], $item['Image1'],$item['Image2'],$item['Quanlity'],$item['Discount'],$item['Describe'],$item['Category'],$item['Size'],$item['Color'], $item['public']);
    }
    return null;
  }
  static function getPFull($ProductCode) {
    
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_product` WHERE `ProductCode` = '$ProductCode'");
    $req->execute(array('ProductCode' => $ProductCode));
    $item = $req->fetch();
    if (isset($item['ProductCode'])) {
      return new manageproduct($item['ProductCode'],$item['ProductName'], $item['ProductPrice'], $item['Image1'],$item['Image2'],$item['Quanlity'],$item['Discount'],$item['Describe'],$item['Category'],$item['Size'],$item['Color'], $item['public']);
    }
    return null;
  }
}
class getprofile{
  public $id;
  public $UserID;
  public $UserName;
  public $Email;
  public $Surname;
  public $Name;
  public $PhoneNumber;
  public $Address;
  public $Note;
  public $Image;
  public $password;
  


  function __construct($id,$UserID, $UserName, $Email, $Surname, $Name, $PhoneNumber, $Address, $Note, $Image) {
  $this->id = $id;
  $this->UserID = $UserID;
  $this->UserName = $UserName;
  $this->Email = $Email;
  $this->Surname = $Surname;
  $this->Name = $Name;
  $this->PhoneNumber = $PhoneNumber;
  $this->Address = $Address;
  $this->Note = $Note;
  $this->Image = $Image;
  }
  static function Findcusprofile($Email) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_profile` WHERE `Email` = '$Email'");
    $req->execute(array('Email' => $Email));
    $item = $req->fetch();
    
    if (isset($item['Email'])) {
      return new manageprofile($item['id'],$item['UserID'],$item['UserName'], $item['Email'], $item['Surname'],$item['Name'],$item['PhoneNumber'],$item['Address'],$item['Note'],$item['Image']);
    }
    return null;
  }
  static function Findcusprofile2($Email) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_profile` WHERE `Email` = '$Email'");
    $req->execute(array('Email' => $Email));
    $item = $req->fetch();
    
    if (isset($item['Email'])) {
      return new manageprofile($item['id'],$item['UserID'],$item['UserName'], $item['Email'], $item['Surname'],$item['Name'],$item['PhoneNumber'],$item['Address'],$item['Note'],$item['Image']);
    }
    return null;
  }
}
class manageprofile{
  public $id;
  public $UserID;
  public $UserName;
  public $Email;
  public $Surname;
  public $Name;
  public $PhoneNumber;
  public $Address;
  public $Note;
  public $Image;
  


  function __construct($id,$UserID, $UserName, $Email, $Surname, $Name, $PhoneNumber, $Address, $Note, $Image) {
  $this->id = $id;
  $this->UserID = $UserID;
  $this->UserName = $UserName;
  $this->Email = $Email;
  $this->Surname = $Surname;
  $this->Name = $Name;
  $this->PhoneNumber = $PhoneNumber;
  $this->Address = $Address;
  $this->Note = $Note;
  $this->Image = $Image;

  }
  static function getNumberprofle(){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT COUNT(*) FROM infor_profile");
    $item = $req->fetch();
    return $item;
  }
  static function getAllprofile() {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_profile`');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new manageprofile($item['id'],$item['UserID'], $item['UserName'], $item['Email'], $item['Surname'], $item['Name'], $item['PhoneNumber'], $item['Address'], $item['Note'], $item['Image']);
    }}
    return $list;
  }
  static function getAllprofileCus($UserID){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_profile` WHERE `UserID` = '$UserID'");
    $req->execute(array('UserID' => $UserID));
    $item = $req->fetch();
    if (isset($item['UserID'])) {
      return new manageprofile($item['id'],$item['UserID'],$item['UserName'], $item['Email'], $item['Surname'],$item['Name'],$item['PhoneNumber'],$item['Address'],$item['Note'],$item['Image']);
    }
    return null;
  }
  static function getAllprofileCus2($Email){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_profile` WHERE `Email` = '$Email'");
    $req->execute(array('Email' => $Email));
    $item = $req->fetch();
    if (isset($item['Email'])) {
      return new manageprofile($item['id'],$item['UserID'],$item['UserName'], $item['Email'], $item['Surname'],$item['Name'],$item['PhoneNumber'],$item['Address'],$item['Note'],$item['Image']);
    }
    return null;
  }
}
class sumprice{
  public $SumPrice;
  function __construct( $SumPrice){
    $this->SumPrice = $SumPrice;
  }
  static function getNumberordersummonth(){
    $list =[];
    $numberrrrrr = 0;
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT SumPrice,MONTH(Date),MONTH(CURRENT_DATE()) FROM infor_order WHERE MONTH(Date)>=MONTH(CURRENT_DATE())");
    foreach ($req->fetchAll() as $item) {
      $list[] = new sumprice($item['SumPrice']);
      $numberrrrrr += $item['SumPrice'];
    }
    return $numberrrrrr;
  }
}

class manageorder{
  public $id;
  public $orderId;
  public $UserName;
  public $Date;
  public $SumPrice;
  public $Status;
  public $Email;
  public $PhoneNumber;
  public $Address;
  public $DiscountCode;
  public $Price;
  public $Ship;
  public $Value;
  


  function __construct($id,$orderId, $UserName, $Date, $SumPrice, $Status, $Email, $PhoneNumber, $Address, $DiscountCode, $Price, $Ship, $Value) {
    $this->id = $id;
    $this->orderId = $orderId;
    $this->UserName = $UserName;
    $this->Date = $Date;
    $this->SumPrice = $SumPrice;
    $this->Status = $Status;
    $this->Email = $Email;
    $this->PhoneNumber = $PhoneNumber;
    $this->Address = $Address;
    $this->DiscountCode = $DiscountCode;
    $this->Price = $Price;
    $this->Ship = $Ship;
    $this->Value = $Value;  
  

  }
  static function getNumberorder(){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT COUNT(*) FROM infor_order");
    $item = $req->fetch();
    return $item;
  }
  static function getsumNumberorder(){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT `Email`, COUNT(*) FROM infor_order GROUP BY `Email` HAVING COUNT(*) >= ALL ( SELECT COUNT(*) FROM infor_order GROUP BY `Email`)");
    $item = $req->fetch();
    return $item;
  }
  static function getmaxNumberorder(){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT `Email`, MAX(SumPrice) as SumPrice FROM infor_order GROUP BY `Email` DESC LIMIT 1;");
    $item = $req->fetch();
    return $item;
  }
  static function getAllorder() {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_order`');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new manageorder($item['id'],$item['orderId'], $item['UserName'], $item['Date'], $item['SumPrice'], $item['Status'], $item['Email'], $item['PhoneNumber'], $item['Address'], $item['DiscountCode'], $item['Price'], $item['Ship'], $item['Value']);
    }}
    return $list;
  }
  static function getordercus($Email) {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_order` where `Email` = '$Email'");
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new manageorder($item['id'],$item['orderId'], $item['UserName'], $item['Date'], $item['SumPrice'], $item['Status'], $item['Email'], $item['PhoneNumber'], $item['Address'], $item['DiscountCode'], $item['Price'], $item['Ship'], $item['Value']);
    }}
    return $list;
  }
  static function getordercus2($orderId) {

    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_order` WHERE `orderId` = '$orderId'");
    $req->execute(array('orderId' => $orderId));
    $item = $req->fetch();
    if (isset($item['orderId'])) {
      return new manageorder($item['id'],$item['orderId'], $item['UserName'], $item['Date'], $item['SumPrice'], $item['Status'], $item['Email'], $item['PhoneNumber'], $item['Address'], $item['DiscountCode'], $item['Price'], $item['Ship'], $item['Value']);
    }
    return null;
  }
  static function insertorder($UserName,$Email,$PhoneNumber,$Address){
    $orderIdd = rand(1,9999999);
    $date = date("Y-m-d");
    $Sumprice = $_SESSION['total2'];
    $shiper = 50000;
    $statuss = 'Đang xác thực';
    if(isset($_SESSION['sale'])){
      $Value = $_SESSION['sale'];
    }
    else{
      $Value = 0;
    }
    if(isset($_SESSION['disconoutcode'])){
      $DiscountCode = $_SESSION['disconoutcode'];
    }
    else{
      $DiscountCode = "0";
    }
    if ($UserName != "" && $Email != "" && $PhoneNumber != "" && $Address != "" && $_SESSION['total'] != "0") {
      $db = DBConnection::getInstance();
    $req = $db->prepare("INSERT INTO infor_order(`id`, `UserName`, `Date`, `SumPrice`, `Status`, `Email`, `PhoneNumber`, `Address`, `DiscountCode`, `Price`, `Ship`, `Value`, `orderId`) VALUES(NULL,'$UserName','$date','$Sumprice' , '$statuss', '$Email', '$PhoneNumber', '$Address', '$DiscountCode', 'Đơn hàng chưa từng được hủy', '$shiper','$Value','$orderIdd')");
    $re = $req->execute(array('UserName' => $UserName, 'Date' => $date,'SumPrice' => $Sumprice, 'Status' => $statuss, 'Email' => $Email, 'PhoneNumber' => $PhoneNumber, 'Address' => $Address, 'DiscountCode' => $DiscountCode, 'Ship' => $shiper, 'Value' => $Value,'orderId' => $orderIdd));
    $_SESSION['orderIdd'] = $orderIdd;
    if ($re) {
      return "Insert OK";
    }
    return "Insert not OK";
    }
  }
  static function cancelorder($orderId,$Price){
    $Status = "Đã hủy";
    if ($Price != ""){
      $db = DBConnection::getInstance();
    $req =  $db->prepare("UPDATE infor_order SET Status='$Status',`Price`='$Price' WHERE orderId = '$orderId'");
    $rq = $req->execute(array('orderId'=>$orderId,'Status'=>$Status,'Price'=>$Price));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    }
    else {
      return "Update not OK";}
  }
}
class listproductorder{
  public $orderId;
  public $ProductCode;
  public $ProductName;
  public $Image1;
  public $Quanlity;
  public $ProductPrice;
  public $addNew;


  function __construct($orderId,$ProductCode, $ProductName, $Image1, $Quanlity, $ProductPrice) {
  $this->orderId = $orderId;
  $this->ProductCode = $ProductCode;
  $this->ProductName = $ProductName;
  $this->Image1 = $Image1;
  $this->Quanlity = $Quanlity;
  $this->ProductPrice = $ProductPrice;

  }
  
  static function insertproorder($product,$addNew) {
    $db = DBConnection::getInstance();
    if (isset($_SESSION['orderIdd'])) {
      $orderIddd = $_SESSION['orderIdd'];
    }
    else {
      $orderIddd = null;
    }

    if(isset($addNew)) {
      foreach($product as $productt){
        $req = $db->prepare("INSERT INTO list_product_order(`orderID`, `ProductCode`, `id`, `ProductName`, `Image1`, `Quanlity`, `ProductPrice`) VALUES('$orderIddd','$productt[0]',NULL , '$productt[1]', '$productt[4]', '$productt[11]', '$productt[2]')");
        $re = $req->execute(array('orderID' => $orderIddd,'ProductCode' => $productt['0'],'ProductName' => $productt['1'], 'Quanlity' => $productt['11'], 'ProductPrice' => $productt['2']));
      }
      
    }

  }
  static function getlistproordercus($orderId) {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `list_product_order` where `orderId` = '$orderId'");
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new listproductorder($item['orderId'], $item['ProductCode'], $item['ProductName'], $item['Image1'], $item['Quanlity'], $item['ProductPrice']);
    }}
    return $list;
  }
}
class managereport{
  public $Month;
  public $NumberOfProductsSold;
  public $RevenueMonth;
  public $MaxRevenueProduct;
  public $MaxProduct;

  function __construct($Month, $NumberOfProductsSold, $RevenueMonth, $MaxRevenueProduct, $MaxProduct) {
  $this->Month = $Month;
  $this->NumberOfProductsSold = $NumberOfProductsSold;
  $this->RevenueMonth = $RevenueMonth;
  $this->MaxRevenueProduct = $MaxRevenueProduct;
  $this->MaxProduct = $MaxProduct;

  }
  static function getAllreport() {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query('SELECT * FROM `infor_month`');
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new managereport($item['Month'], $item['NumberOfProductsSold'], $item['RevenueMonth'], $item['MaxRevenueProduct'], $item['MaxProduct']);
    }}
    return $list;
  }
}

class managereportday{
  public $Day;
  public $NumberOfProductsSold;
  public $RevenueDay;
  public $MaxRevenueProduct;
  public $MaxProduct;
  public $Month;

  function __construct($Day, $NumberOfProductsSold, $RevenueDay, $MaxRevenueProduct, $MaxProduct, $Month) {
  $this->Day = $Day;
  $this->NumberOfProductsSold = $NumberOfProductsSold;
  $this->RevenueDay = $RevenueDay;
  $this->MaxRevenueProduct = $MaxRevenueProduct;
  $this->MaxProduct = $MaxProduct;
  $this->Month = $Month;
  }
  static function getAllreportday($Month) {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_day` Where `Month` = '$Month'");
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new managereportday($item['Day'], $item['NumberOfProductsSold'], $item['RevenueDay'], $item['MaxRevenueProduct'], $item['MaxProduct'],$item['Month']);
    }}
    return $list;
  }
}

class managereportlist{
  public $Day;
  public $ProductCode;
  public $ProductName;
  public $Image1;
  public $Quanlity;
  public $ProductPrice;
  public $Month;

  function __construct($Day, $ProductCode, $ProductName, $Image1, $Quanlity, $ProductPrice, $Month) {
  $this->Day = $Day;
  $this->ProductCode = $ProductCode;
  $this->ProductName = $ProductName;
  $this->Image1 = $Image1;
  $this->Quanlity = $Quanlity;
  $this->ProductPrice = $ProductPrice;
  $this->Month = $Month;
  }
  static function getAllproductday($Month,$Day) {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `list_product_day` Where  `Month` LIKE '$Month' And `Day` LIKE '$Day'");
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new managereportlist($item['Day'], $item['ProductCode'], $item['ProductName'], $item['Image1'], $item['Quanlity'], $item['ProductPrice'],$item['Month']);
    }}
    return $list;
  }
}
class managereportday2{
  public $Day;
  public $NumberOfProductsSold;
  public $RevenueDay;
  public $MaxRevenueProduct;
  public $MaxProduct;
  public $Month;

  function __construct($Day, $NumberOfProductsSold, $RevenueDay, $MaxRevenueProduct, $MaxProduct, $Month) {
  $this->Day = $Day;
  $this->NumberOfProductsSold = $NumberOfProductsSold;
  $this->RevenueDay = $RevenueDay;
  $this->MaxRevenueProduct = $MaxRevenueProduct;
  $this->MaxProduct = $MaxProduct;
  $this->Month = $Month;
  }
  static function getAllreportday2($Month,$Day) {
    
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_day` Where  `Month` LIKE '$Month' And `Day` LIKE '$Day'");
    $req->execute(array('Month' => $Month,'Day' => $Day));
    $item = $req->fetch();
    if (isset($item['Month'], $item['Day'])) {
      return new managereportday2($item['Day'], $item['NumberOfProductsSold'], $item['RevenueDay'], $item['MaxRevenueProduct'], $item['MaxProduct'],$item['Month']);
    }
    return null;
  }
}
?>