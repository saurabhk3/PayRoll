<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title> Update</title>
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
            <p style='text-align:center'> UPDATE DETAILS OF EMPLOYEE</p>
        </h1>
                    <!-- Navigation for going back-->
    <nav>
    <table border="8px" align="right" style="width:8%;position:fixed;top:80px;right:0px;" >
    <tr>
    <td align="right" bgcolor="greenyellow"><a href="admin_index.php" <b>Go Back</b></a></td>
    </tr>
    </nav>
    </div>
  

    <form action='update.php' method = 'post' align='center'>
        <div>
        <p style='font-size:30px'>
            <label  style='color:blue;'>&nbsp;Employee ID :</label>  
            <input style='font-size:40px;height:30px;'type = 'text' name='update_id' required>
            <div align='center'>
            <button style='height:40px;width:fit-content;blue;' type='submit' name='update'>UPDATE</button>
            
            </div>
        </p>
        </div>
    </form>
</div>
</body>
</html>