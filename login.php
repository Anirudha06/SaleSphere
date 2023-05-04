<?php include('connection.php') ?> 
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- icon  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<style>
    * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #66d9ff;
}
.navbar {
  display: flex;
  align-items: center;
  padding: 20px;
}
/*nav maenu on the right as a unordered list*/
nav {
  flex: 1;
  text-align: right;
}
/*nav maenu on the right as a list but without bullet*/
nav ul {
  display: inline-block;
  list-style-type: none;
}
/*nav maenu on the right as a vertically list with 50px gapping with each with underline*/
nav ul li {
  display: inline-block;
  margin-right: 50px;
}
/*nav maenu on the right as a vertically list with 50px gapping with each without underline*/
a {
  text-decoration: none;
  color: #4488dd;
}

a:hover {
  color: #09556e;
}
.header {
  width: 25%;
  margin: 50px auto 0px;
  color: white;
  background: #027b91;
  text-align: center;
  border: 1px solid #b0c4de;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form,
.content {
  width: 25%;
  margin: 0px auto;
  padding: 20px;
  border: 2px solid #027b91;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #13c4ca;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%;
  margin: 0px auto;
  padding: 10px;
  border: 1px solid #a94442;
  color: #a94442;
  background: #f2dede;
  border-radius: 5px;
  text-align: left;
}
.success {
  color: #3c763d;
  background: #dff0d8;
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}

/* footer strat  */



</style>
<body>
  <div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" width="100px"></a>
        </div>
         <nav>
            <ul id="MenuItems">
                <li><a href="index.html">Home</a></li>
                 <li><a href="products.html">Products</a></li>
                 
                  <li><a href="contactus.html">ContactUs</a></li>
                 <li><a href="account.html">Account</a></li>
                  <li class="cart"><a href="cart.html"> <ion-icon name ="basket"></ion-icon>Cart<span>0</span> </a> </li>

            </ul>
        </nav>
        
    </div>
   
</div id="form">
  <div class="header">
    <h2>Login</h2>
  </div>
     
  <form  action="log.php" onsubmit=" return isvalid()" method="POST">
    <!-- <?php include('errors.php'); ?>  -->
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="submit">Login</button>
    </div>
    <p>
        Not yet a member? <a href="register.html">Sign up</a>
    </p>
  </form>
  
<br>
  <div class ="footer">
    <div class="container">
        
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png" alt="">
                    <img src="images/app-store.png" alt="">
                </div>
            </div><br>
            <div class="footer-col-2">
                <h1 class="footer-title">SaleSphere</h1><br>
                <div>
                    <span class="color_icon">
                        <i class="fas fa-map-marker-alt"></i>
                        Opposite of N.M.A.M Institute of Technology
                    </span>
                    </div>
                <div>
                    <span class="color_icon">
                        <i class="far fa-envelope"></i>
                         SaleSphere@gmail.com
                    </span>
                   </div>
                <div>
                    <span class="color_icon">
                        <i class="fas fa-phone"></i>
                         +91 8856732245
                    </span>
                   </div>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
               <ul>
                   <li>Coupons</li>
                   <li>Blog Post</li>
                   <li>Return Policy</li>
                   <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
               <ul>
                   <li>Facebook</li>
                   <li>Twitter</li>
                   <li>Instagram</li>
                   <li>Youtube</li>
                </ul>
            </div>
            
        </div>
    
        
    </div>
</div>

    <!-- ion-icon -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js">
  function isvalid(){
  var user= document.form.user.value;
  var pass = document.form.pass.value;
  if(user.length=="" && pass.length==""){
    alert("username and password field is Empty!!");
    return false;
  }
  else{
    if(user.length=="" ){
    alert("username is Empty!!");
    return false;
  }
    if(pass.length=="" ){
    alert("Password is Empty!!");
    return false;
  }
  }  
}

    </script>

  
</body>
</html>