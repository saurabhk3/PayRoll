<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title> Add Employee</title>
    <style>
    .button {
    background-color: #e7e7e7; color: black
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
    cursor: pointer;
    }
</style>
</head>
<body style='background-color:burlywood;'>
<div class='container'>
    <div class='header' style='font-size:35px'>
        <h1>
            <p style='text-align:center'> ADD NEW EMPLOYEE</p>
        </h1> 
    </div>
    <form action='add_dept.php' method = 'post' >
        <div>
        <p style='font-size:30px'>
            <label  style='color:blue;'>&nbsp;Employee ID :</label>  
            <input style='font-size:30px;height:30px;' type = 'text' name='e_id' placeholder='  EMP01' required><br>
            <br>
            <label style="color:blue;">&nbsp;Employee Name :</label>            
            <input style='font-size:30px;height:30px;'type = 'text' name='e_name' placeholder=' Mr.X' required><br>
            <br>
            <label  style='color:blue;'>&nbsp;Email ID :</label>  
            <input style='font-size:30px;height:30px;'type = 'email' name='e_email' placeholder='   abc@xyz.com' required><br>
            <br>
            <label style="color:blue;">&nbsp;Date Of Birth :</label>            
            <input style='font-size:30px;height:30px;'type = 'date' name='e_dob' required><br>
            <br>
            <label  style='color:blue;'>&nbsp;Age :</label>  
            <input style='font-size:30px;height:30px;'type = 'number' name='e_age' placeholder=' 25' required><br>
            <br>
            <label style="color:blue;">&nbsp;Sex :</label>            
            <input style='font-size:30px;height:30px;'type = 'text' name='e_sex' placeholder='M/F' required><br>
            <br>
            <label  style='color:blue;'>&nbsp;Bank Account :</label>  
            <input style='font-size:30px;height:30px;'type = 'number' name='e_act'placeholder='00000123456789' required><br>
            <br>
            <label style="color:blue;">&nbsp;Date Of Joining :</label>            
            <input style='font-size:30px;height:30px;'type = 'date' name='e_doj' required><br>
            <br>
            <label  style='color:blue;'>&nbsp;Department ID :</label>  
            <input style='font-size:30px;height:30px;'type = 'text' name='e_did' placeholder='  CSE03' required><br>
            <br>
        </p>
        </div>
        <br>
        <div >
        <button class="button" type='submit'>&nbsp;ADD&nbsp;</button>
        </p>
    </form>
</div>
</body>
</html>