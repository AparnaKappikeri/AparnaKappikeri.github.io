<?php
session_start();
$con=mysqli_connect('localhost:3308','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from customers where not name='$name1'";
$result=mysqli_query($con,$q);
?>

<html>
<head>
   <title>
   Transfer
    </title>
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
</style>
</head>
<body>
    <div id="banner_image">
        
            
        <h1 style="color:black;">Money Transfer</h1>
        <form action="checkbalance.php" method="post">
       <label style="color: black;"> <h2>From : 
                    <?php echo $_SESSION['name'] ;?></h2> </label>
            <br>
           <h2 style="color:black; display:inline;">To : </h2> 
           <select style="color:black;" name="to" >
      <option style="color:black;">-Select-</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option style="color:black; display:inline;" value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
      
        </select>  
           <br><br>
          <h2 style="color:black; display:inline;">Transfer Amount:</h2>
          
            <input style="color:black; display:inline;" type="text" name="transfer"><br>
          <br>
        
          <button value="balance" type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
    </div>
</body>

</html>
