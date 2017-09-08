<?session_start();?>
<html>
     <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf8">
		 <link rel="stylesheet" href="style/stat.css" type="text/css" />
		 <?require_once "config.php";?>
	 </head>
	 <body>
		<?
			if(!isset($_COOKIE['Login']))
			{
				exit ("<meta http-equiv=refresh content='0;/accounts'>");
			}
			$login = $_COOKIE['Login'];
			$getlogin = $_GET['login'];
			if($getlogin != $login)
			{
				exit ("<meta http-equiv=refresh content='0;stat.php?login=$login'>");
			}
			echo "<title>Статистика - $login</title>";
			if(isset($_POST['exit']))
			{
				setcookie("Login","",time() - 3600*4);
				echo "<meta http-equiv=refresh content='0;/accounts'>";
			}
		?>
		<div id="wrapper">
			<div class="header">
				
			</div>
			<div class="naw">
				<form method="POST"><button class="exit" name="exit">Выход</button></form>
			</div>
			<div class="container">
				<div class="left_part">
					<h3>Статистика персонажа</h3>
				</div>
				<div class="right_part">			
					<h3>Внешний вид персонажа:</h3>
				<?
						$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
						$row = mysql_fetch_array($result);
						$skin = $row[user_skin];
						echo "<center><img scr='img/skin/$skin.png' /></center>";
				?>
				
				</div>
				<div class="clear"></div>
			</div>
			<div class="footer">
					<p>&copy Brilliant RolePlay! Все права защищены!</p>
			</div>
		</div>
	 </body>
</html>