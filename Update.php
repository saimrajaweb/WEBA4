<?php
    
    $up = $_GET['upd'];

    $db = mysqli_connect("localhost", "root", "", "product");

    $row = mysqli_query($db, "SELECT * from productd where p_id='$up'");

    $singlerow = mysqli_fetch_assoc($row);

    
    $id = $singlerow['p_id'];
    
    
$name = isset($_POST['pname']) ? $_POST['pname'] : ''; 
$price = isset($_POST['Pprice']) ? $_POST['Pprice'] : '';
$code = isset($_POST['Pcode']) ? $_POST['Pcode'] : '';
$stock = isset($_POST['Pstock']) ? $_POST['Pstock'] : '';
$disc = isset($_POST['Pdisc']) ? $_POST['Pdisc'] : '';
$size = isset($_POST['Psize']) ? $_POST['Psize'] : '';
$det = isset($_POST['Pdet']) ? $_POST['Pdet'] : '';
$img = isset($_FILES['Pimage']['name']) ? $_FILES['Pimage']['name'] : '';


    if (!empty($img)) {
        $target_dir = "uploads/";
        $path = $target_dir . basename($_FILES["Pimage"]["name"]);
        move_uploaded_file($_FILES["Pimage"]["tmp_name"], $path);
        
    } else {
        
        $img = $singlerow['p_img'];
    }

    if (isset($_POST['SEND'])) {

if($stock=='Y'){
    $stock=1;

}else{
    $stock=0;
}

        
        $query4 = "UPDATE productd SET p_name='$name', p_price='$price', p_code='$code', p_stock='$stock', p_disc='$disc', p_size='$size', p_detail='$det', p_img='$img' WHERE p_id='$up'";
        $update = mysqli_query($db, $query4);
        if ($update) {            
            header("Location: view_product.php" );
            echo "Record updated";
        } else {
            echo "Record not updated";
        }
    }
    ?>
<html>
    <head>
    <title>Add new Product</title>
    <style>
    body {
        font-family: 'Roboto Slab', sans-serif;
        background-color: #899da1;
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

    #su {
        background-color: #007bff;
        color: #ffffff;
        cursor: pointer;
        width: 30%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px auto 0;
        text-align: center;
        font-size: 17px;
        font-weight: bolder;
    }

    #su:hover {
        background-color: #0056b3;
    }
</style>
    </head>
<body>

<?php include('user_navbar.php'); ?>
<?php include('admin_navbar.php'); ?>
    <h2 class="text-center " style="background-color: rgb(27, 36, 36); margin: 0px 80px 30px 80px; border-radius: 20%; font-size: 40px; font-weight: bold;  color: gray; border-bottom: 8px solid rgb(211, 185, 151); border-top: 2px solid rgb(211, 185, 151); height: 8vh; text-align: center;">UPDATE PRODUCT</h2>
    <form action="" method="POST" enctype="multipart/form-data" id="fm">
        Product ID: <input type="number" name="pid" value="<?php echo $id; ?>" ><br>
        Product Name: <input type="text" name="pname" value="<?php echo $singlerow['p_name']; ?>" id="pname"><br>
        Product Price: <input type="text" name="Pprice" value="<?php echo $singlerow['p_price']; ?>" id="Pprice"><br>
        Product Code: <input type="text" name="Pcode" value="<?php echo $singlerow['p_code']; ?>" id="Pcode"><br>
        Is Product available in Stock?<br>
        <select name="Pstock" id="pstock">
            <option value="Y" <?php if ($singlerow['p_stock'] == 'Y') echo 'selected'; ?>>Y</option>
            <option value="N" <?php if ($singlerow['p_stock'] == 'N') echo 'selected'; ?>>N</option>
        </select><br>
        Product Discount: <input type="number" name="Pdisc" value="<?php echo $singlerow['p_disc']; ?>" id="Pdisc"><br>
        Product Size: <select name="Psize" id="Psize">
            <option value="Small" <?php if ($singlerow['p_size'] == 'Small') echo 'selected'; ?>>Small</option>
            <option value="Medium" <?php if ($singlerow['p_size'] == 'Medium') echo 'selected'; ?>>Medium</option>
            <option value="Large" <?php if ($singlerow['p_size'] == 'Large') echo 'selected'; ?>>Large</option>
            <option value="Extra Large" <?php if ($singlerow['p_size'] == 'Extra Large') echo 'selected'; ?>>Extra Large</option>
        </select><br>
        Product Details: <input type="text" name="Pdet" value="<?php echo $singlerow['p_detail']; ?>"><br>
        
        Product Image: <input type="file" name="Pimage" ><br>
        
        <?php if (!empty($singlerow['p_img'])) : ?>
    <img src="uploads/<?php echo $singlerow['p_img']; ?>"width="200" height="120">
<?php endif; ?> <br>
            
    
   

        
        <input type="submit" name="SEND" value="Save" id="su">
    </form>

    <?php
    if ($db) {
        echo "Database Connected";
    } else {
        echo "Database not Connected";
    }


    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>