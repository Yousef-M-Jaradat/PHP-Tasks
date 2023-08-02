<?php
session_start();

if(isset($_GET['Number1']) && isset($_GET['Number2']) && $_GET['Number1'] !== "" && ($_GET['Number2'] !== "")){
    $number1 = $_GET['Number1'];
    $number2 = $_GET['Number2'];
    if($_GET['Add'] === '+'){
        $_SESSION['Opp'] = $number1 + $number2 ;
        header('Location: calculator.php');
        exit;
    }else if($_GET['Div'] === '-'){
        $_SESSION['Opp'] = $number1 - $number2 ;
        header('Location: calculator.php');
        exit;
    }else if($_GET['Mul'] === '*'){
        $_SESSION['Opp'] = $number1 * $number2 ;
        header('Location: calculator.php');
        exit;
    }else if($_GET['Sub'] === '/'){
        $_SESSION['Opp'] = $number1 / $number2 ;
        header('Location: calculator.php');
        exit;
    }
}else{
    echo "hello world";
}  
?>