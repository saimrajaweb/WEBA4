
<?php include('user_navbar.php'); ?>

<?php include('admin_navbar.php'); ?>
<?php

$myid = $_GET['product_id'];

$db = mysqli_connect("localhost", "root", "", "product");

// Check connection
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}



    // Fetch product data from the database based on the product ID
    $query = "SELECT * FROM productd WHERE p_id = '$myid'";
    $result = mysqli_query($db, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        // Display product details
        
        echo '<h2 style="background-color: rgb(27, 36, 36); margin: 200px 80px 30px 80px; border-radius: 20%; font-size: 40px; font-weight: bold; color: gray; border-bottom: 8px solid rgb(211, 185, 151); border-top: 2px solid rgb(211, 185, 151); height: 10vh; text-align: center;">' . $row['p_name'] . '</h2>';
    echo '<center><img src="uploads/' . $row['p_img'] . '" alt="' . $row['p_name'] . '" width="460" height="250" style=""></center>';
    echo '<div class="cont">';
    echo '<p style="font-size: 20px; font-weight: bold;">Product Price:' . '</p>' .
    '<span style="display: inline-block; margin-left: 130px;">' . $row['p_price'] .  '$</span>' ;
    echo '<p style="font-size: 20px; font-weight: bold;">Discount:' . '</p>' .
    '<span style="display: inline-block; margin-left: 100px;">' . $row['p_disc'] .  '%</span>' ;
    echo '<p style="font-size: 20px; font-weight: bold;">Product Size:' . '</p>' .
    '<span style="display: inline-block; margin-left: 100px;">' . $row['p_size'] .  '</span>' ;
    echo '<p style="font-size: 20px; font-weight: bold;">Product Code:' . '</p>' .
    '<span style="display: inline-block; margin-left: 100px;">' . $row['p_code'] . '</span>' ;
    echo '<p style="font-size: 20px; font-weight: bold;">Description:' . '</p>' .
    '<span style="display: inline-block; margin-left: 100px;">' . $row['p_detail'] . '</span>' ;
    echo '<button type="button" class="btn btn-success" style="margin-top: 20px;">Add to Cart</button>';
    echo '<button type="button" class="btn btn-primary" style="margin-top: 20px;">Order Now</button>';
    echo '</div>';

    } else {
        echo 'Product not found.';
    }


// Close database connection
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <style>
        body{
            
            background: url("bg.png") repeat center;
        font-family: 'Roboto Slab', serif;
            
        }
        .cont{
            
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: left;
            margin-left: 40%;
            margin-top: 50px; 
            
        }
        @media (max-width: 1000px) {
            .cont {
                margin-left: 40% !important; /* Reset the left margin */
                margin-top: 20px; /* Adjust the top margin */
                 /* Add padding for better spacing */
            }
        }
    </style>
</head>
<body>
<?php include('footer.php'); ?>
</body>
</html>