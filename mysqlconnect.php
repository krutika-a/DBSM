

<?php

$con=mysqli_connect("localhost","krutika","K.a.1195");//database connect
if($con)
{
    echo "Database is connected";

}
else
{

    echo "Database is not connected";
}
/*we can write if database is not connected then do not go to program then we can use ! & run first  else condition lick below
*/
?>

<?php

$set=mysqli_connect("localhost","krutika","K.a.1195");
 if(!$set)
 {
     echo "Not connected";
     exit();//if not connectd then exit from here 
    
 }
 else{
    echo "connected";
 }
?>