<?php include('server.php')
    // ADD CODE FOR DISPLAYING MSG IF LOGIN IS INVALID
?>

<!DOCTYPE html>
<html>
<head>
<title> Admin Login Page </title>
</head>
<body style='background-color: powderblue;'>
<div class='container'>
    <div class='header'>
        <h1>
        <p style='text-align:center'>PAYROLL MANAGEMENT SYSTEM</p>
        </h1>
        <h2><i> <p style='text-align:center'>Administrator Login Page</p></i></h2>
    </div>
    <form action='login.php' method = 'post'>
        <div>
            <label style='color:green;'>&nbsp;Username :</label>  
            <br>
            <input type = 'text' name='username' required>
            <br>
            <label style="color:green;">&nbsp;Password :</label>
            <br>            
            <input type = 'password' name='password' required>

        </div>
        <br>
        <div>
            <button style='color:blue;' type='submit' name='login'>Login</button>
    </form>
    
</div>
</body>
</html>
