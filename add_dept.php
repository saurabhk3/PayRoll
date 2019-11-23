<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title> Add Department</title>
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
            <p style='text-align:center'> ADD NEW DEPARTMENT</p>
        </h1>
                    <!-- Navigation for going back-->
    <nav>
    <table border="8px" align="right" style="width:8%;position:fixed;top:80px;right:0px;" >
    <tr>
    <td align="right" bgcolor="greenyellow"><a href="admin_index.php" <b>Go Back</b></a></td>
    </tr>
    </nav>
    </div>
  

    <form action='add_dept.php' method = 'post' align='center'>
        <div>
        <p style='font-size:30px'>
            <label  style='color:blue;'>&nbsp;Department Name :</label>  
            <input style='font-size:40px;height:30px;'type = 'text' name='dept_name' required><br>
            <br>
            <label style="color:blue;">&nbsp;Department ID :</label>            
            <input style='font-size:40px;height:30px;'type = 'text' name='dept_id' placeholder='CSE01' required><br>
        </p>
        </div>
        
        <br>
        <div >
        <button class="button" name='dept'>&nbsp;ADD&nbsp;</button>
        </p>
    </form>
</div>
</body>
</html>