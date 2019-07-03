<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content = "3" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css"> 
    
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <title>Basketball Counter</title>
</head>
<body>

        <header class="header">
            <div class="header__logo-box">
                <!--<img src="images/basketball_hopper.jpeg" alt="Logo" class="header__logo">-->
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <span class="heading-primary--main">Basketball</span>
                    <span class="heading-primary--sub">Hopper</span>
                </h1>
                 
                <p>
<?php
	// Create connection
$conn = new mysqli("localhost", "id7548643_vivek", "admin", "id7548643_hooper");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully <br>";


$query = "SELECT counter1 FROM hooper WHERE id = 1";
$result = mysqli_query($conn, $query);
if(isset($result)){
	$res_array = mysqli_fetch_assoc($result);

    echo $res_array['counter1'];
}


?>
    <span> Baskets</span>
</p>

                
            </div>
        </header>
   
</body>
</html>
