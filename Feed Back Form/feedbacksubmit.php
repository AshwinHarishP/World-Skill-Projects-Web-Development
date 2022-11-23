<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style>
      input[type=submit]{
       background-color: #F6F6C9;
       border-radius: 8px;
       color: black;
       padding: 8px 20px;
       margin: 4px 2px;
       font-size: large;
 }
     </style>
   </head>
   <body>
     <form class="" action="display.php" method="post">
 
       <input type="submit" name="display" value="View Response">
 
     </form>
   </body>
 </html>  
<?php
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','hotel');
    if(! $con)
    dis('Could not connect'.mysqli_connect_error());
  echo "Connected Succesfully";
  if (isset($_POST['Customer_name']) && isset($_POST['rating1']) && isset($_POST['rating2']) && isset($_POST['rating3']) && isset($_POST['rating4'])) {

      $Customer_name=$_POST['Customer_name'];
      $rating1=$_POST['rating1'];
      $rating2=$_POST['rating2'];
      $rating3=$_POST['rating3'];
      $rating4=$_POST['rating4'];
      $sql = "INSERT INTO feed(Customer_name,rating1,rating2,rating3,rating4) values ('$customer_name','$rating1','$rating2','$rating3','$rating4')";
      if(mysqli_query($con,$sql)){
      echo "Request Submitted";
    }
      else
      echo "error";

  }

}
mysqli_close($con);

 ?>
 