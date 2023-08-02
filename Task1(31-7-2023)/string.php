<?php
echo "<h1>Question-1</h1>";
$year = 2013;
if ($year % 4 === 0){
    echo "This year is leap year<br>";
}else {
    echo "This year isn't leap year<br>";
}




echo "<h1>Question-2</h1>";
$temp = 27;
if($temp < 20){
    echo "we are in winter<br>";
}else{
    echo "It's summer time<br>";
}




echo "<h1>Question-3</h1>";
$arrayInt = [ "firstInteger"  =>  2 , "secondInteger" => 2];
$arrayInt["firstInteger"] === $arrayInt["secondInteger"] ?  $sum = 3*$arrayInt["firstInteger"]*$arrayInt["secondInteger"] :  $sum = $arrayInt["firstInteger"]*$arrayInt["secondInteger"];
echo $sum."<br>";



echo "<h1>Question-4</h1>";
$arrayInt = [ "firstInteger"  =>  10 , "secondInteger" => 10];
if ($arrayInt["firstInteger"]+$arrayInt["secondInteger"]===30){
    echo 30;
}else{
    echo "\'false\'";
}




echo "<h1>Question-5</h1>";
$num = 12;
if ($num > 0 && $num %3 ==0){
    echo "true";
}else{
    echo "false";
}



echo "<h1>Question-6</h1>";
$num = 12;
if ($num >= 20 && $num <=50){
    echo "true";
}else{
    echo "false";
}



echo "<h1>Question-7</h1>";
$arr = [1,5,9];
// $arrlen = count($arr);
// for ($i=0 ;$i < $arrlen ; $i++) {
//     if($arr[$i]>$arr[$i+1]){
//         echo $arr[$i];
//     }else{
//         echo $arr[$i+1];
//     }
// }
// print_r($arr);
// $newarr = sort($arr);
// print_r (sort($arr))
echo max($arr);



echo "<h1>Question-8</h1>";

$unitBill = 300;
if($unitBill <= 50){
    echo $unitBill*2.5;
}else if ($unitBill >50 && $unitBill <=150){
    echo ($unitBill-50)*5 + (50*2.5); 
}else if ($unitBill > 150 && $unitBill <=250){
    echo (50*2.5)+($unitBill-150)*6.2 + 100*5;
}else{
    echo $unitBill*7.5;
}




echo "<h1>Question-9</h1>";
$age = 15;
if($age>=18){
    echo "You Can Vote<br>";
}else{
    echo "is no eligable to vote<br>";
}



echo "<h1>Question-10</h1>";

$num = -60;

if($num > 0 ){
    echo "Positive";
}else if($num < 0 ){
    echo "Negative";
}else{
    echo "Elzero";
}



echo "<h1>Question-11</h1>";

$sign = "//";
$num1 = 5;
$num2 = 5;

if($sign === "+"){
    echo $num1+$num2;
}else if($sign === "-"){
    echo $num1-$num2;
}else if($sign === "*"){
    echo $num1*$num2;
}else if($sign === "//"){
    echo $num1/$num2;
};


echo "<h1>Question-12</h1>";

$grades = [60,86,95,63,55,74,79,62,50];

echo array_sum($grades)/count($grades);
echo "<br>";
// foreach ( $grades as $grade){
//     echo "$grade";
// }

?>