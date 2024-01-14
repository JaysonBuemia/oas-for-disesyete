<?php

    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $age = filter_input(INPUT_POST, 'age');
    $email = filter_input(INPUT_POST, 'email');
    $address = filter_input(INPUT_POST, 'address');
    $contact = filter_input(INPUT_POST, 'contact');
    $options = filter_input(INPUT_POST, 'options');
    $date = filter_input(INPUT_POST, 'date');
    
 
    if (!empty($fname)){
    if (!empty($lname)){
    if (!empty($age)){
    if (!empty($email)){
    if (!empty($address)){
    if (!empty($contact)){
    if (!empty($options)){
    if (!empty($date)){
                   
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "form";
    
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('connect error ('. mysqli_connect_error() .')'
            . mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO information (fname, lname, age, email, address, contact, options, date)
            values ('$fname', '$lname', '$age', '$email', '$address', '$contact', '$options', '$date')";
        
        if ($conn->query($sql)){
            echo "new record is inserted sucessfully";
        }

        else{
            echo "Error: ". $sql ."<br>". $conn->error;
        }

        $conn->close();
        }

        if(isset($_POST['fname'], $_POST['lname'], $_POST['age'], $_POST['email'], $_POST['address'], $_POST['contact'], $_POST['options'], $_POST['date'])){
            header("Location: subcon.html");
            exit();             
        
        }
            else{
                echo "fname should not be empty";
                exit();
            }
        }
            else{
                echo "lname should not be empty";
                exit();
            }
        }
            else{
                echo "age should not be empty";
                exit();    
            }
        }
            else{
                echo "email should not be empty";
                exit();
            }
        }
            else{
                echo "address should not be empty";
                exit();
            }
        }
            else{
                echo "contact should not be empty";
                exit();
        
            }
        }
            else{
                echo "options should not be empty";
                exit();
        
            }
        }
            else{
                echo "date should not be empty";
                exit();
            }
        }
        