<?php
/*الصنف class
- class  = apple blueprint Design for apple device 
- object = iphone6,7,8,9,10,11,12
- application = all company
- -> object operator
- new كلمة محجوزة لانشاء كائن جديد
- المتغيرات داخل الصنف هي خاصية غير ذلك متغير عادي
- Pseudo Variable $this المتغير الزائف 
- الدوال داخل الأصناف هي طرق methods وخارجها  دوال عادية refer to object properties 
*/
class appledevice  {
    /*
    - properties الخواص 
    - لتعيين القيم الافتراضية للخاصية
    - access modifier معدلات الوصول
    - public : 
    - private :
    - protected :
    */
    public      $Brand                  =   "Apple";
    public      $model                  =   "Apple Iphone X With Facetime";
    public      $Color                  =    "Grey";
    public      $Operating_System       =   "iOS";
    public      $Storage_Capacity       =   "64 GB";
    public      $Type                   =   "Single SIM";
    public      $Camera                 =   "Resolution: 12 MP";
    public      $phone_Type             =   "Smartphone";
    public      $Networking             =   "topology: 4G LTE";
    public      $Chipset                =   "Brand: Apple";
    public      $Size                   =   "5.8 inches";

    //methods الطرق 
    public function doubleHomepressed(){
        echo  "تم الضغط علي زر العودة الي الرئيسة مرتين ";
        // return doubleHomepressed("تم الضغط علي زر العودة الي الرئيسة مرتين ");
    }
    public function getspecifcation(){

        echo "<ol>";
            echo"<h1> مواصفات هذا الجهاز هي <h1>";
            echo "<li> Brand : $this->Brand </li>";
            echo "<li> model  : $this->model </li>";
            echo "<li> Operating_System : $this->Operating_System </li>";
            echo "<li> Storage_Capacity : $this->Storage_Capacity </li>";
        echo "</ol>";
    }
    public function setownername($user_name){
        if(strlen($user_name) <=10){
            echo "your user_name has been set to $user_name ";

        }else{
            echo "your user_name length showed be a 10 char ";
        }
    }
}
/* 
- object الكائن
*/
$iphonex = new appledevice();
$iphonex->doubleHomepressed();
$iphonex->getspecifcation();
$iphonex->setownername("mahmoudsam");
#-----------------------------------------------------------------------------------------------------------------------
$iphone7 = new appledevice();
// change properties الخواص 
$iphone7->brand = "Apple";
$iphone7->model = "Apple Iphone 7 With Facetime";
$iphone7->color  = "Black";
$iphone7->Operating_System  = "iOS";
$iphone7->Storage_Capacity = "128GB";
$iphone7->Type = "Single SIM";
$iphone7->Camera = "Resolution: 12 MP";
$iphone7->phone_Type = "Smartphone";
$iphone7->Networking = "topology: 3G LTE";
$iphone7->Chipset = "Brand: Apple";
$iphone7->Size = "4.7 inch Retina HD display";
#-----------------------------------------------------------------------------------------------------------------------
echo "<pre>";
var_dump($iphonex,$iphone7);
echo "</pre>";
