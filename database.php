<?php
$conn = mysqli_connect('localhost','root','','photonew');



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['book_btn']))
        {
            $name = $_POST["fullname"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $phone_no = $_POST["phone_no"];
            $age = $_POST["age"];
            $gender = $_POST["gender"];
            $state = $_POST["state"];
            $city = $_POST["city"];


            $sql = "INSERT INTO registration (fname, email,pass, phone_no, age, gender, state, city, service) 
                    VALUES ('$name', '$email','$pass', '$phone_no', '$age', '$gender', '$state', '$city', '$service')";

            mysqli_query($conn,$sql);

            header('location: login.php');
        }
    }
?>

<?php
     
?>



<?php

//login form



?>