<?php
require_once('include.php');
if (empty($_SESSION['adminID']))
	alertMes("Please login first!", "adminLogin.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<title>Online Library Management System</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
		<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/global.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/modal.js" type="text/javascript" charset="utf-8"></script>

		<script>
			$(document).ready(function(){
				$("#out").fadeOut(2000);
			});
		</script>
	</head>
	<body>
		<div id="header">
			<div class="col w5 bottomlast">
				<a href="" class="logo">
					<img src="images/logo.gif" alt="Logo" />
				</a>
			</div>
			<div class="col w5 last right bottomlast">
				<p class="last">Welcome <span class="strong"><?php echo $_SESSION['adminName']; ?></span>, Logged in as <span class="strong">Admin</span>, <a href="index.php">Logout</a></p>
			</div>
			<div class="clear"></div>
		</div>
		<div id="wrapper">
			<div id="minwidth">
				<div id="holder">
					<div id="menu">
						<div id="left"></div>
						<div id="right"></div>
						<ul>
							<li>
								<a href="back_end.php" class="selected"><span>Welcome</span></a>
							</li>
							<li>
								<a href="bookManage.php"><span>Borrow/Return</span></a>
							</li>
							<li>
								<a href="cardManage.php"><span>Library Cards</span></a>
							</li>
							<li>
								<a href="query.php"><span>Query</span></a>
							</li>
							<li>
								<a href="addBooks.php"><span>Add Books</span></a>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
					<div id="submenu">
						<div class="welcome">
							Welcome to Online Library Management System
						</div>
					</div>
					<?php
					if ($_SESSION['Message']=="SUCCESS") {
					?>
					<div id="out" class="success">
						<div class="tl"></div><div class="tr"></div>
						<div class="desc">
							<center>Log in successfully!</center>
						</div>
						<div class="bl"></div><div class="br"></div>
					</div>
					<?php
						unset($_SESSION['Message']);
					}
					?>
					<div id="desc">
						<div class="body">
							<div class="col w3"></div>
							<div class="col w4">
								<div class="content">
									<center>
										<h3>System Information</h3>
										<table>
											<tr>
												<th>Item</th>
												<th>Information</th>
											</tr>
											<tr>
												<td>Operation System</td>
												<td><?php echo PHP_OS;?></td>
											</tr>
											<tr>
												<td>Apache Version</td>
												<td><?php echo apache_get_version();?></td>
											</tr>
											<tr>
												<td>PHP Version</td>
												<td><?php echo PHP_VERSION;?></td>
											</tr>
											<tr>
												<td>Run Mode</td>
												<td><?php echo PHP_SAPI;?></td>
											</tr>
										</table>
									</center>
								</div>
								<div class="clear"></div>
							</div>
							<div class="col w3 last"></div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
						<div id="body_footer">
							<div id="bottom_left"><div id="bottom_right"></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<p class="last">Copyright 2015 - Sylvanus - Email: <a herf="mailto:sylvanuszhy@gmail.com">sylvanuszhy@gmail.com</a></p>
		</div>		
	</body>
</html>