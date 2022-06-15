<?php
$servername="localhost";
$username="root";
$password="";
$database_name="flight";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
  die("Connection failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   
   $sql_query = "INSERT INTO contact_us(name,email,message)
   VALUES('$name','$email','$message')";

   if(mysqli_query($conn, $sql_query))
   {
      echo "New Details Entry inserted successfully !";
   }
   else
   {
      echo "Error: ". $sql . "" . mysqli_error($conn);
   }
   mysqli_close($conn);
}