<?php
        $host="localhost";
        $user="root";
        $password="";
        $db_name="first_web";
        $con=mysqli_connect($host,$user,$password,$db_name);
        if(!($con))
        {
            echo "<br>Connection can not establish<br>";
            die();
        }
        else
        {
            echo "<br> Connection established successfully<br>";
        }
if(isset($_POST['Insert']))
{
        $User_id=$_POST["id"];
        $User_Name=$_POST["Name"];
        $User_Dob=$_POST["DOB"];
        $State=$_POST["State"];
        $Gender=$_POST["Gender"];


        $sql="insert into registration_form_info(User_id,User_Name,Date_of_Birth,State,Gender)
        values('$User_id','$User_Name','$User_Dob','$State','$Gender')";

       $result=mysqli_query($con,$sql);
       if(!$result)
       {
        echo "<br>Data not inserted<br><br>";
       }
       else{
        echo "<br>Data inserted sucessfully<br><br>";
       }
}

if(isset($_POST['Delete']))
{
        $User_id=$_POST["id"];
        $User_Name=$_POST["Name"];
        $User_Dob=$_POST["DOB"];
        $State=$_POST["State"];
        $Gender=$_POST["Gender"];


        $sql="delete from registration_form_info where User_id='$User_id'";

       $result=mysqli_query($con,$sql);
       if(!$result)
       {
        echo "<br>Data not Deleted<br>";
       }
       else{
        echo "<br>Data Deleted sucessfully<br><br>";
       }
}

if(isset($_POST['Update']))
{
    $User_id=$_POST["id"];
    $User_Name=$_POST["Name"];
    $User_Dob=$_POST["DOB"];
    $State=$_POST["State"];
    $Gender=$_POST["Gender"];

    $sql="update registration_form_info set State='$State' where User_id='$User_id'";

    $result=mysqli_query($con,$sql);
    if(!$result)
    {
     echo "<br>Data not Updated<br>";
    }
    else{
     echo "<br>Data Updated sucessfully<br><br>";
    }

}

if(isset($_POST['Reset']))
{
    $User_id=$_POST["id"];
    $User_Name=$_POST["Name"];
    $User_Dob=$_POST["DOB"];
    $State=$_POST["State"];
    $Gender=$_POST["Gender"];
    
    $User_id=" ";
    $User_Name=" ";
    $User_Dob=" ";
    $State=" ";
    $Gender=" ";
}

if(isset($_POST['Show']))
$con=mysqli_connect("localhost","root","","first_web");
$sql="select * from registration_form_info";

$result=mysqli_query($con,$sql);
echo "<table border='2'>";
echo "<tr><th>Userid</th> <th>UserName</th><th>DOB</th><th>State</th><th>Gender</th>";
while($contact=mysqli_fetch_array($result))
{
    echo"<tr><td>";
    echo $contact["User_id"];
    echo"</td><td>";    
    echo $contact[ "User_Name"];
    echo"</td><td>";
    echo $contact["User_Dob"];
    echo"</td><td>";
    echo $contact["State"];
    echo"</td><td>";
    echo $contact["Gender"];
    echo"</td></tr>";
}
    echo"</table>";
?>

