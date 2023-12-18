
<head>
<link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    body {
            font-family: 'Roboto Slab', serif;
            background: url("bg.png") repeat center;
        }
        .navbar2{
              z-index: 1000;
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

        #navbarSupportedContent ul li a:hover {
            padding-bottom: 2px;
            border-bottom: 2px solid whitesmoke;
            border-top: 1px solid gainsboro;
            border-radius: 10%;
            color: #687fb1;
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


<nav class="navbar navbar2 navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="Home.php"><img src="APPLE LOGO.png" alt="Apple Logo" width="60px" style="border-radius: 40%; filter:contrast(100%)"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-4">
                <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
              </li>
              <li class="nav-item dropdown px-4">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                  <li><a class="dropdown-item" href="Iphone.php">Iphones</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Mac.php">MacBook</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="Accessories.php">Accessories</a></li>
                </ul>
              </li>
              <li class="nav-item px-4">
                <a class="nav-link active" href="About.php">About</a>
              </li>
              
              <li class="nav-item px-4">
                <a class="nav-link active" href="Contact us.php" >Contact Us</a>
              </li>
<!-- login button -->
<li class="nav-item px-4">
  <a class="nav-link active" href="login.php" >Login </a>
</li>

            </ul>
            
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
          </div>
        </div>
      </nav>