<?php
error_reporting(0);
print_r($_POST);
echo "<br>";

$con=mysqli_connect("localhost","krutika","K.a.1195","student");
if(!$con)
{
    echo "DB not connected";
    echo mysqli_connect_error($con);
}
else
{
    echo "connected";
}
echo "<br>";

echo $insertquery="INSERT INTO information (name,rollno,email,password) values ('".$_POST['name']."','".$_POST['rollno']."',
'".$_POST['email']."','".$_POST['password']."')";
echo "<br>";

echo $res=mysqli_query($con,$insertquery);
if (!res)
{
    echo "Data not inserted";
}
else{
    echo "Data inserted";
}
echo "<br>";


$query="SELECT * FROM student";
$res1=mysqli_query($con,$query); 
$data=mysqli_fetch_assoc($res1);


print_r($data);
$data=mysqli_connect_array($res1);

print_r($data);
if ($res1)
{
    echo "Data inserted";
}
else
{
    echo "Data not inserted";
    echo mysquli_error($con);
}


?>



<form method="post" action="">
Name:<input type="text" name="name" />
Roll no:<input type="text" name="rollno"/>
email:<input type="text" name="email"/>
Password:<input type="password" name="password"/><br><br>
<input type="Submit" name="submit" value="submit"/>
</form>


