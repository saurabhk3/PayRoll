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
    <h1><i>
        <p style='text-align:center;'> COMPANY X</p></i>
    </h1>
        <h2>
            <p style='text-align:center'> Search Employee </p>
        </h2>
    </div>
    <form action='view.php' method = 'post' align='left' style='font-size:25px'>
        <div >
                <label style='color:green;'> Enter Employee ID</label>
                <input style='font-size:25px;' type='text' name='serch_id' placeholder=' EMP01' >
                <label style='color:red'> &nbsp;&nbsp;&nbsp;&nbsp;OR&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label style='color:green;'> Enter Name</label>
                <input style='font-size:25px;' type='text' name='search_name' placeholder=' Mr.X' >
        </div>
        <br><br>
        <div >
        <button class="button">&nbsp;Search&nbsp;</button>
        </p>
    </form>
</div>
</body>
</html>