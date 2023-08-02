 <?php 
//user define varaiables
// $name = "Yousef";

//Super Global variable means that we can access to this variable were ever you are inside the code no mater the scope you are

//define super global variable

//####################################################


// echo $_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo $_SERVER["PHP_SELF"];
// echo "<br>";
// echo $_SERVER["SERVER_NAME"];
// echo "<br>";
// echo $_SERVER["REQUEST_METHOD"];//GET , POST EX:the form in HTML action method : POST & GET

//####################################################


// echo $_GET["name"];
// echo "<br>";
// 



//*****************cookies******************* */


//popup in sites
//storage
//remmeber me
//infinite cookie

//setcookie(Name[required], Value, Expires ,Path ,Domain ,Secure ,Http_only);

/*
name=>reqired
value
expires
path => sub
domain
secure => defult = false
http_only => defult = false mean that if you use http or https that's fine


**important
-don't store important information in cookies
-not everything store in cookies
Ex:
databse => Language
*/


// setcookie("style","dark", time() + 60 ,"/");
// setcookie("popup","done", strtotime("+ 1 minute"));

// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";

// echo $_COOKIE["style"];


// echo "<div onclick="e">";
// echo "hello";

?>





<!-- form.html -->
<!-- <form method="post" action="test.php">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">

  <label for="age">Age:</label>
  <input type="number" name="age" id="age">

  <input type="submit" value="Submit">
</form> -->


<?php // process_form.php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $name = $_POST['name']; // Assuming the form field name is "name"
//     $age = $_POST['age'];   // Assuming the form field name is "age"

//     echo "POST Super Gobal<br>";
//     echo "Hello, $name! Your age is $age.";
// }else if ($_SERVER['REQUEST_METHOD'] === 'GET'){
//     // example.php
//     $name = $_GET['name']; // $name will be "John"
//     $age = $_GET['age'];   // $age will be "25"
    
//     echo "GET Super Gobal<br>";
//     echo "Hello, $name! Your age is $age.";

// }
// echo "<br><br>";

// // set_cookie.php
// // $cookieValue = "John";
// setcookie("username" ,$name , time() + 3600*4 ,"/"); // Set the cookie with a 1-hour expiration time

// echo "Cookie set successfully!<br>";

// // get_cookie.php
// if (isset($_COOKIE['username'])) {
//     // $cookieValue = $_COOKIE['username'];
//     print_r($_COOKIE);
//     echo "Welcome back, ".$_POST['name']."!";
// } else {
//     echo "Cookie not found.";
// }

// echo "<br><br>";


// // server_info.php
// echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
// echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
// echo "Server Address: " . $_SERVER['SERVER_ADDR'] . "<br>";
// echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br>";
// // echo "Server Query: " . $_SERVER['QUERY_SRTING'] . "<br>";
// // and so on...

// echo "<br><br>";
// ?>

// <!-- upload_file.html -->
<!-- // <form method="post" action="process_upload.php" enctype="multipart/form-data">
//   <input type="file" name="file">
//   <input type="submit" value="Upload File">
// </form> -->

// <?php
// // process_upload.php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_FILES['file'])) {/* to check if a file was uploaded */
//         $fileInfo = $_FILES['file'];

//         $fileName = $fileInfo['name'];
//         $fileType = $fileInfo['type'];
//         $fileTmpName = $fileInfo['tmp_name'];
//         $fileError = $fileInfo['error'];
//         $fileSize = $fileInfo['size'];

//         // Check for any errors during the file upload
//         if ($fileError === UPLOAD_ERR_OK) {
//             // Move the uploaded file to a desired location on the server
//             $targetDir = 'uploads/';
//             $targetPath = $targetDir . $fileName;

//             if (move_uploaded_file($fileTmpName, $targetPath)) {
//                 echo "File uploaded successfully!";
//             } else {
//                 echo "Failed to move the uploaded file.";
//             }
//         } else {
//             echo "Error during file upload: " . $fileError;
//         }
//     } else {
//         echo "No file uploaded.";
//     }
// }


?>

<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="age">Age:</label>
    <input type="number" name="age" id="age">

    <input type="submit" value="Submit">
</form>
<?php
echo "<br>";
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $_SESSION['username'] = $_POST['name'];
        setcookie("username", $_POST['name'], strtotime("+3 seconds"));
        echo "Cookie set successfully!<br>";
    }else {
        echo "Please enter a valid name before setting the cookie.<br><br>";
    }

if (isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'] . "! (from cookie)<br>";
} else {
    echo "Cookie not found.<br>";
}
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome back, $username! (from session)";
} else {
    echo "Welcome, guest! (from session)";
}}
echo isset($_COOKIE['username']);
?>


<?php
// store_data.php
// session_start();

// $_SESSION['username'] = 'John';
// $_SESSION['user_id'] = 123;

// echo "Data stored in the session.";
// echo"<br>".$_SESSION['username'];
// echo "</br>";
// print_r ($_SESSION);
// echo "</br>";
// echo isset($_SESSION['user_id']);

?>