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


            $sql = "INSERT INTO registration (fname, email,pass, phone_no, age, gender, state, city) 
                    VALUES ('$name', '$email','$pass', '$phone_no', '$age', '$gender', '$state', '$city')";

            mysqli_query($conn,$sql);

            header('location: login.php');
        }
    }
?>

<?php
     
?>



<?php

//login form

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass = $_POST["pass"];

    $sql="select * from registration where email='$email' and pass= '$pass' ";
    $result=mysqli_query($conn,$sql);
    $num= mysqli_num_rows($result); 
    if($num == 1)
    {
        echo" <script> alert('login successfuly') </script>";
        // header("location: index.php");
        echo"<script> window.location.href='index.php'</script>";
        
    }else{             

    //    echo'<script>alert("invalid credintial")</script>';
    //    header("location: login.php");
    echo "<script type=\"text/javascript\">" . "alert('invalid credintial');" . "</script>";
    echo "<script type=\"text/javascript\">" . "window.location.href='login.php'" . "</script>";

    }
}
?>