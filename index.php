<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <h1 class= "text-info text-center p-3" >Voting System</h1>
    <div class=" bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class ="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter Your username" required="required">
                </div>

                <div class ="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter Your mobile number" required="required" maxlength="10" minlength="10">
                </div>

                <div class ="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter Your password" required="required">
                </div>

                <div class ="mb-3">
                    <select name="std" class="form-select w-50 m-auto"  >
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>

                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-dark my-4">Login</button>
                    <p>Don't have an account?>
                        <a href="./partials/registration.php" class="text-white">Register here</a>
                    </p>
                </div>
        
            </form>
        </div>
    </div>

</body>

</html>