<?php
/**
 *  التدريب علي أستخدام الدوال في لغة php
 * function Identifier أسم الدالة($argument) {
 * code to be executed; الكود الذي سوف يتم تنفيذه 
 * }
 * الدوال حساسة لحالة الأحرف بمعني أن الدالة بالأسم Newproduct ليست كالدالة newproduct
 * 
 *  
 * */

#مثال 1
function Product(){
    echo "iphone" . "color Blue" . "Ram 1Gb" . "size 20 gb" . " Model : iphone 6";

}
//لاستدعاء الدالة لاستخدامها 
product();
echo "<br>";
?>

<h1> this is the product 2 place </h1>
<?php product(); ?>

<?php
//for loop تمرين علي أستخدام حلقة

function count_from_1_to_100(){
    for($counter=1; $counter <=100; $counter++){
        echo $counter;
    }
}
?>
<br>

<h1> this is the for loop place  </h1>

<?php
count_from_1_to_100();
?>

<?php
//while loop تمرين علي أستخدام حلقة
function while_loop(){
    $i=0;
    while ( $i <= 100){
        $i++;
        echo $i;
    }
}
echo "<br>";
while_loop();

//while loop تمرين علي أستخدام حلقة
echo "<br>";
function alsalamalkom(){
     $alsamalekoum=1; 
        while($alsamalekoum <= 100){  
                $alsamalekoum++;  
                echo "السلام عليكم";
            }

}
alsalamalkom();
?>
<?php
# تمرين أستخدام parameters 
function profilo($name,$age,$skills,$education)
{
    echo "<br>";
    echo  "my name is :" . $name . " " . "and my age : $age " . "and i have a skills in : $skills " . " and i have a degree in $education ";

}
profilo("mahmoud samy hosein metwaly","27","css,html,java,php,jquery","ecommerce");


echo "<br>";
function addnumber(int $a , int $b){
    return $a + $b ;
}
echo addnumber(5,'5 days');

echo "<br>";

//دالة لحساب المرتب 
function salary($salary,$days,$name){
    echo "your salary for this month : $name  is : " . $salary*$days;
}
salary(70,30,"mahmoud samy hosien metwaly");


echo "<br>";

// دالة لعمل قائمة بالسنين
function generate_years($start,$end){

    echo "<select name='years'>";

    for ($years = $start; $years <= $end; $years++){

        echo "<option value='$years'>" . $years . "</option>" ;
    }

    echo "</select>";

}   

echo "<br>" . "<h1> mahmoud need to count from 2010 to 2020  <h1>";

generate_years(2010,2020); //mahmoud need to count from 2010 to 2020 

echo "<br>" . "<h1> ahmed need to count from 1900 to 2050   <h1>";

generate_years(1900,2050); //ahmed need to count from 1900 to 2050 


echo "<br>";


function calcluate_age_in_days($name,$age){
    echo "HI $name your age in days :" . $age*365;

}
calcluate_age_in_days("mahmoud samy hosein " , 27);
echo "<br>";
calcluate_age_in_days("ali Ibrahim Mohamed " , 32);
echo "<br>";
//شرح أستخدام return 
function sayhello(){
    echo "pla pla pla pla pla pla " ;
    return "say hello"; // لا تنفذ أي أمر بعدها
    echo "pla pla pla pla pla pla " ;
    echo "pla pla pla pla pla pla " ;
    echo "pla pla pla pla pla pla " ;
}
var_dump( sayhello() );
echo"<br>";
# return vs echo 
function multiNum(){
    $result = 100 * 100 ;
      echo $result;

}
var_dump(multiNum());



echo "<br>";

// how to use argument default values 
function age($name="mahmoud samy hosein"){
    echo $name;
}

age();//سوف يتم طباعة الجملة الأفتراضية 


function getticket($user,$age){

    $ticket = rand(5000,1000000);

    if($age >=19){
        $msg = "hello" ." " . $user . "Your Age IS " . $age . "<br>";
        $msg .= "You Are Qualified To get A Ticket Congratz :) " . "<br>";
        $msg .= "Your Ticket Id Is   [<span> $ticket </span> ]";

    }else{
        $msg = "hello" . $user . "Your Age IS " . $age . "<br>";
        $msg .= "You Are Not Qualified To get A Ticket Sorry :( ";

    }

    return $msg;

}

$id = getticket("mahmoud samy hosein ","27");

function  makeFrame($element){

    $frame = "<div class='nice-frame'>";
    $frame .= $element;
    $frame .= "<div>";


    return $frame;

}
$myelement =makeframe($id)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>ADvanced Function </title>
    <style>
        .nice-frame{
            padding: 10px;
            text-align:center;
            width:400px;
            margin: 20px auto;
            border-radius: 10px;
            background-color: #EEE;
            border:1px solid #CCC;
            font-family: 'Courier New', Courier, monospace;

        }
    </style>
</head>
<body>
    <?php echo ($myelement); ?>
</body>
</html>
