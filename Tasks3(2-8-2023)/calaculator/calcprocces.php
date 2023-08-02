<?php
session_start();

if(isset($_GET['Number1']) && isset($_GET['Number2']) && $_GET['Number1'] !== "" && ($_GET['Number2'] !== "")){
    $number1 = $_GET['Number1'];
    $number2 = $_GET['Number2'];
    // $add = $_GET['Add'];
    // $div = $_GET['Div'];
    // $mul = $_GET['Mul'];
    // $sub = $_GET['Sub'];
    if($_GET['Add'] === '+'){
        $_SESSION['Opp'] = $number1 + $number2 ;
        echo $_SESSION['Opp'];
    }else if($_GET['Div'] === '-'){
        $_SESSION['Opp'] = $number1 - $number2 ;
        echo $_SESSION['Opp'];
    }else if($_GET['Mul'] === '*'){
        $_SESSION['Opp'] = $number1 * $number2 ;
        echo $_SESSION['Opp'];
    }else if($_GET['Sub'] === '/'){
        $_SESSION['Opp'] = $number1 / $number2 ;
        echo $_SESSION['Opp'];
    }
}else{
    echo "hello world";
}  
?>