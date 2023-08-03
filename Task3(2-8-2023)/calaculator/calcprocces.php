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
    echo "You Should insert a numbers.<br> <a href='http://localhost/PHP-Tasks/Task3(2-8-2023)/calaculator/calculator.php'>Return To The Calculator.</a>";
}  
?>