<?php
/**
 * echo vs print 
 * بحسب التوثيق الرسمي echo أسرع بكثير من print 
 */

$i=1;
if( $i >= 10 ){
    echo $i . " larger than 10 ";
}else{
    print " $i is smaller than 10";
}
$heading = "profilo | learn PHP ";
class emplee{
        public $name= "mahmoud samy hosein metwaly";
        public $age = 27;
        public $skills ="php,css,json,javascript,jquery";
        public $salary = 8000; 
}

function work_projects($projects){
    return work_projects("ecommerce site");
}

$newemplee = new emplee();
$newemplee->name = ('my name is any given name ');
$newemplee->age = 32;
$newemplee->skills = ('pla pla pla  ');
$newemplee->salary = 100000;






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php  echo $heading ;?> </title>
</head>
<body dir="rtl">
    <!-- الهروب في PHP من خلال أو استخدام  أو '' "" \  -->
    <h1 class="text-center"> بيانات الموظف : <?php $name ?> </h1>
    <ol>
        <li><?php var_dump($newemplee); ?></li>
    </ol>

</body>
</html>