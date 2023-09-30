<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify</title>
    
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<!--Home-->
    <section id="home">
      
      <br>
      <br>
      <h1>Welcome To Petify!</h1>
      <div class="input-group m-4">
        <button class=".btn-lg" id="btn1"><a href="reg1.php">Sign In</a></button>
      </div>
      <div class="input-group m-4">
        <button class=".btn-sm" id="btn2"><a href="reg2.html">Sign Up</a></button>
      </div>
      <div class="input-group m-4">
        <button class=".btn-xs"  id="btn3"><a href="#about">About us</a></button>
      </div>
    </section>

<!--About-->
    <section id="about">
      <h1>About US</h1>
      <h3>Where Your Pet's Happiness Is Our Priority.</h3>
      <p>At Petify, we understand that your furry, feathered, 
         or scaly companions aren't just pets; they're cherished members 
         of your family. We share your love and devotion to their well-being,
         which is why we've dedicated ourselves to providing top-notch care 
         and services to ensure their happiness and health. Our mission is simple: to create a world 
         where every pet thrives. Whether you have a playful pup, a cuddly cat, a 
         talkative parrot, or any other amazing creature by your side, our team of 
         passionate pet enthusiasts is here to offer a helping hand and a caring heart.</p>
        <div>
          <a href="#" class="fa fa-facebook fa-2x"></a>
          <a href="#" class="fa fa-twitter fa-2x"></a>
          <a href="https://wa.me/qr/DKNDNDZ7A7MHP1" class="fa fa-whatsapp fa-2x"></a>
          <a href="#" class="fa fa-instagram fa-2x"></a>
          
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    

</body>
</html>