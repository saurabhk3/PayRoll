<?php include('server.php');
    // ADD CODE FOR DISPLAYING MSG IF LOGIN IS INVALID
    
?>

<!DOCTYPE html>
<html>
<head>
<title> Admin Login Page </title>
<style> 
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=password]:focus {
  border: 3px solid #555;
}
</style>
</head>
<body style='background-color: powderblue;'>
<div class='container'>
    <div class='header'>
        <h1>
        <p style='text-align:center'>PAYROLL MANAGEMENT SYSTEM</p>
        </h1>
        <h2><i> <p style='text-align:center'>Administrator Login Page</p></i></h2>
    </div >
    <form action='login.php' method = 'post'>
        <div align='center' style='font-size:30px;'>
</br>
            <label style='color:navy'>&nbsp;Username :</label>  
            
            <input style="width:20%;height:40px;" type = 'text' name='username' required>
            <br>
            <label style="color:navy;">&nbsp;Password :</label>
                      
            <input style="width:20%;height:40px;" type = 'password' name='password' required>
            <br>
            

        </div>
        <br>
        <div align='center' >
            <button style='color:blue;width:80px;height:40px;position:relative;left:40px;' type='submit' name='login'>Login</button>
            <button style='color:blue;width:140px;height:40px;position:relative;left:80px;'><a style='text-decoration:none' href="guest_index.php">Guest Login</a></button>
    </form>
    
</div>
</body>
</html>
