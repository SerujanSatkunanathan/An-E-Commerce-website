<!DOCTYPE html>
<head>
<title>Petify Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    



</head>
    

<body>
<!--Navigation bar-->
<nav class="navbar navbar-expand-lg " id="nav">
        <div class="container-fluid">
          <img src="logo.jpg" width="50" height="50">  
        &nbsp;<b>Petify</b>
          
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul  class="navbar-nav mx-auto" >
              <li class="nav-item">
                <a class="nav-link " id="aa" href="index.php"> <b>Home</b> </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="aa" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Products & Services</b> 
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cart2.html">View Products</a></li>
            <li><a class="dropdown-item" href="services.html">Services</a></li>
                </ul>
            </ul>
           
    </div>
          </div>
        </div>
      </nav>
   



   <section id="reg">
    <section id="reg1">
    <div class="box" >
        <h1>Login Here</h1>

        <form name="myform" action="login.php" method="POST" >

            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email " required="">
            <br><br>
            <p>Password</p>
            <input type="password" name="upswd1" placeholder="Enter Password" required="">
            <br><br>

            <input type="submit" name="" value="Login">

            <br><br>
            <p>New to Petify?</p>
            <a href="reg2.html">Create an account.</a>

        </form>
        
    </div>
  </section>
</section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>