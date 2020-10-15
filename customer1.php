<?php
$con=mysqli_connect('localhost:3308','root','','banking_system');
$q="select name from customers";
$res=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select Customer</title>
        
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
        <form  action="viewcustomer.php" method="post">
            
            <table id="t01" class="center">
                <h1 style="color:black;">Banking System</h1>

    <?php 
session_start();
$con=mysqli_connect('localhost:3308','root','','banking_system');
$q="select * from customers ";
$res=mysqli_query($con,$q);
$row_count=mysqli_num_rows($res);
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


    <div class="view">


       <h2 style="color:black;">Select Customer</h2>
   

<?php
$con=mysqli_connect('localhost:3308','root','','banking_system');
$q="select name from customers";
$res=mysqli_query($con,$q);
?>

  <select name="name" onchange="this.form.submit()">
      <option>-Select-</option>
   <?php  
     while($row = $res->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </div>
    </form> 
    </div>
</body>
</html>

