<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Banking System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
       <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #banner_image{
    padding-top: 60px;
    padding-bottom: 50px;
    text-align: center;
    color: #f8f8f8;
    background: url(./img/bg1.jpg) no-repeat center center;
    background-size: cover;
}
#banner_content{
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    margin-top: 12%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 660px;   
}
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container"> 
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> 
            <a class="navbar-brand" href="index.php">Banking System</a> 
        </div> <div class="collapse navbar-collapse" id="myNavbar"> 
            <ul class="nav navbar-nav navbar-right">               
                  
                <li><a href="customer.php"><span class="glyphicon glyphicon-eye-open"></span> View Customer</a></li> 
                <li><a href="THistory.php"><span class="glyphicon glyphicon-transfer"></span> Transfer History</a></li> 
                    
            </ul> 
        </div> 
    </div> 
        </div>
        <div id="banner_image">
            <div class="container">
                <center>
                <div id="banner_content">
                    <h1>Sparks Foundation Project</h1>
                    <h3>By Aparna Kappikeri</h3>
                    <h1>Basic Banking System</h1>
                        <p>Instant Money Transfer</p>
                    <a href="customer1.php" class ="btn btn-primary btn-lg active">Transfer Money</a>
                </div>
                </center>
            </div>
        </div>
       
    </body>
</html>
