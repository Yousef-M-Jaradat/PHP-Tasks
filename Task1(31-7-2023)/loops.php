<?php
echo "<h1>Question-1</h1>";

$total = 0;
for($i=0;$i<=30;$i++){
    $total +=$i;
}
echo $total;
echo "<br>";



echo "<h1>Question-4</h1>";

$row=0;
$column=0;
$tri=0;
for($column=0;$column<5;$column++){
    for($row=0;$row<5;$row++){
        if($row==$column){
            $tri+=1;
            echo $tri;
            echo"<br>";
        }else {
            echo "j";
        }
    }
}
echo $tri;

for($i=0; $i<5; $i++) {
    for($j=0; $j<5; $j++)
    {
    echo '*';
    }
    echo '<br>';
    }
    
?>