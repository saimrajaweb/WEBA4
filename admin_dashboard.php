<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard</title>
    <link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<style>
    

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
#carouselExample{
    position: relative !important;
    z-index: -6 !important;
}
.card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
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
          form .me-2{
            margin-left: 32px;
          }
        }

</style>   
</head>
<body>

<?php include('user_navbar.php'); ?>

<?php include('admin_navbar.php'); ?>

<div id="carouselExample" class="carousel slide">
      <div class="carousel-inner ">
       <div class="carousel-item active" style="height: 80vh;  margin-top: 190px;">
          <video src="iPhone 12 add.mp4" class="w-100"  loop autoplay muted  style="height: auto;"></video>
        </div>
      </div>
      </div>

      <h2 class="text-center " style="background-color: rgb(27, 36, 36); margin: 100px 80px 30px 80px; border-radius: 20%; font-size: 40px; font-weight: bold;  color: gray; border-bottom: 8px solid rgb(211, 185, 151); border-top: 2px solid rgb(211, 185, 151); height: 10vh;">YOUR PRODUCTS</h2>
      <?php
    // Connect to the database
    $db = mysqli_connect("localhost", "root", "", "product");

    // Check connection
    if ($db) {
        // Fetch product data from the database
        $query = "SELECT * FROM productd WHERE p_stock = '1' ORDER BY p_id DESC LIMIT 5";
    
        $result = mysqli_query($db, $query);

        // Display product cards
        echo '<div class="card-container">';
        $count = 0; // Variable to track the number of cards in the current row
        while ($row = mysqli_fetch_assoc($result)) {
          


            if ($row['p_stock'] === '1') {
                echo '<div class="col-md-4 col-lg-4">
                        <div class="product-card">
                        
                        <img src="uploads/' . $row['p_img'] . '" alt="' . $row['p_name'] . '" width="430" height="250">
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
<?php include('footer.php'); ?>
</body>
</html>