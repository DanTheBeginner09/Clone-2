<?php
@session_start();
if(@$_SESSION['loginCheck'] != 1)
{
	header('Location:index.php');
	exit();
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - Control Panel</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
	<div id="container">
		<svg id="logo" enable-background="new 45.6 168.9 504 504" id="Layer_1" version="1.1" viewBox="45.6 168.9 504 504" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.4,427.5l-126.2-23.9l-42.4-121.8l-41.3,14.1l42.4,120.7L191,514.5l32.6,28.3l84.8-97.9l126.2,23.9  L443.4,427.5z" fill="#EF6C00"/><g><path d="M297.6,366.6c-30.5,0-54.4,23.9-54.4,54.4c0,30.5,23.9,54.4,54.4,54.4c30.5,0,54.4-23.9,54.4-54.4   C352,390.5,328.1,366.6,297.6,366.6z M297.6,442.7c-12,0-21.8-9.8-21.8-21.8c0-12,9.8-21.8,21.8-21.8c12,0,21.8,9.8,21.8,21.8   C319.4,432.9,309.6,442.7,297.6,442.7z" fill="#FF9800"/><path d="M479.3,453.6c2.2-10.9,3.3-21.8,3.3-32.6c0-10.9-1.1-21.8-3.3-32.6l35.9-26.1c4.4-3.3,6.5-9.8,3.3-15.2   l-46.8-80.5c-3.3-5.4-8.7-7.6-14.1-4.4l-40.2,17.4c-16.3-14.1-35.9-25-56.6-32.6l-4.4-44.6c-1.1-5.4-5.4-9.8-10.9-9.8H252   c-5.4,0-10.9,4.4-10.9,9.8l-6.5,44.6c-20.7,7.6-40.2,18.5-56.6,32.6L137.7,261c-5.4-2.2-12,0-14.1,5.4L76.8,347   c-3.3,5.4-1.1,12,3.3,15.2l35.9,26.1c-2.2,10.9-3.3,21.8-3.3,32.6c0,10.9,1.1,21.8,3.3,32.6l-35.9,26.1c-4.4,3.3-6.5,9.8-3.3,15.2   l46.8,80.5c3.3,5.4,8.7,7.6,14.1,4.4l40.2-17.4c16.3,14.1,35.9,25,56.6,32.6l4.4,44.6c1.1,5.4,5.4,9.8,10.9,9.8h93.5   c5.4,0,10.9-4.4,10.9-9.8l4.4-44.6c20.7-7.6,40.2-18.5,56.6-32.6l40.2,18.5c5.4,2.2,12,0,14.1-4.4l46.8-80.5   c3.3-5.4,1.1-12-3.3-15.2L479.3,453.6z M297.6,540.6c-66.4,0-119.7-53.3-119.7-119.7s53.3-119.7,119.7-119.7   s119.7,53.3,119.7,119.7S364,540.6,297.6,540.6z" fill="#FF9800"/></g></svg>
		<h1 id="heading"><div id="biggerText">ADMIN</div> <div id="smallerText">Control Panel</div></h1>
		<form method="post" action="add_students.php">
			<input class="myButton" type="submit" name="add_student" value="Add Student">
		</form>
		<form method="post" action="add_subjects.php">
			<input class="myButton" type="submit" name="add_subject" value="Add Subject">
		</form>
		<form method="post" action="admin.php">
			<input class="myButton" type="submit" name="function3" value="Function 3" disabled>
		</form>
		<form action="logout.php" method="post" id="logout_form">
			<input name="endSession" value="1" hidden>
			<input id="logout" class="myButton" type="submit" name="logout" value="Log Out">
		</form>
		<br>
	</div>
</body>
</html>