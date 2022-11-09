<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System -Registration page</title>

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../action/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter Your Username"  require="required" name="username">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="Enter Your Mobile Number"  require="required" name="mobile" maxLength="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name = "password" placeholder = "Enter Your password" require= "required" maxLength="16" minLength="4">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name = "cpassword" placeholder = "Confirm Your password" require= "required" maxLength="16" minLength="4">
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control w-50 m-auto" name = "photo" require= "required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Register</button>
                <p>Already have an account? <a href="../index.php" class="text-white">  Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>