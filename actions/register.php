<?php
include('connection.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$temp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std'];

if ($password != $cpassword) {
    echo '<script>
    alert("Passwords did not match");
    window.location="../partials/registration.php";
    </script>';

} else {
    move_uploaded_file($temp_name, "../uploads/$image");
    $sql = "INSERT INTO userdata (username, mobile, password, photo, standard, status, votes) 
            VALUES ('$username', '$mobile', '$password', '$image', '$std', 0, 0)";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script>
        alert("Registered Successfully");
        window.location="../";
        </script>';
    }
}
?>