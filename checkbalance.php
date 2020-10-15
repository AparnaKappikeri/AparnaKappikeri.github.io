<?php
session_start();
$con=mysqli_connect('localhost:3308','root','','banking_system');
$name1=$_SESSION['name'];
$q="select balance from customers where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['balance'];
$from=$_SESSION['name'];
$to=$_POST['to'];
$q1="select balance from customers where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['balance'];
session_destroy();
if ( $var1 > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update customers set balance='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update customers set balance='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
    
    $amt=$_POST["transfer"];
    $q = "INSERT INTO transaction(sendername,receivername,amount) VALUES ('$from','$to',$amt);";
    $result=mysqli_query($con,$q);
    header('location: success.php');
    
}
else
{
    header('location: fail.php');

}
?>