<?php
    
    $email = filter_input(INPUT_POST, 'mail');
    $password = filter_input(INPUT_POST, 'pass');
 
    if (!empty($email)){
    if (!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "oas";
    
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('connect error ('. mysqli_connect_error() .')'
            . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO data (mail, pass)
            values ('$email', '$password')";
        
        if ($conn->query($sql)){
            echo "new record is inserted sucessfully";
        }
        else{
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
        }
        if(isset($_POST['mail'], $_POST['pass'])){
            header("Location: form.html");
            exit();
        }       
    else{
        echo "mail should not be empty";
        exit();
    }
}
    else{
        echo "pass should not be empty";
        exit();
    }

}else{
	header("Location: index.html");
	exit('form.html');
}