<?php

//connect to the server
$host="localhost";
$username="root";
$password="";
$db="shan";
$con=mysqli_connect($host,$username,$password,$db);



//=================================>>create table
/*$query="CREATE TABLE user(
  id INT(6)AUTO_INCREMENT primary KEY,
name VARCHAR(60),
password VARCHAR(60),
email VARCHAR(64)
  )";
  mysqli_query($con,$query);
  */



 //============================>>insert data to the table
//$query="INSERT INTO user(name,password,email) VALUES ('ali','36919','ali@ali.com')";mysqli_query($con,$query);


//=================================>>استخراج البيانات من قاعدة البيانات
/*$query="SELECT * FROM user";
//quering
$result = mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($result)) {
if($row['name']='omar'&&$row['passwor']='12345'){
  echo "Your Email. Is ".$row['email'];
}
}*/
//================================>>delete data from table
//$query ="DELETE FROM user WHERE name='ahmed'";mysqli_query($con,$query);


//=====================================>>تعديل البيانات داخل الجدول
$query="UPDATE user SET password='omarpero12345' WHERE name='omar'";
mysqli_query($con,$query);






 ?>
