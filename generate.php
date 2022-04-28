<?php



require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();



echo $faker->name;



// $servername = "localhost";

// $username = "root";

// $password = "";

// $dbname = "exam";

 

// $conn = mysqli_connect($servername, $username, $password, $dbname);

 

// if (!$conn) {

//   die("Connection failed: " . mysqli_connect_error());

// }



// $name = $faker->name();

// echo $name;






// $sql = "INSERT INTO images (name,picsum_id,imagefile,author,width,height,added_at) VALUES ('$model', '$marka', '$rok_produkcji', '$cena')";



 



// if (mysqli_query($conn, $sql)) {

//   echo "New record created successfully";

// } else {

//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);

// }



 



// mysqli_close($conn);




?>