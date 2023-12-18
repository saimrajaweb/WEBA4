
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iphone</title>
    <link rel="icon" href="APPLE LOGO.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    

    <style>
     
     body{

      background: url("bg-iphone.jpg") repeat center ;
      font-family: 'Roboto Slab', serif;
     }
.navbar2{
  position: fixed !important;
  width: 100%;
  z-index: 1001 !important;
}
       


        

#carouselExampleControls{
          
          margin-top: 100px;
          margin-bottom: 40px;
    }
    #carouselExampleControls div .carousel-item img{
      height: 80vh; 
    } 

.card-container {
        display: flex;
        justify-content: flex-start; /* Align items to the start of the flex container */
        
      }
      .card{
        transition: transform 0.5s ease, box-shadow 0.3s ease;
        margin: 0 auto;
    }
    .card:hover{
        box-shadow: 0px 0px 29px burlywood;
        border-color: burlywood;
        transform: scale(1.05);
    }
    .card-title{
      text-align: center;
    }



        @media (max-width: 768px) {
    .card-container {
      flex-direction: wrap;
      align-items: center;
      
    }
    .card-container ,.col-md-4{
      flex-basis: 100%;
    }

    
  }

  @media (max-width: 992px) {
    .card-container {
      flex-wrap: wrap;
      justify-content: center;
      
    }
    .card-container ,.col-md-4{
      flex-basis: 50%;
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

  <?php include('user_navbar.php'); ?>
    <h2 class="text-center " style="background-color: rgb(27, 36, 36); margin: 120px 80px 30px 80px; border-radius: 20%; font-size: 40px; font-weight: bold;  color: gray; border-bottom: 8px solid rgb(211, 185, 151); border-top: 2px solid rgb(211, 185, 151); height: 10vh;">Iphones</h2>
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner ">
       <div class="carousel-item active" style="height: 80vh; ">
          <video src="iPhone 12 add.mp4" class="w-100"  loop autoplay muted height="auto"></video>
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
                        <a href="Product Detail.php?product_id=' . $row['p_id'] . '" style="text-decoration: none;"><img src="uploads/' . $row['p_img'] . '" alt="' . $row['p_name'] . '" width="430" height="250"> </a>
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
<?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
