
<?php
error_reporting(0);
$con=mysqli_connect("localhost","krutika","K.a.1195");//database connect
if(!$con)
{
    echo mysqli_connect_error();
    echo "Database not connected";
    exit();

}
else
{
     echo "Database is  connected";
echo "<br>";

}
// echo "Rest of program run";



// $res=mysqli_query($con,"CREATE DATABASE IF NOT EXISTS MAIN");

// if($res)
// {
//     ECHO "DATABASE CREATE SUCCESSFULLY";
//     $con=mysqli_connect("localhost","krutika","K.a.1195","MAIN");

// }
// else 
//     {
//         ECHO "DATABASE NOT CREATE SUCCESSFULLY";
//         echo mysqli_error($con);
//     }
   

    $teb=mysqli_query($con,"CREATE DATABASE IF NOT EXISTS institute");
    if($teb){
        echo  "DATABASE CREATE SUCCESSFULLY";
echo "<br>";

        $con=mysqli_connect("localhost","krutika","K.a.1195","institute");

        // 2nd create table
        $tableRes = mysqli_query($con, "CREATE TABLE IF NOT EXISTS student(`name` varchar(20), `email` varchar(50), `age` int(2));");

        if($tableRes){
            echo "table created<br>";
echo "<br>";

            //3rd insert datat tick```   tilde~~~~
            $insertQuery = "INSERT INTO student (`name`, `email`, `age`) values(\"Rahul\", 'rahul@test.com', 20)";    
            // echo $insertQuery;
            $insertRes = mysqli_query($con, $insertQuery);

            if($insertRes){
                echo "data inserted";
            }else{
                echo "data not inserted ";
                echo mysqli_error($con);

            }





        }else{
            echo mysqli_error($con);
            echo "table not created";

        }


    }
   else
    {
        ECHO "DATABASE NOT CREATE SUCCESSFULLY";
        echo mysqli_error($con);
    }
    ?>
    

