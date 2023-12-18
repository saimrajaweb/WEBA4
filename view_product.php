<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">


    <title>View Products</title>

    <style>
            body{
                background: radial-gradient(whitesmoke, bisque);
            }
        table{
            margin:0 auto; 
            padding: 5px;
        }
        table td{
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        table th{
            border: 1px solid black;
            padding: 5px;
            text-align: center;
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



<h2 class="text-center " style="background-color: rgb(27, 36, 36); margin: 200px 80px 30px 80px; border-radius: 20%; font-size: 40px; font-weight: bold;  color: gray; border-bottom: 8px solid rgb(211, 185, 151); border-top: 2px solid rgb(211, 185, 151); height: 10vh;">VIEW PRODUCTS</h2>


    <?php
$db = mysqli_connect("localhost", "root", "", "product");

if ($db) {
    echo "Database Connected";
} else {
    echo "Database not Connected";
}


$fetch = mysqli_query($db, 'SELECT * FROM productd');
   ?> 
<h2 style="text-align: center;">Product Records</h2>

 <table border='2' >
<tr>


<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Code</th>
<th>Stock</th>
<th>Discount</th>
<th>Sizes</th>
<th>Details</th>
<th>Image</th>
</tr>

<?php
while ($result = mysqli_fetch_assoc($fetch))
 {
    ?>
<tr  >

<td><?php echo $result['p_id']; ?></td>
<td><?php echo $result['p_name']; ?></td>
<td><?php echo $result['p_price']; ?></td>
<td><?php echo $result['p_code']; ?></td>
<td><?php echo ($result['p_stock'] == 1) ? 'Y' : 'N'; ?></td>
<td><?php echo $result['p_disc']; ?></td>
<td><?php echo $result['p_size']; ?></td>
<td><?php echo $result['p_detail']; ?></td>
<td><?php if ($result['p_img']) : ?>
    <img src="uploads/<?php echo $result['p_img']; ?>" width="70" height="50">
  <?php endif; ?><br></td>


<td ><a href="Update.php?upd=<?php echo $result['p_id'];  ?>" name="update">Update</a></td>
<td><a href="delete.php?de=<?php echo $result['p_id'];  ?>">Delete</a></td>


</tr>
<?php }  ?>

</table>


<?php include('footer.php'); ?>
</body>
</html>
