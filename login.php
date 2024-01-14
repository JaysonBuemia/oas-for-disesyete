<?php
    session_start();

    include("db.php");

    if ( isset( $Email) || isset( $Password) || isset( $Rpassword) ) {

    {
        $email = $_GET['email'];
        $password = $_GET['password'];

        if(empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "select = from form where email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if ($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location: index.html");
                        die;

                    }
                }
            }
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="form.html">
</head>

<body>
    <form action="responsive" method="GET">
        <div class="container">
            <h1 class="form-title">LOG IN TO DISESYETE OAS</h1>

            <label for="email">Your Email Address:</label>
            <button type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <button type="password" id="password" name="password" required>

            <input type="submit" name="" value="Submit">
</form>
<p>Don't have an account? <a href="signup.php">Sign Up</a></p>

</body>
</html>

<body>
    <style>
        .container{
            width: 360px;
            max-width: 400px;
            height: 80vh;
            margin: auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
            padding: 20px;
        }

        h1{
            height: 100px;  
            text-align: center; 
        }

        label{
            padding: 20px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button{
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .submit {
        background-color: #441099;
        color: #ffffff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        height: 40px;
        }

        </style>
</body>