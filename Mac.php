<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Macbook</title>
    
    <link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <style>
     *{
      margin: 0;
      padding: 0;
     }
    body {
        background: url(bg-mac.jpg);
        font-family: 'Roboto Slab', serif;
    }

    .collapse {
        margin-left: 17%;
    }

    .collapse ul li {
        margin-left: 10px;
    }

    #navbarSupportedContent ul li a:hover {
        padding-bottom: 2px;
        border-bottom: 2px solid gainsboro;
        border-top: 1px solid gainsboro;
        border-radius: 10%;
        color: #687fb1;
    }

    .navbar .container-fluid form button:hover {
        background-color: rgb(129, 117, 117);
        color: rgb(158, 145, 128);
    }
    #carouselExampleControls{
          
          margin-top: 100px;
          margin-bottom: 40px;
    }
    #carouselExampleControls div .carousel-item img{
      height: 80vh; 
    }
    /* Card Styles */

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .col-md-4 {
        flex-basis: 50%; /* Two cards in a row for medium-sized screens */
    }

    .card {
        transition: transform 0.5s ease, box-shadow 0.3s ease;
        margin: 0 auto;
        width: 80%; /* Adjust the width of the card as needed */
    }

    .card:hover {
        box-shadow: 0px 0px 29px burlywood;
        border-color: burlywood;
        transform: scale(1.05);
    }

    .card-title {
        text-align: center;
    }

    .des,
    .des2,
    .des3,
    .des4,
    .des5,
    .des6 {
        display: none;
    }

    .logo a img {
        transition: transform 0.5s ease;
    }

    .logo a img:hover {
        transform: scale(1.5);
    }
    .product-card {
        
            max-width: 300px;
            margin: 20px;
            background-color: #ffffff;
            padding: 0px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .product-card h3 {
            text-align: center;
            color: #007bff;
        }

        .product-card p {
            margin-bottom: 10px;
        }

        @media (max-width: 992px) {
          *{
            margin: 0;
            padding: 0;
          }
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 0 auto !important; /* Center the card horizontally */
        
    }
    
    .col-md-4 {
        flex-basis: 100% !important; /* One card in a row with 100% width for small screens */
        width: 100%;
        max-width: 100% !important;
        margin: 0 auto !important; /* Center the card horizontally */
        
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
}


    

    @media (max-width: 1000px) {
        form .me-2 {
            margin-left: 32px;
        }
    }






      
 
    </style>
  </head>

  <body>
  <div class="container mt-5">
    <!-- Navbar -->
    <?php include('user_navbar.php'); ?>

    <h2 class="text-center" style="background-color: rgb(27, 36, 36); margin: 120px 80px 30px 80px; border-radius: 20%; font-size: 40px; font-weight: bold; color: gray; border-bottom: 8px solid rgb(211, 185, 151); border-top: 2px solid rgb(211, 185, 151); height: 10vh;">MacBooks</h2>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 80vh;">
                <video src="Macbook Air add.mp4" class="w-100" loop autoplay muted controls height="auto"></video>
            </div>
        </div>
    </div>

    <?php
    // Connect to the database
    $db = mysqli_connect("localhost", "root", "", "product");

    // Check connection
    if ($db) {
        // Fetch product data from the database
        $query = "SELECT * FROM productd";
        $result = mysqli_query($db, $query);

        // Display product cards
        echo '<div class="card-container">';
        $count = 0; // Variable to track the number of cards in the current row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['p_stock'] === '1') {
                echo '<div class="col-md-4 col-lg-4">
                        <div class="product-card">
                        <a href="Product Detail.php?product_id=' . $row['p_id'] . '" style="text-decoration: none;"><img src="uploads/' . $row['p_img'] . '" alt="' . $row['p_name'] . '" width="430" height="250"></a>
                            <div class="card-body" style="background: linear-gradient(45deg, rgb(216, 167, 167), silver); border-bottom-left-radius: 5%; border-bottom-right-radius: 5%;">
                            <h3 style="text-shadow: -2.5px -2.5px 0px bisque; padding-bottom: 5px; border-bottom: 3px dotted grey; border-bottom-left-radius: 30%; border-bottom-right-radius: 30%;">' . $row['p_name'] . '</h3>
                            <p>Price: $' . $row['p_price'] . '</p>
                            <p>Discount: ' . $row['p_disc'] . '%</p>
                            <!-- Add more product information as needed -->
                            </div>
                        </div>
                    </div>';
                $count++;
                // Check if 3 cards are displayed in the current row
                if ($count == 3) {
                    echo '</div><div class="card-container">';
                    $count = 0; // Reset the count for the next row
                }
            }
        }
        echo '</div>'; // Close the last card-container div

        // Close database connection
        mysqli_close($db);
    } else {
        echo "Database not Connected";
    }
    ?>
</div>



    






     



<footer class="text-center text-lg-start text-white" style="background-color: #929fba; margin-top: 30px;">
   
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