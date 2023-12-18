<?php
    $db = mysqli_connect("localhost", "root", "", "product");

    if (!$db) {
        echo "Database not Connected";
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['myuser'];
        $pwd = $_POST['mypassword'];

        if ($username != "" && $pwd != "") {
            $query = "SELECT count(*) as usercount FROM login where user= '$username' AND passwrd = '$pwd'";
            $row = mysqli_query($db, $query);
            $row2 = mysqli_fetch_assoc($row);
            $result = $row2['usercount'];              
            if ($result > 0) {
                echo "<p style='color: green;'>Login Success</p>";
                header("Location: admin_dashboard.php");
                exit(0);
            } else {
                $message= "Invalid Username or Password";
            }  
            
        }
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body
        {
            height: 100vh;
            display: block;
            
        }
        .container1 {

            font-family: 'Arial', sans-serif;
            background-image: url('Login.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;

            
            
            
        }

        .cardi {
            border: 4px solid bisque;
            border-radius: 8px;
            width: 300px;
            height: 330px;
            padding: 20px;
            box-sizing: border-box;
            background-color: #b4f0fa !important;
           
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
           
        }

        .inputs {
            margin-top: 20px;
            
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 35px;
            margin-top: 5px
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="text"]{
            margin-top: 20px;
            
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 12px;
            margin-top: 65px
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        #sign {
            color: blue;
            text-decoration: none;
            font-weight: bolder;
            font-size: 18px;
        }

        #sign:hover {
            text-decoration: underline;
        }

        .error-message {
            color: #e74c3c;
            margin-top: 15px;
            text-align: center;
            position: absolute;
        }
        footer{
            background-color: #929fba !important;
            margin-top: 30px;
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
@media (max-width: 992px) {
            .container1 {
                height: auto;
                flex-direction: column;
                padding-top: 50px;
                margin-top: 85px;
            }
            #up{
                margin-top: 30px;
                margin-left: -1% !important; 
            }
            
            .cardi {
                width: 90%;
            }
        }
</style>
</head>

<body>
<?php include('user_navbar.php'); ?>

<div class="container1">

    <center>
        <div class="card cardi">
            <div class="inputs">
                <form action="#" method="post"> 
                    <div>
                    <input type="text" name="myuser" id="email" placeholder="User Name" required><br>
                    <input type="text" name="mypassword" id="password" placeholder="Password" required><br>                   
                    <?php                    
                      if (isset($message)) {
                          echo "<p class='error-message '>$message</p>";
                      } ?>
                    </div>
                    <input type="submit" name="submit" value="Login" style="font-weight: bolder; font-style: italic; font-size: 16px;" >
                </form>
                <p style="color:grey;"><a href="http://" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">forget password?</a></p>
            </div>
        </div>
    </center>
    <p id="up" style="text-align: center; margin-left: 200px; font-family: sans-serif; background-color: #b2bdbf; height: 100px; width: 200px; align-items: center; justify-content: center; display: flex; flex-direction: column;border-radius: 30%; color: #9e6641;">Don't have an account? <a href="signup.html" id="sign">Sign up</a></p>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
