<?php
require_once('./conn.php');
// $name = $_POST["name"];
// $mail = $_POST["mail"];
// $phone = $_POST["phone"];
// $gender = $_POST["gender"];
// $edu = $_POST["edu"];
// $interest = implode(",", $_POST["interest"]);
// $content = $_POST["content"];

// extract() 關聯陣列轉變數
extract($_POST);


// implode() 陣列轉字串
$interest = implode(',',$interest);

$sql = "INSERT INTO students(name,mail,phone,gender,edu,interest,content) VALUES('$name','$mail','$phone','$gender','$edu','$interest','$content')";

mysqli_query($conn, $sql);
header("location:index.php");
?>
