<?php
require_once('controllers/base_controller.php');
require_once('models/page.php');

class PagesController extends BaseController {
  function __construct() {
    $this->folder = 'pages';
  }
  public function home() {
    $maxnumberordersum = manageorder::getmaxNumberorder();
    $sumnumberordersum = manageorder::getsumNumberorder();
    $numberordersum = sumprice::getNumberordersummonth();
    $numberorder = manageorder::getNumberorder();
    $numberprofile = manageprofile::getNumberprofle();
    $numberproduct = product_homepage::getNumberproduct();
    $product_best = product_homepage::getProduct_homepage();
    $findcus = getprofile::Findcusprofile($sumnumberordersum["Email"]);
    $findcus2 = getprofile::Findcusprofile2($maxnumberordersum["Email"]);
    $data1 = array('product_best' => $product_best);
    $data2 = array('numberproduct' => $numberproduct);
    $data3 = array('numberprofile' => $numberprofile);
    $data4 = array('numberorder' => $numberorder);
    $data5 = array('numberordersum' => $numberordersum);
    $data6 = array('sumnumberordersum' => $sumnumberordersum);
    $data7 = array('findcus' => $findcus);
    $data8 = array('findcus2' => $findcus2);
    $data9 = array('maxnumberordersum' => $maxnumberordersum);
    $data = array_merge($data1, $data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9);
    $this->render('home', $data);
  }
  public function inforWebsite() {
    $infor_website = website::getInfor_website();
    $data = array('infor_website' => $infor_website);
    $this->render('ManageWebsite', $data);
  }
  public function inforSale(){
    $infor_sale = managesale::getAllsale();
    $data = array('infor_sale' => $infor_sale);
    $this->render('ManageSale', $data);
  }
  public function inforNews(){
    $infor_news = managenews::getAllnews();
    $data = array('infor_news' => $infor_news);
    $this->render('ManageNews', $data);
  }
  public function inforCategory(){
    $infor_category = managecategory::getAllcategory();
    $data = array('infor_category' => $infor_category);
    $this->render('CategoryProduct', $data);
  }
  public function inforProduct(){
    $infor_product = manageproduct::getAllproduct();
    $data = array('infor_product' => $infor_product);
    $this->render('Product', $data);
  }
  public function inforProfile(){
    $infor_profile = manageprofile::getAllprofile();
    $data = array('infor_profile' => $infor_profile);
    $this->render('ManageProfile', $data);
  }
  public function inforOrder(){
    $infor_order = manageorder::getAllorder();
    $data = array('infor_order' => $infor_order);
    $this->render('ManageOrder', $data);
  }
  public function inforMonth(){
    $infor_month = managereport::getAllreport();
    $data = array('infor_month' => $infor_month);
    $this->render('ManageReport', $data);
  }
  public function inforDay(){
    $infor_day = managereportday::getAllreportday($_GET['Month']);
    $data = array('infor_day' => $infor_day);
    $this->render('ReportMonths', $data);
  }
  public function inforReport(){
    $list_product_day = managereportlist::getAllproductday($_GET['Month'],$_GET['Day']);
    $data1 = array('list_product_day' => $list_product_day);
    $infor_day = managereportday2::getAllreportday2($_GET['Month'],$_GET['Day']);
    $data2 = array('infor_day' => $infor_day);
    $data = array_merge($data1, $data2);
    $this->render('InformationReport', $data);
  }
  public function PnotSC() {
    $productbestw = manageproduct::getPnotSC($_GET['ProductCode']);
    $data = array('productbestw' => $productbestw);
    $this->render('product_not_Size_color',$data);
  }
  public function PFull() {
    $productbestw = manageproduct::getPFull($_GET['ProductCode']);
    $data = array('productbestw' => $productbestw);
    $this->render('ProductFull',$data);
  }

  public function homepage() {
    $this->render('homepage');
  }
  public function chinhsach() {
    $this->render('chungtoi');
  }
  public function news() {
    $newshome = managenews::getAllnews();
    $data = array('newshome' => $newshome);
    $this->render('News',$data);
  }
  public function tshirt() {
    $tshirt = product_homepage::getTShirt();
    $data = array('tshirt' => $tshirt);
    $this->render('t-shirt',$data);
  }
  public function shirt() {
    $shirt = product_homepage::getShirt();
    $data = array('shirt' => $shirt);
    $this->render('Shirt',$data);
  }
  public function spants() {
    $spants = product_homepage::getPants();
    $data = array('spants' => $spants);
    $this->render('Shorts-pants',$data);
  }
  public function lpants() {
    $lpants = product_homepage::getPants();
    $data = array('lpants' => $lpants);
    $this->render('long-pants',$data);
  }
  public function jacket() {
    $jacket = product_homepage::getJacket();
    $data = array('jacket' => $jacket);
    $this->render('jacket', $data);
  }
  public function accessories() {
    $accessories = product_homepage::getAccessori();
    $data = array('accessories' => $accessories);
    $this->render('accessories', $data);
  }
  public function showInforCus(){
    $profilees = manageprofile::getAllprofileCus($_GET['UserID']);
    $data = array('profilees' => $profilees);
    $this->render('informationCustomer', $data);
  }
    public function listrordercus(){
    $profilees = manageprofile::getAllprofileCus2($_GET['Email']);
    $data1 = array('profilees' => $profilees);
    $list_order = manageorder::getordercus($_GET['Email']);
    $data2 = array('list_order' => $list_order);
    $data = array_merge($data1, $data2);
    $this->render('orderInfor', $data);
  }
  public function listrproordercus(){
    $profilees = manageprofile::getAllprofileCus2($_GET['Email']);
    $data1 = array('profilees' => $profilees);
    $list_order = listproductorder::getlistproordercus($_GET['orderId']);
    $data2 = array('list_order' => $list_order);
    $list1 = manageorder::getordercus2($_GET['orderId']);
    $data3 = array('list1' => $list1);
    $data = array_merge($data1, $data2,$data3);
    $this->render('showinfororder', $data);
  }
  public function cancellistrproordercus(){
    if(isset($_POST['Price'])){
      $Price = $_POST['Price'];
    }
    else{
      $Price = null;
    }
    $profilees = manageprofile::getAllprofileCus2($_GET['Email']);
    $data1 = array('profilees' => $profilees);
    $list_order = listproductorder::getlistproordercus($_GET['orderId']);
    $data2 = array('list_order' => $list_order);
    $list1 = manageorder::getordercus2($_GET['orderId']);
    $data3 = array('list1' => $list1);
    $cancelorder = manageorder::cancelorder($_GET['orderId'],$Price);
    $data4 = array('cancelorder' => $cancelorder);
    $data = array_merge($data1, $data2,$data3,$data4);
    $this->render('showinfororder', $data);
  }
}
?>
