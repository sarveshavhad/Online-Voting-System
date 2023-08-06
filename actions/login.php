<?php
include('connection.php');
session_start(); // Start the session

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

// Fix the SQL query by removing single quotes around table name and using proper field names
$sql = "SELECT * FROM userdata WHERE 
        username = '$username' AND mobile = '$mobile' AND 
        password = '$password' AND standard = '$std'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $sql = "SELECT username, photo, votes, id FROM userdata WHERE standard = 'group'";
    $resultgroups = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultgroups) > 0) {
        $groups = mysqli_fetch_all($resultgroups, MYSQLI_ASSOC); // Fix variable name here
        $_SESSION['groups'] = $groups;
    }

    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;

    echo '<script>
     window.location="../partials/dashboard.php";
    </script>';

} else {
    echo '<script>
    alert("Invalid credentials");
    window.location="../";
    </script>';
}
?>