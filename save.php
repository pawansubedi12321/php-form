<?php
//include_once("Databaseconnection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
  
    $connection=mysqli_connect("localhost","root","","form");
    $query="INSERT INTO form (name,contact,email,password,confirmpassword)VALUES('$name','$contact','$email','$password','$confirmpassword')";
    $result=mysqli_query($connection,$query);
    if($result)
    {
        echo "signup succesfully completed!!";
    }
    else{
        echo "Error".$query."<br>".mysqli_error($connection);
    }
    $query1='select * from form';
    $result1=mysqli_query($connection,$query1);
    if($result1){
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>contact</th>
                <th>email</th>
                <!-- <th>Password</th>
                <th>confirmpassword</th> -->
            </tr>
            <?php
            while($ans=$result1->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $ans["id"]?></td>
                    <td><?php echo $ans["name"]?></td>
                    <td><?php echo $ans["contact"]?></td>
                    <td><?php echo $ans["email"]?></td>
                    <?php
            }?>
            
        </table>
        <?php
    }
    mysqli_close($connection);
}

?>