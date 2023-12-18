<html>
<body>
<?php
 
    $mydel = $_GET['de'];
    $db = mysqli_connect("localhost","root","","product");
    
        if ($db) {
            echo "Database Connected";
        } else {
            echo "Database not Connected";
        }
    $query3 ="DELETE from productd where p_id = '$mydel'";
        $del = mysqli_query($db , $query3);
        if($del){
            echo"row deleted";
        }
        else {
            echo"row is not deleted ";
        }
        header("location: view_product.php");
?>
</body>
</html>    