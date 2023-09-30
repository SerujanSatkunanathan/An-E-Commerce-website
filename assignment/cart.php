<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="style.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body >

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
            <li><a class="dropdown-item" href="#">Services</a></li>
                </ul>
            </ul>
           
    </div>
          </div>
        </div>
      </nav>


<br><br>
<section id="home">
    <div class="container">
        <header>
         
            <h3>LIST PRODUCT</h3>
            <div class="iconCart">
                <img src="cart.png">
                <div class="totalQuantity">0</div>
            </div>
        </header>
<br><br>
        <div class="listProduct">

            <div class="item">
                <img src="food1.webp" alt="">
                <h5>CoPilot / Black / Automatic</h5>
                <div class="price">Rs.550</div>
                <button>Add To Cart</button>
            </div>

        </div>
    </div>

    <div class="cart">
        <h2>
            CART
        </h2>

        <div class="listCart">


            <div class="item">
                <img src="images/1.webp">
                <div class="content">
                    <div class="name">CoPilot / Black / Automatic</div>
                    <div class="price">₨.550 / 1 product</div>
                </div>
                <div class="quantity">
                    <button>-</button>
                    <span class="value">3</span>
                    <button>+</button>
                </div>
            </div>


        </div>

        <div class="buttons">
            <div class="close">
                CLOSE
            </div>
            <div class="checkout">
                <a href="checkout.html">CHECKOUT</a>
            </div>
        </div>
    </div>
  </section>

    <script src="cart.js"></script>
    
</body>
</html>