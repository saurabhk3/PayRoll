<!--UPDATE IDEAS-->
<!-- 1.CUSTOMIZE MOUSE CURSOR-->
<!DOCTYPE html>
<html>
<head>
<title>Leave page.</title>
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
</style>
</head>
<body bgcolor="cyan"> <!-- ENTER BACKGROUND COLOR HERE-->
<!-- HEADER ELEMENT-->
<header>
<div align="center">
<h1><b><big><span style ="font-family:cursive">Enter the number of leaves.!!!</span></big></b></h1>
</div>
</header>
<!--NAVIGATION ELEMENT-->
<nav>
<table border="8px" align="right" style="width:100%;" >
<tr>
<td align="center" bgcolor="darkkhaki"><a href="admin_index.php" style="text-decoration:none"><b>Home</b></a></td>
<td align="center" bgcolor="darkseagreen"><a href="info.txt" style="text-decoration:none"><b>About us</b></a></td>
<td align="center" bgcolor="greenyellow"><a href="login.php" style="text-decoration:none"><b>Log out</b></a></td>
</tr>
</nav>
<!-- ARTICLE ELEMENT-->
<article class="article">
<table id="table" align="center" border="10px" style="width:35%;height:400px;border-collapse:collapse" bgcolor="silver">
<tr>
<td align="center"><div style="font-size:30px"><span style="font-family:cursive">Employee Id</span></div><input type="text" placeholder="E-ID" /></td>
</tr>
<tr>
<td align="center"><div style="font-size:30px"><span style="font-family:cursive">FMLA</span></div><input type="text" placeholder="no. of days" /></td>
</tr>
<tr>
<td align="center"><div style="font-size:30px"><span style="font-family:cursive">Maternity</span></div><input type="text" placeholder="no. of days" /></td>
</tr>
<tr>
<td align="center"><div style="font-size:30px"><span style="font-family:cursive">Personal</span></div><input type="text" placeholder="no. of days" /></td>
</tr>
</table>
<a href="server.php" style="text-decoration:none">
<div style="position:fixed;top:590px;right:570px;width:220px;height:30px;border-size:2px;border-style:solid;border-color:black;background-color:silver;">
<span style="position:fixed;top:588px;right:660px;font-size:35px;">GO</span>
</div>
</a>
</article>
</body>
</html>
<?php

















?>