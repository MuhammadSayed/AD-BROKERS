<!DOCTYPE html>
<html>
     <head>
         <title>Sign up | AD-Brokers</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
           <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="css/signup.css">
         <link href="css/mdb.min.css" rel="stylesheet">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         </head>
    <body>
          <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar #00243B">

    <!-- Navbar brand -->
    <img src="img/logo1.png" height="30" alt="">
    <a class="navbar-brand" href="#"></a><a class="navbar-brand" href="#" style="color: #FF8800 ;">Ad-Brokers</a>
       
    
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link bt" href="index.html">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
             <li class="nav-item">
                <a class="nav-link bt" href="sign%20up.html">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.html">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ads%20company.html">Ads Companies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="feedback.html">Feedback</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about%20us.html">About us</a>
            </li>
            
            

        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form mt-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
        
        
     
<div class="con">

    <img src="img/Capture.PNG" class="img" >
    <p1>Clients</p1>
    <p2>ADs Companies</p2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="b1">Login</button>
    </div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    
      </div>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="cname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="cpsw" required>
        
     <button type="submit">Login</button>  
      <label>
        <input type="checkbox" checked="checked" name="remember"><p> Remember me</p>
      </label>
    </div>

    <div class="container" style="background-color:#00243B">
      <button type="button" onclick="document.getElementById('id001').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><h10>Forgot</h10> <a href="#">password?</a></span>
    </div>
  </form>
    
</div>
 

<button onclick="document.getElementById('id001').style.display='block'" style="width:auto;" class="s1">Sign Up</button>

<div id="id001" class="modal1">
  <span onclick="document.getElementById('id001').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content1" action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container1">
      <h1><p>Sign Up</p></h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="cemail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="cspsw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="cspswr" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> <p>Remember me</p>
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue"><p>Terms & Privacy</p></a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn1">Cancel</button>
        <button type="submit" class="signupbtn1">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="b11">Login</button>
    
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    
      </div>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="aname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="apsw" required>
        
     <button type="submit">Login</button>  
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#00243B">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><p>Forgot</p> <a href="#">password?</a></span>
    </div>
  </form>
</div>
  

<button onclick="document.getElementById('id001').style.display='block'" style="width:auto;" class="s11">Sign Up</button>

<div id="id001" class="modal1">
  <span onclick="document.getElementById('id001').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content1" action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container1">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="aemail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="aspsw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="apswr" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn1">Cancel</button>
        <button type="submit" class="signupbtn1">Sign Up</button>
      </div>
    </div>
  </form>
</div>
         <!--Footer-->
      <footer class="page-footer font-small #00243B pt-0">
      
          <!--Footer Links-->
          <div class="container">
      
              <!--Grid row-->
              <div class="row pt-5 mb-3 text-center d-flex justify-content-center">
      
                  <!--Grid column-->
                  <div class="col-md-2 mb-3">
                      <h6 class="title font-weight-bold"><a href="about%20us.html">About us</a></h6>
                  </div>
                  <!--Grid column-->
      
                  <!--Grid column-->
                  <div class="col-md-2 mb-3">
                      <h6 class="title font-weight-bold"><a href="products.html">Products</a></h6>
                  </div>
                  <!--Grid column-->
      
                  <!--Grid column-->
                  <div class="col-md-2 mb-3">
                      <h6 class="title font-weight-bold"><a href="ads%20company.html">Ads company</a></h6>
                  </div>
                  <!--Grid column-->
      
                  <!--Grid column-->
                  <div class="col-md-2 mb-3">
                      <h6 class="title font-weight-bold"><a href="feedback.html">Feedback</a></h6>
                  </div>
                  <!--Grid column-->
      
                  <!--Grid column-->
                  <div class="col-md-2 mb-3">
                      <h6 class="title font-weight-bold"><a href="#!">Contact</a></h6>
                  </div>
                  <!--Grid column-->
      
              </div>
              <!--Grid row-->
      
              <hr class="rgba-white-light" style="margin: 0 15%;">
      
              <!--Grid row-->
              <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
      
                  <!--Grid column-->
                  <div class="col-md-8 col-12 mt-5">
                       <a target="_blank" href="https://xd.adobe.com/view/4bcd583e-b543-4fd8-8d9e-eb5f8ae5e6ee/screen/07a855cd-c4ee-41d6-a999-cc7f0e8c0551/Android-Mobile-1" class="btn btn-outline-white btn-lg flex-item"
                                    rel="nofollow">Download Our App</a>
      
                  </div>
                  <!--Grid column-->
      
              </div>
              <!--Grid row-->
      
              <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
      
              <!--Grid row-->
              <div class="row pb-3">
      
                  <!--Grid column-->
                  <div class="col-md-12">
      
                      <div class="mb-5 flex-center">
                          <!--Facebook-->
                          <a class="fb-ic"><i class="fa fa-facebook fa-lg white-text mr-md-4"> </i></a>
                          <!--Twitter-->
                          <a class="tw-ic"><i class="fa fa-twitter fa-lg white-text mr-md-4"> </i></a>
                          <!--Google +-->
                          <a class="gplus-ic"><i class="fa fa-google-plus fa-lg white-text mr-md-4"> </i></a>
                          <!--Linkedin-->
                          <a class="li-ic"><i class="fa fa-linkedin fa-lg white-text mr-md-4"> </i></a>
                          <!--Instagram-->
                          <a class="ins-ic"><i class="fa fa-instagram fa-lg white-text mr-md-4"> </i></a>
                          <!--Pinterest-->
                          <a class="pin-ic"><i class="fa fa-pinterest fa-lg white-text"> </i></a>
                      </div>
                  </div>
                  <!--Grid column-->
              </div>
              <!--Grid row-->
      
          </div>
          <!--/Footer Links-->
      
          <!--Copyright-->
          <div class="footer-copyright py-3 text-center #00243B ">
              <div class="container-fluid">
                  © 2018 Copyright: <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> ad-broker.com </a>
              </div>
          </div>
          <!--/Copyright-->
      
      </footer>
      <!--/Footer-->

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
var modal = document.getElementById('id001');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        <?php
        
        
        
        
        
        ?>
        
        
        
        
        
         </body>
        


</html>