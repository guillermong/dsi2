
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSS Navigation Image Rollovers! Wow!</title>
<style type="text/css">
#navigation {
	border-right:1px solid #999;
	padding:10px 0px;
	width:145px;
}
#navigation a  {
	background:url(navigation.png);
	display:block;
	height:47px;
	text-indent:-9000px;
}
#navigation a.link1:hover {background-position:-146px 0px;}
#navigation a.link2 {background-position:0px -47px;}
#navigation a.link2:hover {background-position:-146px -47px;}
#navigation a.link3 {background-position:0px -94px;}
#navigation a.link3:hover{background-position:-146px -94px;}
#navigation a.link4 {background-position:0px -141px;}
#navigation a.link4:hover {background-position:-146px -141px;}
#navigation a.link5 {background-position:0px -188px;}
#navigation a.link5:hover {background-position:-146px -188px;}
#navigation a.link6 {background-position:0px -235px;}
#navigation a.link6:hover {background-position:-146px -235px;}
#navigation a.link7 {background-position:0px -282px;}
#navigation a.link7:hover {background-position:-146px -282px;}
#navigation a.link8 {background-position:0px -329px;}
#navigation a.link8:hover {background-position:-146px -329px;}
#navigation a.link9 {background-position:0px -375px; height:65px;}
#navigation a.link9:hover {background-position:-146px -375px;}
</style>
</head>

<body>
<ul id="navigation">
    <li><a href="index.php" class="link1">Home</a></li>
    <li><a href="metal" class="link2">Metal</a></li>
    <li><a href="plastic" class="link3">Plastic</a></li>
    <li><a href="services.php" class="link4">Services</a></li>
    <li><a href="news.php" class="link5">News</a></li>
    <li><a href="catalog.php" class="link6">Catalog</a></li>
    <li><a href="about.php" class="link7">About Us</a></li>
    <li><a href="contact.php" class="link8">Contact</a></li>
    <li><a href="users.php" class="link9">Registered Users</a></li>
</ul>
</body>
</html>