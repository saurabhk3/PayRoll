<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title> Update Employee Details</title>
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
            <p style='text-align:center'> Update PAYROLL </p>
        </h1> 
                        <!-- Navigation for going back-->
        <nav>
            <table border="8px" align="right" style="width:8%;position:fixed;top:80px;right:0px;" >
            <tr>
            <td align="right" bgcolor="aqua"><a href="admin_index.php"style='width:8px;height:10px;text-decoration:none' <b>Go Back</b></a></td>
            </tr>
        </nav>
            </div>
    </div>

<?php
    // include('update.php');
	$u_id = $_REQUEST['update_id'];
	$sql = "SELECT * FROM PAYROLL WHERE P_ID ='$u_id'";
	$run = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($run);
?>


    <form action='updatedata.php' method = 'post' >
        <div align='left' style="position:relative;left:40px">
        <p style='font-size:25px'>
            <?php 

            ?>
            <label  style='color:#555;'>&nbsp;Employee ID &nbsp;&nbsp;&nbsp;&nbsp;:</label> 
            <br> 
            <input style='font-size:20px;height:33px;'type = 'text' name='up_eid' value=<?php echo $data['E_ID'] ?> >
            <br>
            <label  style='color:#555;'>&nbsp;Bank Account :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='up_act'placeholder='00000123456789' required> 
            <br>
            <label style='color:#555;'>&nbsp;Department ID :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'text' name='up_did' placeholder='  CSE03' required>
            <br>
            <label  style='color:#555;'>&nbsp;PayRoll ID :</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'text' name='up_pid' placeholder='  PAY03' required>
            <br>
            <label style='color:#555;'>&nbsp;Basic Salary :</label>   
            <br>      
            <input style='font-size:20px;height:33px;'type = 'number' name='up_basic' placeholder='000' required>
            <br>
            <label style='color:#555;'>&nbsp;Allowance Amount:</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='up_al' placeholder= '000' required>
            <br>
            <label style='color:#555;'>&nbsp;Deduction Amount:</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='up_ded' placeholder='000' required>
            <br>
            <label style='color:#555;'>&nbsp;Tax Amount:</label>  
            <br>
            <input style='font-size:20px;height:33px;'type = 'number' name='up_tax' placeholder='1500' required>
        </p>
        </div>
        <br>
        <div align='center'>
        <button class="button" type='submit'name='update_data'>&nbsp;Update&nbsp;</button>
        <button class="button" type='reset' name='reset_emp'>&nbsp;RESET&nbsp;</button>
        </p>
    </form>
</div>
</body>
</html>