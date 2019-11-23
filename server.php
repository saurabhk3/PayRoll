<?php
    session_start();
    //initalise the variable
    $server = "localhost";
    $username = "";
    $pass = "";
    $dbname = "PayRoll";

    // an array for errors
    $errors = array();


    //connect to database    
    $con = new mysqli($server,"root",$pass,$dbname) or die("Couldn't connect to database");


    if(isset($_POST['login'])){

    
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        

        //form validation
        if(empty($username)){
            array_push($errors,"Username is required");
        }
        if(empty($password)){
            array_push($errors,"Password is required");
        }
        if(count($errors)==0){
        //let's check whether username and password are correct
            if($username == "admin" and $password == "admin3"){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Logged in Successfuly";
                header('location:index.php');
            }else{
                array_push($errors,"Username or Password is incorrect");
            }
            
        }

    }



    // //checking for unique username
    // //discuss whether multiple admins will be there or single
    // $check_username = "SELECT * FROM Admins WHERE Username = '$username' or Email = '$email' LIMIT 1";
    // $results = mysqli_query($con,$check_username);
    // $user = mysqli_fetch_assoc($results);
    // if($user){
    //     if($user['username']===$username){
    //         array_push($errors,"UserName already exists");
    //     }
    //     if($user['password']===$email){
    //         array_push($errors,"An user with same email already exists");
    //     }
    // }

    // //Register the admin 
    // if(count($errors)===0){
    //     $password = md5($password_1); // this will encrypt the password
    //     $query = "INSERT INTO Admins (Username ,Email,Pass) VALUES('$username','$email','$password')";

    //     mysqli_query($con,$query);
    //     $_SESSION['username'] = $username;
    //     $_SESSION['success'] = "You are now logged in";
    //     header('location: ');  //the name of file to which it will direct to

    // }
    




?>