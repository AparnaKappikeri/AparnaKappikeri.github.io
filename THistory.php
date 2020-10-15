<?php
$con=mysqli_connect('localhost:3308','root','','banking_system');
$q="select name from customers";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transaction History</title>
        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <style>
            #banner_image{
    padding-top: 250px;
    padding-bottom: 200px;
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
                <h1 style="color:black;">Transaction History</h1>

    <?php 
session_start();
$con=mysqli_connect('localhost:3308','root','','banking_system');
$q="select * from transaction ";
$result=mysqli_query($con,$q);
?>
	<thead>
		<th>No</th>
		<th>Sender's Name</th>
                <th>Receiver's Name</th>
		<th>Amount Transferred</th>
		
	</thead>
	<tbody>
		<tr>
        <?php  
     
     while($row=mysqli_fetch_array($result))
     {
           ?>
 <td><?php echo  $row["id"]; ?></td>
  <td><?php echo  $row["sendername"]; ?></td>
  <td><?php echo  $row["receivername"]; ?></td>
  <td><?php echo  $row["amount"]; ?></td>

		</tr>
        <?php  
     
     }
           ?>
 
        
	</tbody>
</table>
        <br><br><br><br>
        <a href="index.php"><button class="btn btn-primary btn-lg">Home</button></a>
    </div>
</body>
</html>