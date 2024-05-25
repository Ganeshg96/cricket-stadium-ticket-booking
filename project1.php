<!DOCTYPE html>
<html>
    <head>
    
    </head>
    <body>


<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    
    
    if(isset($_POST['submit'])){
        
        $conn = mysqli_connect('localhost','root','','data');
        if($conn){
            echo "connected"."<br/>";
        }
        else{
            echo "not connected";
        }
        $query = "use data;";
        $result = mysqli_query($conn,$query);
        /*if($result){
            echo "yes"."<br>";
        }else{
            echo "no";

        }*/
        $user_table = "CREATE TABLE user_details(name1 varchar(25),email varchar(25),phone varchar(10), amount varchar(40));";
        $result3 = mysqli_query($conn,$user_table);
        if($result3){
            echo "table created";
        }else{
            echo "not created";
        }

        $insert_details = "INSERT INTO user_details(name1,email,phone, amount)VALUES('$name','$email','$phone', $amount);";
        $result5 = mysqli_query($conn,$insert_details);
        /*if($result5){
            echo "inserted"."<br>";
        }else{
            echo "not";
        }*/
        

        /*$retrive = "select * from user_details;";
        $result6 = mysqli_query($conn, $retrive);
        $rowcheck = mysqli_num_rows($result6);
        if($rowcheck > 0){
            while($record = mysqli_fetch_assoc($result6)){
                echo $record['name1']." ".$record["email"]."<br>";
            }
        }*/
        
        /*$del = "DELETE FROM user_details;";
        $result4 = mysqli_query($conn,$del);
        if($result4){
            echo "deleted";

        }else{
            echo "not deleted";
        }*/

        

        
    }

    
        
?>
    <script>

        alert("Your details are submitted!!");
    </script>


</body>

   

</html>

