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
<td align="center" bgcolor="darkkhaki"><a href="Home.php" ><b>Home</b></a></td>
<td align="center" bgcolor="darkseagreen"><a href="info.txt" ><b>About us</b></a></td>
<td align="center" bgcolor="greenyellow"><a href="login.php" ><b>Log out</b></a></td>
</tr>
</nav>
<!-- ARTICLE ELEMENT-->
<article class="article">
<table id="table" align="center" border="10px" style="width:200px;height:500px;border-collapse:collapse" bgcolor="silver">
<tr>
<td align="center"><a href="add_dept.php" style="text-decoration:none;">Add Department</a> </td><!--Add department URL -->
</tr>
<tr>
<td align="center"><a href="add_emp.php" style="text-decoration:none;">Add Employee </a></td><!-- Add employee URL-->
</tr>
<tr>
<td align="center"><a href="view.php" style="text-decoration:none;">Show Employee details</a></td><!-- -->
</tr>
<tr>
<td align="center">
    <!--<img src="arrow.jpg" style="width:20px;height:20px;position:fixed;top:546px;left:70"/></a>-->
<font color="0000ff">Modify record</font><br/>
<a href="Update.php"><input type="radio" value="update">Update</a>
<a href="Delete.php"><input type="radio" value="delete">Delete</a>
</td>
</tr>
</table>
</article>
</body>
</html>
<?php
?>
