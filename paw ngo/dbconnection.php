<?php
// $servername='localhost';
// $username='root';
// $password='';
// $dbname="puppy_paw";
$conn=mysqli_connect('localhost','root','',"puppy_paw");
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
$Name =  $_REQUEST['Name'];
        $Email = $_REQUEST['Email'];
        $Amount =  $_REQUEST['Amount'];
        $Phone = $_REQUEST['Phone'];

        $sql = "INSERT INTO college  VALUES ('$Name', 
            '$Email','$Amount','$Phone')";
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 
      
                echo nl2br("\n$Name\n $Email\n "
                    . "$Amount\n $Phone\n");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
              
            // Close connection
            mysqli_close($conn);
if(!$conn){
   die('Could not Connect My Sql:'.mysql_error());
   }
}
?>
