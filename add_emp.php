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
    <style> 
input[type=text]{
  width: 100px;
  height: 100px;
  padding: 12px 15px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=date]{
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=email]{
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=number]{
  width: 20%;
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
input[type=email]:focus {
  border: 3px solid #555;
}
input[type=number]:focus {
  border: 3px solid #555;
}
input[type=date]:focus {
  border: 3px solid #555;
}
</style>
</head>
<body style='background-color:powderblue;'>
<div class='container'>
    <div class='header' style='font-size:35px'>
        <h1>
            <p style='text-align:center'> ADD NEW EMPLOYEE</p>
        </h1> 
                        <!-- Navigation for going back-->
        <nav>
            <table border="8px" align="right" style="width:8%;position:fixed;top:80px;right:0px;" >
            <tr>
            <td align="right" bgcolor="aqua"><a href="admin_index.php"style='text-decoration:none' <b>Go Back</b></a></td>
            </tr>
        </nav>
            </div>
    </div>
    <form action='add_emp.php' method = 'post' >
        <div align='left' style="position:relative;left:40px">
        <p style='font-size:25px'>
            <label  style='color:#555;'>&nbsp;Employee ID &nbsp;&nbsp;&nbsp;&nbsp;:</label> 
            <br>
            <input style='font-size:20px;height:33px;'type = 'text'  name='e_id' placeholder='  EMP01' required>
            <br>
            <label style='color:#555;'>&nbsp;Employee Name &nbsp;:</label>      
            <br> 
            <input style='font-size:20px;height:33px;'type = 'text' name='e_name' placeholder=' Mr.X' required>
            <br>
            <label  style='color:#555;'>&nbsp;Email ID :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'email' name='e_email' placeholder='   abc@xyz.com' required>
            <br>
            <label style='color:#555;'>&nbsp;Date Of Birth :</label>    
            <br>      
            <input style='font-size:20px;height:33px;'type = 'date' name='e_dob' required>
            <br>
            <label  style='color:#555;'>&nbsp;Age :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='e_age' placeholder=' 25' required>
            <br>
            <label style='color:#555;'>&nbsp;Sex :</label>            
            <br>
            <input style='font-size:20px;height:33px;'type = 'text' name='e_sex' list='sex' required>
            <datalist id='sex'>
                <option value="M">
                <option value="F">
                <option value="O">
        </datalist>
            <br>
            <label  style='color:#555;'>&nbsp;Bank Account :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='e_act'placeholder='00000123456789' required>
            <br>
            <label style='color:#555;'>&nbsp;Date Of Joining :</label>   
            <br>       
            <input style='font-size:20px;height:33px;'type = 'date' name='e_doj'  required>
            <br>
            <label style='color:#555;'>&nbsp;Department ID :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'text' name='e_did' placeholder='  CSE03' required>
            <br>
            <label  style='color:#555;'>&nbsp;PayRoll ID :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'text' name='e_pid'placeholder='PAY00' required>
            <br>
            <label style='color:#555;'>&nbsp;Basic Salary :</label>   
            <br>      
            <input style='font-size:20px;height:33px;'type = 'number' name='e_basic' placeholder='000' required>
            <br>
            <label style='color:#555;'>&nbsp;Allowance Amount:</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='e_al' placeholder= '000' required>
            <br>
            <label style='color:#555;'>&nbsp;Deduction Amount:</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='e_ded' placeholder='000' required>
            <br>
            <label style='color:#555;'>&nbsp;Tax Amount:</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='e_tax' placeholder='1500' required>
        </p>
        </div>
        <br>
        <div align='center'>
        <button class="button" type='submit'name='emp'>&nbsp;ADD&nbsp;</button>
        <button class="button" type='reset' name='reset_emp'>&nbsp;RESET&nbsp;</button>
        </p>
    </form>
</div>
</body>
</html>