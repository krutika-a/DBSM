<?php
error_reporting(0);
$con=mysqli_connect("localhost","krutika","K.a.1195");
if(!$con)
{
    echo "Database is Not connected";
    echo mysqli_connect_error($con);

}
 else 
 {
     echo "database is connected";
 }
echo "<br>";
 $dbsm=mysqli_query($con,"CREATE DATABASE IF NOT  EXISTS restaurants ");

 if(!$dbsm)
{
    echo "database is not created";
    mysqli_error($con);
    exit;
}
else
{
     echo "database is  created";
     $con=mysqli_connect("localhost","krutika","K.a.1195","restaurants");
     
     $query= "CREATE TABLE IF NOT EXISTS customers (`name` varchar(20),`email` varchar(20),`mobile no` varchar(10))";
     $table=mysqli_query($con,$query);
     
      echo "<br>";if ($table)
     {
         echo "table is created";
     }
     else
     {
        echo "table is not created";
        echo mysqli_error($con);
     }
}
     echo "<br>";
     $insertQuery ="INSERT INTO customers(`name`, `email`, `mobile no`) values(\"mohit\", 'mohit@test.com', \"7032561496\")";    
 
    $error=mysqli_query($con,$insertQuery);
     if ($error)
     {
         echo "data is inserted";
     }
     else
     {
        echo "data is not inserted";
        echo mysqli_error($con);
     }


     echo "<br>";
     $insertQuery ="INSERT INTO Menu(`id`, `dish`, `price`) values(\"1\", 'pizza', \"300rs\")";    
 
     $error=mysqli_query($con,$insertQuery);
      if ($error)
      {
          echo "data is inserted in menu";
      }
      else
      {
         echo "data is not inserted  in menu";
         echo mysqli_error($con);
      }
 
     

?>