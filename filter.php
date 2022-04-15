<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="viewstyle.css">
 <title>Document</title>
</head>
<body>
    <div class="navbar">
            <ul>
                <li><a href="./view.php">Study Materials</a></li>
                <li><a href="./upload.php">Upload</a></li>
                <?php 
                 if($_SESSION['email']!=""){
                   ?>
                   <li><a href="./logout.php">logout</a></li>
                   <?php
                 }else{
                   ?>
                    <li><a href="./login.php">login</a></li>
                   <?php
                 }
                
                ?>
                <!-- <input type="text" class="search" name="search" id="search" placeholder="search here"> -->
            </ul>
        </div>
 <?php

 include "connection.php";
 if(isset($_POST)){
   
   $b=$_POST['branch'];
    unset($_POST['branch']);
  //  echo $b;
   $result = "";
   foreach ($b as $value) {
    //  echo $value."<br>";
     $result = mysqli_query($conn,"SELECT * FROM material WHERE mbranch = '$value'");
     if($result){
    // echo "ok";
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <ul class="material">
      <li><p class="text-center"> <b> Material name: </b><?= $row['mname'] ?></p></li>
         <li><p class="text-center"> <b>Material year:</b> <?= $row['myear'] ?></p></li>
         <li><p class="text-center"> <b>Material branch:</b> <?= $row['mbranch'] ?></p></li>
         <li><p class="text-center"> <b>Material semester:</b> <?= $row['msem'] ?></p></li>
         <li><p class="text-center"> <b>Material uploader:</b> <?= $row['uploader'] ?></p></li>
</ul>
         <?php
    }
   }else{
     echo "not ok".mysqli_error($conn);
   }
 
   }

   
 }
  
 ?>

  <form action="filter.php" method="post">

 <h2>filter the Material</h2> 
   <input type="checkbox" name="branch[]" value="cse" id="">cse</input>
  
   <br>
   <input type="checkbox" name="branch[]" value="ece" id="">ece</input>
   
   <br>
   <input type="checkbox" name="branch[]" value="eee" id="">eee</input>
   
   <br>
   <input type="checkbox" name="branch[]" value="civil" id="">civil</input>
   
   <br>
   <input type="submit">

  </form>
  
</body>
</html>