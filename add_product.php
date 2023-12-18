<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <title>Add new Product</title>
    <style>
    body {
        font-family: 'Roboto Slab', sans-serif;
        background-color: #f8f9fa;
        padding-top: 150px; 
        padding-bottom: 20px;
    }

    #fm {
      
      max-width: 600px;
        margin: 0 auto; /* Add top margin to clear the fixed navbars */
        background-color: bisque;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #007bff;
    }

    input,
    select {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid white;
        border-radius: 4px;
        background-color: silver;
    }
    input:focus{
      background-color: #c7f6ff;
    }
    select:focus{
      background-color: #c7f6ff;
    }

    #SU {
        background-color: #007bff;
        color: #ffffff;
        cursor: pointer;
        width: 30%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px auto 0;
        text-align: center;
    }

    #SU:hover {
        background-color: #0056b3;
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
</style>
</head>
<body>


<?php include('user_navbar.php'); ?>



<?php include('admin_navbar.php'); ?>





<h2 class="text-center " style="background-color: rgb(27, 36, 36); margin: 100px 80px 30px 80px; border-radius: 20%; font-size: 40px; font-weight: bold;  color: gray; border-bottom: 8px solid rgb(211, 185, 151); border-top: 2px solid rgb(211, 185, 151); height: 10vh;">ADD PRODUCT</h2>




    <form action="" method="POST" enctype="multipart/form-data" id="fm">
        Product ID: <input type="number" name="pid" id="pid"><br>
        Product Name: <input type="text" name="pname" id="pname"><br>
        Product Price: <input type="text" name="Pprice" id="Pprice"><br>
        Product Code: <input type="text" name="Pcode" id="Pcode"><br>
        Is Product available in Stock?<br>
        <select name="Pstock" id="Pstock">
            <option value="Y" selected>Y</option>
            <option value="N">N</option>
        </select><br>
        Product Discount: <input type="number" name="Pdisc" id="Pdisc"><br>
        Product Size: <select name="Psize" id="Psize">
            <option value="Small" selected>Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
            <option value="Extra Large">Extra Large</option>
        </select><br>
        Product Details: <input type="text" name="Pdet" id="Pdet"><br>
        Product Image: <input type="file" name="Pimage" id="Pimage"><br>
        <input type="submit" name="SEND" value="Save" id="SU">
        
    </form>

    <?php
    

    if (isset($_POST['SEND'])) {
        $id = $_POST['pid'];
        $name = $_POST['pname'];
        $price = $_POST['Pprice'];
        $code = $_POST['Pcode'];
        // $stock = $_POST['Pstock'];
        $stock = ($_POST['Pstock'] == 'Y') ? true : false;
        $disc = $_POST['Pdisc'];
        $size = $_POST['Psize'];
        $det = $_POST['Pdet'];
        $img = $_FILES['Pimage']['name'];
        
    
        
        $path="uploads/".basename($img);
        if(move_uploaded_file($_FILES['Pimage']['tmp_name'], $path)){
            echo"FILE UPLOADED";
        }
        else{
            echo"FILE NOT UPLOADED";
        }
    

    $db = mysqli_connect("localhost", "root", "", "product");

    if ($db) {
        echo "Database Connected";
    } else {
        echo "Database not Connected";
    }

    $query = "INSERT INTO productd (p_id, p_name, p_price, p_code, p_stock, p_disc, p_size, p_detail, p_img) VALUES ('$id', '$name', '$price', '$code', '$stock', '$disc', '$size', '$det', '$img')";

    $ins = mysqli_query($db, $query);

    if ($ins) {
        echo "Row inserted";
    } else {
        echo "Row not inserted";
    }
  }

if(isset($_POST['update'])){


  $id = $_POST['productid'];
  $name = $_POST['productname'];
  $price = $_POST['productprice'];
  $code = $_POST['productcode'];
  $stock = $_POST['productstock'];
  $discount = $_POST['productdiscount'];
  $sizes = $_POST['productsizes'];
  $details = $_POST['productdetails'];

  $image_name = $_FILES['productimage']['name'];
  $image_tmp = $_FILES['productimage']['tmp_name'];
  $image_folder = "uploads/"; 

  move_uploaded_file($image_tmp, $image_folder . $image_name);

  $update_query = "UPDATE laptop SET 
                   name='$name', price='$price', code='$code', 
                   stock='$stock', discount='$discount', sizes='$sizes', details='$details', image='$image_name' 
                   WHERE id='$id'";

  if(mysqli_query($con, $update_query)){
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($con);
  }

} elseif(isset($_POST['delete'])){
  $id = $_POST['productid'];

  $delete_query = "DELETE FROM laptop WHERE id='$id'";
  if(mysqli_query($con, $delete_query)){
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($con);
  }
}


?>
<?php include('footer.php'); ?>
</body>
</html>