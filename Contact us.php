<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #d2d8b9;
        }
        
        .collapse{
            
            margin-left: 17%;
        }
        .collapse ul li{
            margin-left: 10px;
        }
        #navbarSupportedContent ul li a:hover{
         padding-bottom: 2px;
          border-bottom: 2px solid gainsboro;
          border-top: 1px solid gainsboro;
          border-radius: 10%;
          color:#687fb1;
        }
        .navbar .container-fluid form button:hover{
          background-color: rgb(129, 117, 117);
          color: rgb(158, 145, 128);
        }


        .contact-section {
            display: flex;
            justify-content: space-around;
            background-color: #fff;
            background:linear-gradient( 45deg, burlywood, rgb(182, 174, 174));
            margin: 150px 50px;
            
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        

        .contact-info,
        .contact-form {
            flex: 1;
        }

        .contact-info div {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .contact-info div i {
            margin-right: 10px;
            color: #333;
        }

        .contact-form h2 {
            color: #333;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .text-box,
        textarea {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .send-btn {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
.logo a img{
  transition: transform 0.5s ease ;
}  
.logo a img:hover{
  transform: scale(1.5);
}

     @media (max-width: 1024px) {
    .contact-section {
      
        flex-direction: column;
        align-items: center;
        margin: 150px 20px;
    }
    .contact-info,
    .contact-form {
        width: 100%;
    }
}

@media (max-width: 767px) {
    .contact-section {
        margin: 150px 10px;
    }

    .contact-info,
    .contact-form {
        width: 80%;
        
    }

    .contact-info div {
        flex-direction: column;
        align-items: flex-start;
    }
}
@media (max-width: 1000px) {
          form .me-2{
            margin-left: 32px;
          }
        }

    </style>
</head>

<body>


      <!-- Navbar -->
      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="Home.html"><img src="APPLE LOGO.png" alt="Apple Logo" width="60px" style="border-radius: 40%; filter:contrast(100%)"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-4">
                <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
              </li>
              <li class="nav-item dropdown px-4">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Iphone.html">Iphones</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Mac.html">MacBook</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Accessories.html">Accessories</a></li>
                </ul>
              </li>
              <li class="nav-item px-4">
                <a class="nav-link active" href="About.html">About</a>
              </li>
              
              <li class="nav-item px-4">
                <a class="nav-link active" href="Contact us.html" >Contact Us</a>
              </li>
            </ul>
            
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
          </div>
        </div>
      </nav> -->
      <?php include('user_navbar.php'); ?>


   
    <div class="contact-section">
        <div class="contact-info">
            <div><b>Main HeadQuater:</b></div>
            <div><i class="fas fa-map-marker-alt"></i>USA, NewJersey1 Infinite Loop, Cupertino, California.</div>
            <div><i class="fas fa-phone"></i>+090 078601</div>
            <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
            <div><i class="fas fa-clock"></i><b>Branch 1:</b><br> 20 Providence Place
                Providence, RI 02903<br>
                Cell NO: (401) 533-9400</div>
            <div><i class="fas fa-clock"></i><b>Branch 2:</b><br> 1229 Wisconsin Avenue NW
                Washington, DC 20007 <br>
                Cell NO: (202) 572-1460
                </div>
            <div><i class="fas fa-clock"></i><b>For Complain Email us at:</b> CustomerSupport@gmail.com</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
            </form>
        </div>
    </div>
    <!--contact section end-->
    <footer class="text-center text-lg-start text-white" style="background-color: #929fba">
   
        <div class="container p-4 pb-0">
          
          <section class="">
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                  APPLE
                </h6>
                <p>
                  Apple is a leading technology company that designs, develops and sells electronics. It is known for its innovative products, such as the iPhone, iPad, Mac, and Apple Watch.
                </p>
              </div>
              <!-- Grid column -->
              <hr class="w-100 clearfix d-md-none" />
              <!-- Grid column -->
              <div class="col-md-2  mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"  style="text-decoration: wavy underline;">Products</h6>
                <p>
                  <a href="Mac.html" class="text-white">MacBooks</a>
                </p>
                <p>
                  <a href="Iphone.html" class="text-white">Iphone</a>
                </p>
                <p>
                  <a href="Accessories.html" class="text-white">Accessories</a>
                </p>
              </div>
              <!-- Grid column -->
              <hr class="w-100 clearfix d-md-none" />
              
    
              <!-- Grid column -->
              <div class="col-md-4  mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold" style="text-decoration: wavy underline;">Address</h6>
                <p>1 Infinite Loop, Cupertino, California.</p>
                <p> For more Information </p>
                <p>Call us at +1 (408) 996–1010</p>
              </div>
              <!-- Grid column -->
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mt-3 logo">
                <h6 class="text-uppercase mb-4 font-weight-bold" style="text-decoration: wavy underline;">Follow us</h6>
                <!-- Facebook -->
                <a  href="https://www.facebook.com/apple/" target="_blank"><img src="fb.png" alt="fblogo" width="30" height="25"></a>
                <!-- Twitter -->
                <a  href="https://twitter.com/apple?lang=en" target="_blank"><img src="Twiiter.png" alt="twitter logo" width="40" height="40"></a>
    
                <!-- Google -->
                <a  href="https://www.apple.com/" target="_blank"><img src="Google.png" alt="google logo" width="30" height="30"></a>
                  <!-- Instagram -->
                  <a  href="https://www.instagram.com/apple/?hl=en" target="_blank"><img src="Insta.png" alt="Insta logo" width="30" height="30"></a>
                <!-- Linkedin -->
                <a  href="https://www.linkedin.com/company/apple " target="_blank"><img src="Linked In.png" alt="Linked in logo" width="40" height="40"></a>
              </div>
            </div>
          </section>
         
        </div>
        
        <div class="text-center p-3" style="background-color: rgb(43, 42, 42)">
          Copyright © 2023 Apple Inc. All rights reserved.
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
