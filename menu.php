<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
#primary_nav_wrap
{
	margin-top:25px
}

#primary_nav_wrap ul
{
	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0
	border:solid;
}

#primary_nav_wrap ul a
{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:14px;
	line-height:32px;
	padding:0 15px;
	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
	background:#0dd
}

#primary_nav_wrap ul li:hover
{
	background:#f6f6f6
}

#primary_nav_wrap ul ul
{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#fff;
	padding:0
}

#primary_nav_wrap ul ul li
{
	float:none;
	width:200px
}

#primary_nav_wrap ul ul a
{
	line-height:120%;
	padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
	top:0;
	left:100%
}

#primary_nav_wrap ul li:hover > ul
{
	display:block
}
</style>
</head>

<body>

<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="index1.php">Home</a></li>
  <li><a href="#">Students</a>
    <ul>
      <li><a href="new_student.php">New Student</a></li>
      <li><a href="search.php">Find a student</a></li>
      <li><a href="new_payment.php">Payment</a></li>
      <li><a href="new_payment.php">Timetable</a></li>
      </ul>
   <li><a href="#">Administrator</a>
    <ul>
      <li><a href="manage_lessons.php">Manage Lessons</a></li>
      <li><a href="manage_teachers.php">Manage Teachers</a></li>
      <li><a href="manage_classes.php">Manage Classes</a></li>
      </ul>
   <li><a href="#">Reports</a>
    <ul>
      <li><a href="manage_lessons.php">Classes</a></li>
      <li><a href="manage_teachers.php">Payments</a></li>
      </ul>
  <li><a href="changepassword.php">Change Password</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</body>
</html>