<?php
$insert = false;
if(isset($_POST['name'])){
    // Set Connection Variable
    $server = "localhost";
    $username = "root";
    $password = "";
    
    // Create Database Connection
    $con = mysqli_connect($server ,$username, $password);
    
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }
    // echo "Success Connecting to the DataBase";
    
    // Collection Post variable
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `DD`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;
    
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully Inserted";
        // Flag for successful Insertion
        $insert = true;
    } else{
        echo "Error: $sql <br> $con->error";
    }

    // Close the Database connection
    $con->close();
}
?>


<!-- HTML File Below -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel From</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="rishikesh" src="https://plus.unsplash.com/premium_photo-1697729439457-85d4b9d3a2cb?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Rishikesh img">
    <div class="container">
        <h3>Welcome to Rishikesh Trip Form</h3>
        <p id="before_sub">Secure your spot! Enter your details now to confirm your trip participation</p>
        <?php
        if ($insert==true){
            echo "<p id='after_sub'>Thank you for submitting the form. You will be notified when we are Good to Go!</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email ID">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone No.">
            <textarea name="desc" id="desc" placeholder="Any Other Important Information You want to tell us"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>