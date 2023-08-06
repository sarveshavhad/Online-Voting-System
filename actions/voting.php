<?php

session_start();
include('connection.php');

$votes = $_POST['groupvotes'];
$totalvotes = $votes + 1;

$gid = $_POST['groupid'];
$uid = $_SESSION['id'];

// Update votes for the group
$updateVotesQuery = "UPDATE userdata SET votes = '$totalvotes' WHERE id = '$gid'";
$updateVotesResult = mysqli_query($con, $updateVotesQuery);

// Update user status
$updateStatusQuery = "UPDATE userdata SET status = 1 WHERE id = '$uid'";
$updateStatusResult = mysqli_query($con, $updateStatusQuery);

if ($updateVotesResult && $updateStatusResult) {
    $getGroupsQuery = "SELECT username, photo, votes, id FROM userdata WHERE standard = 'group'";
    $getGroupsResult = mysqli_query($con, $getGroupsQuery);

    if ($getGroupsResult) {
        $groups = mysqli_fetch_all($getGroupsResult, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
        $_SESSION['status'] = 1;

        echo '<script>
        alert("Voting Successful");
        window.location="../partials/dashboard.php";
        </script>';
    } else {
        echo '<script>
        alert("Error fetching groups");
        window.location="../partials/dashboard.php";
        </script>';
    }
} else {
    echo '<script>
    alert("Technical Error!! Vote after some time");
    window.location="../partials/dashboard.php";
    </script>';
}

?>