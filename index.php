<?php
$insert = false;
if(isset($_POST['fname'])){
	$server = "localhost";
	$username = "root";
	$password ="";
	
	$con = mysqli_connect($server, $username, $password);

	if(!$con){
		die("connection to this database failed due to".mysqli_connect_error());
	}
	// echo "Success connecting to the db";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $tour_type = $_POST['tour_type'];
    $tour_code = $_POST['tour_code'];
    $start = $_POST['start'];
    $end = $_POST['end'];
	$sql = "INSERT INTO `task3`.`task3` (`fname`, `lname`, `phone`, `email`, `tour_type`, `tour_code`, `start`, `end`, `date`) VALUES ('$lname', '$lname' , '$phone',  '$email', '$tour_type', '$tour_code', '$start' , '$end' , current_timestamp());";

	if($con->query($sql) == true){
		// echo "Successfully inserted";
		$insert = true;
	}
	else{
		echo "ERROR: $sql <br> $con->error";
	}

	$con->close();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task 3</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="top">
            <div class="heading">MUSAFIR</div>
            <span class="nav">
                <span><a href="#"><i class="fa fa-search"></i></a></span>
                <span><a href="#">TOURS</a></span>
                <span><a href="#">SPECIAL OFFERS</a></span>
                <span><a href="#">ARTICLES</a></span>
                <span><a href="#">CONTACT US</a></span>
                <span><a href="#"><img src="Icons/userwobg.png" alt="" width="25px"></a></span>
            </span>
        </div> 
        <div class="pin">
        <p>HOME > TOURS > MAHARASHTRA > MAHABALESHWAR</p>
        </div>
    </header>
    <div class="hero-image">
        <div class="hero-text">
            <h1>
                Book your
                <br>
                adventure now
            </h1>

            <div class="text-block">
                <p class="second">We can customized this
                    <br> experience for you</p>
                <button type="button" class="btn">ENQUIRE NOW</button>
            </div>
        </div>
    </div>
    
    <div class="small-container" id="overview">
        <div class="row">
            <div class="col-2">
                <form action="index.php" method="POST">
                    <input type="text" name="fname" id="fname" placeholder="First Name *">
                    <span></span>
                    <input type="text" name="lname" id="lname" placeholder="Last Name *">
                    
                    <input type="phone" name="phone" id="phone" placeholder="Phone Number *">
                    <span></span>
                    <input type="email" name="email" id="email" placeholder="Email Id *">
                    <select name="tour_type">
                        <option value="tour_type">Tour Type</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                    <span></span>
                    <input type="text" name="tour_code" id="tour_code" placeholder="Tour Code">
                    <input type="text" name="start" id="start" placeholder="Holiday Starts">
                    <span class="arrow" ><strong>&rlarr;</strong></span>
                    <input type="text" name="end" id="end" placeholder="Holiday Ends">
                    <br>
                </form>
                <br>
                    <button type="submit" class="btn">BOOK NOW</button>
            </div>
            <div class="col-2">
                
                <div class="note">
                
                <ul>
                    Please Note:*
                  <li>Above mentioned prices & discounts are per person for Indian Nationals only.
                  </li>
                  <li>
                    5% GST is applicable on given tour price.
                  </li>
                  <li>
                      Terms and Conditions apply.
                  </li>
                </ul>
            </div>
            </div>
        </div>
    </div>

</body>