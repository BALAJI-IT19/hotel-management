<?php
include_once 'includes/dblink.php'
?>
<!DOCTYPE html>
<style>
html,body{
background-image: url('meals1.jpg');
background-repeat: repeat;
background-size: cover;
height: 100%;
font-family: 'Numans', sans-serif;
}
.container{
height: 100%;
align-content:center;
}
.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}
.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}
.social_icon span:hover{
color: white;
cursor: pointer;
}
.card-header h3{
color: white;
}
.social_icon{
position: absolute;
right: 20px;
top: -45px;
}
.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}
input:focus{
outline: 0 0 0 0 !important;
box-shadow: 0 0 0 0 !important;
}
.remember{
color: white;
}
.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}
.login_btn:hover{
color: black;
background-color: white;
}
.links{
color: white;
}
.links a{
margin-left: 4px;
}
</style>
<html>
<head>
 <title>hotel management system</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
 <div class="card-header">
 <form class="row g-3" action="includes/billcounter.php" method="POST">
 <input class="form-control mb-3" type="text" value="HOTEL BILLING & MANAGEMENT SYSTEM" 
aria-label="readonly input example" readonly>
 </div>
 <div class="card-body">
<form class="row g-3" action="includes/billcounter.php" method="POST">
 <div class="input-group mb-3">
 <span class="input-group-text">ITEM</span>
 <input type="text" class="form-control" name="item" placeholder="Item" required>
 </div>
 <div class="input-group mb-3">
 <span class="input-group-text">RATE</span>
 <input type="number" class="form-control" name="rate" placeholder="Rate" required>
 </div>
 <div class="input-group mb-3">
<span class="input-group-text">CUSTOMER NAME</span>
 <input type="text" class="form-control" name="name" placeholder="Customer name" required>
 </div>
 <div class="input-group mb-3">
<span class="input-group-text">CUSTOMER NUMBER</span>
<input type="text" class="form-control" name="num" placeholder="Customer number" 
required>
</div>
<div class="input-group mb-3">
<button type="submit" class="form-control">Enter</button>
</div>
</form>
 
</div>
</div>
</div>
</div>
<a href="display.php" style="color:white;" target="_blank">Customer data</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</body>
</html>