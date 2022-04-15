<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
                font-family: Arial, Helvetica, sans-serif;
            }
            
            * {
                box-sizing: border-box;
            }
            
            .navbar {
                background-color: #000;
                border-radius: 9px;
            }
            
            .navbar ul {
                overflow: auto;
                padding-top: 10px;
                padding-left: 85px;
                padding-bottom: 6px;
            }
            
            .navbar li a:hover {
                color: #ccc;
            }
            
            .navbar li {
                list-style: none;
                float: left;
                padding-left: 175px;
                font-size: 25px;
            }
            
            .search {
                float: right;
            }
            
            .navbar input {
                border-radius: 7px;
                padding-right: 29px;
                margin-right: 118px;
                padding-top: 7px;
                padding-bottom: 5px;
            }
            
            * {
                box-sizing: border-box;
            }
            
            .navbar li a {
                text-decoration: none;
                margin: 124px;
                color:#fff;
            }
        }
        img {
            margin: auto;
            display: block;
        }
        h3 {
            margin: 0px;
            text-align: center;
        }
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px soli d #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=email] {
            width: 100%;
            padding: 12px;
            border: 1px soli d #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=password] {
            width: 100%;
            padding: 12px;
            border: 1px soli d #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=submit] {
            background-color: #1ba94c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 255px;
            px;
        }
        h4 {
            margin: 0px;
        }
        input[type=submit]:hover {
            background-color: #027a36;
        }
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            /* padding-left: 500px; */
            
            margin: auto;
        }
        .cont {
            margin: auto;
        }
        .cont1 {
            background-color: #f2f2f2;
            height: 100vh;
            margin: auto;
            padding-left: 420px;
            padding-right: 420px;
        }
        </style>
</head>

<body>
      <?php

      include "connection.php";
 if($_POST){
     $sname = $_POST['fname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $dept = $_POST['dept'];
     // echo $sname;
     // echo $email;
     // echo $password;
     // echo $dept;
      $ins = "insert into register(name,Email,password,department) values('$sname','$email','$password','$dept')";
    
    if(mysqli_query($conn,$ins)){
     echo "register  successful";
     header("Location:login.php");
    }else{
     echo "failed to register".mysqli_error($conn);
    }
    }


    //inserting the data into database

   

  ?>
        <div class="navbar">
            <ul>
                <li><a href="./view.php">Study Materials</a></li>
                <!-- <li><a href="./upload.php">Upload</a></li> -->
                <li><a href="./login.php">login</a></li>
                <!-- <input type="text" class="search" name="search" id="search" placeholder="search here"> -->
            </ul>
        </div>


        </div>
        <h3>Register as a uploader</h3>

        <div class="cont1">

            <div class="container">
                <form action="register.php" method="post">
                    <label for="fname">Full Name</label>
                    <!-- <h4>Full Name</h4> -->

                    <input type="text" id="fname" name="fname" placeholder="your name..">

                    <label for="email">Email id</label>
                    <!-- <h4>Email</h4> -->
                    <input type="email" id="email" name="email" placeholder="your email..">

                    <label for="dept">Department</label>
                    <!-- <h4>Department</h4> -->
                    <select id="dept" name="dept">
                     <option value="sel">Select</option>
                     <option value="cse">CSE</option>
                     <option value="ece">ECE</option>
                     <option value="civil">CIVIL</option>
                     <option value="mechanical">MECHANICAL</option>
                     <option value="aero">AERO</option>
                   </select>
                    <label for="password">Password</lable>
           
                     <input type="password" id="password" name="password" placeholder="enter password">
                     <input type="submit" value="Signup">
                 </form>
      </div>
    </div>
  
</body>

</html>