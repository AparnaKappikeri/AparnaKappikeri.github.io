<?php
$con=mysqli_connect('localhost:3308','root','','banking_system');
$q="select name from customers";
$res=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Customer</title>
        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <style>
            #banner_image{
    padding-top: 110px;
    padding-bottom: 90px;
    text-align: center;
    color: #f8f8f8;
    background: url(./img/m3.jpg) no-repeat center center;
    background-size: cover;
}
table {
  width:60%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
  color:black;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
 color:black;
}
#t01 th {
  background-color: black;
  color: white;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
        </style>
</head>

<body>

    <div id="banner_image">     
           
            <table id="t01" class="center">
                <h1 style="color:black;">Banking System</h1>

    <?php 
session_start();
$con=mysqli_connect('localhost:3308','root','','banking_system');
$q="select * from customers ";
$res=mysqli_query($con,$q);
?>
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Balance</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     while($row=mysqli_fetch_array($res))
     {
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["balance"]; ?></td>

		</tr>
        <?php  
     
     }
           ?>        
	</tbody>
</table>
            <br><br>
<a href="index.php"><button class="btn btn-primary btn-lg">Home</button></a>
    </div>
</body>
</html>

