<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<body bgcolor="cyan"> <!-- ENTER BACKGROUND COLOR HERE-->
<!-- HEADER ELEMENT-->
<header>
<div align="center">
<h1 style="text-align:center"><span style="font-family:cursive">Welcome <script>var user=prompt("Enter your name!!");document.write(user);</script> to Home page</span></h1></br></br>
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
<table id="table" align="center" border="10px" style="width:40%;height:100%;border-collapse:collapse;position:relative;top:80px" bgcolor="silver">
<tr>
<td align="center"><a href="view.php" style="text-decoration:none;"><span style="font-size:30px">Show Employee details</span></a></td><!-- -->
</tr>

</table>
</article>
</body>
</html>