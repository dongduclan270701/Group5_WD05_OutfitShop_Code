<?php
class User{
  public $Username;
  public $Password;
  function __construct( $Username ,$Password) {
    $this->Username = $Username;
    $this->Password = $Password;
  }

  static function login($Username, $password){
    $hased_password = md5($password);
    $db = DBConnection::getInstance();
    $req =  $db->prepare('SELECT * FROM admin WHERE Username = :Username');
    $req->execute(array('Username'=>$Username));
    $user = $req->fetch();
    if(isset($user['Username'])){
      if($user['Password']==$hased_password){
        session_start();
        $_SESSION['Username'] = $user['Username'];
        
        return 1;
      }
      else{
        return 2;
      }
    }
    else{
      return 3;
    }
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
class change_website{
  public $Hotline;
  public $CustomerCare;
  public $EmailShop;
  public $LinkFacebook;
  public $LinkInstagram;
  public $LinkShopee;
  public $LinkLazada;
  public $ShopAddress;
  function __construct( $Hotline ,$CustomerCare,$EmailShop,$LinkFacebook,$LinkInstagram,$LinkShopee,$LinkLazada,$ShopAddress) {
    $this->Hotline = $Hotline;
    $this->CustomerCare = $CustomerCare;
    $this->EmailShop = $EmailShop;
    $this->LinkFacebook = $LinkFacebook;
    $this->LinkInstagram = $LinkInstagram;
    $this->LinkShopee = $LinkShopee;
    $this->LinkLazada = $LinkLazada;
    $this->ShopAddress = $ShopAddress;
  }
  static function update_website($Hotline ,$CustomerCare,$EmailShop,$LinkFacebook,$LinkInstagram,$LinkShopee,$LinkLazada,$ShopAddress){
    $db = DBConnection::getInstance();
    $req =  $db->prepare('UPDATE infor_website SET `Hotline`=:Hotline,`CustomerCare`=:CustomerCare,`EmailShop`=:EmailShop,`LinkFacebook`=:LinkFacebook,`LinkInstagram`=:LinkInstagram,`LinkShopee`=:LinkShopee,`LinkLazada`=:LinkLazada,`ShopAddress`=:ShopAddress  WHERE `id` = "1"');
    $rq = $req->execute(array('Hotline'=>$Hotline,'CustomerCare'=>$CustomerCare,'EmailShop'=>$EmailShop,'LinkFacebook'=>$LinkFacebook,'LinkInstagram'=>$LinkInstagram,'LinkShopee'=>$LinkShopee,'LinkLazada'=>$LinkLazada,'ShopAddress'=>$ShopAddress));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    
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
  static function Findsale($DiscountCode) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_sale` WHERE `DiscountCode` = '$DiscountCode'");
    $req->execute(array('DiscountCode' => $DiscountCode));

    $item = $req->fetch();
    if (isset($item['DiscountCode'])) {
      return new managesale($item['DiscountCode'], $item['DiscountName'], $item['Since'], $item['ToDate'], $item['Value'], $item['Status']);
    }
    return null;
  }
  static function update_sale($DiscountCode, $DiscountName, $Since, $ToDate, $Value,$Status){
    $db = DBConnection::getInstance();
    $req =  $db->prepare("UPDATE infor_sale SET `DiscountCode`=:DiscountCode,`DiscountName`=:DiscountName,`Since`=:Since,`ToDate`=:ToDate,`Value`=:Value,`Status`=:Status WHERE `DiscountCode` = '$DiscountCode'");
    $rq = $req->execute(array('DiscountCode'=>$DiscountCode,'DiscountName'=>$DiscountName,'Since'=>$Since,'ToDate'=>$ToDate,'Value'=>$Value,'Status'=>$Status));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    
  }
  static function insert( $DiscountCode, $DiscountName, $Since, $ToDate, $Value, $Status) {
    $db = DBConnection::getInstance();
    $req = $db->prepare("INSERT INTO infor_sale(DiscountCode,DiscountName,Since,ToDate,Value,Status) VALUES('$DiscountCode', '$DiscountName', '$Since', '$ToDate', '$Value', '$Status')");
    $re = $req->execute(array('DiscountCode' => $DiscountCode, 'DiscountName' => $DiscountName, 'Since' => $Since,'ToDate' => $ToDate, 'Value' => $Value, 'Status' => $Status));
    if ($re) {
      return "Insert OK";
    }
    return "Insert not OK";
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
  static function Findnews($id) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_news` WHERE `id` = '$id'");
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['id'])) {
      return new managenews($item['id'], $item['Title'], $item['PostedBy'], $item['DateSubmitted'], $item['Category'], $item['Content'], $item['Image']);
    }
    return null;
  }
  static function update_news($id, $Title, $PostedBy, $Category, $Content, $Image){
    $db = DBConnection::getInstance();
    $head_image = "assets1/images/" . $Image;
    $req =  $db->prepare("UPDATE infor_news SET `Title`=:Title, `Category`=:Category, `PostedBy`=:PostedBy, `Image`=:Image, `Content`=:Content WHERE `id` = '$id'");
    $rq = $req->execute(array('Title'=>$Title,'Category'=>$Category,'PostedBy'=>$PostedBy,'Image'=>$head_image,'Content'=>$Content));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    
  }
  static function insertnews( $Title, $PostedBy, $DateSubmitted, $Category, $Content, $Image) {
    $db = DBConnection::getInstance();
    $head_image = "assets1/images/" . $Image;
    $req = $db->prepare("INSERT INTO infor_news(Title,PostedBy,DateSubmitted,Category,Content,Image) VALUES('$Title', '$PostedBy', '$DateSubmitted', '$Category', '$Content', '$Image')");
    $re = $req->execute(array('Title' => $Title, 'PostedBy' => $PostedBy, 'DateSubmitted' => $DateSubmitted,'Category' => $Category, 'Content' => $Content, 'Image' => $head_image));
    if ($re) {
      return "Insert OK";
    }
    return "Insert not OK";
  }
}
class managecategory{
  public $id;
  public $NameCategory;
  public $Category;


