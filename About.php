<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us - iPhone Website</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('about-bg.jpg') center repeat;
            font-family: 'Roboto Slab', serif;
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


        .iphone-screen {


            margin-top: 100px;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
             font-family: 'Roboto Slab', serif;
             
           
        }

        .content {
            text-align: center;
            background: linear-gradient(90deg, rgb(101, 206, 214), rgb(103, 133, 235));
            border-bottom: 10px solid silver;
            border-right: 10px solid silver;
            border-bottom-left-radius: 20%;
            border-bottom-right-radius: 20%;
            border-top-right-radius: 10%;
            border-top-left-radius: 10%;
            height: 96%;

        }

        .bar {
            background-color: #007bff;
            color: #fff;
            border-top-right-radius: 160rem;
            border-top-left-radius: 160rem;
            padding: 10px;
            text-align: center;
            
        }

        .content-inner {
            padding: 20px;
            max-width: 70vw;
            height: auto;
            margin: 0 auto;
            
        }
.logo a img{
  transition: transform 0.5s ease ;
}  
.logo a img:hover{
  transform: scale(1.5);
}
        @media (max-width: 1000px) {
    .iphone-screen{
      height: 120vh;
    }
    
    form .me-2{
            margin-left: 32px;
    }
        
    
    
  }
  @media (max-width: 920px) {
    .iphone-screen{
      height: 210vh;
    }
    .img{
      margin-bottom: -30px;
    }
    
  }
  
    </style>
</head>

<body>
  <!-- Navbar -->
  <?php include('user_navbar.php'); ?>

<div class="iphone-screen  container-fluid">
    <div class="content">
        <div class="bar ">
            <h5 style="font-weight: bolder; font-size: 36px;">About Us</h5>
        </div>
        <div class="content-inner">
            <h1 style="font-weight: bold;">Welcome to the Apple</h1>
            <p>Your ultimate destination for everything iPhone!</p>
            <hr>
            <p>Apple was founded in 1976 by Steve Jobs and Steve Wozniak. The company's first product, the Apple I, was a personal computer that was popular among hobbyists and tech enthusiasts. In 1977, Apple released the Apple II, which was the first widely successful personal computer. The Apple II helped to establish Apple as a major player in the computer industry.</p>
            <p>Today, Apple is one of the most valuable companies in the world. The company's products are known for their innovative design, user-friendly features, and high quality. Apple is also known for its strong brand identity and its loyal customer base.</p>
            <p>Explore our website, stay informed, and join our community of iPhone enthusiasts. If you have any questions or suggestions, feel free to reach out to us.</p>
            <div style="display: flex; gap: 200px; flex-wrap: wrap; justify-content: center; ">
            <div ><img src="Founder.jpg" alt="" srcset="" height="120px" width="200px" style="border-radius: 40%; background-color: #929fba; ">
            <p><b>Founder of APPLE</b></p></div>
            <div class="img"><img src="CEO.jpg" alt="" srcset=""  height="120px" width="200px" style="border-radius: 40%; background-color: #929fba;">
            <p><b>CEO</b></p></div>
        </div>

        </div>
    </div>
</div>
<footer class="text-center text-lg-start text-white" style="background-color: #929fba; margin-top: 50px;">
   
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
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
