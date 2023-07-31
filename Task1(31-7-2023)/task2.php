<?php

echo "<h1>Question-1</h1>";

$colors = array('white', 'green', 'red') ;

$arraylength = count($colors);

for($i=0; $i<$arraylength;$i++){
    echo "<ul><li>$colors[$i]</li></ul>";
}

echo "<h1>Question-2</h1>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);

foreach($cities as $capital => $capital_value) {
    echo "The Capital of " . $capital . " is " . $capital_value;
    echo "<br>";
}




echo "<h1>Question-3</h1>";

?>