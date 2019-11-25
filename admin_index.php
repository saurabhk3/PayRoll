<?php
 include ('server.php');
    if(!$_SESSION['username']){
        $_SESSION['msg'] = "You must login to view this page";
        header("location:login.php");
    }
    // if($_GET['logout']){
    //     session_destroy();
    //     unset($_SESSION['username']);
    //     header("location:login.php");
    // }
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<body bgcolor="cyan"> <!-- ENTER BACKGROUND COLOR HERE-->
<!-- HEADER ELEMENT-->
<header>
<div align="center">
<h1><b><big><i>WELCOME ADMIN!!!</i></big></b></h1>
</div>
</header>
<!--NAVIGATION ELEMENT-->
<nav>
<table border="8px" align="right" style="width:100%;" >
<tr>
<td align="center" bgcolor="darkkhaki"><a href="Home.php" target="_blank" style="text-decoration:none"><b>Home</b></a></td>
<td align="center" bgcolor="darkseagreen"><a href="info.txt" target="_blank" style="text-decoration:none"><b>About us</b></a></td>
<td align="center" bgcolor="greenyellow"><a href="login.php" target="_blank" style="text-decoration:none"><b>Log out</b></a></td>
</tr>
</nav>
<!-- ARTICLE ELEMENT-->
<article class="article">
<table id="table" align="center" border="10px" style="width:40%;height:500px;border-collapse:collapse" bgcolor="silver">
<tr>
<td align="center"><a href="add_dept.php" style="text-decoration:none"><span style="font-size:30px">Add Department</span></a> </td><!--Add department URL -->
</tr>
<tr>
<td align="center"><a href="add_emp.php" style="text-decoration:none;"><span style="font-size:30px">Add Employee </span></a></td><!-- Add employee URL-->
</tr>
<tr>
<td align="center"><a href="view.php" style="text-decoration:none;"><span style="font-size:30px">Show Employee details</span></a></td><!-- -->
</tr>
<tr>
<td align="center">
    <!--<img src="arrow.jpg" style="width:20px;height:20px;position:fixed;top:546px;left:70"/></a>-->
<font color="0000ff"><span style="font-size:30px">Modify PayRoll Record</span></font><br/>
<a href="update.php" style="text-decoration:none"><input type="radio" name="mod" id="mo" value="update" onclick="document.getElementById('mo').checked=false"><span style="font-size:20px">Update</span></a>
<a href="delete.php" style="text-decoration:none"><input type="radio" name="mod" id="mod" value="delete" onclick="document.getElementById('mod').checked=false"><span style="font-size:20px">Delete</span></a>
</td>
</tr>
<tr>
<td align="center"><a href="leave.php" style="text-decoration:none;"><span style="font-size:30px">Leave Entry</span></a></td><!-- -->
</tr>
</table>
</article>
</body>
</html>
<?php
?>
