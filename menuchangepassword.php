
<style>
#primary_nav_wrap
{
	margin-top:15px
}

#primary_nav_wrap ul
{
	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul a
{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:12px;
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


<nav id="primary_nav_wrap">
<ul>
  <li><a href="index1.php">Αρχική</a></li>
  <li><a href="#">Λειτουργίες</a>
    <ul>
      <li><a href="assigntask.php">Ανάθεση Εργασίας</a></li>
      <li><a href="search.php">Αναζήτηση</a></li>
      </ul>
  <li class="current-menu-item"><a href="changepassword.php">Αλλαγή Κωδικού</a></li>
  <li><a href="logout.php">Αποσύνδεση</a></li>
</ul>
</nav>
