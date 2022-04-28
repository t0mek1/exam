<?php



require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();







 $servername = "localhost";

 $username = "root";

 $password = "";

 $dbname = "bet";

 

 $conn = mysqli_connect($servername, $username, $password, $dbname);

 

 if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

 }



 $name = $faker->name();








$sql = "INSERT INTO qwe (`name`, `picsum_id`, `imagefile`, `author`, `width`, `height`, `added_at`) VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7')";



 



 if (mysqli_query($conn, $sql)) {

   echo "New record created successfully";

 } else {

   echo "Error: " . $sql . "<br>" . mysqli_error($conn);

 }



 



 mysqli_close($conn);




?>