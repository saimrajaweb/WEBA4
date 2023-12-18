<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <style>
      
      body {
            font-family: 'Roboto Slab', serif;
            background: url("bg.png") repeat center;
        }
.nabar1{

  margin-top: 80px;
  z-index: 0 !important;
}
        .navbar-brand img {
            border-radius: 40%;
            filter: contrast(100%);
        }

        .navbar .container-fluid form button:hover {
            background-color: rgb(129, 117, 117);
            color: rgb(158, 145, 128);
        }
        
        .collapse {
            margin-left: 17%;

            
            
        }
        .collapse1 {
            margin-left: 27%;
            font-weight: bolder;
            
        }
        .bac{
          background-color: silver;
        }

        #navbarSupportedContent1 ul li a:hover {
            padding-bottom: 2px;
            border-bottom: 4px solid black;
            
            border-top: 1px solid gainsboro;
            border-radius: 30%;
            color: #687fb1;
        }

    </style>
</head>
<body>
  




   
      
   
    
    <nav class="navbar nabar1 navbar-expand-lg bac navbar-light fixed-top">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse collapse1 navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-4">
                <a class="nav-link active" aria-current="page" href="admin_dashboard.php">Home</a>
              </li>
              
              <li class="nav-item px-4">
                <a class="nav-link active" href="add_product.php">Add Product</a>
              </li>
              
              <li class="nav-item px-4">
                <a class="nav-link active" href="view_product.php" >View Product</a>
              </li>          
<!-- login button -->
<li class="nav-item px-4">
  <a class="nav-link active" href="Home.php" >Logout </a>
</li>

            </ul>
            
            
          </div>
        </div>
      </nav>

      </body>
</html>