  function __construct($id,$NameCategory, $Category) {
    $this->id = $id;
    $this->NameCategory = $NameCategory;
    $this->Category = $Category;

  }
  static function Findcategory($id) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_category` WHERE `id` = '$id'");
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['id'])) {
      return new managecategory($item['id'],$item['NameCategory'], $item['Category']);
    }
    return null;
  }
  static function update_category($id, $NameCategory, $Category){
    $db = DBConnection::getInstance();
    $req =  $db->prepare("UPDATE infor_category SET `NameCategory`='$NameCategory',`Category`='$Category' WHERE `id` = '$id'");
    $rq = $req->execute(array('id'=>$id,'NameCategory'=>$NameCategory,'Category'=>$Category));
    
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    
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
  static function Findproduct($ProductCode) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_product` WHERE `ProductCode` = '$ProductCode'");
    $req->execute(array('ProductCode' => $ProductCode));
    $item = $req->fetch();
    if (isset($item['ProductCode'])) {
      return new manageproduct($item['ProductCode'],$item['ProductName'], $item['ProductPrice'], $item['Image1'],$item['Image2'],$item['Quanlity'],$item['Discount'],$item['Describe'],$item['Category'],$item['Size'],$item['Color'],$item['public']);
    }
    return null;
  }
  static function update_product($ProductCode, $ProductName, $ProductPrice, $Image1, $Image2, $Quanlity, $Discount, $Describe, $Category, $Size, $Color,$public){
    $db = DBConnection::getInstance();
    $head_image1 = "assets1/images/" . $Image1;
    $head_image2 = "assets1/images/" . $Image2;
    $req =  $db->prepare("UPDATE infor_product SET `ProductCode`=:ProductCode, `ProductName`=:ProductName, `ProductPrice`=:ProductPrice, `Image1`=:Image1, `Image2`=:Image2, `Quanlity`=:Quanlity, `Discount`=:Discount, `Describe`=:Describe, `Category`=:Category, `Size`=:Size, `Color`=:Color, `public`=:public WHERE `ProductCode` = '$ProductCode'");
    $rq = $req->execute(array('ProductCode'=>$ProductCode,'ProductName'=>$ProductName,'ProductPrice'=>$ProductPrice,'Image1'=>$head_image1,'Image2'=>$head_image2,'Quanlity'=>$Quanlity,'Discount'=>$Discount,'Describe'=>$Describe,'Category'=>$Category,'Size'=>$Size,'Color'=>$Color,'public'=>$public));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    
  }
  static function insertproduct($ProductCode, $ProductName, $ProductPrice, $Image1, $Image2, $Quanlity, $Discount, $Describe, $Category, $Size, $Color){
    $db = DBConnection::getInstance();
    $head_image11 = "assets1/images/" . $Image1;
    $head_image22 = "assets1/images/" . $Image2;
    $req =  $db->prepare("INSERT INTO `infor_product` (`ProductCode`, `ProductName`, `ProductPrice`, `Image1`, `Image2`, `Quanlity`, `Discount`, `Describe`, `Category`, `Size`, `Color`,`public`) VALUES('$ProductCode', '$ProductName', '$ProductPrice', '$head_image11', '$head_image22', '$Quanlity', '$Discount', '$Describe', '$Category', '$Size', '$Color','Hiển thị')");
    $rq = $req->execute(array('ProductCode'=>$ProductCode,'ProductName'=>$ProductName,'ProductPrice'=>$ProductPrice,'Image1'=>$head_image11,'Image2'=>$head_image22,'Quanlity'=>$Quanlity,'Discount'=>$Discount,'Describe'=>$Describe,'Category'=>$Category,'Size'=>$Size,'Color'=>$Color));
    if ($rq) {
      return "Insert OK";
    }
    return "Insert not OK";
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
  static function Findprofile($id) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_profile` WHERE `id` = '$id'");
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    
    if (isset($item['id'])) {
      return new manageprofile($item['id'],$item['UserID'],$item['UserName'], $item['Email'], $item['Surname'],$item['Name'],$item['PhoneNumber'],$item['Address'],$item['Note'],$item['Image']);
    }
    return null;
  }
  static function logincustomer($Email, $password){
    $hased_password = md5($password);
    $db = DBConnection::getInstance();
    $req =  $db->prepare('SELECT * FROM infor_profile WHERE Email = :Email');
    $req->execute(array('Email'=>$Email));
    $user = $req->fetch();
    
    if(isset($user['Email'])){
      if($user['password']==$hased_password){
        session_start();
        $_SESSION['UserID'] = $user['UserID'];
        $_SESSION['UserName'] = $user['UserName'];
        $_SESSION['Email'] = $user['Email'];
        $_SESSION['PhoneNumber'] = $user['PhoneNumber'];
        $_SESSION['Address'] = $user['Address'];
        
        return $user['Note'];
      }
      else{
        return 2;
      }
    }
    else{
      return 3;
    }
  }
  static function registercustomer($UserName,$Email, $password) {
    $hased1_password = md5($password);
    $UserID = rand(1,9999999);
    $db = DBConnection::getInstance();
    $req = $db->prepare("INSERT INTO infor_profile(`id`, `UserID`, `UserName`, `Email`, `Surname`, `Name`, `PhoneNumber`, `Address`, `Note`, `Image`, `password`) VALUES(NULL,'$UserID','$UserName','$Email' , '', '', NULL, '', 'Tài khoản đã mở', 'assets1/images/user.jpg', '$hased1_password')");
    $re = $req->execute(array('UserID' => $UserID, 'UserName' => $UserName,'Email' => $Email, 'password' => $hased1_password));
    if ($re) {
      return "Insert OK";
    }
    return "Insert not OK";
  }
  static function forgotpassword($Email){
    
    
    
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_profile` WHERE `Email` = '$Email'");
    $req->execute(array('Email' => $Email));

    $item = $req->fetch();

    if (isset($item['Email'])) {
      return new manageprofile($item['id'],$item['UserID'],$item['UserName'], $item['Email'], $item['Surname'],$item['Name'],$item['PhoneNumber'],$item['Address'],$item['Note'],$item['Image']);
    }
    else {
      return 'not found';
    }
  }
  static function forgotpassword2($UserID, $password){
    $hased_password = md5($password);
    $db = DBConnection::getInstance();
    $req =  $db->prepare("UPDATE infor_profile SET password='$hased_password' WHERE UserID = '$UserID'");
    $rq = $req->execute(array('UserID'=>$UserID,'password'=>$hased_password));
    
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
  }
  static function getAllprofileCus($UserID){
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_profile` WHERE `UserID` = '$UserID'");
    $req->execute(array('UserID' => $UserID));

    $item = $req->fetch();
    // if(isset($item['UserID'])){
    //   if($item['Password']==$Password){
    //     return 1;
    //   }
    //   else{
    //     return 2;
    //   }
    // }
    // else{
    //   return 3;
    // }

    if (isset($item['UserID'])) {
      return new manageprofile($item['id'],$item['UserID'],$item['UserName'], $item['Email'], $item['Surname'],$item['Name'],$item['PhoneNumber'],$item['Address'],$item['Note'],$item['Image']);
    }
    return null;
  }
  static function updateProductCus($UserID,$UserName, $Surname, $Name, $PhoneNumber, $Address){
    $db = DBConnection::getInstance();
    $head_image1 = "assets1/images/user.jpg";
    $req =  $db->prepare("UPDATE infor_profile SET UserName='$UserName', Surname='$Surname', Name='$Name', PhoneNumber='$PhoneNumber', Address='$Address', Image='$head_image1' WHERE UserID = '$UserID'");
    $rq = $req->execute(array('UserID'=>$UserID,'UserName'=>$UserName,'Surname'=>$Surname,'Name'=>$Name,'PhoneNumber'=>$PhoneNumber,'Address'=>$Address,'Image'=>$head_image1));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    
  }
  static function update_pass($UserID, $password){
    if ($password != ""){
      $hased_password = md5($password);
    $db = DBConnection::getInstance();
    $req =  $db->prepare("UPDATE infor_profile SET password='$hased_password' WHERE UserID = '$UserID'");
    $rq = $req->execute(array('UserID'=>$UserID,'password'=>$hased_password));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
    }
    
  }
static function blockprofile($UserID,$Note){
  
    $db = DBConnection::getInstance();
    $req =  $db->prepare("UPDATE infor_profile SET Note='$Note' WHERE UserID = '$UserID'");
    $rq = $req->execute(array('UserID'=>$UserID,'Note'=>$Note));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
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

  static function Findorder($orderId) {
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `infor_order` WHERE `orderId` = '$orderId'");
    $req->execute(array('orderId' => $orderId));
    $item = $req->fetch();
    if (isset($item['orderId'])) {
      return new manageorder($item['id'],$item['orderId'], $item['UserName'], $item['Date'], $item['SumPrice'], $item['Status'], $item['Email'], $item['PhoneNumber'], $item['Address'], $item['DiscountCode'], $item['Price'], $item['Ship'], $item['Value']);
    }
    return null;
    
  }

  static function updateorder($orderId,$Status){
    if($Status != ""){
      $db = DBConnection::getInstance();
    $req =  $db->prepare("UPDATE infor_order SET Status='$Status' WHERE orderId = '$orderId'");
    $rq = $req->execute(array('orderId'=>$orderId,'Status'=>$Status));
    if ($rq) {
      return "Update OK";
    }
    return "Update not OK";
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


  function __construct($orderId,$ProductCode, $ProductName, $Image1, $Quanlity, $ProductPrice) {
  $this->orderId = $orderId;
  $this->ProductCode = $ProductCode;
  $this->ProductName = $ProductName;
  $this->Image1 = $Image1;
  $this->Quanlity = $Quanlity;
  $this->ProductPrice = $ProductPrice;

  }
  
  static function getorder($orderId) {
    
    $list = [];
    $db = DBConnection::getInstance();
    $req = $db->query("SELECT * FROM `list_product_order` WHERE `orderId` = '$orderId'");
    if ($req) {
    foreach ($req->fetchAll() as $item) {
      $list[] = new listproductorder($item['orderId'], $item['ProductCode'], $item['ProductName'], $item['Image1'], $item['Quanlity'], $item['ProductPrice']);
    }}
    return $list;
  }
}
?>